@extends('_layout')
@section("css")

    <!-- DataTables -->
    <link href="{{asset('admin/assets/plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/plugins/datatables/buttons.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/plugins/datatables/fixedHeader.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/plugins/datatables/responsive.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admin/assets/plugins/datatables/scroller.bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section("content")

    <form class="row">
        <div class="col-sm-2">
            <input type="text" value='{{ request()->q }}' placeholder="ادخل كلمة البحث" name="q" autofocus class="form-control" />
        </div>
        <div class="form-group col-sm-2">
            <select class="form-control" name="gender">
                <option value="">All Genders</option>
                <option {{ request()->gender=="M"?"selected":"" }} value="M">Male</option>
                <option {{ request()->gender=="F"?"selected":"" }} value="F">Female</option>
            </select>
        </div>
        <div class="form-group col-sm-2">
            <select class="form-control" id="course_id" name="course_id">
                <option value="">اختر الدورة</option>
                @foreach($courses as $cours)
                    <option {{ $cours->course_id==$cours->id?"selected":"" }} value="{{ $cours->id }}">{{ $cours->name }} </option>
                @endforeach
            </select>
        </div>
        <div class="col-sm-2">
            <button type="submit" class="btn btn-primary"><i class='fa fa-search'></i> بحث</button>
        </div>
        <div class="col-sm-3">
        <a class="btn btn-success" onclick="tableToExcel('sample_1', 'debentures')">
            <i class="fa fa-file-excel-o"></i>
        </a>
        </div>
    </form>
    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">

                <h4 class="header-title m-t-0 m-b-30">الطلاب</h4>
                <a href="{{route('student.create')}}" class="btn btn-success btn-bordred waves-effect w-md waves-light m-b-5" type="button">
               <i class="fa fa-user-plus" style="
    margin-left: 6px;"></i>اضافة طالب</a>
                <table id="sample_1" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>الاسم</th>
                        <th>الجنس</th>
                        <th>تاريخ الميلاد</th>
                        <th>البريد الالكتروني</th>
                        <th>رقم الجوال</th>
                        <th>رقم الهوية</th>
                        <th>العنوان</th>
                        <th>الدرجة العلمية</th>
                        {{--<th>المدرب</th>--}}
                        <th>الدورة التدريبة</th>
                        <th>تاريخ الانشاء</th>
                        {{--<th>تاريخ التعديل</th>--}}
                        <th>التحكم</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($items as $item)
                    <tr id="row_coach{{$item->id}}">
                        <td>{{$item->name}}</td>
                        <td>{{$item->gender}}</td>
                        <td>{{$item->date_of_birth}}</td>
                        <td>{{$item->email}}</td>
                        <td>{{$item->mobile}}</td>
                        <td>{{$item->id_number}}</td>
                        <td>{{$item->address}}</td>
                        <td>{{$item->coachRelation->name}}</td>
                        {{--<td>{{$item->coachesTitle->name}}</td>--}}
                        <td>{{$item->coursesTitle->name}}</td>
                        <td>{{$item->created_at}}</td>
                        {{--<td>{{$item->updated_at}}</td>--}}

                        <td>
                            <a data-coach="{{$item->id}}" class="btn btn-xs btn-icon waves-effect waves-light btn-danger m-b-5 delete"  >
                                <i class="fa fa-remove"></i>
                            </a>
                            <a href="{{ asset('admin/student/'.$item->id.'/edit') }}" class="btn btn-xs btn-icon waves-effect waves-light btn-warning m-b-5 ">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <a  href="{{ asset('admin/student/'.$item->id.'/print') }}" class="btn btn-xs  btn-purple btn-icon waves-effect waves-light m-b-5">
                                <i class="fa fa-print"></i>
                            </a>

                        </td>

                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div><!-- end col -->
    </div>
@endsection

@section("script")
    <script src="{{asset('admin/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/datatables/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/datatables/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/datatables/jszip.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/datatables/pdfmake.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/datatables/vfs_fonts.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/datatables/buttons.html5.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/datatables/buttons.print.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/datatables/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/datatables/dataTables.keyTable.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/datatables/responsive.bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/assets/plugins/datatables/dataTables.scroller.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#datatable').DataTable();
            $('#datatable-keytable').DataTable( { keys: true } );
            $('#datatable-responsive').DataTable();
            $('#datatable-scroller').DataTable( { ajax: "assets/plugins/datatables/json/scroller-demo.json", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
            var table = $('#datatable-fixed-header').DataTable( { fixedHeader: true } );
        } );
        TableManageButtons.init();

    </script>
    <script>
        $(".delete").click(function(event){
            event.preventDefault();
            $id_coach= $(this).data("coach")
            $.get('{{route('student.destroy.new')}}',{id:$id_coach},function(data){
                alert("هل تريد اتمام عملية الحذف ?");
                if(data.status== true){
                    $("#row_coach"+$id_coach).hide();
                }
            })
        });
    </script>
    <script>
        var temp=document.getElementById("sample_1").innerHTML;
        var tableToExcel = (function() {

            var uri = 'data:application/vnd.ms-excel;base64,'
                , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head>' +
                '<!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
                , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
                , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
            return function(table, name) {
                if (!table.nodeType)
                    table = document.getElementById("sample_1")
                var ctx = {worksheet: name || 'Worksheet', table: temp}
                window.location.href = uri + base64(format(template, ctx))
            }
        })();
    </script>
    <script src="{{asset('admin/assets/pages/datatables.init.js')}}"></script>
@endsection
