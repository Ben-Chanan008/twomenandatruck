<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    //
    
    public function index()
    {
        $color_codes = [
            'active' => 'text-green-400',
            'probation' => 'text-orange-400'
        ];
        
        return view('admin.users-index', [
            'users' => User::with('roles')->withTrashed()->get(),
            'color_codes' => $color_codes
        ]);
    }
}