<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TranskripNilaiController extends Controller
{
    public function index(){
        return view('admin.transkrip-nilai');
    }
}
