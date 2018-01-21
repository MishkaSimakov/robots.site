<?php

namespace App\Http\Controllers;

use App\Robot;
use Illuminate\Http\Request;

class RobotsController extends Controller
{
    public function index()
    {
        $robots = Robot::all();

        return view('robots.index', compact('robots'));
    }

    public function show($id)
    {
        $robot = Robot::findOrFail($id);

        return view('robots.show', compact('robot'));
    }

    public function secret()
{
//        $robot = new Robot();
//        $robot->name = "Robot #22";
//        $robot->description = "Super sdfsdf";
//        $robot->save();
//
//        return redirect('/robots');
}
}
