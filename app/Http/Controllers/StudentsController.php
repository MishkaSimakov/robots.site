<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    //
    public function index()
    {
        $students = Student::all();

        return view('students.index', compact('students'));
    }

    public function show($id)
{
    $student = Student::findOrFail($id);

    return view('students.show', compact('student'));
}
}
