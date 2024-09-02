<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KtpController extends Controller
{
    public function index(){
        return view('admin.ktp');
    }
    public function scan(){
        return view('admin.ktp_scan');
    }
}
