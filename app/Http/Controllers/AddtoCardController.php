<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Registration;

use Illuminate\Support\Facades\DB;

class AddtoCardController extends Controller
{
      /*****add to card*****/

    public function card(){

        $data =['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('add_to_card',$data);
    }

    /*** customer login ****/


    public function BuyNow(){

        $data =['LoggedUserInfo'=>Registration::where('id','=',session('LoggedUser'))->first()];
        return view('buynow',$data);
    }

  /**** buynow_without_login ****/

  public function buynow_without_login(Request $request){

    $details=DB::table('products')
                 ->orderBy('id', 'DESC')
                 ->take(1)->get();
    return view('buynow_without_login',compact('details'));

  }
}
