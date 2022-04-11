<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;

use Illuminate\Support\Facades\Hash;


class MainAdminController extends Controller
{
    /***** Admin login*****/

    public function login(){

        return view('Admin.auth.login');

    }
      /***** Admin register*****/

    public function register(){

        return view('Admin.auth.register');

    }
  
    /***** Admin register*****/

    public function save(Request $request){
        //validate request

        $request->validate([
          "name" => "required",
          "email" => "required|email|unique:admins",
          "password" => "required|min:5|max:15",

        ]);

        $admin = new Admin;
        $admin->name = $request->name;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        
        $save = $admin->save();
        if($save){
            return back()->with('success','New account created successfully');
        }
        else{
            return back()->with('fail','Something went wrong, try again later');
        }

    }

    /****Admin login verified****/

    public function check(Request $request){

           $request->validate([
          
          "email" => "required|email",
          "password" => "required|min:5|max:15",

        ]);

    $userInfo = Admin::where('email','=',$request->email)->first();

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
            return redirect('adminDashboard');

        }
        else{

            return back()->with('fail','Invalid password');

        }


    }

    }


    /****** Admin Logout ******/

    public function logout(){
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/auth/login');
        }
    }

    /*****Admin dashboard*****/

    public function dashboard(){

         $data =['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('Admin.dashboard',$data);
        //return view('Admin.sample_dashboard');
    }


}//end controller
