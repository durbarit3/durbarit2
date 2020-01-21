<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }
    public function customerAccount ()
    {
        return view('frontend.accounts.account');
    }
}
