<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TranskripNilaiController extends Controller
{
    public function index(){
        return view('admin.academic-transcript');
    }
    public function scan(){
        return view('admin.academic-transcript-scan');
    }
}
