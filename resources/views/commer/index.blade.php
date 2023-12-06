@extends("layout.app")


@section("contant")

    <!-- Start wrapper-->
    <div id="wrapper">




        <div class="content-wrapper">
            <div class="container">
                <!-- Start Dashboard Content -->
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-12 col-xl-12">
                        <div class="card text-right">
                            <div class="card-header bg-dark-light1 mb-1"> الرسائل <i
                                    class="fa-solid fa-message text-gold"></i></div>
                            <div class="card-body p-0">
                                <div class="message-container ">
                                    <a href="">
                                        <div class="message" style="background-color: rgba(255, 255, 255, 0.4);">
                                            <p class="mb-1"><strong>اسم المرسل:</strong> نادر اسامه </p>
                                            <p class="mb-1"><strong>تاريخ الارسال:</strong> 2023-11-19</p>
                                        </div>
                                    </a>
                                    <a href="">
                                        <div class="message">
                                            <p class="mb-1"><strong>اسم المرسل:</strong> نادر اسامه </p>
                                            <p class="mb-1"><strong>تاريخ الارسال:</strong> 2023-11-19</p>
                                        </div>
                                    </a><a href="">
                                        <div class="message">
                                            <p class="mb-1"><strong>اسم المرسل:</strong> نادر اسامه </p>
                                            <p class="mb-1"><strong>تاريخ الارسال:</strong> 2023-11-19</p>
                                        </div>
                                    </a><a href="">
                                        <div class="message">
                                            <p class="mb-1"><strong>اسم المرسل:</strong> نادر اسامه </p>
                                            <p class="mb-1"><strong>تاريخ الارسال:</strong> 2023-11-19</p>
                                        </div>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12 col-xl-12">
                        <div class="card-header bg-dark-light1 text-right">التعليمات <i
                                class="fa-solid fa-book-open text-gold"></i></div>
                        <div class="info-driver">
                            <a href="assets/images/car-logo.png" data-lightbox="models" data-title="cap 1">
                                <div class="card" style="background-image: url(./assets/images/bg-themes/2.png);">
                                    <div class="icon">
                                        <i class="fa-solid fa-car text-info"></i>
                                    </div>
                                    <div class="text">السيارة</div>
                                </div>
                            </a>

                            <div class="card" style="background-image: url(./assets/images/bg-themes/2.png);">
                                <div class="icon">
                                    <i class="fa-solid fa-users text-primary"></i>
                                </div>
                                <div class="text">الركاب</div>
                            </div>

                            <div class="card" style="background-image: url(./assets/images/bg-themes/2.png);">
                                <div class="icon">
                                    <i class="fa-solid fa-user-slash text-success"></i>
                                </div>
                                <div class="text">حزام الامان</div>
                            </div>

                            <div class="card" style="background-image: url(./assets/images/bg-themes/2.png);">
                                <div class="icon">
                                    <i class="fa-solid fa-gauge-high text-danger"></i>
                                </div>
                                <div class="text">السرعات</div>
                            </div>
                            <div class="card" style="background-image: url(./assets/images/bg-themes/2.png);">
                                <div class="icon">
                                    <i class="fa-solid fa-route"></i>
                                </div>
                                <div class="text">الدورات</div>
                            </div>

                            <div class="card" style="background-image: url(./assets/images/bg-themes/2.png);">
                                <div class="icon">
                                    <i class="fa-solid fa-book-open text-warning"></i>
                                </div>
                                <div class="text">التعليمات</div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-light btn-block new-shift">وردية جديدة</button>
                </div>
                <!-- End Row -->

            </div>
        </div><!--End Row-->

        <!--End Dashboard Content-->

        <!--start overlay-->
        <div class="overlay toggle-menu"></div>
        <!--end overlay-->

        <!-- End container-fluid-->


    </div><!--End wrapper-->

    @endsection
