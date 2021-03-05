<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Auth;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    function index(){
        return view('admin.dashboard');
    }
}

