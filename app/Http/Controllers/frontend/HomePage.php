<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomePage extends Controller
{
    function index(){
        return view('frontend.home');
    }
}
