<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // dd(Auth::user()->getRoleNames()[0]);
    $users = User::all();
     return view('users.index', compact('users'));     
    }
}
