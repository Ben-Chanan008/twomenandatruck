<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;

class AssignJobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $role_id = Role::where(['role' => 'employee'])->first()->id;
        $employee_ids = UserRole::where(['role_id' => $role_id])
            ->whereNot(fn ($query) => $query->where(['user_status' => 'fired'])->orWhere(['user_status' => 'working']))
            ->pluck('user_id');
        
        $employees = User::whereIn('id', $employee_ids)->with('roles')->get();
        
        $color_codes = [
            'active' => 'text-green-400',
            'probation' => 'text-orange-400'
        ];

        return view('assign-jobs', [
            'employees' => $employees,
            'color_codes' => $color_codes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}