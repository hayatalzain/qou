<!DOCTYPE html>

<html dir="rtl" style="margin: 0px;">
<head>
    <title></title>
    <style>
      body{
          font-family: 'Markazi Text' , serif !important;
      }
    </style>
    <link href="{{asset('admin/assets/css/bootstrap-rtl.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Markazi+Text" rel="stylesheet">

</head>
<body>
<input type="hidden" id="destination_id" value="">

<div class="row" style="
    line-height: 1.5;
    margin: 10px 36px;
    border-radius: 24px;
    border: 1px solid;
">
    <div class="container">
        <div class="col-md-4 col-xs-4 ">
            <h3 class="print">جامعة القدس المفتوحة</h3>
            <span class="mr-5" style="margin-right: 57px!important;">فرع غزة</span>

                <br><span>هاتف:</span>08/271658 - 08/2873057
                <br> <span>فاكس:</span>08/2873058
                <br><span>بريد الكتروني:</span>gaza@qou.edu </span>
        </div>
        <div class="col-md-4 col-xs-4 text-center">
            <img class="print-logo" src="{{asset('admin/assets/images/qou1.jpg')}}"  style="height: 130px;
    max-height: 130px;">
        </div>
        <div class="col-md-4 col-xs-4 text-left">
            <h3 class="print">AL-Quds Open University</h3>
            <span class="mr-5" style="margin-right: 57px!important;">Gaza Branch</span>

            <br><span>Tel:</span>08/271658 - 08/2873057
            <br> <span>Fax:</span>08/2873058
            <br><span>Email:</span>gaza@qou.edu </span>
        </div>
    </div>
</div>


    <hr>

<div class="row">
    <div class="container">
        <div class="col">
            <h3> حضرة الاستاذ / عوض عوض ،،،،،،،، المحترم </h3>
            <h3> رئيس قسم المالية </h3>
            <h3> تحية طيبة وبعد  </h3>
        </div>

    </div>
</div>

<div class="row" style="margin-top: 25px;">
    <div class="container">
        <div class="col-xs-12">
            <h3 class="text-center"> الموضوع : استلام رسوم </h3>
        </div>
        </div>
</div>

    <div class="row">
        <div class="container">
            <div class="col-xs-12">
                <h4 class="text-center"> بعد إعلان مركز التعليم المستمر وخدمة المجتمع في فرع غزة عن التسجيل لدورة {{$items->coursesTitle->name}}
                    وبعد قيام الطالب/ة:{{$items->name}} بتعبئة نموذج التسجيل للدورة.
                </h4>

                <h4>يرجى استلام مبلغ وقدره (.....) دينار وذلك استكمالاً لإجراءات التسجيل للدورة.</h4>
        </div>
    </div>
    </div>
<div class="row" style="margin-top: 25px;">
    <div class="container">
        <div class="col-xs-12">
            <h3 class="text-center"> وتفضلوا بقبول فائق الاحترام والتقدير </h3>
        </div>
    </div>
</div>

<div class="row" style="margin-top: 25px;">
    <div class="container">
        <div class="col-xs-12">
            <h3 class="text-center">
                منسق التعليم المستمر وخدمة المجتمع - فرع غزة
                أ.ريم البطش
            </h3>
        </div>
    </div>
</div>
    <hr class="hr">

<script src="{{asset(('admin/assets/js/jquery.min.js'))}}"></script>
<script src="{{asset(('admin/assets/js/bootstrap-rtl.min.js'))}}"></script>
<script>
    $(document).ready(function () {
        window.print();
        setTimeout(function(){
            document.location =("{{ route('student.index') }}");
        }, 500);
    });

</script>
</body>
</html>

