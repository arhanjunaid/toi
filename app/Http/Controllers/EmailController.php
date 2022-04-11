<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use App\Mail\FeedbackMail;

use App\Mail\ContactMail;

use \App\Mail\SendMail;

class EmailController extends Controller
{
    //


    public function feedbackdata(Request $request){

          $request->validate([
          "firstName" => "required",
          "lastName" => "required",
          "email" => "required|email",
          "feedback" => "required",

        ]);

        $firstName  = $request->firstName;
        $lastName   = $request->lastName;
        $email      = $request->email;
        $feedback   = $request->feedback;

       //echo $firstName." ". $lastName." ". $email." ".$feedback;

    $data = array(

        'firstName'  => $request->firstName,
        'lastName'   => $request->lastName,
        'email'      => $request->email,
        'feedback'   => $request->feedback,
        
        
        );
        
        Mail::to('blpriya1706@gmail.com')->send(new FeedbackMail($data));
        return back()->with('success','Thanks for your feedback');
  

}


/***** contactdata ****/

public function contactdata(Request $request){


      $request->validate([
          "name" => "required",
          "email" => "required|email",
          "subject" => "required",
          "message" => "required",

        ]);

        $name  = $request->name;
        $email   = $request->email;
        $subject   = $request->subject;
        $message   = $request->message;

       // echo $name." ". $email." ". $subject." ".$message;

          $data = array(

        'name'  => $request->name,
        'email'   => $request->email,
        'subject'      => $request->subject,
        'message'   => $request->message,
        
        
        );
        
        Mail::to('blpriya1706@gmail.com')->send(new ContactMail($data));
        return back()->with('success','Thanks for contacting');



}







}//end controller
