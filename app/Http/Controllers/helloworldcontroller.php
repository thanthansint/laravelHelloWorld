<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloworldcontroller extends Controller
{
    function showaboutus() {
        return view('aboutus');
    }
    function showhome() {
        return view('home');
    }
    function showcontactus() {
        return view('contactus');
    }
}
