<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index(){
        return view('index');
    }
    public function aboutTeam(){
        return view('about.team');
    }
    public function aboutHistory(){
        return view('about.history');
    }
    public function aboutExecutive(){
        return view('about.executive');
    }
    public function contact(){
        return view('contact');
    }

    
}
