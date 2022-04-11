<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Product;

use App\Models\Coupon;

use App\Models\Admin;

use DataTables;

class AdminLayoutController extends Controller
{

    //adminDashboard

    public function adminDashboard(){

        $data =['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];

        return view('Admin.sample_dashboard',$data);

    }


    //catalog page

    public function catalog(){

          $data =['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];
        return view('Admin.layouts.catalog_layout',$data);
    }

    //product display

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
     
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">Delete</a>';
    
                            return $btn;
                    })
                    ->addColumn('status', function($row){
     
                           $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">Edit</a>';
    
                            return $btn;
                    })
                    ->addColumn('image', function ($data) { 
                        $url= asset('/public/productimages/'.$data->ProductImage);
                        return '<img src="'.$url.'" border="0" width="40" class="img-rounded" align="center" />';

                      // $url=url('public/productimages/'.$data->ProductImage);
                      //     return '<img src="'.$url.'" border="0" width="80" class="img-rounded" align="center" />';
                      })
                    ->rawColumns(['action','status','image'])
                    ->make(true);
        }
        
        return view('Admin.layouts.catalog_layout');
    }


   //orders 

    public function orders(){

         $data =['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];

        return view('Admin.layouts.pages.samples.orders',$data);
    }

    //pricing table

    public function pricing_table(){

         $data =['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];

        return view('Admin.layouts.pages.samples.pricing_table',$data);

    }

    //invoice 

    public function invoice(){

          $data =['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];

        return view('Admin.layouts.pages.samples.invoice',$data);

    }

    //coupons

    public function coupons(){

          $data =['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];

         return view('Admin.layouts.pages.samples.coupons',$data);

    }

    //couponsAdding

    public function couponsAdding(){

          $data =['LoggedUserInfo'=>Admin::where('id','=',session('LoggedUser'))->first()];

        return view('Admin.layouts.pages.samples.couponsAdding',$data);

    }

    //coupons data save

    public function couponsData(Request $request){

        $name= $request->name;
        $code = $request->code;
        $DiscountType = $request->DiscountType;
        $Status =$request->Status;

        // echo  $name." ".$code." ".$DiscountType." ".$Status;

        $data = DB::table('coupons')->insert([

            "Name" => $name,
            "Code" => $code,
            "Discount" => $DiscountType,
            "Status" =>  $Status,

        ]);

        return back()->with('success','coupons added successfully');
      

    }

    // couponsretrieve 

    public function couponsretrieve(Request $request){

        if ($request->ajax()) {
            $data = Coupon::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

       //$datas = DB::table('coupons')->select('*')->get();

        //return view('Admin.layouts.pages.samples.coupons',compact('datas'));
      //return redirect('coupons')->with( ['datas' => $datas]);
      // return redirect('couponsdatastore')->with( ['datas' => $datas]);

        //     if ($request->ajax()) {
        //     $data = Coupon::select('*');
        //     return Datatables::of($data)
        //             ->addIndexColumn()
        //             ->addColumn('action', function($row){
     
        //                    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">Delete</a>';
    
        //                     return $btn;
        //             })
        //             ->addColumn('status', function($row){
     
        //                    $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">status</a>';
    
        //                     return $btn;
        //             })
                   

        //            ->rawColumns(['action','status'])
        //             ->make(true);
        // }

          //return redirect('coupons');
        //return view('Admin.layouts.pages.samples.coupons');
  
    }

   
}//end controller
