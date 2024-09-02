<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaxInvoiceController extends Controller
{
    public function index(){
        return view('admin.tax-invoice');
        
    }

    public function scan(){
        return view('admin.tax_invoice_scan');
    }
}
