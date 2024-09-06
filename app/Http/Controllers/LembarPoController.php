<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LembarPoController extends Controller
{
    public function index(){
        return view('admin.purchase-order');
    }
    public function scan(){
        return view('admin.purchase-order-scan');
    }
}
