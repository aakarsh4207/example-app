<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentController extends Controller
{
    public function index()
  {
      $students = student::all();
      
    return view('welcome',compact('students'));
  }
  

   public function create()
    {
        return view('create');
    }
    public function store(Request $request)
   {
    $this->validate($request,[
    'first_name' => 'required',
     'last_name' => 'required',
     'email' => 'required',
    'phone'=> 'required'
     ]);
    $student = new student;
    $student->first_name = $request->first_name;
    $student->last_name = $request->last_name;
    $student->email = $request->email;
    $student->phone = $request->phone;
    $student->save();
    return redirect(route('home'))->with('success','student data add sucessfully');

   }
   public function edit($id)
   {
       $student=student::find($id);
       return view('edit',compact('student'));
   }



   public function update(Request $request, $id)
   {
       
    $this->validate($request,[
        'first_name' => 'required',
         'last_name' => 'required',
         'email' => 'required',
        'phone'=> 'required'
         ]);
        $student = student::find($id);
        $student->first_name = $request->first_name;
        $student->last_name = $request->last_name;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->save();
        return redirect(route('home'))->with('success','student data update sucessfully');

   }
   public function delete($id)
   {
       student::find($id)->delete();
       return redirect(route('home'))->with('success','student data delete sucessfully');

   }

}
