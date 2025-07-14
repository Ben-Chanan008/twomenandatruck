<?php

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('service-details/{service}', function (Request $request, Service $service) {
    return response()->json(['data' => $service->serviceDetails->all()]);
});