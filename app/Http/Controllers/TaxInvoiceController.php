<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaxInvoiceController extends Controller
{
    public function index(){
        return view('admin.tax-ppn');
        
    }

    public function scan(){
        return view('admin.tax_ppn_scan');
    }
}
