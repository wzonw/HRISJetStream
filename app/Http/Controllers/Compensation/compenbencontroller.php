<?php

namespace App\Http\Controllers\Compensation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class compenbencontroller extends Controller
{
    public function index()
    {
        if(Gate::denies('for-compen-ben')){
            abort(403);
        }
        return view('hr.leave-request');
    }
}
