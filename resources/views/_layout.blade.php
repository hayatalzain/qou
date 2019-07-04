<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <link rel="shortcut icon" href="{{asset('admin/assets/images/favicon.ico')}}">

    <title>Adminto - Responsive Admin Dashboard Template</title>

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/plugins/morris/morris.css')}}">
    <!-- App css -->
    <link href="{{asset('admin/assets/css/bootstrap-rtl.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/css/core.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/css/components.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/css/menu.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Markazi+Text" rel="stylesheet">
    @yield("css")


<style>
    .fade{
        opacity: 1 !important;
    }
    body{
        font-family: 'Markazi Text', serif !important;
    }
</style>
</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->


        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">

                <!-- Page title -->
                <ul class="nav navbar-nav navbar-left">
                    <li>
                        <button class="button-menu-mobile open-left">
                            <i class="zmdi zmdi-menu"></i>
                        </button>
                    </li>
                    <li>
                        <h4 class="page-title">Dashboard</h4>
                    </li>
                </ul>


            </div><!-- end container -->
        </div><!-- end navbar -->
    </div>
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">

            <!-- User -->
            <div class="user-box">
                <div class="user-img">
                    <img src="{{asset('admin/assets/images/users/avatar-1.jpg')}}" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
                    <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
                </div>

                <h5><a href="#"></a> </h5>

                    <ul class="list-inline ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            {{--@if (Route::has('register'))--}}
                                {{--<li class="nav-item">--}}
                                    {{--<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                                {{--</li>--}}
                            {{--@endif--}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>

                    <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                    </li>

            </div>
            <!-- End User -->

            <!--- Sidemenu -->
            <div id="sidebar-menu">
                <ul>
                    @if(Auth::user() && (Auth::user()->partition_id == 1))
                    <li>
                        <a class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> المدربين </span> </a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('coach.create')}}"> تسجيل المدربين </a></li>
                            <li><a href="{{route('coach.index')}}">ادارة المدربين</a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> الدورات </span> </a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('courses.create')}}"> تسجيل الدورات </a></li>
                            <li><a href="{{route('courses.index')}}">ادارة الدورات</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> الطلاب </span> </a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('student.create')}}"> تسجيل الطلاب </a></li>
                            <li><a href="{{route('student.index')}}">ادارة الطلاب </a></li>
                        </ul>
                    </li>

                        <li>
                            <a  class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> الدورات المقترحة </span> </a>
                            <ul class="list-unstyled">
                                <li><a href="{{route('suggested.courses.index')}}"> عرض الدورات المقترحة</a></li>

                            </ul>
                        </li>


                @endif

                        @if(Auth::user() && (Auth::user()->partition_id == 1 || Auth::user()->partition_id == 3))
                    <li>
                        <a  class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> الاخبار </span> </a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('advertisement.create')}}"> تسجيل الاخبار </a></li>
                            <li><a href="{{route('advertisement.index')}}">ادارة الاخبار </a></li>
                        </ul>
                    </li>
                    <li>
                        <a  class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> الدورات المعلنة </span> </a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('news.create')}}"> تسجيل الدورة المعلنة </a></li>
                            <li><a href="{{route('news.index')}}">ادارة الدورات المعلنة </a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> شرائح العرض </span> </a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('slider.create')}}"> اضافة شرائح العرض </a></li>
                            <li><a href="{{route('slider.index')}}">ادارة شرائح العرض </a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="waves-effect"><i class="zmdi zmdi-view-dashboard"></i> <span> نماذج افتتاح / اختتام </span> </a>
                        <ul class="list-unstyled">
                            <li><a href="{{route('report1')}}"> نموذج افتتاح </a></li>
                            <li><a href="{{route('report2')}}"> نموذج اختتام </a></li>
                        </ul>
                    </li>
                        @endif
                </ul>
                <div class="clearfix"></div>
            </div>
            <!-- Sidebar -->
            <div class="clearfix"></div>

        </div>

    </div>
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">
                <div class="row" width="70%" style="
    width: 100% !important;">
                    @include("_msg")
                </div>
                @yield("content")


            </div> <!-- container -->

        </div> <!-- content -->

        <footer class="footer text-right">
            Adminto © 2016 - 2017
        </footer>

    </div>


    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->


    <!-- Right Sidebar -->

    <!-- /Right-bar -->

</div>
<!-- END wrapper -->



<script>
    var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{asset(('admin/assets/js/jquery.min.js'))}}"></script>
<script src="{{asset(('admin/assets/js/bootstrap-rtl.min.js'))}}"></script>
<script src="{{asset(('admin/assets/js/detect.js'))}}"></script>
<script src="{{asset(('admin/assets/js/fastclick.js'))}}"></script>
<script src="{{asset(('admin/assets/js/jquery.blockUI.js'))}}"></script>
<script src="{{asset(('admin/assets/js/waves.js'))}}"></script>
<script src="{{asset(('admin/assets/js/jquery.nicescroll.js'))}}"></script>
<script src="{{asset(('admin/assets/js/jquery.slimscroll.js'))}}"></script>
<script src="{{asset(('admin/assets/js/jquery.scrollTo.min.js'))}}"></script>

<!-- KNOB JS -->
<!--[if IE]>
<script type="text/javascript" src="{{ asset('admin/assets/plugins/jquery-knob/excanvas.js')}}"></script>
<![endif]-->
<script src="{{asset('admin/assets/plugins/jquery-knob/jquery.knob.js')}}"></script>

<!--Morris Chart-->
<script src="{{asset('admin/assets/plugins/morris/morris.min.js')}}"></script>
<script src="{{asset('admin/assets/plugins/raphael/raphael-min.js')}}"></script>

<!-- Dashboard init -->
<script src="{{asset('admin/assets/pages/jquery.dashboard.js')}}"></script>

<!-- App js -->
<script src="{{asset('admin/assets/js/jquery.core.js')}}"></script>
<script src="{{asset('admin/assets/js/jquery.app.js')}}"></script>
<script src="{{asset('admin/assets/js/modernizr.min.js')}}"></script>
@yield("script")

</body>
</html>
