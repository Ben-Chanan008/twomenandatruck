<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Quote;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\ServicesDetail;

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

        return redirect()->route('dashboard')->with('showPopup', 'Quote Generated successfully!');
    }

    public function index(Request $request)
    {
        return view('admin.quote', [
            'quotes' => Quote::all()
        ]);
    }

    public function quoteIndex(Request $request)
    {
        return view('admin.quote', [
            'quotes' => Quote::all()
        ]);
    }

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
        //TODO: Send an email to the user to alert him/her; then notify the app.
        return redirect()->route('admin.quote.index')->with('showPopup', ['message' => 'Quote successfully created!', 'type' =>'success']);
    }
}