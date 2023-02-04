<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(Student $student)
    {
        return view('students/index')->with(['students' => $student->get()]);
    }
    
    public function create()
    {
        return view('students/create');
    }
    
    public function store(Student $student,Request $request)
    {
        $input=$request['student'];
        // $input['user_id'] = auth()->id();
        $student->fill($input)->save();
        return redirect('/students/index');
    }
}
