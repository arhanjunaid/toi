<!DOCTYPE html>
<html lang="en">


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
  <link rel="shortcut icon" href="http://www.urbanui.com/" />
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row default-layout-navbar">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="{{ route('admin.Dashboard') }}"><img src="public/admin_assets/images/faces/logo.jpeg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="{{ route('admin.Dashboard') }}"><img src="public/admin_assets/images/faces/logo1.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="fas fa-bars"></span>
        </button>
        <ul class="navbar-nav">
          <li class="nav-item nav-search d-none d-md-flex">
            <div class="nav-link">
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fas fa-search"></i>
                  </span>
                </div>
                <input type="text" class="form-control" placeholder="Search" aria-label="Search">
              </div>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
        <!--   <li class="nav-item d-none d-lg-flex">
            <a class="nav-link" href="#">
              <span class="btn btn-primary">+ Create new</span>
            </a>
          </li> -->
          <li class="nav-item dropdown d-none d-lg-flex">
            <div class="nav-link">
              <span class="dropdown-toggle btn btn-outline-dark" id="languageDropdown" data-toggle="dropdown">English</span>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                <a class="dropdown-item font-weight-medium" href="#">
                  French
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item font-weight-medium" href="#">
                  Espanol
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item font-weight-medium" href="#">
                  Latin
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item font-weight-medium" href="#">
                  Arabic
                </a>
              </div>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="fas fa-bell mx-0"></i>
              <span class="count">16</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 16 new notifications
                </p>
                <span class="badge badge-pill badge-warning float-right">View all</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-danger">
                    <i class="fas fa-exclamation-circle mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Application Error</h6>
                  <p class="font-weight-light small-text">
                    Just now
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="fas fa-wrench mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">Settings</h6>
                  <p class="font-weight-light small-text">
                    Private message
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="far fa-envelope mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-medium">New user registration</h6>
                  <p class="font-weight-light small-text">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-envelope mx-0"></i>
              <span class="count">25</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <div class="dropdown-item">
                <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                </p>
                <span class="badge badge-info badge-pill float-right">View all</span>
              </div>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                   <img src="public/assets/images/faces/face.jpeg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium">David Grey
                    <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    The meeting is cancelled
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="public/assets/images/faces/face.jpeg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium">Tim Cook
                    <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    New product launch
                  </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                    <img src="public/assets/images/faces/face.jpeg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content flex-grow">
                  <h6 class="preview-subject ellipsis font-weight-medium"> Johnson
                    <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                  </h6>
                  <p class="font-weight-light small-text">
                    Upcoming board meeting
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="public/admin_assets/images/faces/face.jpeg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="fas fa-cog text-primary"></i>
                Settings
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('auth.logout') }}">
                <i class="fas fa-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-block">
            <a class="nav-link" href="#">
              <i class="fas fa-ellipsis-h"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="fas fa-bars"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="fas fa-fill-drip"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close fa fa-times"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border mr-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles primary"></div>
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      <div id="right-sidebar" class="settings-panel">
        <i class="settings-close fa fa-times"></i>
        <ul class="nav nav-tabs" id="setting-panel" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab" aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab" aria-controls="chats-section">CHATS</a>
          </li>
        </ul>
        <div class="tab-content" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <button type="submit" class="add btn btn-primary todo-list-add-btn" id="add-task-todo">Add</button>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Team review meeting at 3.00 PM
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Prepare for presentation
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Resolve all the low priority tickets due today
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Schedule meeting for next week
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
                <li class="completed">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Project review
                    </label>
                  </div>
                  <i class="remove fa fa-times-circle"></i>
                </li>
              </ul>
            </div>
            <div class="events py-4 border-bottom px-3">
              <div class="wrapper d-flex mb-2">
                <i class="fa fa-times-circle text-primary mr-2"></i>
                <span>Feb 11 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Creating component page</p>
              <p class="text-gray mb-0">build a js based app</p>
            </div>
            <div class="events pt-4 px-3">
              <div class="wrapper d-flex mb-2">
                <i class="fa fa-times-circle text-primary mr-2"></i>
                <span>Feb 7 2018</span>
              </div>
              <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
              <p class="text-gray mb-0 ">Call Sarah Graves</p>
            </div>
          </div>
          <!-- To do section tab ends -->
          <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
            <div class="d-flex align-items-center justify-content-between border-bottom">
              <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
              <small class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See All</small>
            </div>
            <ul class="chat-list">
              <li class="list active">
                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Thomas Douglas</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">19 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <div class="wrapper d-flex">
                    <p>Catherine</p>
                  </div>
                  <p>Away</p>
                </div>
                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                <small class="text-muted my-auto">23 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Daniel Russell</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">14 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span class="offline"></span></div>
                <div class="info">
                  <p>James Richardson</p>
                  <p>Away</p>
                </div>
                <small class="text-muted my-auto">2 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Madeline Kennedy</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">5 min</small>
              </li>
              <li class="list">
                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span class="online"></span></div>
                <div class="info">
                  <p>Sarah Graves</p>
                  <p>Available</p>
                </div>
                <small class="text-muted my-auto">47 min</small>
              </li>
            </ul>
          </div>
          <!-- chat tab ends -->
        </div>
      </div>
      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image">
                <img src="public/admin_assets/images/faces/face.jpeg" alt="images"/>
              </div>
              <div class="profile-name">
                <p class="name">
                  {{$LoggedUserInfo['name']}}
                </p>
                <p class="designation">
                  {{$LoggedUserInfo['email']}}
                </p>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.Dashboard') }}">
              <i class="fa fa-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
        <!--   <li class="nav-item">
            <a class="nav-link" href="pages/widgets.html">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Widgets</span>
            </a>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#page-layouts" aria-expanded="false" aria-controls="page-layouts">
              <i class="fab fa-trello menu-icon"></i>
              <span class="menu-title">Products</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="page-layouts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item d-none d-lg-block"> <a class="nav-link"href="{{ route('admin.catalog') }}">Catalog</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Brands</a></li>
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="#">Attributes</a></li>
                <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="#">Attribute Sets</a></li>
                 <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="#">Options</a></li>
                  <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="#">Tags</a></li>
                   <li class="nav-item d-none d-lg-block"> <a class="nav-link" href="#">Reviews</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item d-none d-lg-block">
            <a class="nav-link" data-toggle="collapse" href="#sidebar-layouts" aria-expanded="false" aria-controls="sidebar-layouts">
              <i class="fas fa-columns menu-icon"></i>
              <span class="menu-title">Sales</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="sidebar-layouts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="#">Orders</a></li>
                <li class="nav-item"> <a class="nav-link" href="#">Transactions</a></li>
             
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Flash Sales</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.coupons') }}">
              <i class="fa fa-puzzle-piece menu-icon"></i>
              <span class="menu-title">Coupons</span>
            </a>
          </li>
      
        <!--   <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="fas fa-chart-pie menu-icon"></i>
              <span class="menu-title">Charts</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="charts">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/morris.html">Morris</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/flot-chart.html">Flot</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/google-charts.html">Google charts</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/sparkline.html">Sparkline js</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/c3.html">C3 charts</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/chartist.html">Chartists</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/charts/justGage.html">JustGage</a></li>
              </ul>
              </div>
          </li> -->
         
        <!--   <li class="nav-item">
            <a class="nav-link" href="public/admin_assets/pages/ui-features/notifications.html">
              <i class="fas fa-bell menu-icon"></i>
              <span class="menu-title">Notifications</span>
            </a>
          </li> -->
         
       <!--    <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#maps" aria-expanded="false" aria-controls="maps">
              <i class="fas fa-map-marker-alt menu-icon"></i>
              <span class="menu-title">Maps</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="maps">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="public/admin_assets/pages/maps/mapeal.html">Mapeal</a></li>
                <li class="nav-item"> <a class="nav-link" href="public/admin_assets/pages/maps/vector-map.html">Vector Map</a></li>
                <li class="nav-item"> <a class="nav-link" href="public/admin_assets/pages/maps/google-maps.html">Google Map</a></li>
              </ul>
            </div>
          </li> -->
        <!--   <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="fas fa-window-restore menu-icon"></i>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="public/admin_assets/pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="public/admin_assets/pages/samples/login-2.html"> Login 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="public/admin_assets/pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="public/admin_assets/pages/samples/register-2.html"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="public/admin_assets/pages/samples/lock-screen.html"> Lockscreen </a></li>
              </ul>
            </div>
          </li> -->
       <!--    <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#error" aria-expanded="false" aria-controls="error">
              <i class="fas fa-exclamation-circle menu-icon"></i>
              <span class="menu-title">Error pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="error">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="public/admin_assets/pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="public/admin_assets/pages/samples/error-500.html"> 500 </a></li>
              </ul>
            </div>
          </li> -->
     <!--      <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
              <i class="fas fa-file menu-icon"></i>
              <span class="menu-title">General Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="general-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="public/admin_assets/pages/samples/blank-page.html"> Blank Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="public/admin_assets/pages/samples/profile.html"> Profile </a></li>
                <li class="nav-item"> <a class="nav-link" href="public/admin_assets/pages/samples/faq.html"> FAQ </a></li>
                <li class="nav-item"> <a class="nav-link" href="public/admin_assets/pages/samples/faq-2.html"> FAQ 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="public/admin_assets/pages/samples/news-grid.html"> News grid </a></li>
                <li class="nav-item"> <a class="nav-link" href="public/admin_assets/pages/samples/timeline.html"> Timeline </a></li>
                <li class="nav-item"> <a class="nav-link" href="public/admin_assets/pages/samples/search-results.html"> Search Results </a></li>
                <li class="nav-item"> <a class="nav-link" href="public/admin_assets/pages/samples/portfolio.html"> Portfolio </a></li>
              </ul>
            </div>
          </li> -->
      <!--     <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#apps" aria-expanded="false" aria-controls="apps">
              <i class="fas fa-briefcase menu-icon"></i>
              <span class="menu-title">Apps</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="apps">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="public/admin_assets/pages/apps/email.html"> Email </a></li>
                <li class="nav-item"> <a class="nav-link" href="public/admin_assets/pages/apps/calendar.html"> Calendar </a></li>
                <li class="nav-item"> <a class="nav-link" href="public/admin_assets/pages/apps/todo.html"> Todo </a></li>
                <li class="nav-item"> <a class="nav-link" href="public/admin_assets/pages/apps/gallery.html"> Gallery </a></li>
              </ul>`
            </div>
          </li> -->
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#e-commerce" aria-expanded="false" aria-controls="e-commerce">
              <i class="fas fa-shopping-cart menu-icon"></i>
              <span class="menu-title">E-commerce</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="e-commerce">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.invoice') }}"> Invoice </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.pricing_table') }}"> Pricing Table </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.orders') }}"> Orders </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="far fa-file-alt menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
                Create Coupon
            </h3>
          </div>
       <div class="container">
          <p style="text-align: right;"><a href="{{ route('admin.Dashboard') }}">Dashboard</a><strong> > </strong><a href="{{ route('admin.coupons') }}"> Coupons</a> <strong> > </strong><a href="{{ route('admin.couponsAdding') }}">Create Coupon<a href=""></p>
 
  <div class="row">
  <div class="col-sm-4">
  <div class="card">
    <div class="card-header">
      <p>Coupon Information</p>
    </div>
    <div class="card-body" style="background-color:lightgray;">
<!-- Nav pills -->
  <ul class="nav flex-column" role="tablist" id="couponinfo">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="pill" href="#home" style="color:black;font-size: 20px;"><strong>General</strong></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#menu1" style="color:black;font-size: 20px;"><strong>Usage Restrictions</strong></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#menu2" style="color:black;font-size: 20px;"><strong>Usage Limits</strong></a>
    </li>
  </ul>
    </div>
  </div>
  </div>
  <div class="col-sm-8">
   <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <h3>General</h3><hr/>
      <br/>
        @if(Session::get('success'))
          <div class="alert alert-success">
            {{Session('success')}}
          </div>

          @endif
      <form action="couponsdata" method="POST">
        @csrf
           <!-- 1st row start-->
          <div class="form-group">
           <div class="row">
             <div class="col-md-3">
                <strong><label>Name <span style="color: red;">*</span></label></strong>
             </div>
             <div class="col-md-6">
                <input type="text" class="form-control" id="name" name="name">
             </div>  
           </div>
          </div>
            <!-- 1st row end-->
           <!-- 2nd row start-->
          <div class="form-group">
           <div class="row">
             <div class="col-md-3">
                <strong><label>Code <span style="color: red;">*</span></label></strong>
             </div>
             <div class="col-md-6">
                <input type="text" class="form-control" id="code" name="code">
             </div>  
           </div>
          </div>
            <!-- 2nd row end-->
            <!-- 3rd row start-->
          <div class="form-group">
           <div class="row">
             <div class="col-md-3">
                <strong><label>Discount Type</label></strong>
             </div>
             <div class="col-md-6">
                <select name="DiscountType" class="custom-select">
                  <option selected>Fixed</option>
                  <option value="volvo">Percent</option>
                 
                </select>
             </div>  
           </div>
          </div>
            <!-- 3rd row end-->

            <!-- 4th row start-->
          <div class="form-group">
           <div class="row">
             <div class="col-md-3">
                <strong><label>Value</label></strong>
             </div>
             <div class="col-md-6">
                <input type="number" class="form-control" id="number" name="number">
             </div>  
           </div>
          </div>
            <!-- 4th row end-->

            <!-- 5th row start-->
          <div class="form-group">
           <div class="row">
             <div class="col-md-3">
                <strong><label>Free Shipping</label></strong>
             </div>
             <div class="col-md-6">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
                  <label class="custom-control-label" for="customCheck">Allow free shipping</label>
               </div>
             </div>  
           </div>
          </div>
            <!-- 5th row end-->
            <!-- 6th row start-->
          <div class="form-group">
           <div class="row">
             <div class="col-md-3">
                <strong><label>Start Date</label></strong>
             </div>
             <div class="col-md-6">
                <input type="date" class="form-control" id="start_date" name="start_date">
             </div>  
           </div>
          </div>
            <!-- 6th row end-->   
           <!-- 7th row start-->
          <div class="form-group">
           <div class="row">
             <div class="col-md-3">
                <strong><label>End Date</label></strong>
             </div>
             <div class="col-md-6">
                <input type="date" class="form-control" id="end_date" name="end_date">
             </div>  
           </div>
          </div>
            <!-- 7th row end-->

          <!-- 8th row start-->
          <div class="form-group">
           <div class="row">
             <div class="col-md-3">
                <strong><label>Status</label></strong>
             </div>
             <div class="col-md-6">
              <div class="">
                  <input type="checkbox"  id="Status" name="Status">
                  <label  for="customCheck">Enable the coupon</label>
               </div>
             </div>  
           </div>
          </div>
            <!-- 8th row end-->
          <button type="submit" class="btn btn-primary">Save</button>
        
    </form>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>
  </div>
  </div>
</div>

   

 
    
        
          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 . All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="far fa-heart text-danger"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="public/admin_assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="public/admin_assets/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="public/admin_assets/js/off-canvas.js"></script>
  <script src="public/admin_assets/js/hoverable-collapse.js"></script>
  <script src="public/admin_assets/js/misc.js"></script>
  <script src="public/admin_assets/js/settings.js"></script>
  <script src="public/admin_assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="public/admin_assets/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>


</html>
