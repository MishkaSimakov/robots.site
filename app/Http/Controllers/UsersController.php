<?php

namespace App\Http\Controllers;

use App\Robot;
use App\User;
use function dd;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
    public function show($id)
    {
        $user = User::findOrFail($id);
        $user->name = wordwrap($user->name, 8, "\n",1);
//

        $robots = Robot::all();

        foreach ($robots as $robot) {
            if ($robot->student_id == $id) {
                 $hisRobots[] = $robot;
            }
        }

        return view('users.show', compact('user', 'hisRobots'));
    }

}
