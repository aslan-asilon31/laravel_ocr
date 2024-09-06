<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IjasahController extends Controller
{
    public function index(){
        return view('admin.certificate');
    }
    public function scan(){
        return view('admin.certificate-scan');
    }
}
