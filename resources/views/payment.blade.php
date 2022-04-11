<?php $details = Session::get('details'); ?>
<?php $data = Session::get('data'); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Ecommerce &#189; Product planner &amp; celebration html Template" />
<meta name="author" content="https://www.websiteexperts.in/" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bodhivruksha family Bhakti player</title>



      <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

      <!--js cdn -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

        <style type="text/css">
          #paymentorder{
            line-height: 2;

          }
        </style>


</head>
<body>
  <section class="container-fluid">
    <!-- Grey with black text -->
<!-- <nav class="navbar navbar-expand-sm bg-dark navbar-light"> -->
 <h4 style="background-color: 
#a10529;padding: 10px;"> <a class="nav-link" href="{{ route('customer.logout') }}" style="color:white;text-align: right;">Logout</a></h4>
  </section>
  <br/><br/>
  <section class="container" id="paymentorder">
    <!-- outer row start-->
    @foreach($details as $detail)

    <div class="row">
      <div class="col-md-6">
        <!-- card start-->
 <div class="card">
   <!-- <div class="card-header"></div> -->
   <div class="card-body">
    <!-- 1st row start-->
     <div class="row">
       <div class="col-md-6">
         <h3>Login Details</h3>
       </div>
       <div class="col-md-6">
         <h5 id="name">{{$detail->firstName}}<span>{{$detail->lastName}}</span></h5><br/>
         <h5 id="email">{{$detail->email}}</h5><br/>
        <h5 id="phoneNumber">{{$detail->phoneNumber}}</h5>
       </div>
     </div>
     <!-- 1st row end-->
<br/>
     <!-- 2nd row start-->
     <div class="row">
       <div class="col-md-6">
         <h3>Delivery Address</h3>
       </div>
       <div class="col-md-6">
         <h5 id="address">Address: {{$detail->street}} <br><br/>{{$detail->city}}<br><br/>{{$detail->state}}<br><br/>{{$detail->country}}</p>
         <p>Zipcode :{{$detail->zipcode}}</h5>
       </div>
     </div>
     <!-- 2nd row end-->
   @endforeach

   @foreach($data as $d)

        <!-- 3rd row start-->
     <div class="row">
       <div class="col-md-6">
         <h3>Order Summary</h3>
       </div>
       <div class="col-md-6">
        <div class="row">
          <div class="col-md-4">
             <h5>Product Id<span id="productId">101</span></h5>
          </div>
          <div class="col-md-8">
            <h5><span id="productName">{{ $d->name}}</span></h5>
          </div>

        
        </div>
         
       </div>
     </div>
     <!-- 3rd row end-->

     <br/><br/>
  
    <!-- 4th row start-->
     <div class="row">
         <div class="col-md-6">
            <h5>product image </h5><h5><img alt="" class="img-fluid" src="public/productimages/{{$d->image}}" class="img-fluid"></h5>
          </div>
          <div class="col-md-6">
               <h5>Description</h5><h5> {{$d->description}}</h5>
          </div>
     </div>
<br/>
    <!-- 4th row end-->
    <h5>payment method</h5>
  
        <!--  <input type="radio" name="methodpay" id="methodpay" value="cash on delivery">cash on delivery -->
         <!-- <br/> -->
         <h5  name="methodpay" id="methodpay">credit card/Debit card
         <!-- <input type="text" name="methodpay" id="methodpay" value="credit card/Debit card"> --></h5>
   </div><!-- card body-->
 </div>
 <!-- card end-->
      </div>
      <div class="col-md-6">
      <div class="card">
      <div class="card-header">
        <h3>price details</h3>
      </div>
      <div class="card-body">
        <h4>price(1) <span id="price" style="margin-left: 100px">{{ $d->price}}</span></h4><br/>
        <h4>Delivery charges <span style="margin-left: 55px;">Free</span> </h4>
        <hr><br/>
        <h4>Total payable <span style="margin-left: 70px">{{ $d->price}}</span></h4>
      </div>
      <p id="status" style="visibility:hidden;">1</p>
      <br/><br/>
      <button type="button" id="payment_method" class="btn btn-danger" style="font-size:18px">Pay</button>
    </div>
      </div>
      
         @endforeach
    </div>
    <!-- outer row end-->
 
    
  </section>

  <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

<script>
$(document).ready(function() {
   
    $('#payment_method').on('click', function(e) {
      e.preventDefault();
      var name = $('#name').text();
      var email = $('#email').text();
      var phoneNumber = $('#phoneNumber').text();
      var address = $('#address').text();
      var productId = $('#productId').text();
      var productName = $('#productName').text();
      var methodpay = $('#methodpay').text();
      var price = $('#price').text();
      var status =$('#status').text();
    
     

      // console.log(name);
      // console.log(email);
      // console.log(phoneNumber);
      // console.log(address);
      // console.log(productName);
      // console.log(methodpay);
      // console.log(price);
      // console.log(status);
      // console.log(productId);
      // console.log(pickuptime);


      if(name!="" && email!="" && phoneNumber!="" && address!=""){
        
          $.ajax({
              url: "{{ url('userData') }}",
              //url: "{{ url('proceed_to_pay') }}",
              type: "POST",
              data: {
                  "_token": "{{ csrf_token() }}",
                  type: 1,
                  name: name,
                  email: email,
                  phoneNumber: phoneNumber,
                  address: address,
                  productId : productId,
                  productName : productName,
                  methodpay :methodpay,
                  price : price,
                  status :status
               
                  
              },
              cache: false,
              success: function(dataResult){
                  console.log(dataResult);

          window.setTimeout(function(){window.location.href = "{{url('PaypalPayment')}}";},3000);

              
              }
          });
      }
     
  });
});
</script>

  
</body>
</html>