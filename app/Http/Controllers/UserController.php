<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Fortify\Fortify;

class UserController extends Controller
{
    public function getAllUsers()
    {
        $users = DB::table('users')->get();
        return view('home', ['users' => $users]);
    }
}
