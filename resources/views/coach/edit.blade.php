@extends('_layout')
@section("css")

@endsection

@section("content")

        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card-box col-md-12">
                    {{--required--}}
                    <h4 class="header-title m-t-0 m-b-30">تعديل بيانات المـدربين</h4>
                    <form action="{{ route('coach.update', $items->id) }}" method="post" data-parsley-validate novalidate>
                        {{csrf_field()}}
                        @method("put")
                        <div class="form-group col-md-9">
                            <label for="userName"> اسم المدرب :</label>
                            <input type="text" value="{{$items->name}}" name="name" parsley-trigger="change"
                                   placeholder="ادخل اسم المدرب" class="form-control" id="userName">
                        </div>
                        <div class="form-group col-md-9">
                            <label for="emailAddress">البريد الالكتورني:</label>
                            <input type="email"  value="{{$items->email}}" name="email" parsley-trigger="change"
                                   placeholder="ادخل البريد الاكتروني" class="form-control" id="emailAddress">
                        </div>
                        <div class="form-group col-md-9">
                            <label for="pass1">رقم الجوال:</label>
                            <input id="pass1" value="{{$items->mobile}}" maxlength="10" name="mobile" type="text" placeholder="ادخل الجوال"
                                   class="form-control">
                        </div>

                        <div class="form-group col-md-9">
                            <label for="passWord2">رقم الهوية :</label>
                            <input name="id_number"  value="{{$items->id_number}}" maxlength="9" placeholder="ادخل رقم الهوية" data-parsley-equalto="#pass1" type="text"
                                    class="form-control" id="passWord2">
                        </div>
                        <div class="form-group col-md-9">
                            <label for="passWord2">العنوان :</label>
                            <textarea name="address"  placeholder="ادخل العنوان " data-parsley-equalto="#pass1"  class="form-control" id="passWord2">{{ $items->address }}</textarea>
                        </div>

                        <div class="form-group col-md-9">
                            <label>الجنس: </label>
                            <div class="radio radio-success form-check-inline">
                                <div class="custom-control custom-radio">
                                    <input {{ $items->gender=="M"?"checked":"" }} type="radio" value="M" id="genderM" name="gender">
                                    <label class="custom-control-label" for="genderM">ذكر</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input {{ $items->gender=="F"?"checked":"" }} type="radio" value="F" id="genderF" name="gender">
                                    <label class="custom-control-label" for="genderF">انثى</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-9">
                            <label for="passWord2">الدرجة العلمية :</label>
                            <select data-parsley-equalto="#pass1" name="degree_id" class="form-control" id="passWord2">

                                <option value="">حدد الدرجة العلمية </option>
                                @foreach($degrees as $degree)
                                    <option {{ $items->degree_id == $degree->id?"selected":"" }} value="{{ $degree->id }}">{{ $degree->name }}</option>
                                @endforeach
                            </select>

                        </div>
                        <div class="form-group col-md-9">
                            <label for="passWord2">ملاحظات :</label>
                            <textarea name="note" data-parsley-equalto="#pass1" class="form-control" id="passWord2"> {{ $items->note }}</textarea>
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
                        <a type="cancel" href="{{route('coach.index')}}" class="btn btn-default waves-effect waves-light m-l-5">
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
