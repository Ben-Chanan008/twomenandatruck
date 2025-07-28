<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Quote;
use App\Models\Service;
use App\Mail\QuoteStored;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ServicesDetail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class QuoteController extends Controller
{
    //
    public function store(Request $request, User $user)
    {
        $request->validate([
            'service' => ['string', 'bail', 'required'],
        ]);

        $service_details = ServicesDetail::where(['service_id' => $request->service_id])->get();
        (float) $price_total = 0;
        $random_string = Str::random(7);

        foreach ($service_details as $service_detail)
            $price_total += $service_detail->price;

        Quote::create([
            'user_id' => $user->id,
            'quote_number' => '#' . $random_string,
            'quote_name' => 'Quote for ' . $user->first_name . ' ' . $user->last_name,
            'price_total' => $price_total,
        ]);
        // TODO: Send an email when quote has been created successfully!
        return redirect()->route('home')->with('showPopup', ['message' => 'Quote Generated successfully!','type' => 'success']);
    }

    /**
     * Method index
     *
     * @param Request $request [explicite description]
     *
     * Generates the admin route for viewing quotes
     */
    public function index(Request $request)
    {
        return view('admin.quote', [
            'quotes' => Quote::latest()->simplePaginate(5)
        ]);
    }
    
    /** 
    * @method showAdminQuote is for showing the create route for admin quote
    */ 
    public function showAdminQuote(Request $request)
    {
        return view('admin.create-quote', [
            'users' => User::all(),
            'services' => Service::all(),
        ]);
    }

    public function adminStore(Request $request)
    {
        $request->validate([
            'user' => ['bail', 'required'],
            'service' => ['bail', 'required'],
            'initial_deposit' => ['bail', 'required'],
            'duration' => ['bail', 'required', 'string'],
            'start_time' => ['bail', 'required', 'date_format:H:i'],
            'booked_for' => ['bail', 'required', 'date'],
        ]);

        $service_details_ids = [];

        foreach($request->all() as $key => $resolved){
            if(str_starts_with($key, 'detail_')){
                $service_details_ids[] = $resolved;
            }
        }

        if(empty($service_details_ids)){
            return back()->withErrors([
                'service' => 'No service detail was checked! Please check at least one'
            ])->onlyInput('service');
        }

        $user = User::findOrFail($request->user);
        
        $service_details = ServicesDetail::whereIn('id', $service_details_ids)->get();        
        (float)$prices_total = 0;

        foreach($service_details as $detail)
            $prices_total += $detail->price;

        $random_string = Str::random(7);

        $quote = Quote::create([
            'user_id' => $user->id,
            'quote_number' => '#' . $random_string,
            'quote_name' => 'Quote for ' . $user->first_name . ' ' . $user->last_name,
            'price_total' => $prices_total,
        ]);

        if ($quote){
            $quote->services()->attach($service_details_ids, ['created_at' => Carbon::now(), 'updated_at' => Carbon::now()]);
            // if($services){
                $schedule = $quote->schedule()->create([
                    'initial_deposit' => $request->initial_deposit,
                    'workers_clock_in_time' => Carbon::parse($request->start_time)->subMinutes(30),
                    'duration' => $request->duration,
                    'booked_for' => $request->booked_for,
                    'start_time' => $request->start_time,
                    'end_time' => Carbon::parse($request->start_time)->addHours((int)substr($request->duration, 0, -1))
                ]);
                if($schedule){
                    Mail::to($quote->user)->queue(
                        new QuoteStored($quote)
                    );
                     return redirect()->route('admin.quote.index')->with('showPopup', ['message' => 'Quote successfully created!', 'type' => 'success']);
                }
        }
                // dd($schedule);
                // if($schedule){
                //     Mail::to($quote->user)->queue(
                //         new QuoteStored($quote)
                //     );
                //     return redirect()->route('admin.quote.index')->with('showPopup', ['message' => 'Quote successfully created!', 'type' => 'success']);
                //         return redirect()->route('admin.quote.index')->with('showPopup', ['message' => 'Quote successfully created!', 'type' => 'success']);
                // }

    }
}