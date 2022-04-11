<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Registration;

use App\Models\Product;

use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    /***Registration data***/

    public function customerRegister(Request $request){

         $request->validate([
          "firstName" => "required",
          "lastName" => "required",
          "phone" => "required",
          "email" => "required|email|unique:registrations",
          "password" => "required|min:5|max:15",
          "address1" => "required",
          "city" => "required",
          "state" => "required",
          "country" => "required",
          "zip" => "required",

        ]);

         $firstName   =  $request->firstName;
        $lastName    =  $request->lastName;
        $phone       =  $request->phone;
        $email       =  $request->email;
        $password    =  Hash::make($request->password);
        $address1    =  $request->address1;
        //$address2    =  $request->address2;
        $city        =  $request->city;
        $state       =  $request->state;
        $country     =  $request->country;
        $zip         =  $request->zip;

        $data = new Registration;
        $data ->firstName      = $firstName; 
        $data ->lastName       = $lastName; 
        $data ->phoneNumber   = $phone ;
        $data ->email          = $email; 
        $data ->password       = $password; 
        $data ->street         = $address1; 
        $data ->city           = $city; 
        $data ->state          = $state; 
        $data ->country        = $country; 
        $data ->zipcode       = $zip;  

        $result = $data->save();
        if($result){
            return back()->with('success','New account created successfully');
        }
        else{
            return back()->with('fail','Something went wrong, try again later');
        }



    }


 /***Registration data***/

 public function customerLogin(Request $request){


           $request->validate([
          
          "email" => "required|email",
          "password" => "required|min:5|max:15",

        ]);

    $userInfo = Registration::where('email','=',$request->email)->first();

    if(!$userInfo){
        return back()->with('fail','we do not recognize your email address');
    }
    else{
        //check password
            $data = $userInfo->password;
            $data1 = $request->password;
        //echo $data." ".$data1;

        if(Hash::check($data1, $data)){

            $request->session()->put('LoggedUser',$userInfo->id);
            $details = Product::select('*')->get();
            return redirect('buynow')->with( ['details' => $details] );

        }
        else{

            return back()->with('fail','Invalid password');

        }


    }

 }

    /****** customer Logout ******/

    public function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('home');
        }
    }


   
    


}//end controller
