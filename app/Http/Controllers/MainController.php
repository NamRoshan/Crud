<?php

namespace App\Http\Controllers;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class MainController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }
    public function main(){
    	return view('index');
    }
    public function create(){
    	return view('all.create');
    }
    public function show(){
    	$students =Student::all();
        return view('all.show',['students'=>$students]);
    }
    public function edit(){
        return view('all.edit');
    }
}
