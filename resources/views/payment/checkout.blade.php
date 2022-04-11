<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- <title>RozerPay Example</title> -->

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha512-M5KW3ztuIICmVIhjSqXe01oV2bpe248gOxqmlcYrEzAvws7Pw3z6BK0iGbrwvdrUQUhi3eXgtxp5I8PDo9YfjQ==" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />
</head>
<body>

<div class="container" style="margin-top:30px;">
    <div class="jumbotron">
        <h2 style="text-align:right">Total Amount : {{$price}}</h2>

         @foreach($dataid as $d)

         <h6 style="visibility:hidden">Customer ID : <span id="user_id">{{$d->id}}</span></h6>

          @endforeach 

        @foreach($details as $data)
        
        <h6>CustomerName : <span id="name">{{$data->name}}</span></h6>
        <h6>Email : <span id="email">{{$data->email}}</span></h6>
     
        @endforeach
    </div>
       <div id="app">
        <main class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-3 col-md-offset-6">
                        @if($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible fade in" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Error!</strong> {{ $message }}
                            </div>
                        @endif
                            <div class="alert alert-success success-alert alert-dismissible fade show" role="alert" style="display: none;">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                                <strong>Success!</strong> <span class="success-message"></span>
                            </div>
                        {{ Session::forget('success') }}
                        <!-- <div class="card card-default"> -->
                          <!--   <div class="card-header">
                                Razorpay
                            </div> -->

                            <!-- <div class="card-body text-center"> -->
                                <div class="form-group mt-1 mb-1">
                                    <input type="text" name="amount" class="form-control amount" placeholder="Enter Amount" value="{{$price}}" style="border: none;visibility: hidden;">
                                </div>
                                <button id="rzp-button1" class="btn btn-success btn-lg btn-block">RazorPay</button>
                                <br/>
                                  <!-- Set up a container element for the button -->
                                 <!-- <div id="paypal-button-container"></div> -->
                            <!-- </div> -->
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>

<div class="container-fluid" style="position:absolute;bottom:0px;width:100%">
            <hr class="bg-dark opacity-1 m-0">
            <div class="row" style="background-color: #4a4946;">
              <div class="col text-center py-4">
                <p class="mb-0" style="color:white">Ecommerce © Copyright 2021. All Rights Reserved.</p>
              </div>
            </div>
 </div>


<script src="https://www.paypal.com/sdk/js?client-id=AZIKe7CL6C4ETo8-fUZ2JWiPxav6-gOMSsToj3VYQ7a0GkQG41OpBhO5s2udolZi9pCiz1d1Iar7nyrH"></script>

  <!--   <div class="container" style="text-align:center;">
    
    </div> -->

  

    <script>

      paypal.Buttons({
      
        // Sets up the transaction when a payment button is clicked
        createOrder: function(data, actions) {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: '{{$price}}' // Can reference variables or functions. Example: `value: document.getElementById('...').value`
              }
            }]
          });
        },

        // Finalize the transaction after payer approval
        onApprove: function(data, actions) {
          return actions.order.capture().then(function(orderData) {
            // Successful capture! For dev/demo purposes:
                //console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                var transaction = orderData.purchase_units[0].payments.captures[0];
                alert('Transaction '+ transaction.status + ': ' + transaction.id + '\n\nSee console for all available details');
             
      var name = $('#name').val();
      var email = $('#email').val();
      var PhoneNumber = $('#PhoneNumber').val();
      var address = $('#address').val();
      var productId = $('#productId').text();
      var productName = $('#productName').text();
      var methodpay = $('#methodpay').text();
      var price = $('#price').text();
      var status = $('#status').text();
    
     

                   $.ajax({
              //url: "{{ url('userData') }}",
              url: "{{ url('proceed_to_pay') }}",
              type: "POST",
              data: {
                  //"_token": "{{ csrf_token() }}",
                  //type: 1,
                  'name': name,
                  'email': email,
                  'PhoneNumber': PhoneNumber,
                  'productId': productId,
                  'productName' : productName,
                  'methodpay' :methodpay,
                  'price' : price,
                  'status' : status
                 
                  
              },
              cache: false,
              success: function(dataResult){
                  //console.log(dataResult);
                  window.setTimeout(function(){window.location.href = "{{url('homelogin')}}";},3000);


               //    if(dataResult){

               //    Swal.fire({
               //        position: 'center',
               //        icon: 'success',
               //        title: 'Your booking has been confirmed',
               //        showConfirmButton: false,
               //        timer: 1500
               // })
               //      window.setTimeout(function(){window.location.href = "{{url('/')}}";},3000);
               //    }

            
              }
          });

            // When ready to go live, remove the alert and show a success message within this page. For example:
            // var element = document.getElementById('paypal-button-container');
            // element.innerHTML = '';
            // element.innerHTML = '<h3>Thank you for your payment!</h3>';
            // Or go to another URL:  actions.redirect('thank_you.html');
          });
        }
      }).render('#paypal-button-container');

    </script>

   <!--   Razorpayment integration -->

    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        $('body').on('click','#rzp-button1',function(e){
            e.preventDefault();
            var amount = $('.amount').val();
            var total_amount = amount * 100;

            var name = $('#name').text();
            var email = $('#email').text();
            var user_id = $('#user_id').text();
 

      // console.log(name);
      // console.log(email);

      
            var options = {
                "key": "{{ env('RAZOR_KEY') }}", // Enter the Key ID generated from the Dashboard
                 "amount": total_amount, // Amount is in currency subunits. Default currency is INR. Hence, 10 refers to 1000 paise
                 "name" : name,
                 "email" : email,
                 "user_id" : user_id,
                 "currency": "INR",
                 //"name": "NiceSnippets",
                 "description": "Test Transaction",
                 "image": "https://www.nicesnippets.com/image/imgpsh_fullsize.png",
                 "order_id": "", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                 "handler": function (response){
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type:'POST',
                        url:"{{ route('payment') }}",
                        data:{razorpay_payment_id:response.razorpay_payment_id,amount:amount,email:email,name:name,user_id:user_id},
                        success:function(data){
                            $('.success-message').text(data.success);
                            $('.success-alert').fadeIn('slow', function(){
                               $('.success-alert').delay(5000).fadeOut(); 
                            });
                            $('.amount').val('');
                            window.setTimeout(function(){window.location.href = "{{url('homelogin')}}";},3000);
                        }
                    });
                },
                "prefill": {
                    "name": "",
                    "email": "",
                    "contact": "xxx-xxxx-xxx"
                },
                "notes": {
                    "address": "Address"
                },
                "theme": {
                    "color": "#F37254"
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();
        });
    </script>

    
 <!--   <footer id="footer"  style=" position:absolute;bottom:0;width:100%;height:60px;">
  <div class="row container">
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <div class="col-md-4">
      <h4 class="font-weight-bold text-color-dark text-4-5 mb-3">SOCIAL MEDIA</h4>
           <p class="social-icons-facebook"><a href="#" target="_blank" title="Facebook"><img src="public/images/icons/fb.png" alt="facebook" width="35px" height="35px" title="Facebook"></a>      <span class="social-icons-twitter"><a href="#" target="_blank" title="Twitter"><img src="public/images/icons/twitter.jpeg" alt="twitter" width="35px" height="35px" title="Twitter"></a></span><span class="social-icons-linkedin"><a href="#" target="_blank" title="Linkedin"><img src="public/images/icons/linkedin.png" alt="Linkedin" width="35px" height="35px" title="Linkedin"></a></span></p>
    </div>
  </div>
  <div class="footer-copyright bg-transparent">
          <div class="container-fluid py-2">
            <hr class="bg-dark opacity-1 m-0">
            <div class="row" style="background-color: #4a4946;">
              <div class="col text-center py-4">
                <p class="mb-0" style="color:white">Ecommerce © Copyright 2021. All Rights Reserved.</p>
              </div>
            </div>
          </div>
        </div>
  
</footer> -->
</body>
</html>