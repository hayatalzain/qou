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

    <div class="tm-breadcrumb-area tm-padding-section" data-bgimage="{{asset('home/assets/images/qou.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="tm-breadcrumb">
                        <h2>الدورات</h2>
                        <ul>
                            <li><a href="{{route('home.page.pagHome')}}">الصفحة الرئيسية</a></li>
                            <li>الدورات</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tm-section blogs-area bg-whtie tm-padding-section">
        <div class="container">
            <div class="row">
                @foreach($newses as $newsed)
                <div class="col-md-6">
                    <div class="tm-blog-list mt-50-reverse">

                        <!-- Blog Item -->

                        <div class="blogitem mt-50">
                            <div class="blogitem-image">
                                @if($newsed->image)
                                    <div style="width:100%;height:400px; overflow:hidden; background-image:url({{ asset("storage/images/".$newsed->image) }});background-size:cover"></div>
                                @endif
                                <span class="blogitem-date">{{$newsed->created_at}}</span>
                            </div>
                            <div class="blogitem-content">
                                <h5><a href="#">{{$newsed->title}}</a></h5>
                                <p>{{$newsed->details}}</p>
                                <a href="{{route('home.page.registration')}}" class="tm-button tm-button-dark">التحق بالدورة <b></b></a>
                            </div>
                        </div>

                    </div>

                </div>
                @endforeach
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

