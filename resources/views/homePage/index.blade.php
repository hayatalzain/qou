@extends('_layoutHome')
@section("css")
    <style>
        .tm-blog-meta {
            margin-top: 0px !important;
        }
        .tm-blog-content h4 {
            font-size: 20px;
            margin-top: 25px;
            font-weight: 500;
            margin-bottom: 0px !important;
        }
        .tm-blog-content{
            padding: 17px !important;
            padding-bottom: 50px !important;
        }

    </style>

@endsection

@section("content")
    <div class="heroslider-area">
        <!-- Heroslider Slider -->

        <div class="heroslider-slider-2 heroslider-animated-content tm-slider-arrow tm-slider-dots-left">
            @foreach($silders as $slider)
                <div class="heroslider-singleslider d-flex align-items-center" data-white-overlay="5" data-bgimage="{{url('/storage/images/'.$slider->image)}}">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 col-md-8">
                                <div class="heroslider-content">
                                    <h1>{{$slider->title}}</h1>
                                    <p>{{$slider->details}}</p>
                                    <a href="{{route('home.page.registration')}}" class="tm-button">رابط التسجيل<b></b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!--// Heroslider Slider -->
    </div>

    <main class="main-content">

        <div class="tm-section latest-blog-area tm-padding-section bg-white">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="tm-section-title text-center">
                            <h2>اخبار عامة </h2>
                            <p> اخبار عامةالتي تقام بجامعة القدس المفتوحة قسم التعليم المستمر  </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row blog-slider-active">

                <!-- Single Blog -->
                @foreach($advertisements as $advertisement)

                    <div class="col">
                        <div class="tm-blog">
                            <div class="tm-blog-image" style="width: 90% !important;">
                                <img src="{{url('/storage/images/'.$advertisement->image)}}" alt="blog image">
                            </div>
                            <div class="tm-blog-content" style="width: 90% !important;">
                                <h4><a href="#">{{$advertisement->title}}</a></h4>
                                <div class="tm-blog-meta">
                                    <p class="col" style="
                                        margin: 0px !important; ">{{$advertisement->details}}
                                    </p>
                                    <span>{{$advertisement->created_at}}</span>
                                </div>
                                <div class="tm-blog-contentbottom">
                                    <a href="{{route('home.page.registration')}}" class="tm-readmore">اقراءالمزيد   <i class="fas fa-chevron-left"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="tm-section-title text-center">
                    <h2>الدورات المقترحة</h2>
                    <p> اقترح الدورات التي تريد منا طرحها في مركز التعليم المستمر  </p>
                </div>
            </div>
        </div>
        <div class="tm-section latest-blog-area  bg-white">
            <div class="container">
                <div class="col-lg-12">
                    <div class="tm-contact-formwrapper pt-2">
                        <div class="alert mt-0" id="formMessageSuccess"></div>
                        <div class="alert py-0" id="form-messages" role="alert">
                            <p id="title_msg"></p>
                            <p id="email_msg"></p>
                            <p id="details_msg"></p>
                            <p id="name_msg"></p>
                        </div>
                        <h5>اقترح دورات لنتواصل معك </h5>

                        <form action="{{route('home.page.suggested')}}" method="post" id="tm-contactform" class="tm-contact-form form-suggested pt-0">

                            <div class="tm-contact-formfield">
                                <input type="text" name="name" id="name" placeholder="*الاسم كامل">
                            </div>
                            <div class="tm-contact-formfield">
                                <p id="success_send"> </p>
                                <input type="email" name="email" id="email" placeholder="*البريد الالكتروني">
                            </div>
                            <div class="tm-contact-formfield">
                                <p id="success_send"> </p>
                                <input type="text" name="title" id="title" placeholder="*الدورة المقترحة ">
                            </div>
                            <div class="tm-contact-formfield">
                                <p id="success_send"> </p>
                                <input name="mobile"  id="mobile" maxlength="10" placeholder="*الجوال">
                            </div>
                            <div class="tm-contact-formfield">
                                <button type="submit" class="tm-button">ارسال <b style="top: -5px; right: 65.4063px;"></b></button>
                            </div>
                        </form>
                        <p class="form-messages"></p>
                    </div>
                </div>
            </div>
        </div>

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

    </main>

@endsection

@section("script")
    <script>
        $('body').on('submit',".form-suggested",function (e) {
            clear1();
            e.preventDefault();
            var email_error='';
            $action = $(this).attr("action");
            $data = $(this).serialize();
            var formMessages = $('#form-messages');
            var formMessageSuccess= $('#formMessageSuccess');
            var formData = new FormData($(this)[0]);
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN':'{{csrf_token()}}'
                }
            });
            $.ajax({
                url: $action,
                type: "POST",
                data: formData,
                async: true,
                processData: false,
                contentType: false,
                dataType: "json",
                cache    : false,
                success: function (response) {
                    if (response.status == true) {
                        formMessages.removeClass('alert-danger');
                        formMessageSuccess.addClass('alert-success').text('تمت عملية التسجيل بنجاح');
                        $(".form-suggested")[0].reset();
                        setTimeout(function(){
                            $("#formMessageSuccess").html('').removeClass('alert-success');

                        }, 3000);

                    } else {

                    }
                },error: function(data){
                    var error = data.responseJSON;
                    var errors= error.errors;
                    formMessageSuccess.removeClass('alert-success').empty();
                    formMessages.addClass('alert-danger');
                    if(typeof(errors['title']) != "undefined"){
                        $("#title_msg").html(errors['title'][0]);
                    }
                    if(typeof(errors['email']) != "undefined"){
                        $("#email_msg").html(errors['email'][0]);
                    }
                    if(typeof(errors['mobile']) != "undefined"){
                        $("#details_msg").html(errors['mobile'][0]);
                    }
                    if(typeof(errors['name']) != "undefined"){
                        $("#name_msg").html(errors['name'][0]);
                    }

                }

            });
            function clear1() {
                $("#title_msg").html('');
                $("#email_msg").html('');
                $("#details_msg").html('');
                $("#name_msg").html('');
            }

        });

    </script>
@endsection

