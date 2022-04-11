<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Registration;

class BasicController extends Controller
{
    /***** header *****/

    public function header(){

        return view('layouts.header');
    }

      /***** home *****/

    public function home(){
        
         return view('layouts.header');
    }

    /****** homelogin  ******/

    public function homelogin(){

     $data =['LoggedUserInfo'=>Registration::where('id','=',session('LoggedUser'))->first()];


     return view('layouts.header_with_login',$data);
    }

     /***** login *****/

    public function login(){
        
         return view('login');
    }

     /***** register *****/

    public function register(){
        
         return view('registration');
    }


     /***** videos *****/

    public function videos(){
        
         return view('layouts.videos');
    }

  /***** contactus *****/

  public function contactus(){

     return view('contactus');
  }

  /***** feedback *****/

  public function feedback(){

     return view('feedback');
  }

  /***** gallery  *****/

  public function gallery(){

    return view('layouts.gallery');
  }

  /***** mantras  ******/

  public function mantras(){

     return view('newheaderLayouts.mantras');
  }

  /***** pravachana ******/

   public function pravachana(){

     return view('newheaderLayouts.pravachana');
  }

 /***** festivals  ******/

  public function festivals(){

     return view('newheaderLayouts.festivals');
  }





}//end controller
