<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;


class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vendor = Auth::user();
        //dd($user);
        return view('vendor.dashboard')->with('vendor',$vendor);
    }

    public function myOrders()
    {
        $vendor = Auth::user();
        $orders = DB::table('orders')->where('order_from','online')->orderBy('id', 'desc')->take(20)->get();
        //dd($orders);
        return view('vendor.myOrders')
                ->with('vendor',$vendor)
                ->with('orders',$orders);
    }


}
