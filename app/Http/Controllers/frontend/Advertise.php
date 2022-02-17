<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Advertise extends Controller
{
    function index(){
        return view('frontend.advertise');
    }
    function advert_design_book(){
        return view('frontend.advert-design-book');
    }
}
