<?php

namespace App\Http\Controllers\Billing;

use Request;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;


class DashboardController extends Controller
{
    function index(){
        Log::channel('command')->info('Success login : ', [
            'user'  => Auth::user()->name,
            'ip'    => Request::ip(),
            'browser' => Request::header('User-Agent')
            ]);
        return view('billing.dashboard');
    }
}
