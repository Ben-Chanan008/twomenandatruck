<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ServiceController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'service' => ['required', 'bail', 'string'],
            'service_category' => ['required', 'bail', 'string'],
            'status' => ['required', 'bail', 'string']
        ]);

        Service::create([
            'service' => $request->service,
            'service_category' => $request->service_category,
            'status' => $request->status,
        ]);

        return redirect()->route('dashboard')->with('showPopup', 'Service Created successfully');
    }

    public function index(Request $request)
    {
        /* TODO: Change the view later */
        return view('home', ['services' => Service::all()]);
    }

    public function update(Request $request, Service $service)
    {
        $validator = Validator::make($request->all(), [
            'service' => ['string', 'bail'],
            'service_category' => ['string', 'bail'],
            'status' => ['string', 'bail'],
        ]);

        if (!$validator->fails()) {
            $service->update($request->all());

            return redirect()->route('dashboard')->with('showPopup', 'Updated sucessfully');
        }

        return redirect()->route('dashboard')->with('showPopup', 'Error Occured!');
    }
}
