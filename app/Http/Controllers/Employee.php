<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Employee extends Controller
{
    //
    public function index()
    {
        
        return view('view-employee-list');
    }
}
