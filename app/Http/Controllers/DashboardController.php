<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    function index(){
        if(Auth::user()){
            if(Auth::user()->role_id == '1' ){
                return redirect('/admin/dashboard');
            }else if(Auth::user()->role_id == '2' ){
                return redirect('/marketing/dashboard');
            }else if(Auth::user()->role_id == '3' ){
                return redirect('/billing/dashboard');
            }
            else{
                return view('auth.login');
            }
        }else{
            return view('auth.login');
        }
    }
}
