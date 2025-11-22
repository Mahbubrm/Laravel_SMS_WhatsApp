<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function sms_form()
    {
        return view('sms-form');
    }

    public function sms_send(Request $request)
    {
        $phone = $request->phone;
        
$to = "$phone";
$token = "1234567890123456789";
$message = "Test SMS using API";

$url = "https://api.bdbulksms.net/api.php?json";


$data= array(
'to'=>"$to",
'message'=>"$message",
'token'=>"$token"
); 
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$smsresult = curl_exec($ch);

//Result
echo $smsresult;

//Error Display
echo curl_error($ch);

    }
}
