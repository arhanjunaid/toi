<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Registration;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //Registration data insert

    public function registration(Request $request){

        $firstName   =  $request->firstName;
        $lastName    =  $request->lastName;
        $phoneNumber       =  $request->phoneNumber;
        $email       =  $request->email;
        $password    =  $request->password;
        $address1    =  $request->address1;
        //$address2    =  $request->address2;
        $city        =  $request->city;
        $state       =  $request->state;
        $country     =  $request->country;
        $zip         =  $request->zip;

         echo $firstName." ".$lastName." ".$phoneNumber." ".$email." ".$password." ".$address1." ".$city." ".$state." ".$country." ".$zip;

        // $data = new Registration;
        // $data ->firstname      = $firstName; 
        // $data ->lastname       = $lastName; 
        // $data ->phoneNumber    = $phone;
        // $data ->email          = $email; 
        // $data ->password       = $password; 
        // $data ->street         = $address1; 
        // $data ->city           = $city; 
        // $data ->state          = $state; 
        // $data ->country        = $country; 
        // $data ->zip_code       = $zip;  

        // if($data->save()){
        //     return redirect('/login');
        // }
        // else{
        //     echo "data failed";
        // }

    }

    //login verified

    public function login_verified(Request $request){

        $email    = $request->email;
        $password = $request->password;

    
    // $email = $request->input('email');
    // $result = DB::table('registrations')->where('email',$email)->get();
    // if($result[0]->email == $request->input('email') && $result[0]->password == $request->input('password')){
    //     $data = $result->firstname;
    //     echo $data;
    //     echo "Login Successfull";
    // }
    // else{
    //     echo "Invalid username and password";
    // }
   
      $result =Registration::where('email',$email)->where('password',$password)->get();

        if(count($result) > 0){

            //$request->session()->put('reg_id',$session[0]->reg_id);
            $request->session()->put('firstName',$result[0]->firstname);
            $request->session()->put('lastName',$result[0]->lastname);
            

             return redirect('product');

        }
        else{
            
            echo "login failed";
            //return redirect('/login')->with('msg','Email or password does not matched');
        }
    
    }

    //checkout 

    public function check_out(Request $request){

        $firstName   =  $request->firstName;
        $lastName    =  $request->lastName;
        $phone       =  $request->phone;
        $email       =  $request->email;
        $password    =  $request->password;
        $address1    =  $request->address1;
        //$address2    =  $request->address2;
        $city        =  $request->city;
        $state       =  $request->state;
        $country     =  $request->country;
        $zip         =  $request->zip;

        //echo $firstName." ".$lastName." ".$phone." ".$email." ".$password." ".$address1." ".$city." ".$state." ".$country." ".$zip;
        $data = new Registration;
        $data ->firstname      = $firstName; 
        $data ->lastname       = $lastName; 
        $data ->phone_number   = $phone ;
        $data ->email          = $email; 
        $data ->password       = $password; 
        $data ->street         = $address1; 
        $data ->city           = $city; 
        $data ->state          = $state; 
        $data ->country        = $country; 
        $data ->zip_code       = $zip;  

        if($data->save()){
           
            $result =Registration::where('email',$email)->where('password',$password)->get();

        if(count($result) > 0){

            //$request->session()->put('reg_id',$session[0]->reg_id);
            $request->session()->put('firstName',$result[0]->firstname);
            $request->session()->put('lastName',$result[0]->lastname);
            

             return redirect('product');

        }

             

        }
        else{
            echo "data failed";
        }

    }


    //product verify

    public function product_verify(Request $request){

        // if((session()->get('firstName') && session()->get('lastName'))== ""){
        //       return redirect('/login');
        // }

        if(session()->has('firstName')){
        //session()->pull('username');
            echo "view";
    }
    else{
        echo "please login";
    }

    }
}
