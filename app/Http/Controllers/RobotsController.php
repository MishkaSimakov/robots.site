<?php

namespace App\Http\Controllers;

use App\Robot;
use App\User;
use function array_key_exists;
use function back;
use function compact;
use function config;
use function dd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function view;
use function wordwrap;

class RobotsController extends Controller
{

    public function __construct()
    {
//        $this->middleware('auth')->only(['store', 'create']);
    }
    public function index()
    {
        $robots = Robot::all();

        return view('robots.index', compact('robots'));
    }

    public function show($id)
    {
        $robot = Robot::findOrFail($id);
        $name = User::findOrFail($robot->student_id)['name'];

        return view('robots.show', compact('robot', 'name'));
    }

    public function create()
    {
        return view('robots.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:5|max:24',
            'description' => 'required|min:5|max:255',
            'characteristics' => 'required|min:5|max:255',
            'achivments' => 'max:255',
            'photo' => 'required|mimes:jpeg,bmp,png',
            'program' => '',
            'model' => '',
        ]);
        $robot = Robot::make($validatedData);

        $robot->description = wordwrap($validatedData['description'], 45, "\n", 1);
        $robot->characteristics = wordwrap($validatedData['characteristics'], 40, "\n", 1);
        $robot->achivments = wordwrap($validatedData['achivments'], 40, "\n", 1);

        $robot->student_id = Auth::id();

        $photoPath = $validatedData['photo']->store('photos', 'public');
        $robot->photo_path = $photoPath;

        if (array_key_exists('program', $validatedData)) {
            $programPath = $validatedData['program']->store('programs', 'public');
            $robot->program_path = $programPath;
        }
        if (array_key_exists('model', $validatedData)) {
            $modelPath = $validatedData['model']->store('models', 'public');
            $robot->model_path = $modelPath;
        }
        $robot->save();

        return back();
    }

}
