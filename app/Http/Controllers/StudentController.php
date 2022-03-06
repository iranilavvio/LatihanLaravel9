<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // $students = Student::all();

        $students = User::isUser()->paginate(5);
        return view('students.index',compact('students'));
    }
}
