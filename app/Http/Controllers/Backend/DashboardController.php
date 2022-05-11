<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Category;
use App\Models\Mentor;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    // Dashboard
    public function dashboard()
    {
        $categories = Category::count();
        $mentors    = User::where('user_type','2')->count();
        $bookings   = Booking::count();
        $users      = User::where('user_type','3')->count();
        return view('backend.dashboard.dashboard',compact('categories','mentors','bookings','users'));
    }
}
