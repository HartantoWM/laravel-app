<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SehatController extends Controller
{
    public function index()
    {
        return view("sehat"); 
    }

}
