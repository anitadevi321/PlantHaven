<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RenderOtpController extends Controller
{
    public function render_otp(){
        
        return view('admin.sign-in_withOtp');
    }
}
