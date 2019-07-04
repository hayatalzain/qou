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


    <div class="row">
        <div class="col-sm-12">
            <div class="card-box table-responsive">

                <h4 class="header-title m-t-0 m-b-30">المـدربين</h4>
                <a href="{{route('coach.create')}}" class="btn btn-success btn-bordred waves-effect w-md waves-light m-b-5" type="button">
               <i class="fa fa-user-plus" style="
    margin-left: 6px;
"></i>اضافة مدرب</a>

                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>الرقم</th>
                        <th>الاسم</th>
                        <th>الجنس</th>
                        <th>البريد الالكتروني</th>
                        <th>رقم الجوال</th>
                        <th>رقم الهوية</th>
                        <th>العنوان</th>
                        <th>الدرجة العلمية</th>
                        <th>ملاحظات</th>
                        {{--<th>تاريخ الانشاء</th>--}}
                        <th>تاريخ التعديل</th>
                        <th>التحكم</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($items as $coach)
                    <tr id="row_coach{{$coach->id}}">
                        <td>{{$coach->id}}</td>
                        <td>{{$coach->name}}</td>
                        <td>{{$coach->gender}}</td>
                        <td>{{$coach->email}}</td>
                        <td>{{$coach->mobile}}</td>
                        <td>{{$coach->id_number}}</td>
                        <td>{{$coach->address}}</td>
                        <td>{{$coach->coachRelation->name}}</td>
                        <td>{{$coach->note}}</td>
                        {{--<td>{{$coach->created_at}}</td>--}}
                        <td>{{$coach->updated_at}}</td>

                        <td>
                            <a data-coach="{{$coach->id}}" class="btn btn-xs btn-icon waves-effect waves-light btn-danger m-b-5 delete"  >
                                <i class="fa fa-remove"></i>
                            </a>
                            <a href="{{route("coach.edit", ["id" => $coach->id]) }}" class="btn btn-xs btn-icon waves-effect waves-light btn-warning m-b-5 ">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <a  href="{{ asset('admin/coach/'.$coach->id.'/print') }}" class="btn btn-xs  btn-purple btn-icon waves-effect waves-light m-b-5">
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
            $.get('{{route('coach.destroy.new')}}',{id:$id_coach},function(data){
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
