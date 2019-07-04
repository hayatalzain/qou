<!DOCTYPE html>
<html lang="zxx">

<style>
    .header-toparea {
        background: #8bc34a !important;
    }
    .tm-button, a.tm-button, button.tm-button{
        background: #8bc34a !important;
    }
    .tm-slider-arrow-prev, .tm-slider-arrow-next{
        background: #8bc34a !important;
        border: 1px solid #8bc34a !important;
    }
    #scrollUp{
        background: #8bc34a !important;
        border: 1px solid #8bc34a !important;
    }
    body h1, h2, h3, h4, h5, h6,.tm-navigation ul li a{
        font-family: 'Markazi Text', serif !important;
    }
</style>
<!-- Mirrored from thememarch.com/demo/html/sasna/sasna-rtl/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Apr 2019 21:37:38 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sasna - Multipurpose Business HTML Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" href="{{asset('home/assets/images/favicon.png')}}">
    <link rel="shortcut icon" href="{{asset('home/assets/images/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Markazi+Text" rel="stylesheet">
    <!-- Google Font (font-family: 'Open Sans', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet">
    <!-- Google Font (font-family: 'Roboto', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('home/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('home/assets/css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('home/assets/css/style.css')}}">

    <!-- Please Remove this line after choosing color file -->
    <link rel="stylesheet" href="{{asset('home/assets/css/tm-customizer.css')}}">
    <link rel="stylesheet" href="#" data-color-css>

    <link rel="stylesheet" href="{{asset('home/assets/css/custom.css')}}">
    @yield('css')
</head>
<body>

<div class="tm-preloader">
    <span class="tm-preloader-box"></span>
    <button class="tm-button tm-button-sm tm-button-white">الغاء <b></b></button>
</div>

<div id="wrapper" class="wrapper">

    <!-- Header Area -->
    <div class="header">
        <!-- Header Top Area -->
        <div class="header-toparea">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-sm-8 col-12">
                        <div class="header-topinfo">
                            <ul>
                                <li><a href="tel://+1-800-915-6270">
                                        08/271658 - 08/2873057<i class="flaticon-phone-call"></i></a></li>
                                <li><a href="mailto://contact@example.com">
                                        gaza@qou.edu<i class="flaticon-envelope"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5 col-sm-4 col-12">
                        <div class="header-topsocial">
                            <ul>
                                <li><a href="http://cec.qou.edu/"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="http://cec.qou.edu/"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="http://cec.qou.edu/"><i class="fab fa-youtube"></i></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-bottomarea">
            <div class="container">
                <div class="header-bottominner">
                    <div class="header-logo">
                        <a href="http://www.qou.edu">
                            <img src="http://cec.qou.edu/templates/uploads/2016/09/3D_Logo.png" alt="logo" style="width: 75%;">
                        </a>
                    </div>
                    <nav class="tm-navigation">
                        <ul>
                            <li class="tm-navigation-dropdown"><a href="{{route('home.page.pagHome')}}">الصفحة الرئيسية</a>
                            </li>
                            <li><a href="http://www.qou.edu">صفحة الجامعة</a></li>
                            <li class="tm-navigation-dropdown"><a href="{{route('home.page.news')}}"> الدورات</a>
                            <li class="tm-navigation-dropdown"><a href="{{route('home.page.read.more')}}">اخبار عامة </a>
                            </li>
                            <li class="tm-navigation-dropdown"><a href="{{route('home.page.about')}}">من نحن</a>
                            </li>
                            <li class="tm-navigation-dropdown"><a href="#conect">اتصل بنا </a>
                            </li>
                        </ul>
                    </nav>

                </div>
                <div class="header-mobilemenu clearfix">
                    <div class="tm-mobilenav"></div>
                </div>
            </div>
        </div>
    </div>

    @yield('content')

    <footer class="footer" data-bgimage="assets/images/bg/bg-image-1.jpg" data-black-overlay="9">

        <!-- Footer Widgets -->

        <!--// Footer Widgets -->

        <!-- Footer -->
        <div class="footer-bottomarea">
            <div class="container">
                <p class="footer-copyright">© 2019. التعليم المستمر  <a href="#"></a></p>
            </div>
        </div>
        <!--// Footer -->

    </footer>
</div>

<script src="{{asset('home/assets/js/modernizr-3.6.0.min.js')}}"></script>
<script src="{{asset('home/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('home/assets/js/popper.min.js')}}"></script>
<script src="{{asset('home/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('home/assets/js/plugins.js')}}"></script>
<script src="{{asset('home/assets/js/main.js')}}"></script>
@yield('script')

{{--<script>--}}
    {{--$('body').on('submit',".form-suggested",function (e) {--}}
        {{--clear1();--}}
        {{--e.preventDefault();--}}
        {{--var email_error='';--}}
        {{--$action = $(this).attr("action");--}}
        {{--$data = $(this).serialize();--}}
        {{--var formMessages = $('#form-messages');--}}
        {{--var formMessageSuccess= $('#formMessageSuccess');--}}
        {{--var formData = new FormData($(this)[0]);--}}
        {{--$.ajaxSetup({--}}
            {{--headers: {--}}
                {{--'X-CSRF-TOKEN':'{{csrf_token()}}'--}}
            {{--}--}}
        {{--});--}}
        {{--$.ajax({--}}
            {{--url: $action,--}}
            {{--type: "POST",--}}
            {{--data: formData,--}}
            {{--async: true,--}}
            {{--processData: false,--}}
            {{--contentType: false,--}}
            {{--dataType: "json",--}}
            {{--cache    : false,--}}
            {{--success: function (response) {--}}
                {{--if (response.status == true) {--}}
                    {{--formMessages.removeClass('alert-danger');--}}
                    {{--formMessageSuccess.addClass('alert-success').text('تمت عملية التسجيل بنجاح');--}}
                    {{--$(".form-suggested")[0].reset();--}}
                    {{--setTimeout(function(){--}}
                        {{--$("#formMessageSuccess").html('').removeClass('alert-success');--}}

                    {{--}, 3000);--}}

                {{--} else {--}}

                {{--}--}}
            {{--},error: function(data){--}}
                {{--var error = data.responseJSON;--}}
                {{--var errors= error.errors;--}}
                {{--formMessageSuccess.removeClass('alert-success').empty();--}}
                {{--formMessages.addClass('alert-danger');--}}
                {{--if(typeof(errors['title']) != "undefined"){--}}
                    {{--$("#title_msg").html(errors['title'][0]);--}}
                {{--}--}}
                {{--if(typeof(errors['email']) != "undefined"){--}}
                    {{--$("#email_msg").html(errors['email'][0]);--}}
                {{--}--}}
                {{--if(typeof(errors['details']) != "undefined"){--}}
                    {{--$("#details_msg").html(errors['details'][0]);--}}
                {{--}--}}
                {{--if(typeof(errors['name']) != "undefined"){--}}
                    {{--$("#name_msg").html(errors['name'][0]);--}}
                {{--}--}}

            {{--}--}}

        {{--});--}}
        {{--function clear1() {--}}
            {{--$("#title_msg").html('');--}}
            {{--$("#email_msg").html('');--}}
            {{--$("#details_msg").html('');--}}
            {{--$("#name_msg").html('');--}}
        {{--}--}}

    {{--});--}}

{{--</script>--}}
</body>
</html>
