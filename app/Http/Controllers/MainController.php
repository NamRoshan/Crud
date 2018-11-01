<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class MainController extends Controller
{
    public function main(){
    	return view('index');
    }
    public function create(){
    	return view('all.create');
    }
    public function show(){
    	return view('all.show');
    }

}
