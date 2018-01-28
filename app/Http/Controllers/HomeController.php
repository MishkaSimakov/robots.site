<?php

namespace App\Http\Controllers;

use App\Robot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $robotsAll = Robot::all();

        foreach ($robotsAll as $robot) {
            if ($robot->student_id == Auth::id()) {
                $robots[] = $robot;
            }
        }

        return view('home', compact('robots'));
    }
}
