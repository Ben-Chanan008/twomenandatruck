<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use App\Models\ServiceDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Str;

class QuoteController extends Controller
{
    //
    public function store(Request $request, User $user)
    {
        $request->validate([
            'service' => ['string', 'bail', 'required'],
        ]);

        $service_details = ServiceDetail::where(['service_id' => $request->service_id])->get();
        (float) $price_total = 0;
        $random_string = Str::random(7);

        foreach ($service_details as $service_detail)
            $price_total += $service_detail->price;

        Quote::create([
            'user_id' => $user->id,
            'quote_number' => '#' + $random_string,
            'quote_name' => 'Quote for ' + $user->first_name + ' ' + $user->last_name,
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
}
