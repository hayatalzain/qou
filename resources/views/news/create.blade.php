@extends('_layout')
@section("css")

@endsection

@section("content")

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card-box col-md-12">
                    {{--required--}}
                    <h4 class="header-title m-t-0 m-b-30">تسجيل اعلان</h4>
                    <form action="{{route('news.store')}}" method="post" data-parsley-validate novalidate  enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group col-md-9">
                            <label for="userName"> العنوان : </label>
                            <input type="text" value="{{old('title')}}" name="title" parsley-trigger="change"
                                   placeholder="ادخل العنوان" class="form-control" id="userName">
                        </div>
                        <div class="form-group col-md-9">
                            <label for="userName"> الرابط :</label>
                            <input type="text" value="{{old('link')}}" name="link" parsley-trigger="change"
                                   placeholder="ادخل الرابط" class="form-control" id="userName">
                        </div>

                        <div class="form-group col-md-9">
                            <label for="userName"> الصورة :</label>
                            <input type="file" value="{{old('image')}}" name="adv_image" parsley-trigger="change" placeholder="ادخل الصورة" class="form-control" id="userName">
                        </div>

                        <div class="form-group col-md-9">
                            <label for="passWord2">التفاصيل :</label>
                            <textarea  placeholder="ادخل التفاصيل " data-parsley-equalto="#pass1" name="details" class="form-control" default id="passWord2">{{ old('details') }}</textarea>
                        </div>

                        {{--<div class="form-group col-md-9">--}}
                            {{--<div class="checkbox">--}}
                                {{--<input type="hidden" name="active" value="0" />--}}
                                {{--<input  {{ old("active")?"checked":"" }} type="checkbox" value="1" name="active" class="custom-control-input" id="customCheck1">--}}

                            {{--</div>--}}
                        {{--</div>--}}

                        <div class="form-group text-right m-b-0 col-md-9">
                            <button class="btn btn-primary waves-effect waves-light" type="submit">
                                انشاء
                            </button>
                        <a type="cancel" href="{{ route('news.index')}}" class="btn btn-default waves-effect waves-light m-l-5">
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
    <script type="text/javascript">
        $(document).ready(function() {
            $('form').parsley();
        });
    </script>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
@endsection
