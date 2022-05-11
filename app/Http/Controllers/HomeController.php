<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    // user_signup
    public function user_signup()
    {
        $categories = Category::latest()->get();
        return view('user-signup',compact('categories'));
    }

    // user_save
    public function user_save(Request $request)
    {
        
    }

    // mentors
    public function mentors()
    {
        return view('mentors');
    }

    // mentor_detail
    public function mentor_detail($id)
    {
        # code...
    }

    // user_signin
    public function user_signin()
    {
        return view('user-signin');
    }
}
