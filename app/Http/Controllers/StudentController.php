<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $students =Student::all();
        // return view('all.show',['students'=>$students]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('all.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
           'st_name'=>'required|min:3|max:10',
           'st_address'=>'required',
           'st_roll'=>'required',
           'st_date'=>'required' 
        ]);
        $student=new Student;
        $student->st_name=$request->st_name;
        $student->st_address=$request->st_address;
        $student->st_roll=$request->st_roll;
        $student->st_date=$request->st_date;
        $student->save();
              $notification = array(
                'message' => 'Successfully Save a Record',
                'alert-type' => 'success'
            );
        \Session::flash('success', 'Successfully Save a Record');
        return redirect()->route('student.show')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $student = Student::find($id);
        return view('all.edit', ['student' => $student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $student = Student::find($id);
        $student->st_name = $request->st_name;
        $student->st_address = $request->st_address;
        $student->st_roll= $request->st_roll;
        $student->st_date= $request->st_date;
        $student->save();
        $notification = array(
                'message' => 'Update Successfully a Record',
                'alert-type' => 'success'
            );
        return redirect()->route('student.show')->with($notification);;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $student = Student::find($id);
        $student->delete();
        $notification = array(
                'message' => ' Delete Successfully a Record',
                'alert-type' => 'success'
            );
        return redirect()->route('student.show')->with($notification);
    }
}
