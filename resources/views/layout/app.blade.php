<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Commuter</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- loader-->
    <link href="{{ asset('css/pace.min.css') }}" rel="stylesheet" />

    <script src={{ asset('js/pace.min.js') }}></script>
    <!--favicon-->
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <!-- Bootstrap core CSS-->
    <link href={{ asset('css/bootstrap.min.css') }} rel="stylesheet" />
    <!-- animate CSS-->
    <!-- Icons CSS-->
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href={{ asset('css/sidebar-menu.css') }} rel="stylesheet" />
    <!-- Custom Style-->
    <link href={{ asset('css/app-style.css') }} rel="stylesheet" />
    <!-- light-box -->
    <link rel="stylesheet" href={{ asset('css/lightbox.css') }}>

</head>


<body class="bg-theme bg-theme2">

     <!-- Start wrapper-->
     <div id="wrapper">

     <!--Start sidebar-wrapper-->
     <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
        <div class="brand-logo">
            <a href="index.html">
                <img src="assets/images/car-logo.png" class="logo-icon" alt="logo icon">
                <h5 class="logo-text">Commuter</h5>
            </a>
        </div>
        <ul class="sidebar-menu do-nicescrol">
            <li class="sidebar-header">MAIN NAVIGATION</li>
            <li>
                <a href="/">
                    <i class="zmdi zmdi-view-dashboard"></i> <span>الصفحة الرئيسية</span>
                </a>
            </li>

            <li>
                <a href="{{route('commer.shift')}}">
                    <i class="zmdi zmdi-car"></i> <span>وردية جديدة</span>
                </a>
            </li>

            <li>
                <a href="{{route('commer.index')}}">
                    <i class="zmdi zmdi-pin"></i> <span>الخريطة</span>
                </a>
            </li>

            <li>
                <a href="{{route('commer.index')}}">
                    <i class="zmdi zmdi-rotate-right"></i><span>الدورات</span>
                </a>
            </li>

            <li>
                <a href="{{route('commer.index')}}">
                    <i class="zmdi zmdi-folder-person"></i> <span>التقارير</span>
                </a>
            </li>

            <li>
                <a href="{{route('commer.index')}}">
                    <i class="zmdi zmdi-rotate-right"></i><span>ملاحظات</span>
                </a>
            </li>

            <li>
                <a href="{{route('commer.shift')}}">
                    <i class="zmdi zmdi-rotate-right"></i><span>الاسئلة الشائعة</span>
                </a>
            </li>

            <!-- <li>
    <a href="forms.html">
      <i class="zmdi zmdi-format-list-bulleted"></i> <span>Forms</span>
    </a>
  </li>


  <li>
    <a href="profile.html">
      <i class="zmdi zmdi-face"></i> <span>Profile</span>
    </a>
  </li>

  <li>
    <a href="login.html" target="_blank">
      <i class="zmdi zmdi-lock"></i> <span>Login</span>
    </a>
  </li>

   <li>
    <a href="register.html" target="_blank">
      <i class="zmdi zmdi-account-circle"></i> <span>Registration</span>
    </a>
  </li> -->

            <li class="sidebar-header">LABELS</li>
            <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i> <span>تعليمات</span></a></li>

        </ul>

    </div>
    <!--End sidebar-wrapper-->



        <!--Start topbar header-->
        <header class="topbar-nav">
            <nav class="navbar navbar-expand fixed-top">
                <ul class="navbar-nav mr-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link toggle-menu" href="javascript:void();">
                            <i class="icon-menu menu-icon"></i>
                        </a>
                    </li>

                </ul>

                <ul class="navbar-nav align-items-center right-nav-link">
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown"
                            href="javascript:void();">
                            <i class="fa fa-envelope-open-o"></i></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown"
                            href="#">
                            <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle"
                                    alt="user avatar"></span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-right">
                            <li class="dropdown-item user-details">
                                <a href="javaScript:void();">
                                    <div class="media">
                                        <div class="avatar"><img class="align-self-start mr-3"
                                                src="https://via.placeholder.com/110x110" alt="user avatar"></div>
                                        <div class="media-body">
                                            <h6 class="mt-2 user-title">Nader Osama</h6>
                                            <p class="user-subtitle">naderosama6665@gmail.com</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><a href="profile.html"><i class="icon-wallet mr-2"></i> حسابي
                            </li></a>
                            <li class="dropdown-divider"></li>
                            <li class="dropdown-item"><i class="icon-power mr-2"></i> تسجيل الخروج</li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>
        <!--End topbar header-->
        <div class="clearfix"></div>
     </div>




    <main class="py-4">
        @yield("contant")
    </main>



    <!-- Bootstrap core JavaScript-->
    <script src={{ asset('js/jquery-3.6.3.min.js')}}></script>
    <script src={{ asset('js/popper.min.js')}}></script>
    <script src={{ asset('js/bootstrap.min.js')}}></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>


    <!-- sidebar-menu js -->
    <script src={{ asset('js/sidebar-menu.js') }}></script>
    <!-- loader scripts -->
    <!-- Custom scripts -->
    <script src={{ asset('js/app-script.js') }}></script>
    <!-- Chart js -->

    <!-- Index js -->
    <script src={{ asset('js/index.js') }}></script>

    <!-- light-box js  -->
    <script src={{ asset('js/lightbox-plus-jquery.js') }}></script>


</body>

</html>
