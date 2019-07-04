
@extends('_layoutHome')
@section("css")
<style>
    h3{
        color: #88bc64;
        font-weight: 800;
        margin-top: 12px;
    }

    p{
        font-size: 19px;
        line-height: 36px;
    }
</style>
    <link href="{{asset('admin/assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/assets/plugins/multiselect/css/multi-select.css')}}"  rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/plugins/select2/dist/css/select2.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/plugins/select2/dist/css/select2-bootstrap.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/assets/plugins/switchery/switchery.min.css')}}" rel="stylesheet" />

    <link href="{{asset('admin/assets/plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/plugins/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">
    <link href="{{asset('admin/assets/plugins/timepicker/bootstrap-timepicker.min.css')}}" rel="stylesheet">
@endsection

@section("content")


        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="tm-section-title mt-5 mb-1 text-center">
                    <h2 id="conect">اتصل بـنا</h2>
                    <p> بامكانك الاتصال والتواصل معنا من خلال :  </p>
                </div>
            </div>
        </div>
        <div class="tm-section contact-us-area pt-3 tm-padding-section bg-white">
            <div class="container">
                <div class="row justify-content-center mt-30-reverse">

                    <div class="col-lg-4 col-md-6 col-sm-6 mt-30">
                        <div class="tm-contact-block text-center">
                                <span class="tm-contact-icon">
                                    <i class="flaticon-placeholder"></i>
                                </span>
                            <h5>العنوان</h5>
                            <p>فلسطين - قطاع غزة </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 mt-30">
                        <div class="tm-contact-block text-center">
                                <span class="tm-contact-icon">
                                    <i class="flaticon-call"></i>
                                </span>
                            <h5>هاتف </h5>
                            <p><a href="#">08/2873057</a></p>
                            {{--<p><a href="#">08/271658</a></p>--}}
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 mt-30">
                        <div class="tm-contact-block text-center">
                                <span class="tm-contact-icon">
                                    <i class="flaticon-email-1"></i>
                                </span>
                            <h5>البريد الكتروني</h5>
                            <p>Email: <a href="#"> gaza@qou.edu </a></p>
                            <p> <a href="#"></a></p>
                        </div>
                    </div>

                </div>
            </div>

        </div>



@endsection

@section("script")
    <script src="{{asset('admin/assets/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/moment/moment.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/jquery-quicksearch/jquery.quicksearch.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/bootstrap-inputmask/bootstrap-inputmask.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('admin/assets/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('form').parsley();
        });
        jQuery('#datepicker').datepicker({
            format: "yyyy-mm-dd",
        });
    </script>
@endsection

