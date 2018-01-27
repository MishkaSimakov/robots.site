<?php

namespace App\Http\Controllers;

use App\Misha;
use App\Robot;
use function back;
use function compact;
use function config;
use Illuminate\Http\Request;
use function view;

class RobotsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only(['store', 'create']);
    }
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

    public function create()
    {
        return view('robots.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:5|max:255',
            'description' => 'required|min:5|max:255',
            'characteristics' => 'required|min:5|max:255',
            'student_id' => 'required|integer',
            'achivments' => 'max:255',
            'photo' => 'required|mimes:jpeg,bmp,png',
            'program' => '',
            'model' => '',
        ]);
        $photoPath = $validatedData['photo']->store('photos', 'public');
        $programPath = $validatedData['program']->store('programs', 'public');
        $modelPath = $validatedData['model']->store('models', 'public');
        $robot = Robot::make($validatedData);
        $robot->photo_path = $photoPath;
        $robot->program_path = $programPath;
        $robot->model_path = $modelPath;
        $robot->save();

        return back();
    }

}
