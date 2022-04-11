
<!DOCTYPE html>
<html data-style-switcher-options="{'changeLogo': false, 'colorPrimary': '#ef524e', 'colorSecondary': '#e36159', 'colorTertiary': '#2baab1', 'colorQuaternary': '#383f48', 'borderRadius': '4px'}">
	<head>
		
		<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="" />
<meta name="author" content="https://www.websiteexperts.in/" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Toi &#8211; Just another WordPress site</title>

<!-- Favicon -->
        <link rel="shortcut icon" href="public/images/logo.jpeg" type="image/x-icon" />
        <link rel="apple-touch-icon" href="public/images/logo.jpeg">
        
		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet" type="text/css">
       
	   <!--font awasome icons-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="public/assets/css/all.min.css">
		<link rel="stylesheet" href="public/assets/css/animate.compat.css">
		<link rel="stylesheet" href="public/assets/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="public/assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="public/assets/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="public/assets/css/magnific-popup.min.css">
		<link rel="stylesheet" href="public/assets/css/star-rating.min.css">
		<link rel="stylesheet" href="public/assets/css/theme.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="public/assets/css/theme.css">
		<link rel="stylesheet" href="public/assets/css/theme-elements.css">
		<link rel="stylesheet" href="public/assets/css/theme-blog.css">
		<link rel="stylesheet" href="public/assets/css/theme-shop.css">

		<!-- Demo CSS -->
		<link rel="stylesheet" href="public/assets/css/demo-product-landing.css">

		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="public/assets/css/skin-product-landing.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="public/assets/css/custom.css">

		<!-- Head Libs -->
		<script src="public/assets/js/modernizr.min.js"></script>

        <!--bootstrap cdn-->
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-SEP1T05Z5V"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'G-SEP1T05Z5V');
		</script>
    
   
	</head>
	<!--<body data-plugin-scroll-spy data-plugin-options="{'target': '#header'}">-->
	<body id="body" class="one-page alternative-font-5" data-plugin-scroll-spy data-plugin-options="{'target': '#header'}">
		
		<div class="body">

			@include('newheaderLayouts.headernew')
			
<!-- 			<header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-top-0 bg-dark box-shadow-none">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="#">
											
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-dark-text order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-font-lg header-nav-main-font-lg-upper-1 header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1" >
											<nav class="collapse" style="font-size:26px;">
													<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown">
														<a data-hash class="nav-link active" href="home">
															Home
														</a>
														<ul class="dropdown-menu">
															<li><a class="nav-link" href="home#gallery">Image Gallery</a></li>
															<li><a class="nav-link" href="home#videos">Videos</a></li>
														</ul>
													</li>
													<li>
														<a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="68" href="home#aboutus">About us</a>
													</li>
													<li>
														<a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="68" href="videos">Videos</a>
													</li>
													<li>
														<a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="68" href="home#specifications">Specifications</a>
													</li>
													
													<li>
														<a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="68" href="contactus">Contact Us</a>
													</li>
													<li>
														<a class="nav-link" data-hash data-hash-offset="0" data-hash-offset-lg="68" href="feedback">Feedback</a>
													</li>
												
											
												
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
											<i class="fa fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
						  <ul class="navbar-nav navbar-nav-right">
       

        
              </div>
            </div>
          </li>
							
					</div>

				</div>

			</header> -->
			<br/><br/><br/><br/><br/>

		   <!-- <form enctype="multipart/form-data" method="post"  action="#"> -->
		   	   <form enctype="multipart/form-data" method="get" class="cart" action="buynow">
          	@csrf
     
			
			<!--image view-->

	<section class="section position-relative z-index-1 border-0 pt-0 m-0">
          <!-- <form enctype="multipart/form-data" method="post"  action="finalpayment">
          	@csrf -->
          	
					<div class="container shop pb-4" style="margin-top: -45px;">
						@foreach($details as $d)
						<div class="row">
							<div class="col-lg-5 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="background-color:#FCFEB9 ">

								<div class="thumb-gallery-wrapper">
									<div class="thumb-gallery-detail owl-carousel owl-theme manual nav-inside nav-style-1 nav-dark nav-arrows-thin mb-3">
										<div>
											<img alt="" class="img-fluid" src="public/productimages/{{$d->image}}" data-zoom-image="public/images/musicplayer/product1.jpg">
										</div>
										<div>
											<img alt="" class="img-fluid" src="public/images/musicplayer/product3.jpg" data-zoom-image="public/images/musicplayer/product3.jpg">
										</div>
										<div>
											<img alt="" class="img-fluid" src="public/images/musicplayer/product6.jpg" data-zoom-image="public/images/musicplayer/product6.jpg">
										</div>
										<div>
											<img alt="" class="img-fluid" src="public/images/musicplayer/product5.jpg" data-zoom-image="public/images/musicplayer/product5.jpg">
										</div>
									</div>
									<div class="thumb-gallery-thumbs owl-carousel owl-theme manual thumb-gallery-thumbs mb-0">
										<div class="cur-pointer">
											<img alt="" class="img-fluid" src="public/images/musicplayer/product1.jpg">
										</div>
										<div class="cur-pointer">
											<img alt="" class="img-fluid" src="public/images/musicplayer/product3.jpg">
										</div>
										<div class="cur-pointer">
											<img alt="" class="img-fluid" src="public/images/musicplayer/product6.jpg">
										</div>
										<div class="cur-pointer">
											<img alt="" class="img-fluid" src="public/images/musicplayer/product5.jpg">
										</div>
									</div>
								</div>

							</div>

							<div class="col-lg-7 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
           
								<div class="summary entry-summary position-relative">
									<br/><br/>
									<h6 class="mb-0 font-weight-bold text-8" name="productname" id="productname"> {{ $d->name}} </h6>
									<!-- <h6 class="mb-0 font-weight-bold text-8"><input type="text" name="productname" id="productname" value="{{ $d->name}}" style="border:none;outline: hidden;"></h6> -->

									<div class="pb-0 clearfix d-flex align-items-center">
										<div title="Rated 3 out of 5" class="float-start">
											<input type="text" class="d-none" value="5" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">
										</div>

										<div class="review-num">
											<a href="#reviews" class="text-decoration-none text-color-default text-color-hover-primary" data-hash data-hash-offset="0" data-hash-offset-lg="110">
												<span class="count text-color-inherit" itemprop="ratingCount">(2</span> reviews)
											</a>
										</div>
									</div>

									<div class="divider divider-small">
										<hr class="bg-color-grey-scale-4">
									</div>
                
									<p class="price mb-3">
										<span class="sale text-color-primary font-weight-bold ms-1" name="price" id="price" >
											{{$d->price}}</span>
											<!-- <input type="text" name="price" id="price" style="border:none;background-color:#e4ebe5" class="sale text-color-primary font-weight-bold ms-1" value="{{$d->price}}"> -->
										<span class="amount text-color-default">RS.3000</span>
									</p>
                @endforeach
									<p class="text-2-4 mb-3">Powered by Sony Music and available exclusively on Seniority, Acoosta Suno Bhakti is a premium quality portable wireless music player which features Bluetooth, USB, FM connectivity. This music player is pre-loaded with 70+ hours of devotional bhajans, aartis and mantras across 8 stations.</p>
                 <br>
									<!-- <ul class="list list-unstyled text-2">
										<li class="mb-0">Warrenty <strong class="text-color-dark" style="margin-left:60px">
                    Against Manufacturing Defect</strong></li>
										<li class="mb-0">Delivery <strong class="text-color-dark" style="margin-left:60px">1234567890</strong></li>
									</ul> -->
                    
                   
									<div class="row">
										<div class="col-sm-4">
											<p>Description</p>
										</div>
										<div class="col-sm-8">
											<p style="color: black;">A unique pre-loaded PORTABLE digital audio player consists of around 70 hours of inbuilt handpicked spiritual content. The contents are classified into categories as per listeners' interests on artistes, occasion, and moods. You can also choose to listen to your own music through its USB and Bluetooth features. Battery backup is 5 hours.</p>
										</div>

									</div>
<br/>
									<div class="row">
										<div class="col-sm-8">
											<!-- <p>Specifications</p> -->
										</div>
									<!-- 	<div class="col-sm-8">
											<img src="public/images/icons/ticks.png" width="20px" height="20px">ppppp
										</div> -->

										<div class="row">
											<div class="col-sm-4">
												<p><img src="public/images/icons/ticks.png" width="20px" height="20px">Mantras</p>
												<p><img src="public/images/icons/ticks.png" width="20px" height="20px">Devotional songs</p>
												<p><img src="public/images/icons/ticks.png" width="20px" height="20px">Chants</p>
												<p><img src="public/images/icons/ticks.png" width="20px" height="20px"> Instrumental and music therapy</p>
											</div>
											<div class="col-sm-4">
												<p><img src="public/images/icons/ticks.png" width="20px" height="20px">Pravachan and Devotional content from 10 different mathas of Karnataka</p>
											</div>
											<div class="col-sm-4">
												<p><img src="public/images/icons/ticks.png" width="20px" height="20px">Significance and Specialities of Festivals of Karnataka by Sri Somayaji</p> 
												<p><img src="public/images/icons/ticks.png" width="20px" height="20px"> Moral stories from Ashtanga yoga vigjnana mandira</p>
											</div>
											

										</div>

									</div>
<br/>

									<!-- <form enctype="multipart/form-data" method="post" class="cart" action=""> -->
								<!-- 		<table class="table table-borderless" style="max-width: 300px;">
											<tbody>
												<tr>
													<td class="align-middle text-2 px-0 py-2">SIZE:</td>
													<td class="px-0 py-2">
														<div class="custom-select-1">
															<select name="size" class="form-control form-select bg-color-transparent text-1 h-auto py-2">
																<option value="">PLEASE CHOOSE</option>
																<option value="blue">Small</option>
																<option value="red">Normal</option>
																<option value="green">Big</option>
															</select>
														</div>
													</td>
												</tr>
												<tr>
													<td class="align-middle text-2 px-0 py-2">COLOR:</td>
													<td class="px-0 py-2">
														<div class="custom-select-1">
															<select name="color" class="form-control form-select bg-color-transparent text-1 h-auto py-2">
																<option value="">PLEASE CHOOSE</option>
																<option value="blue">Blue</option>
																<option value="red">Red</option>
																<option value="green">Green</option>
															</select>
														</div>
													</td>
												</tr>
											</tbody>
										</table> -->
										<div class="d-flex align-items-center my-4">
											<!-- <div class="quantity quantity-lg float-none me-3 mb-0">
												<input type="button" class="minus bg-transparent text-color-hover-light bg-color-hover-primary border-color-hover-primary border" value="-">
												<input type="text" class="input-text qty text bg-transparent border border-start-0 border-end-0" title="Qty" value="1" name="quantity" min="1" step="1">
												<input type="button" class="plus bg-transparent text-color-hover-light bg-color-hover-primary border-color-hover-primary border" value="+">
											</div> -->
										<!-- 	<button type="button" class="btn btn-primary btn-rounded font-weight-bold text-3-5 btn-px-5 btn-py-2"><a href="buynow" class="text-decoration-none text-color-white">Add To Cart</a></button> --><br><br>
											<button type="submit" class="btn btn-info btn-rounded font-weight-bold text-3-5 btn-px-5 btn-py-2" id="savedata"> BuyNow<!-- <a href="buynow" class="text-decoration-none text-color-white">BuyNow</a> --></button>
										</div>
									</form>

									<div class="d-flex align-items-center">
										<ul class="social-icons social-icons-medium social-icons-clean-with-border social-icons-clean-with-border-border-grey social-icons-clean-with-border-icon-dark me-3 mb-0">
											<!-- Facebook -->
											<li class="social-icons-facebook">
												<a href="#" class="border" target="_blank" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="top" title="Share On Facebook">
													<img src="public/images/icons/fb.png" alt="" width="30" height="30">
												</a>
											</li>
											<!-- Google+ -->
											<li class="social-icons-googleplus">
												<a href="#" class="border" target="_blank" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="top" title="Share On Google+">
													<img src="public/images/icons/googleplus.jpeg" alt="" width="30" height="30">
												</a>
											</li>
											<!-- Twitter -->
											<li class="social-icons-twitter">
												<a href="#" class="border" target="_blank" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="top" title="Share On Twitter">
													<img src="public/images/icons/twitter.jpeg" alt="" width="35" height="35" style="border:3px solid white;border-radius:50px">
												</a>
											</li>
											<!-- Email -->
											<li class="social-icons-email">
												<a href="#" class="border" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="top" title="Share By Email">
													<img src="public/images/icons/gmail.jpeg" alt="" width="35" height="35" style="border:3px solid white;border-radius:50px">
												</a>
											</li>
										</ul>
									</div>
								</div>

							</div>
                
						</div>
				</div>
<br/><br/>
								<div class="container">
										<div class="row container">
										<h6><strong>Specifications</strong></h6>
										 <table class="table">
                     
                       <tbody>
                       	<tr>
                       		<td>Brand</td>
                       		<td>Bhakthi Music Player</td>

                       	</tr>
                       	<tr>
                       		<td>Return Policy</td>
                       		<td>3 Days Replacement in case of manufacturing defects
                          The product you return must be unused and in the original condition with all the tags and receipts</td>
                       	</tr>
                       	<tr>
                       		<td>Warranty</td>
                       		<td>6 Months Brand Warranty</td>
                       	</tr>
                       	<tr>
                       		<td>color</td>
                       		<td>orange</td>
                       	</tr>
                       	<tr>
                       		<td>Battery</td>
                       		<td>Lithium 1200 mAh</td>
                       	</tr>
                       		<tr>
                       		<td>Product Weight</td>
                       		<td>310 gm</td>
                       	</tr>
                       		<tr>
                       		<td>Dimensions</td>
                       		<td>12.44 x 4.42 x 8.09 cm</td>
                       	</tr>
      
                       </tbody>
                       </table>
									</div>
									<br/><br/>
									<h6 id="content"><strong>Features</strong></h6>
									<p><img src="public/images/icons/dot.png" width="35px" height="35px">Comes with a USB port</p>
									<p><img src="public/images/icons/dot.png" width="35px" height="35px">Bluetooth version: 5.0</p>
									<p><img src="public/images/icons/dot.png" width="35px" height="35px">FM radio with 8 radio channels : Bhakti, Mantra Aur Jaap, Devi Upsana, Shiv Upsana, Krishna Upsana, Ram Hanuman Vandana , Sai Baba Vandana and Gurbani</p>

								</div>



				</section>


				<footer id="footer" class="bg-transparent border-0 mt-0">
				<div class="container py-5">
					<div class="row text-center text-lg-start pt-4">
						<div class="col-lg-5 col-xl-4 mb-4 mb-lg-0">
							<h4 class="font-weight-bold text-color-dark text-4-5 mb-3">CUSTOMER SERVICE</h4>
							<ul class="list list-unstyled d-flex flex-column flex-sm-row justify-content-sm-center justify-content-lg-start mb-0">
								<li class="line-height-3 mb-0">
									<a href="#" class="text-decoration-none text-color-hover-primary">Help & FAQs</a>
								</li>
								<li class="line-height-3 border border-top-0 border-bottom-0 px-sm-3 mx-sm-3 mt-2 mt-sm-0 mb-0">
									<a href="#" class="text-decoration-none text-color-hover-primary">Order Tracking</a>
								</li>
								<li class="line-height-3 mt-2 mt-sm-0 mb-0">
									<a href="#" class="text-decoration-none text-color-hover-primary">Shipping & Delivery</a>
								</li>
							</ul>
						</div>
						<div class="col-lg-3 col-xl-2 offset-xl-2 mb-4 mb-lg-0">
							<h4 class="font-weight-bold text-color-dark text-4-5 mb-3">SOCIAL MEDIA</h4>
							<ul class="social-icons social-icons-medium social-icons-clean-with-border social-icons-clean-with-border-border-grey social-icons-clean-with-border-icon-dark me-3 mb-0">
								<li class="social-icons-facebook"><a href="#" target="_blank" title="Facebook"><img src="public/images/icons/fb.png" alt="facebook" width="35px" height="35px" title="Facebook"></a></li>
								<li class="social-icons-twitter"><a href="#" target="_blank" title="Twitter"><img src="public/images/icons/twitter.jpeg" alt="twitter" width="35px" height="35px" title="Twitter"></a></li>
								<li class="social-icons-linkedin"><a href="#" target="_blank" title="Linkedin"><img src="public/images/icons/linkedin.png" alt="Linkedin" width="35px" height="35px" title="Linkedin"></a></li>
							</ul>
						</div>
						<div class="col-lg-4 col-xl-3 offset-xl-1">
							<h4 class="font-weight-bold text-color-dark text-4-5 mb-3">PAYMENT METHODS</h4>
							<div class="payment-cc payment-cc-no-hover-effect text-color-dark justify-content-center justify-content-lg-start">
								<i><img src="public/images/payment/visa.png" alt="visa" height="35px" width="35px"></i>
								<i><img src="public/images/payment/paypal.png" alt="visa" height="35px" width="45px"></i>
								<i><img src="public/images/payment/stripe.png" alt="visa" height="35px" width="35px"></i>
								<i><img src="public/images/payment/mastercard.png" alt="visa" height="35px" width="45px"></i>
								<i><img src="public/images/payment/applepay.png" alt="visa" height="35px" width="45px"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright bg-transparent">
					<div class="container py-2">
						<hr class="bg-dark opacity-1 m-0">
						<div class="row">
							<div class="col text-center py-4">
								<p class="mb-0">©2022. Vijay Karnataka. All Rights Reserved.
						</div>
					</div>
				</div>
			</footer>
				
			
		</div>
		
		
		<!-- Vendor -->
		<script data-cfasync="false" src="public/assets/js/email-decode.min.js"></script><script src="public/assets/js/jquery.min.js"></script>
		<script src="public/assets/js/jquery.appear.min.js"></script>
		<script src="public/assets/js/jquery.easing.min.js"></script>
		<script src="public/assets/js/jquery.cookie.min.js"></script>
		<script src="public/assets/js/bootstrap.bundle.min.js"></script>
		<script src="public/assets/js/jquery.validate.min.js"></script>
		<script src="public/assets/js/jquery.easypiechart.min.js"></script>
		<script src="public/assets/js/jquery.gmap.min.js"></script>
		<script src="public/assets/js/lazysizes.min.js"></script>
		<script src="public/assets/js/jquery.isotope.min.js"></script>
		<script src="public/assets/js/owl.carousel.min.js"></script>
		<script src="public/assets/js/jquery.magnific-popup.min.js"></script>
		<script src="public/assets/js/jquery.vide.min.js"></script>
		<script src="public/assets/js/vivus.min.js"></script>
		<script src="public/assets/js/star-rating.min.js"></script>
		<script src="public/assets/js/theme.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="public/assets/js/theme.js"></script>

		<!-- Demo -->
		<script src="public/assets/js/demo-product-landing.js"></script>

		<!-- Theme Initialization Files -->
		<script src="public/assets/js/theme.init.js"></script>

	<!-- Examples -->
		<script src="public/assets/js/examples.image360.js"></script>
		<script src="public/assets/js/examples.gallery.js"></script>	


	<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"6d6bf144dada8820","version":"2021.12.0","r":1,"token":"03fa3b9eb60b49789931c4694c153f9b","si":100}' crossorigin="anonymous"></script>
<!-- 
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script>
$(document).ready(function() {
   
    $('#savedata').on('click', function(e) {
    	e.preventDefault();
      var id = $('#id').val();
      var name = $('#productname').val();
      var productprice = $('#price').val();

      console.log(name);
      console.log(productprice);
      console.log(id);
      

      if(name!="" && productprice!=""){
        
          $.ajax({
              url: "{{ url('paymentprocess') }}",
              type: "POST",
              data: {
                  "_token": "{{ csrf_token() }}",
                  type: 1,
                  name: name,
                  productprice: productprice
                  
              },
              cache: false,
              success: function(dataResult){
                  //console.log(dataResult);
                   window.location.href = "paymentcard";                  
              }
          });
       }
      else{
          //alert('Please fill all the field !');
      }
   });
});
</script> -->




	</body>
	</html>
