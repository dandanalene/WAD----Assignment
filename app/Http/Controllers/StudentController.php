<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{

    public function addStudent(Request $request)
    {
    	$name = $request->name;
    	$course = $request->course;
        $address = $request->address;
    	$age = $request->age;

    	$students = new student;
    	$students->name=$name;
    	$students->course=$course;
        $students->address=$address;
    	$students->age=$age; 

    	$students->save();

        return redirect('/students');
    }
 
    public function list(){

        $students = student::all();

        return view('student-list', compact('students'));
    }

    public function delete(Request $request, $id){

        $student = student::find($id);
        $student->delete();

        return redirect('/students');
    }

    public function editForm(Request $request, $id){
        $student = student::where('id', $id)->get();

        return view('edit-student', compact('student'));
    }


    public function update(Request $request){
        student::where('id', $request->id)->update($request->all());

        return redirect('/students');
    }


}
