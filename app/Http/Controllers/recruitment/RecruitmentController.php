<?php

namespace App\Http\Controllers\recruitment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class RecruitmentController extends Controller
{
    public function index()
    {
        if(Gate::denies('for-recruitment')){
            abort(403);
        }
        return view('hr.dashboard.index');
    }
}
