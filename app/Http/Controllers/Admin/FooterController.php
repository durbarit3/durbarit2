<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }


    // showing footer page

    public function footerShow()
    {
            return view('admin.setting.footeroption');
    }
}
