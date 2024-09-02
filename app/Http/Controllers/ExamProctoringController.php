<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamProctoringController extends Controller
{
    public function index(){
        return view('admin.exam-proctoring');
    }
}
