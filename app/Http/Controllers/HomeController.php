<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LaraFlash;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        LaraFlash::add()->content('Hello World')->priority(6)->type('Info');
        LaraFlash::snackbar('Click to continue');
        LaraFlash::success('Yay it worked');
        LaraFlash::danger('Oops something went wrong!');
        flash("Another message", ['priority' => 100, 'type' => 'success']);
        return view('home');
    }
}
