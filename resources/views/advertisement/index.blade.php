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

                <h4 class="header-title m-t-0 m-b-30">الاخبار</h4>
                <a href="{{route('advertisement.create')}}" class="btn btn-success btn-bordred waves-effect w-md waves-light m-b-5" type="button">
               <i class="fa fa-user-plus" style="
    margin-left: 6px;
"></i>اضافة خبر</a>

                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>الرقم</th>
                        <th>العنوان</th>
                        <th>التفاصيل</th>
                        <th>الصورة</th>
                        <th>تاريخ الانشاء</th>
                        <th>تاريخ التعديل</th>
                        <th>التحكم</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($items as $item)
                    <tr id="row_coach{{$item->id}}">
                        <td>{{$item->id}}</td>
                        <td>{{$item->title}}</td>
                        <td>{{$item->details}}</td>
                        <td>
                            @if($item->image)
                                <div style="width:100px;height:100px; overflow:hidden; background-image:url({{ asset("storage/images/".$item->image) }});background-size:cover"></div>
                            @endif
                        </td>
                        {{--<td><input type="checkbox" {{ $item->published?"checked":""}} disabled /></td>--}}
                        <td>{{$item->created_at}}</td>
                        <td>{{$item->updated_at}}</td>
                        <td>
                            <a data-coach="{{$item->id}}" class="btn btn-xs btn-icon waves-effect waves-light btn-danger m-b-5 delete"  >
                                <i class="fa fa-remove"></i>
                            </a>
                            <a href="{{ route("advertisement.edit", ["id" => $item->id]) }}" class="btn btn-xs btn-icon waves-effect waves-light btn-warning m-b-5 ">
                                <i class="fa fa-wrench"></i>
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
            $.get('{{route('advertisement.destroy.new')}}',{id:$id_coach},function(data){
                alert("هل تريد اتمام عملية الحذف ?");
                if(data.status== true){
                    $("#row_coach"+$id_coach).hide();
                }
            })
        });
    </script>
    <script src="{{asset('admin/assets/pages/datatables.init.js')}}"></script>
@endsection
