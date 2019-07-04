@extends('_layoutHome')
@section("css")

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
                        <h2>طلب التحاق بالدورة</h2>
                        <ul>
                            <li><a href="{{route('home.page.pagHome')}}">الصفحة الرئيسية</a></li>
                            <li>طلب التحاق</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" width="70%" style="
    width: 100% !important;">
            @include("_msg")
        </div>
    </div>
    <div class="tm-section tm-my-account-area bg-white tm-padding-section">
        <div class="container">
            <form action="{{route('home.page.registration')}}" method="post" data-parsley-validate novalidate>
                {{csrf_field()}}
                <div class="form-group col-md-9">
                    <label for="userName"> اسم الطالب :</label>
                    <input type="text" value="{{old('name')}}" name="name" parsley-trigger="change"
                           placeholder="ادخل اسم الطالب" class="form-control" id="userName">
                </div>
                <div class="form-group col-md-9">
                    <label for="emailAddress">البريد الالكتورني:</label>
                    <input type="email"  value="{{old('email')}}" name="email" parsley-trigger="change"
                           placeholder="ادخل البريد الاكتروني" class="form-control" id="emailAddress">
                </div>
                <div class="form-group col-md-9">
                    <label>الجنس: </label>
                    <div class="radio radio-success form-check-inline">
                        <div class="custom-control custom-radio">
                            <input {{ old("gender")=="M"?"checked":"" }} type="radio" value="M" id="genderM" name="gender">
                            <label class="custom-control-label" for="genderM">ذكر</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input {{ old("gender")=="F"?"checked":"" }} type="radio" value="F" id="genderF" name="gender">
                            <label class="custom-control-label" for="genderF">انثى</label>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-9">
                    <label> تاريخ الميلاد :</label>
                    <div class="input-group">
                        <input id="datepicker" value="{{old('date_of_birth')}}" data-date-format="YYYY-mm-dd" name="date_of_birth" type="text" placeholder="ادخل تاريخ الميلاد"
                               class="form-control">
                        <span class="input-group-addon bg-primary b-0 text-white"><i class="ti-calendar"></i></span>
                    </div>
                </div>

                <div class="form-group col-md-9">
                    <label for="pass1">رقم الجوال:</label>
                    <input id="pass1" value="{{old('mobile')}}" maxlength="10" name="mobile"  type="text" placeholder="ادخل الجوال"
                           class="form-control">
                </div>

                <div class="form-group col-md-9">
                    <label for="passWord2">رقم الهوية :</label>
                    <input name="id_number"  value="{{old('id_number')}}" maxlength="9" placeholder="ادخل رقم الهوية" data-parsley-equalto="#pass1" type="text"
                           class="form-control" id="passWord2">
                </div>
                <div class="form-group col-md-9">
                    <label for="passWord2">العنوان :</label>
                    <textarea  placeholder="ادخل العنوان " data-parsley-equalto="#pass1" name="address" class="form-control" default id="passWord2">{{ old('address') }}</textarea>
                </div>


                <div class="form-group col-md-9">
                    <label for="passWord2">الدرجة العلمية :</label>
                    <select data-parsley-equalto="#pass1" name="degree_id" class="form-control" id="passWord2">
                        <option value="">حدد الدرجة العلمية </option>
                        @foreach($degrees as $degree)
                            <option {{ old("degree_id")==$degree->id?"selected":"" }} value="{{ $degree->id }}">{{ $degree->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-9">
                    <label for="passWord2">الدورة التدريبة  :</label>
                    <select data-parsley-equalto="#pass1" name="course_id" class="form-control" id="passWord2">

                        <option value="">حدد الدورة التدريبة </option>
                        @foreach($courses as $course)
                            <option {{ old("course_id")==$course->id?"selected":"" }} value="{{ $course->id }}">{{ $course->name }}</option>
                        @endforeach
                    </select>
                </div>
                {{--<div class="form-group col-md-9">--}}
                    {{--<label for="passWord2">المدرب :</label>--}}
                    {{--<select data-parsley-equalto="#pass1" name="coach_id" class="form-control" id="passWord2">--}}
                        {{--@foreach($coaches as $coach)--}}
                            {{--<option {{ old("coach_id")==$coach->id?"selected":"" }} value="{{ $coach->id }}">{{ $coach->name }}</option>--}}
                        {{--@endforeach--}}
                    {{--</select>--}}
                {{--</div>--}}

                {{--<div class="form-group col-md-9">--}}
                {{--<div class="checkbox">--}}
                {{--<input id="remember-1" name="active" type="checkbox">--}}
                {{--<label for="remember-1"> فعال </label>--}}
                {{--</div>--}}
                {{--</div>--}}


                <div class="form-group text-right m-b-0 col-md-9">
                    <button class="tm-button m-5" type="submit">
                        ارسال
                    </button>
                    <a type="cancel" href="{{route('home.page.pagHome')}}" class="btn btn-default waves-effect waves-light m-l-5">
                       الغاء
                    </a>
                </div>

            </form>
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

