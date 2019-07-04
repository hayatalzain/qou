<!DOCTYPE html>

<html dir="rtl" style="margin: 0px;">
<head>
    <title></title>
    <style>
      body{
          font-family: 'Markazi Text' , serif !important;
      }
        input{
            border: 0px;
        }

    </style>
    <link href="{{asset('admin/assets/css/bootstrap-rtl.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Markazi+Text" rel="stylesheet">
    <link href="{{asset('admin/assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
</head>
<body>
<input type="hidden" id="destination_id" value="">
<div class="" style="
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

    <div class="">
        <div class="container">

<p>حضرة د. <input type="text" style="width: 30%;"> مساعد مدير مركز التعليم المستمر لشؤون قطاع غزة   &emsp; &emsp; &emsp; &emsp;   المحترم ,,,            </p>
<p>بواسطة د. <input type="text" style="width: 30%;"> مدير فرع غزة   &emsp; &emsp; &emsp; &emsp;   المحترم ,,,            </p>
<p>بواسطة أ.د. <input type="text" style="width: 30%;"> نائب الرئيس لشؤون قطاع غزة   &emsp; &emsp; &emsp; &emsp;   المحترم ,,,            </p>
        </div>

    </div>



<div class="">
    <div class="container">
        <p>أرفق لحضرتكم بيانات التسجيل لدورة  <input type="text" style="width: 30%;"> , آملين منكم الموافقة على افتتاحها </p>
        <table class="table table-bordered">
            <tbody>
            <tr>
                <td>عدد المسجلين بالدورة من الطلاب</td>
                <td><input> طالب </td>
                <td>عدد المشاركين من المجتع المحلي</td>
                <td ><input></td>
            </tr>
            <tr>
                <td>رسوم الدورة للطلاب</td>
                <td><input> دينار </td>
                <td>رسوم الدورة للمجتع المحلي</td>
                <td ><input> دينار </td>
            </tr>
            <tr>
                <td>اسم المدرب</td>
                <td><input></td>
                <td>الرتبة الاكاديمية</td>
                <td ><input></td>
            </tr>
            <tr>
                <td>أجرة المدرب</td>
                <td><input></td>
                <td>عدد ساعات الدورة</td>
                <td ><input> ساعة تدريبة </td>
            </tr>
            <tr>
                <td>الايرادات المحصلة</td>
                <td><input> دينار </td>
                <td>تاريخ بداية الدورة</td>
                <td ><input></td>
            </tr>
            <tr>
                <td>اجمالي الايرادات المتوقعة </td>
                <td><input> دينار </td>
                <td>تاريخ نهاية الدورة</td>
                <td ><input></td>
            </tr>
            <tr>
                <td> صافي الايرادات المتوقعة </td>
                <td><input> دينار </td>
                <td>احتياجات الدورة</td>
                <td><input></td>
            </tr>

            </tbody>
        </table>
    </div>

</div>
<div class="">
    <div class="container">
        <table class="table table-bordered">
            <tbody>
            <tr>
                <td colspan="4">توصية مساعدة مدير مركز التعليم المستمر في قطاع غزة</td>
            </tr>
            <tr>
                <td>د. جلال شبات/</td>

                <td> التوقيع/</td>

            </tr>
            </tbody>

        </table>
        نسخة لـ

        <ul>
            <li>مدير مركز التعليم المستمر وخدمة المجتع</li>
            <li>الفرع</li>
        </ul>
        <p class="text-center"> مع خالص الاحترام والتقدير </p>
        <p class="text-left"> منسخ التعليم المستمر وخدمة المجتمع / فرع غزة  </p>
        <p class="text-left">  أ. ريم البطش </p>
    </div>
</div>
    <hr class="hr">
<footer>
    <div class="container text-center">
        <a class="btn-xs print btn btn-default btn-icon waves-effect waves-light m-b-5" >
            <i class="fa fa-print"></i>

        </a>
        <a class="btn-xs btn btn-default btn-icon waves-effect waves-light m-b-5"  href="{{ asset('admin/admin') }}">
            <i class="fa fa-info"></i>

        </a>
    </div>
</footer>


<script src="{{asset(('admin/assets/js/jquery.min.js'))}}"></script>
<script src="{{asset(('admin/assets/js/bootstrap-rtl.min.js'))}}"></script>
<script>
    $('.print').click(function () {
        $("a").removeAttr("class href");
        $("i").removeAttr("class");


        window.print();

    });

</script>
</body>
</html>

