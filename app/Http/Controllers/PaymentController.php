<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Registration;

use App\Models\Product;

use Illuminate\Support\Facades\DB;



class PaymentController extends Controller
{
    public function index(){
        // $data =['LoggedUserInfo'=>Registration::where('id','=',session('LoggedUser'))->first()];

        return view('payment');
    }

      /***payment process***/



  public function finalpay(Request $request){

  
        $id= $request->id;

        $details = DB::table('registrations')->where('id',$id)
            ->get();
            $data= DB::table('products')->get();

            return redirect('paymentcard')->with( ['details' => $details] ) ->with( ['data' => $data] );;



  }



   /*** data saved user***/

   public function saveuser(Request $request){

    echo "data will be received";
     
     $name = $request->name;
      
      $email =$request->email;
      $phoneNumber = $request->phoneNumber;
      $address =$request->address;
      $productId = $request->productId;
      $productName = $request->productName;
      $methodpay =$request->methodpay;
      $price = $request->price;
      $status = $request->status;
      // $pickuptime= $request->pickuptime;
      // $triptype = $request->triptype;
      //  $Carno = $request->Carno;

      // echo $name." ".$email." ".$phoneNumber." ".$address." ".$productName." ".$methodpay." ".$price." ".$status." ".$productId;

      $data = DB::table('userdetails')
            ->insert([

        "name" => $name,
        "email" => $email,
        "phoneNumber" => $phoneNumber,
        "address" => $address,
        "productId" => $productId,
        "productName" => $productName,
        "methodpay" => $methodpay,
        "price" => $price,
        "status" => $status,
    
]);

   }


  /**** PaypalPayment ***/

  public function PaypalPayment(Request $request){

    $dataverified =['LoggedUserInfo'=>Registration::where('id','=',session('LoggedUser'))->first()];

    $dataid = ['LoggedUserInfo'=>Registration::where('id','=',session('LoggedUser'))->first()];
  
  $datas = DB::table('userdetails')->orderBy('id','DESC')
               ->select('price')
               ->take(1)->get();
  $details =DB::table('userdetails')->orderBy('id','DESC')->take(1)->get();  

       

  foreach($datas as $data){

     $price = $data->price;

  }

  return view('payment.checkout',compact('price','details','dataid'),$dataverified);

}


/***** proceed_to_pay *****/

public function proceed_to_pay(Request $request){

      $name = $request->name;
      $email =$request->email;
      $phoneNumber = $request->phoneNumber;
      $address =$request->address;
      $productId = $request->productId;
      $productName = $request->productName;
      $methodpay =$request->methodpay;
      $price = $request->price;
      $status = $request->status;


          $response=array(
           
           
        'name' => $name,
        'email' => $email,
        'phoneNumber' => $phoneNumber,
        'address' => $address,
        'productId' => $productId,
        'productName' => $productName,
        'methodpay' => $methodpay,
        'price' => $price,
        'status' => $status

);

}

}//end controller
