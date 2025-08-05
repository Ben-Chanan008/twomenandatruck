<?php

use App\Models\Service;
use App\Models\ServicesDetail as ServiceDetail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('service-details/{service}', function (Request $request, Service $service) {
    return response()->json(['data' => $service->serviceDetails->all()]);
});

Route::get(uri: 'get-company-data', action: function (Request $request) {
    if($request->query()['role'] === 'users')
        $sum = User::count();
    else{
        $users = User::withCount([
                    'roles' => fn ($query) => $query->where(['role' => $request->query()['role']])
                ])->get()->toArray();
        
        $counts = [];
        foreach($users as $model)
            $counts[] = $model['roles_count'];    
        $sum = array_sum($counts);
    }

    return response(['data' => $sum], 200);
});

Route::post('admin/service/add', function(Request $request) {
    $request->validate([
        'service_id' => ['bail', 'required'],
        'details' => ['array', 'bail', 'required']
    ]);

    $data = [];
    try{
        foreach($request->details as $detail){
            $data[] = [
                'service_id' => $request->service_id,
                'details' => $detail['detail'],
                'currency' => $detail['currency'],
                'price' => $detail['price']
            ];
        }

        ServiceDetail::insert($data);

        return response()->json(['message' => 'Details created successfully!'], 200);
    }catch(\Exception $e){
        return response()->json(['message' => 'Error occured', 'error' => $e->getMessage()], 500);
    }
});
