<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

use App\Http\Controllers\MainAdminController;

use App\Http\Controllers\CustomerController;

use App\Http\Controllers\AddtoCardController;

use App\Http\Controllers\ProductUserController;

use App\Http\Controllers\PaymentController;

use App\Http\Controllers\DataTableAjaxCRUDController;

use App\Http\Controllers\EmailController;

use App\Http\Controllers\BasicController;

use App\Http\Controllers\RazorpayController;

use App\Http\Controllers\AdminLayoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::view('headernew','newheaderLayouts.headernew');
Route::view('contactform','newheaderLayouts.contactform');
//Route::view('musicstore','newheaderLayouts.musicstore');
Route::view('newhome','newheaderLayouts.indexhome');
Route::view('indexnew','layouts.indexnew');
//Route::view('carousel','layouts.carousel');
Route::view('sampleindex','layouts.sampleindex');

//Route::view('newheader','layouts.newheader');
Route::get('gallery',[BasicController::class,'gallery']);

Route::view('homepage','newheaderLayouts.home');

Route::get('mantras',[BasicController::class,'mantras']);

Route::get('pravachana',[BasicController::class,'pravachana']);
Route::get('festivals',[BasicController::class,'festivals']);





Route::get('buynow_without_login',[AddtoCardController::class,'buynow_without_login'])->name('customer.buynow_without_login');
Route::view('contact','layouts.contactus_footer');

Route::post('feedbackdata',[EmailController::class,'feedbackdata']);
Route::post('contactdata',[EmailController::class,'contactdata']);

/***** Front end process code *****/

Route::post('userdata',[CustomerController::class,'customerRegister'])->name('user.data');
Route::post('loginCheck',[CustomerController::class,'customerLogin'])->name('customer.login');
Route::get('logout',[CustomerController::class,'logout'])->name('customer.logout');


Route::post('finalpayment',[PaymentController::class,'finalpay'])->name('final.payment');
Route::get('PaypalPayment', [PaymentController::class, 'PaypalPayment']);
Route::get('paymentcard',[PaymentController::class,'index'])->name('customer.payment');
Route::post('userData',[PaymentController::class,'saveuser']);

Route::post('proceed_to_pay', [PaymentController::class, 'proceed_to_pay']);


Route::group(['middleware'=>['ProtectedCustomer']],function(){

    Route::get('buynow',[AddtoCardController::class,'BuyNow'])->name('customer.buynow');


  //Route::get('payment',[PaymentController::class,'index'])->name('customer.payment');

});

Route::get('/',[BasicController::class,'header']);
Route::get('home',[BasicController::class,'home']);

Route::get('homelogin',[BasicController::class,'homelogin']);

Route::get('/login',[BasicController::class,'login']);
Route::get('/register',[BasicController::class,'register']);
Route::get('feedback',[BasicController::class,'feedback']);
Route::get('contactus',[BasicController::class,'contactus']);

Route::get('/videos',[BasicController::class,'videos']);


Route::get('/product', function () {
    return view('layouts.product');
});



Route::get('/checkout', function () {
    return view('layouts.checkout');
});







Route::post('form_data',[UserController::class,'registration']);
Route::post('login_verified',[UserController::class,'login_verified']);
Route::post('check_out',[UserController::class,'check_out']);

//Route::view('product','product');
//Route::get('/product',[UserController::class,'product_verify']);

Route::get('/product',function(){

    if(session()->has('firstName')){
        return redirect('product');
    }

    return view('login');
});




/***** Admin process code *****/

// Route::get('auth/login',[MainAdminController::class,'login'])->name('auth.login');
// Route::get('auth/register',[MainAdminController::class,'register'])->name('auth.register');
Route::post('auth/save',[MainAdminController::class,'save'])->name('auth.save');
Route::post('auth/check',[MainAdminController::class,'check'])->name('auth.check');
Route::get('auth/logout',[MainAdminController::class,'logout'])->name('auth.logout');



Route::group(['middleware'=>['AuthCheck']],function(){

     Route::get('auth/login',[MainAdminController::class,'login'])->name('auth.login');
     Route::get('auth/register',[MainAdminController::class,'register'])->name('auth.register');

     Route::get('adminDashboard',[AdminLayoutController::class,'adminDashboard'])->name('admin.Dashboard');

     Route::get('catalog',[AdminLayoutController::class,'catalog'])->name('admin.catalog');
     Route::get('orders',[AdminLayoutController::class,'orders'])->name('admin.orders');
     Route::get('pricing_table',[AdminLayoutController::class,'pricing_table'])->name('admin.pricing_table');
     Route::get('invoice',[AdminLayoutController::class,'invoice'])->name('admin.invoice');
     Route::get('coupons',[AdminLayoutController::class,'coupons'])->name('admin.coupons');
     Route::get('couponsAdding',[AdminLayoutController::class,'couponsAdding'])->name('admin.couponsAdding');

     Route::get('users',[AdminLayoutController::class, 'index'])->name('users.index');
    Route::get('couponsretrieve',[AdminLayoutController::class, 'couponsretrieve'])->name('admin.couponsretrieve');

    Route::get('admin/dashboard',[MainAdminController::class,'dashboard']);

    // Route::get('admin/card',[MainAdminController::class,'card']);  

});


Route::get('/productadd',[ProductUserController::class,'productAdd']);
Route::post('/productsave',[ProductUserController::class,'productSave'])->name('product.save');




//datatable concept using


Route::get('ajax-crud-datatable', [DataTableAjaxCRUDController::class, 'index']);
Route::post('store-company', [DataTableAjaxCRUDController::class, 'store']);
Route::post('edit-company', [DataTableAjaxCRUDController::class, 'edit']);
Route::post('delete-company', [DataTableAjaxCRUDController::class, 'destroy']);



/*** Razorpayment ***/

Route::get('paywithrazorpay', [RazorpayController::class,'payWithRazorpay'])->name('paywithrazorpay');
Route::post('payment', [RazorpayController::class,'payment'])->name('payment');



//Admin layouts


// Route::get('adminDashboard',[AdminLayoutController::class,'adminDashboard'])->name('admin.Dashboard');


Route::post('couponsdata',[AdminLayoutController::class,'couponsData']);
