<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\HotelBooking;
use App\Models\Payment;
use App\Models\User;
use App\Models\VehicleBooking;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $data['registered_users'] = User::whereDoesntHave('roles')->count();
        $data['silver_users'] = User::whereDoesntHave('roles')->whereHas('membership',function($q){
            $q->where('type','=','Silver');
        })->count();
        $data['gold_users'] = User::whereDoesntHave('roles')->whereHas('membership',function($q){
            $q->where('type','=','Gold');
        })->count();
        $data['platinum_users'] = User::whereDoesntHave('roles')->whereHas('membership',function($q){
            $q->where('type','=','Platinum');
        })->count();
        $data['diamond_users'] = User::whereDoesntHave('roles')->whereHas('membership',function($q){
            $q->where('type','=','Diamond');
        })->count();
        $data['tours_booked'] = Booking::count();
        $data['hotels_booked'] = HotelBooking::count();
        $data['vehicles_booked'] = VehicleBooking::count();
        $data['total_payments'] = Payment::count();
        $data['cash_payments'] = Payment::where(['payment_method' => 'cash'])->count();
        $data['online_payments'] = Payment::where(['payment_method' => 'online'])->count();
        $data['total_revenue'] = Payment::sum('amount');


        $payments = Payment::selectRaw('YEAR(created_at) as year, MONTH(created_at) as month, SUM(amount) as total')
            ->whereYear('created_at', now()->year)
            ->groupBy('year', 'month')
            ->orderBy('month', 'asc')
            ->get();

//        $data = [
//            'labels' => [],
//            'totals' => []
//        ];

        foreach ($payments as $payment) {
            $data['labels'][] = Carbon::create()->month($payment->month)->format('F');
            $data['totals'][] = $payment->total;
        }

        return view('admin-dashboard',$data);
    }
}
