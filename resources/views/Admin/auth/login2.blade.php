<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.urbanui.com/melody/template/pages/samples/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:53 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="public/admin_assets/vendors/iconfonts/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="public/admin_assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="public/admin_assets/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="public/admin_assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="public/admin_assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <!--<img src="../../images/logo.svg" alt="logo">-->
              </div>
              <h4>Admin Login</h4>
              <!--<h6 class="font-weight-light">Happy to see you again!</h6>-->
         <!--    <div class="container">
    <div class="row">
      <div class="col"> -->
        <!-- <h4>Admin Login</h4> --><hr/>
        <form action="{{ route('auth.check') }}" method="POST">
          
          @if(Session::get('fail'))
          <div class="alert alert-danger">
            {{Session('fail')}}
          </div>

          @endif

          @csrf
          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" placeholder="Enter valid email" value="{{ old('email') }}"><span class="text-danger">@error('email'){{$message}}@enderror</span>
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter valid password">
            <span class="text-danger">@error('password'){{$message}}@enderror</span>
          </div>
          <button type="submit" class="btb btn-block btn-primary">Sign In</button>
          <br/>
          <a href="{{ route('auth.register') }}">I don't have an account. create new</a>
          
        </form>
    <!--   </div>
    </div>
  </div> -->
            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2018  All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="public/admin_assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="public/admin_assets/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="public/admin_assets/js/off-canvas.js"></script>
  <script src="public/admin_assets/js/hoverable-collapse.js"></script>
  <script src="public/admin_assets/js/misc.js"></script>
  <script src="public/admin_assets/js/settings.js"></script>
  <script src="public/admin_assets/js/todolist.js"></script>
  <!-- endinject -->
</body>


<!-- Mirrored from www.urbanui.com/melody/template/pages/samples/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 15 Sep 2018 06:08:53 GMT -->
</html>
