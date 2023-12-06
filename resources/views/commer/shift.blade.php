@extends('layout.app')


@section('contant')
    <div class="clearfix"></div>
    <div class="content-wrapper">
        <div class="shift ">
            <div class="containerr">
                <header>دورية جديدة</header>
                <div class="progress-bar-shift">
                    <div class="step">
                        <p>نوع السيارة</p>
                        <div class="bullet"><span>1</span></div>
                        <div class="check fas fa-check"></div>
                    </div>
                    <div class="step">
                        <p>عداد السيارة</p>
                        <div class="bullet"><span>2</span></div>
                        <div class="check fas fa-check"></div>
                    </div>
                </div>
                <div class="form-outer">
                    <form action="#">
                        <div class="page slide-page">
                            <div class="title text-center">اختر نوع السيارة</div>
                            <div class="field">
                                <div class="label">نوع السيارة</div>
                                <select name="typeCar" id="typeCar">
                                    <option value="" selected>اختر</option>
                                    <option value="BMW">BMW</option>
                                    <option value="Mercedes">Mercedes</option>
                                    <option value="Lamborghini">Lamborghini</option>
                                </select>
                            </div>
                            <div class="field btns">
                                <button class="next">التالي</button>
                            </div>
                        </div>
                        <div class="page">
                            <div class="title">بداية قراءة عداد السيارة</div>
                            <div class="field">
                                <div class="label">كتابة بداية عداد السيارة</div>
                                <input type="number" name="odometerStart">
                            </div>
                            <div class="field">
                                <div class="label">صورة لبداية عداد السيارة</div>
                                <input type="file" name="odometerImage">
                            </div>
                            <div class="field btns">
                                <button class="prev">السابق</button>
                                <button type="submit" class="submit ">بدء الدورية</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!--End Row-->

    <!--End Dashboard Content-->

    <!--start overlay-->
    <div class="overlay toggle-menu"></div>
    <!--end overlay-->
@endsection
