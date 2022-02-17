<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Businessdirectory extends Controller
{
    function index(){
        return view('frontend.businessdirectory');
    }



    function add_new_directory(){
        return view('frontend.add-new-directory');
    }
}
