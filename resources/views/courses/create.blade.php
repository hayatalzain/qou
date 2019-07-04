@extends('_layout')
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

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card-box col-md-12">
                    {{--required--}}
                    <h4 class="header-title m-t-0 m-b-30">تسجيل الدورات التدريبة</h4>
                    <form action="{{route('courses.store')}}" method="post" data-parsley-validate novalidate>
                        {{csrf_field()}}
                        <div class="form-group col-md-9">
                            <label for="userName"> اسم الدورة التدريبة :</label>
                            <input type="text" value="{{old('name')}}" name="name" parsley-trigger="change"
                                   placeholder="ادخل اسم الدورة التدريبة" class="form-control" id="userName">
                        </div>

                        <div class="form-group col-md-9">
                            <label for="passWord2">تفاصيل الدورة :</label>
                            <textarea placeholder="ادخل تفاصيل الدورة التدريبة " data-parsley-equalto="#pass1" name="details" class="form-control" id="passWord2">{{old('details')}}</textarea>
                        </div>

                        <div class="form-group col-md-9">
                            <label for="passWord2">اسم المدرب :</label>
                            <select data-parsley-equalto="#pass1" name="coach_id" class="form-control" id="passWord2">
                                <option value=""> حدد مدرب الدورة : </option>
                                @foreach($coaches as $coach)
                                    <option {{ old("coach_id")==$coach->id?"selected":"" }} value="{{ $coach->id }}">{{ $coach->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-9">
                            <label> تاريخ بداية الدورة :</label>
                            <div class="input-group">
                            <input id="datepicker" value="{{old('start_course')}}" data-date-format="Y-m-d" name="start_course" type="text" placeholder="ادخل تاريخ بداية الدورة"
                                   class="form-control">
                            <span class="input-group-addon bg-primary b-0 text-white"><i class="ti-calendar"></i></span>
                            </div>
                        </div>


                        <div class="form-group col-md-9">
                            <label for="datepicker1">تاريخ نهاية الدورة :</label>
                            <div class="input-group">
                            <input id="datepicker1" name="end_course"  value="{{old('end_course')}}"  placeholder="ادخل تاريخ نهاية الدورة"  type="text"
                                    class="form-control">
                                <span class="input-group-addon bg-primary b-0 text-white"><i class="ti-calendar"></i></span>
                            </div>
                        </div>


                        <div class="form-group col-md-9">
                            <label for="passWord2">مكان اقامة الدورة :</label>
                            <textarea placeholder="ادخل العنوان " data-parsley-equalto="#pass1" name="address" class="form-control" id="passWord2">{{ old('address') }}</textarea>
                        </div>

                        <div class="form-group col-md-9 ">
                            <label for="pass1"> عدد الساعات الدورة :</label>
                                <input id="pass1" value="{{old('hours_count')}}" name="hours_count" type="number" placeholder="ادخل عدد الساعات الدورة "
                                       class="form-control">
                        </div>
                        <div class="form-group col-md-9">
                            <label for="pass1"> عدد ايام الدورة :</label>
                            <input id="pass1" value="{{old('days_count')}}" name="days_count" type="number" placeholder="ادخل عدد ايام الدورة"
                                   class="form-control">
                        </div>
                        <div class="form-group col-md-9">
                            <label for="pass1"> الساعة / الوقت :</label>
                            <div class="input-group m-b-15">
                                <div class="bootstrap-timepicker">
                                    <input id="timepicker" value="{{old('time')}}"  placeholder="ادخل عدد الساعات الدورة" name="time" type="text" class="form-control">
                                </div>
                                <span class="input-group-addon bg-primary b-0 text-white"><i class="glyphicon glyphicon-time"></i></span>
                            </div>

                        </div>

                        {{--<div class="form-group col-md-9">--}}
                            {{--<div class="checkbox">--}}
                                {{--<input id="remember-1" name="active" type="checkbox">--}}
                                {{--<label for="remember-1"> فعال </label>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="form-group text-right m-b-0 col-md-9">
                            <button class="btn btn-primary waves-effect waves-light" type="submit">
                                انشاء
                            </button>
                        <a type="cancel" href="{{route('courses.index')}}" class="btn btn-default waves-effect waves-light m-l-5">
                                الغاء
                            </a>
                        </div>

                    </form>
                </div>
            </div><!-- end col -->

        </div>
        <!-- end row -->
@endsection

@section("script")

    {{--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>--}}
    {{--<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>--}}
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
        jQuery('#datepicker1').datepicker({
            format: "yyyy-mm-dd",
        });
        jQuery('#timepicker').timepicker({
            timePicker: true,
            showMeridian : false
        });

    </script>
@endsection
