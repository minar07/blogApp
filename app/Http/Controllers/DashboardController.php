<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        // tutorial 10
        // get the current logged in user's id 
        $user_id = auth()->user()->id;
        // then find the user from User model with the id
        $user = User::find($user_id);

        return view('dashboard')->with('posts', $user->posts);
    }
}
