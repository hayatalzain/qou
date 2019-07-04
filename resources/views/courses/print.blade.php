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

<div class="row">
    <div class="container">
        <div class="col-md-4">
            <h3 class="print">جامعة القدس المفتوحة</h3>
            <span class="mr-5" style="margin-right: 57px!important;">فرع غزة</span>

                <br><span>هاتف:</span>08/271658 - 08/2873057
                <br> <span>فاكس:</span>08/2873058
                <br><span>بريد الكتروني:</span>gaza@qou.edu </span>
        </div>
        <div class="col-md-4 text-center">
            <img class="print-logo" src="{{asset('admin/assets/images/qou1.jpg')}}"  style="height: 130px;
    max-height: 130px;">
        </div>
        <div class="col-md-4 text-left">
            <h3 class="print">AL-Quds Open University</h3>
            <span class="mr-5" style="margin-right: 57px!important;">Gaza Branch</span>

            <br><span>Tel:</span>08/271658 - 08/2873057
            <br> <span>Fax:</span>08/2873058
            <br><span>Email:</span>gaza@qou.edu </span>
        </div>
    </div>
</div>
<div class="container text-center" style="margin-bottom: 50px; padding: 5px 25px;">

    <hr>
    <div class="row">
        <div class="container">
            <h3 class="text-center m-5">
                عقد اتفاق
            </h3>
        </div>

    </div>

<div class="row">
    <div class="container">
        <div class="col-md-2">
            <h3>الطرف الاول:</h3>
        </div>

        <div class="col-md-8" style="margin-top: 14px;">
<p> جامعة القدس المفتوحة فرع غزة / مركزالتعليم المستمر وخدمة المجتمع


<br>ويمثل في هذا العقد منسق مركز التعليم المستمر بفرع غزة
</p>
        </div>

    </div>
</div>

<div class="row" style="margin-top: 25px;">
    <div class="container">
        <div class="col-md-2">
            <h3>الطرف الثاني:</h3>
        </div>

        <div class="col-md-6 col-xs-6" style="margin-top: 14px;">

            <div class="col-md-6">
                <p><span> السيد/ة : </span>أ/  </p>
            </div>

            <div class="col-md-6">
                <p><span> المؤهل العلمي :</span>  </p>
            </div>
        </div>
        <div class="col-md-6 col-xs-6" style="margin-top: 14px;">

            <div class="col-md-6">
                <p><span>رقم الهوية: </span>أ/ </p>
            </div>

            <div class="col-md-6">
                <p><span> رقم الجوال :</span>  </p>
            </div>
        </div>
    </div>
</div>

    <hr class="hr">
    <div class="row" style="margin-top: 14px;">
        <p> مركزالتعليم المستمر وخدمة المجتمع في جامعة القدس المفتوحة


            <br> بصدد الانتهاء من عقد دورة ........... بياناتها كالتالي :
        </p>
    </div>

    <div class="row">
        <div class="container">
            <ul class="text-right">
                <li> عدد ساعات الدور ... ساعة تدريبة </li>
                <li> عدد الطلاب الملتحقين بالدورة ... طلاب </li>
                <li> اجر الطرف التاني (المدرب) ... دينار </li>
            </ul>
        </div>

    </div>

    <div class="row">
        <div class="container">
            <p> وحيث انه تم التفاق بين الطرفين الاول والتاني ععلى ان يتم صرف مستحقات المدرب وان يتقاضى اجره ..... دينار اردني فقط لاغير  </p>
        </div>
    </div>


    <div class="row">
        <div class="container">
            <div class="col-md-6">
                <p>الطرف الاول : أ. ريم البطش</p>
            </div>
            <div class="col-md-6">
                <p>الطرف الثاني :  </p>
            </div>
        </div>
    </div>

</div>
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

