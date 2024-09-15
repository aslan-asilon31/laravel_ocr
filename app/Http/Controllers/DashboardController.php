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
        $academics = AcademicTranscript::orderBy('created_at', 'DESC')->get();
        $certificates = Certificate::orderBy('created_at', 'DESC')->get();
        $ktps = Ktp::orderBy('created_at', 'DESC')->get();
        $purchases = PurchaseOrder::orderBy('created_at', 'DESC')->get();
        $taxes = TaxPpn::orderBy('created_at', 'DESC')->get();
        return view('admin.dashboard', compact('academics','certificates','ktps','purchases','taxes'));
        
    }
}
