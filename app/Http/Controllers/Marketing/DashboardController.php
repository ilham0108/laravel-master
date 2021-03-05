<?php

namespace App\Http\Controllers\Marketing;

use Illuminate\Http\Request;
use Auth;
use App\Http\Controllers\Controller;


class DashboardController extends Controller
{
    function index(){
        return view('marketing.dashboard');
    }
}
