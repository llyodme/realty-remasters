<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function customer()
    {
        return view('admin.customer');
    }
    public function invoice()
    {
        return view('admin.invoice');
    }
    
    public function payment()
    {
        return view('admin.payment');
    }
   public function account()
   {
    return view('admin.account');
   }
   public function managepost()
   {
    return view('admin.managepost');
   }

}