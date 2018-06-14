<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function about(){
        return view('pages.about');
    }
    public function cv(){
        return view('pages.cv');
    }
    public function github(){
        return view('pages.github');
    }
    public function interests(){
        return view('pages.interests');
    }
    public function projects(){
        return view('pages.projects');
    }
    public function hackerrank(){
        return view('pages.hackerrank');
    }
}
