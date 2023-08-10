<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Saving_mod;


class HomeController extends Controller
{
    public function Redirect()
    {
        $user_type=Auth::user()->user_type;

        if($user_type=='1')
        {
            return view("admin.index");
        }
         
        else
        { 
            
            return view("user.user_index");
        }

    }

    public function index ()
    {
        if(Auth::id())
        {
            return redirect('redirect');
        }
        else
        {
            $data = Saving_mod::all();

            return view('user.user_index');
        }
        
    }

    // public function showData()
    // {
    //     $data = user::all();

    //     return view('admin.members', compact('user'));
    // }
}
