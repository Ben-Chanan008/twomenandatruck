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
            'probation' => 'text-gray-400'
        ];
        
        return view('admin.users-index', [
            'users' => User::with('roles')->withTrashed()->paginate(5),
            'color_codes' => $color_codes
        ]);
    }
}
