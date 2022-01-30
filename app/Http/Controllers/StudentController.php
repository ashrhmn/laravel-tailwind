<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class StudentController extends Controller
{
    //
    public function create()
    {
        return view('student.create');
    }
    public function edit()
    {
        return view('student.edit');
    }
    public function get()
    {
        $student = array(
            "name" => "Ashik Rahman",
            "id" => 123,
            "dob" => "12.12.12"
        );
        $student = (object) $student;
        // return var_dump($student);
        return view('student.get')->with('student', $student);
    }
}
