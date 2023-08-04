<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MpesaContrller extends Controller
{
    public function mpesa()
    {
        return view('user.mpesa');
    }
}
