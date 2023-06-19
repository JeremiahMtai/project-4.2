<?php

namespace App\Http\Controllers;

use App\Models\Saving_mod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Twilio\Rest\Client;

class UserController extends Controller
{
    // saving view
    public function saving()
    {
        if(Auth::user()->user_type=='0')
        {
            $data= saving_mod::all();

            return view('user.saving',compact('data'));
        }
        else
        {
            return view('admin.index');
        }
        
    }

    public function user_loan()
    {
        return view('user.loan');
    }

    public function profile()
    {
        return view('user.profile');
    }

    public function showsaving()
    {
        $data=Saving_mod::all();

        return view('user.saving',compact('data'));
    }

    public function sendsms(Request $request)
    {
        {
            $sender_phone = $request->phone;
            $sender_message = $request->message;
        
            // Get the Twilio credentials and sender number from environment variables
            $id = getenv("TWILIO_SID");
            $token = getenv("TWILIO_TOKEN");
            $sendernumber = getenv("TWILIO_PHONE");
        
            // Create a new instance of the Twilio client
            $twilio = new Client($id, $token);
        
            // Check if the recipient phone number is not null
            if ($sender_phone !== null) {
                // Send an SMS message
                $message = $twilio->messages->create(
                    $sender_phone,
                    [
                        'from' => $sendernumber,
                        'body' => $sender_message,
                    ]
                );
        
                // Display a success message
                   
                return redirect()->back()->with('message','Product Added Successfully !!');
            } else {
                // Handle the case where the recipient phone number is null
                // dd("Recipient phone number is null");

                return view('user.sendsms');

            }
        }
        
    }
        

}
