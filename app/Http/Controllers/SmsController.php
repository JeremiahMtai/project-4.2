<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class SmsController extends Controller
{
    public function sendsms()
    {
        // Get the Twilio credentials and sender number from environment variables
        $id = getenv("TWILIO_SID");
        $token = getenv("TWILIO_TOKEN");
        $sendernumber = getenv("TWILIO_PHONE");

        // Create a new instance of the Twilio client
        $twilio = new Client($id, $token);

        // Send an SMS message
        $message = $twilio->messages->create(
            '+254 745 821246', // Recipient phone number
            array(
                'from' => $sendernumber, // Sender phone number
                'body' => 'I sent this message in under 10 minutes!' // Message body
            )
        );

        // Display a success message
        dd("Send Successful");
    }
}
