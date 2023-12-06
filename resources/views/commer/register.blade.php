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


<body class="bg-theme ">

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner" ><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

	<div class="card card-authentication1 mx-auto my-4">
		<div class="card-body">
		 <div class="card-content p-2">
		 	<div class="text-center">
		 		<img src="assets/images/car-logo.png" class="img-fluid w-50" alt="logo icon">
		 	</div>
		  <div class="card-title text-uppercase text-center py-3">تسجيل مستخدم جديد</div>
		    <form>
			  <div class="form-group">
          <label for="firstName" class="sr-only">الاسم الاول</label>
          <div class="position-relative has-icon-right">
            <input type="text" id="firstName" class="form-control input-shadow" placeholder="ادخل الاسم الاول">
            <div class="form-control-position">
              <i class="icon-user"></i>
            </div>
          </div>
			  </div>
			  <div class="form-group">
          <label for="lastName" class="sr-only">الاسم الثاني</label>
          <div class="position-relative has-icon-right">
            <input type="text" id="lastName" class="form-control input-shadow" placeholder="ادخل الاسم الثاني">
            <div class="form-control-position">
              <i class="icon-user"></i>
            </div>
          </div>
			  </div>

			  <div class="form-group">
          <label for="exampleInputUsername" class="sr-only">اسم المستخدم</label>
          <div class="position-relative has-icon-right">
            <input type="text" id="exampleInputUsername" class="form-control input-shadow" placeholder="ادخل اسم المستخدم">
            <div class="form-control-position">
              <i class="icon-user"></i>
            </div>
          </div>
			  </div>

			  <div class="form-group">
          <label for="phoneNumber" class="sr-only">رقم المحمول</label>
          <div class="position-relative has-icon-right">
            <input type="number" id="phoneNumber" class="form-control input-shadow" placeholder="رقم المحمول الخاص بك">
            <div class="form-control-position">
              <i class="icon-envelope-open"></i>
            </div>
          </div>
			  </div>

			  <div class="form-group">
          <label for="exampleInputPassword" class="sr-only">كلمة المرور</label>
          <div class="position-relative has-icon-right">
            <input type="password" id="exampleInputPassword" class="form-control input-shadow" placeholder="اختر كلمة المرور">
            <div class="form-control-position">
              <i class="icon-lock"></i>
            </div>
          </div>
			  </div>

			  <div class="form-group">
          <label for="exampleInputPassword" class="sr-only">تأكيد كلمة المرور</label>
          <div class="position-relative has-icon-right">
            <input type="password" id="exampleInputPassword" class="form-control input-shadow" placeholder="تأكيد كلمة المرور">
            <div class="form-control-position">
              <i class="icon-lock"></i>
            </div>
          </div>
			  </div>
							 <button type="button" class="btn btn-light btn-block waves-effect waves-light">سجل هنا</button>

			 </form>
		   </div>
		  </div>
		  <div class="card-footer text-center py-3">
		    <p class="text-warning mb-0">لديك حساب بالفعل ؟ <a href="login.html"> سجل هنا</a></p>
		  </div>
	</div>



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
