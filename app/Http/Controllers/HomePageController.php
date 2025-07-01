<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    //direct view page
    public function home(){
        return view('dashboard.home.index');
    }

    //direct home page
    public function homePage(){
        return view('dashboard.home.home');
    }
}
