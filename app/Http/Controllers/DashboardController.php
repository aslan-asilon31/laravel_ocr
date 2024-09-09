<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AcademicTranscript;
use App\Models\Certificate;
use App\Models\Ktp;
use App\Models\PurchaseOrder;
use App\Models\TaxPpn;

class DashboardController extends Controller
{
    public function index(){
        $academics = AcademicTranscript::all();
        $certificates = Certificate::all();
        $ktps = Ktp::all();
        $purchases = PurchaseOrder::all();
        $taxes = TaxPpn::all();
        return view('admin.dashboard', compact('academics','certificates','ktps','purchases','taxes'));
        
    }
}
