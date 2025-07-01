<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
    //direct game page
    public function gamePage(){
        return view('dashboard.games.index');
    }

    //direct game 1
    public function gameOne(){
        return view('dashboard.games.game1');
    }

    //direct game 2
    public function gameTwo(){
        return view('dashboard.games.game2');
    }
}
