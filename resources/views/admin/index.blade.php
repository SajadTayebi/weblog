<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>آموزش لاراول - بخش مدیریت</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{asset('back/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{asset('back/assets/vendors/iconfonts/ionicons/css/ionicons.css')}}">
  <link rel="stylesheet" href="{{asset('back/assets/vendors/iconfonts/typicons/src/font/typicons.css')}}">
  <link rel="stylesheet" href="{{asset('back/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
  <link rel="stylesheet" href="{{asset('back/assets/vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{asset('back/assets/vendors/css/vendor.bundle.addons.css')}}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{asset('back/assets/css/shared/style.css')}}">
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="{{asset('back/assets/css/demo_1/style.css')}}">
  <!-- End Layout styles -->
  <link rel="shortcut icon" href="{{asset('back/assets/images/favicon.png')}}" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html">
          <img src="{{asset('back/assets/images/logo.svg')}}" alt="logo" /> </a>
        <a class="navbar-brand brand-logo-mini" href="index.html">
          <img src="{{asset('back/assets/images/logo-mini.svg')}}" alt="logo" /> </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav">
          <li class="nav-item font-weight-semibold d-none d-lg-block">پشتیبانی : +050 2992 709</li>
          <li class="nav-item dropdown language-dropdown">
            <a class="nav-link dropdown-toggle px-2 d-flex align-items-center" id="LanguageDropdown" href="#"
              data-toggle="dropdown" aria-expanded="false">
              <div class="d-inline-flex mr-0 mr-md-3">
                <div class="flag-icon-holder">
                  <i class="flag-icon flag-icon-us"></i>
                </div>
              </div>
              <span class="profile-text font-weight-medium d-none d-md-block">English</span>
            </a>
            <div class="dropdown-menu dropdown-menu-left navbar-dropdown py-2" aria-labelledby="LanguageDropdown">
              <a class="dropdown-item">
                <div class="flag-icon-holder">
                  <i class="flag-icon flag-icon-us"></i>
                </div>English
              </a>
              <a class="dropdown-item">
                <div class="flag-icon-holder">
                  <i class="flag-icon flag-icon-fr"></i>
                </div>French
              </a>
              <a class="dropdown-item">
                <div class="flag-icon-holder">
                  <i class="flag-icon flag-icon-ae"></i>
                </div>Arabic
              </a>
              <a class="dropdown-item">
                <div class="flag-icon-holder">
                  <i class="flag-icon flag-icon-ru"></i>
                </div>Russian
              </a>
            </div>
          </li>
        </ul>
        <form class="ml-auto search-form d-none d-md-block" action="#">
          <div class="form-group">
            <input type="search" class="form-control" placeholder="جستجو">
          </div>
        </form>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown"
              aria-expanded="false">
              <i class="mdi mdi-bell-outline"></i>
              <span class="count">7</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
              aria-labelledby="messageDropdown">
              <a class="dropdown-item py-3">
                <p class="mb-0 font-weight-medium float-left">اعلان ها 7 عدد </p>
                <span class="badge badge-pill badge-primary float-right">مشاهده</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="{{asset('back/assets/images/faces/face10.jpg')}}" alt="image" class="img-sm profile-pic"> </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">حمید حمیدی </p>
                  <p class="font-weight-light small-text"> ایمیل ثبت نام ارسال شد </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic"> </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">امیر امیری </p>
                  <p class="font-weight-light small-text"> ایمیل ثبت نام ارسال شد </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic"> </div>
                <div class="preview-item-content flex-grow py-2">
                  <p class="preview-subject ellipsis font-weight-medium text-dark">حامد حامدی </p>
                  <p class="font-weight-light small-text"> ایمیل ثبت نام ارسال شد </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-email-outline"></i>
              <span class="count bg-success">3</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0"
              aria-labelledby="notificationDropdown">
              <a class="dropdown-item py-3 border-bottom">
                <p class="mb-0 font-weight-medium float-left">4 پیام خوانده نشده دارید</p>
                <span class="badge badge-pill badge-primary float-right">مشاهده</span>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-alert m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal text-dark mb-1">پیام نمونه ی یک</h6>
                  <p class="font-weight-light small-text mb-0"> هم اکنون </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-settings m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal text-dark mb-1">یک پیام آزمایشی</h6>
                  <p class="font-weight-light small-text mb-0"> 2 روز پیش </p>
                </div>
              </a>
              <a class="dropdown-item preview-item py-3">
                <div class="preview-thumbnail">
                  <i class="mdi mdi-airballoon m-auto text-primary"></i>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal text-dark mb-1">ثبت نام کاربر جدید</h6>
                  <p class="font-weight-light small-text mb-0"> 2 روز پیش </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <img class="img-xs rounded-circle" src="assets/images/faces/face8.jpg" alt="Profile image"> </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="dropdown-header text-center">
                <img class="img-md rounded-circle" src="assets/images/faces/face8.jpg" alt="Profile image">
                <p class="mb-1 mt-3 font-weight-semibold">ابوالفضل طالبی</p>
                <p class="font-weight-light text-muted mb-0">allenmoreno@gmail.com</p>
              </div>
              <a class="dropdown-item">پروفایل من <span class="badge badge-pill badge-danger">1</span><i
                  class="dropdown-item-icon ti-dashboard"></i></a>
              <a class="dropdown-item">خروج<i class="dropdown-item-icon ti-power-off"></i></a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
          data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <a href="#" class="nav-link">
              <div class="profile-image">
                <img class="img-xs rounded-circle" src="{{asset('back/assets/images/faces/face8.jpg')}}" alt="profile image">
                <div class="dot-indicator bg-success"></div>
              </div>
              <div class="text-wrapper">
                <p class="profile-name">سجاد طیبی</p>
                <p class="designation">مدیریت سایت</p>
              </div>
            </a>
          </li>
          <li class="nav-item nav-category">منوی اصلی</li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin.panel')}}">
              <i class="menu-icon typcn typcn-document-text"></i>
              <span class="menu-title">کنترل پنل</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon typcn typcn-coffee"></i>
              <span class="menu-title">المان ها</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/buttons.html">دکمه ها</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/dropdowns.html">لیست ها</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="pages/ui-features/typography.html">تایپوگرافی</a>
                </li>
              </ul>
            </div>
          </li>
        </ul>
      </nav>
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="{{asset('back/assets/vendors/js/vendor.bundle.base.js')}}"></script>
  <script src="{{asset('back/assets/vendors/js/vendor.bundle.addons.js')}}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="{{asset('back/assets/js/shared/off-canvas.js')}}"></script>
  <script src="{{asset('back/assets/js/shared/misc.js')}}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{asset('back/assets/js/demo_1/dashboard.js')}}"></script>
  <!-- End custom js for this page-->
</body>

</html>
