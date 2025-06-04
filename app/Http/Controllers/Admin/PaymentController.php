<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(){
        $data['payments'] = Payment::with(['paymentable'])->get();
        return view('admin.payments.index',$data);
    }
}
