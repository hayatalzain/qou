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
                        <h2>من نحن</h2>
                        <ul>
                            <li><a href="{{route('home.page.pagHome')}}">الصفحة الرئيسية</a></li>
                            <li>من نحن</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" width="70%" style="
    width: 100% !important;">
            <div class="innerTxt left lazy2 lazyAnimate">
                <h3>التعريف بالمركز</h3>
                <p>تأسس مركز التعليم المستمر في جامعة القدس المفتوحة سنة 1991م كأحد المراكز المهمة لخدمة المجتمع الفلسطيني، وذلك من أجل توفير فرص التعليم المستمر والتعلم مدى الحياة لجميع شرائح المجتمع الفلسطيني وفئاته، والمساهمة بشكل فاعل في تنمية وتطوير قدرات الأفراد والمؤسسات الفلسطينية من خلال تقديم خدمات التدريب المهني والتقني وفق معايير الجودة المحلية والعالمية، بالإضافة إلى تقديم خدمة الاستشارات الإدارية والفنية وتنفيذ المشاريع التنموية المجتمعية. كما يعمل مركز التعليم المستمر على تنمية إمكانيات الجامعة وقدراتها من خلال تطوير أداء الكوادر العاملة فيها وتحسين مرافقها.</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row" width="70%" style="
    width: 100% !important;">

                    <div class="innerTxt full right lazy1 lazyAnimate">
                        <h3>الرؤية والرسالة</h3>
                        <h4>الرؤية:</h4>
                        <p>الريادة في تقديم خدمات التدريب المهني والتقني، وتنفيذ المشاريع التنموية والخدمات الاستشارية (الإدارية والفنية)، التي من شأنها أن تسهم في بناء القدرات الفلسطينية لجميع شرائح المجتمع وفئاته ومؤسساته، وفق معايير الجودة المحلية والعالمية.</p>
                        <h4>الرسالة:</h4>
                        <p>الاستمرار في توفير خدمات التدريب المهني والتقني، وإعداد المشاريع التنموية وتنفيذها، بالإضافة إلى تقديم خدمات الاستشارات في المجالات الإدارية والفنية التي تسهم في بناء وتطوير قدرات شرائح المجتمع الفلسطيني، وخاصة فئاته المهمشة، ومؤسساته المختلفة، بما يتماشى مع إستراتيجيات المركز في تبني “الشراكة من أجل التعليم المستدام” و”التعلم مدى الحياة”، وذلك من خلال العمل على تجويد الخدمات التي يقدمها المركز وفق المعايير المحلية والعالمية و”أفضل الممارسات الدولية”، بما يتماشى مع رسالة الجامعة وأهدافها، و التميز في تقديم خدمات نوعية جديدة لتلبية احتياجات المجتمع الفلسطيني، و تحديد ودراسة احتياجات المجتمع الفلسطيني وتلبيتها.
                        </p>
                    </div>
        </div>
    </div>


    <div class="container">
        <div class="row" width="70%" style="
    width: 100% !important;">

            <div class="et_pb_text et_pb_module et_pb_bg_layout_light et_pb_text_align_right  et_pb_text_2">
                <div class="innerTxt full rightlazy2">
                    <h3>الأهداف</h3>
                    <p>المساهمة في تحقيق رسالة الجامعة المتمثلة في تطوير قدرات الجامعة وإمكانياتها وتمكين الإنسان والمجتمع الفلسطيني، بما ينعكس بشكل إيجابي على زيادة الإنتاجية وتحسين مستوى العمل في المؤسسات الفلسطينية، والمساهمة في التنمية المجتمعية وتحقيق التميز وفقًا للخطط الإستراتيجية للتعليم العالي في فلسطين. ثم توثيق الصلة بين الجامعة وفئات المجتمع كافة، من خلال تقديم خدمات التدريب المهني والتقني والاستشارات المالية والإدارية والفنية عالية الجودة للمجتمع المحلي. بالإضافة إلى توفير فرص التعلم مدى الحياة (Life Long Learning) المبنية على الشراكة المجتمعية لجميع أفراد الشعب الفلسطيني. إلى جانب الشراكة المجتمعية والتشبيك المؤسساتي مع المؤسسات الفلسطينية والإقليمية والدولية.
                    </p></div>
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

