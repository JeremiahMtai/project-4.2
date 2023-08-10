<?php

namespace App\Http\Controllers;

use App\Models\Mbrsave;
use App\Models\Save;
use App\Models\Saving_mod;
use App\Models\User;
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
            $data= saving_mod::paginate(3);

            $user=auth()->user();

            $count=user::where('phone',$user->phone)->count();

            return view('user.saving',compact('data','count'));
        }
        else
        {
            return view('admin.index');
        }
        
    }

    // mbr saving
    public function mbrsave(Request $request)
    {
        $data=new mbrsave;   
    

        $data->saving_typ=$request->saving_typ;

        $data->date=$request->date;

        $data->amount=$request->amount;

        $data->save();

        return redirect()->back();
    }

    // show mbr saving
    public function totalSavings()
    {
        // Calculate the total savings amount
        // $totalSavings = mbrsave::sum('amount');

        $totalSavings = mbrsave::all();

        // return view('savings.index', compact('savings'));

        // Return the Blade view with the total savings count
        return view('user.total-saving', ['totalSavings' => $totalSavings]);


    }
    


    // swsaving
    // public function swsaving()
    // {
    //     $user=auth()->user();

    //     $save=user::where('phone',$user->phone)->get();

    //     $count=user::where('phone',$user->phone)->count();

    //     return view('user.total-saving',compact('save','count'));
    // }

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
        
        $data= saving_mod::paginate(3);

        $user=auth()->user();

        $count=save::where('phone',$user->phone)->count();

        return view('user.total-saving',compact('data','count'));
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

    // delete savings
    public function deletembrsave($id)
    {
        $data = mbrsave::find($id);

        if ($data) {
            $data->delete();
            return redirect()->back()->with('message', 'Saving Deleted Successfully!');
        } else {
            return redirect()->back()->with('error', 'Saving not found!');
        }
    }

    public function payment()
    {
        return view('user.payment');
    }
        

}
