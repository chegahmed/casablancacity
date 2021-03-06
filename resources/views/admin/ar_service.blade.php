@extends('templaetAdmin')

@section('css')


<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<!-- global css -->
<link href="designeAdmin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- font Awesome -->
<link href="designeAdmin/vendors/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link href="designeAdmin/css/styles/black.css" rel="stylesheet" type="text/css" id="colorscheme" />
<link href="designeAdmin/css/panel.css" rel="stylesheet" type="text/css"/>
<link href="designeAdmin/css/metisMenu.css" rel="stylesheet" type="text/css"/>    
<!-- end of global css -->    
<!--page level css -->
<link rel="stylesheet" type="text/css" href="designeAdmin/vendors/datatables/css/select2.css" />
<link rel="stylesheet" type="text/css" href="designeAdmin/vendors/datatables/css/dataTables.bootstrap.css" />
<link href="designeAdmin/css/pages/tables.css" rel="stylesheet" type="text/css" />
<!--end of page level css-->





@endsection



@section('content')



<div class="row">




    <!-- ici form ajouter categorie -->  
    <form action="ar_service" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="col-md-6">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <i class="livicon" data-name="magic" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                        :اظافة معلومات الخذمة الإلكترونية
                    </h3>
                    <span class="pull-right clickable">
                        <i class="glyphicon glyphicon-chevron-up"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <label>
                           : ادخل رابط الخدمة 
                        </label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-edit"></i>
                            </div>
                            <input type="text" name="urlservice" class="form-control"  data-mask/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="single-prepend-text" class="control-label">
                             : اختر عنوان الخدمة الإلكترونية
                        </label>
                        <div class="input-group select2-bootstrap-prepend">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button" data-select2-open="single-prepend-text">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                            <select name="titreservice" id="single-prepend-text" class="form-control select2">


                                <option value="e_services">الخدمات الإلكترونية</option>
                                <option value="Les_evenements_de_la_ville">الاحداث المدينة</option>
                                <option value="vous_demarches">خطواتك</option>
                                <option value="Communiques_de_presse">بيانات صحفية</option>
                                <option value="Actualites_des_Arrondissements">الاخبار المقاطعات</option>
                                <option value="Les_indisponsables">أساسيات</option>
                                <option value="Votres_Arrondissemen">مقاطعات</option>
                                <option value="Actualites">أهم الأنباء</option>
                                <option value="Le_Kiosque">كشك</option>
                                <option value="Les_site_de_la_ville_casablanca">مواقع أخرى لمدينة الدار البيضاء</option>
                                <option value="Le_mot_du_president">كلمـة الرئـيس</option>
                                <option value="rehabilitation_de_la_coupe">إعادة تأهيل</option>
                                <option value="slide_Accueil">منزلق الرئيسية</option>


                            </select>
                        </div>
                          
                    </div>
                    <div>
                            <label for="single-prepend-text" class="control-label">
                            اختر الصورة :
                        </label>
                        <input type="file" name="image"  class="btn btn-default glyphicon glyphicon-camera">
                    </div>
                    <br>
                    <div class="col-xs-6 col-md-6">
                        <input type="submit" class="btn btn-primary btn-block btn-md btn-responsive"  value="تخزين">
                    </div>

 

                </div>

            </div>

        </div>

    </form>

    <!-- end form ajouter categorie -->





    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">

            <div class="x_content">

                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>N°</th>
                            <th>عنوان الخدمة</th>
                            <th>الرابط</th>
                            <th>تعديل</th>
                            <th>حذف</th>

                        </tr>
                    </thead>


                    <tbody>
                        @foreach($services as $key=>$service)

                        <tr role="row" class="odd">

                            <td class="sorting_1">{{ $key+=1 }}</td>


                    <form action="ar_service/{{$service ->id}}" method="POST" >
                        {!! csrf_field() !!}
                        <input type="hidden" name="_method" value="PATCH"/>
                      
                        <td >
                            {{ $service->titre }}
                        </td>



                        <td >
                            <input type="text" name="urlservice" class="form-control input-small" value="{{ $service ->url }}">
                        </td>

                        <td>
                            <img  src="{{asset('/images/update.png')}}" width="25px" height="25px" onclick="submit()">
                        </td>
                    </form>
                    <td>
                        <form action="ar_service/{{$service->id}}" method="POST">
                            {!! csrf_field()  !!}
                            <input type="hidden" name="_method" value="DELETE"/>
                            <img src="{{asset('/images/delete.png')}}" width="25px" height="25px" onclick="submit()">

                        </form>

                    </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</aside>
<!-- right-side -->
</div>



















@endsection


@section('javascript')
<!-- ./wrapper -->
<a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
    <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
</a>
<!-- global js -->
<script src="designeAdmin/js/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="designeAdmin/js/bootstrap.min.js" type="text/javascript"></script>
<!--livicons-->
<script src="designeAdmin/vendors/livicons/minified/raphael-min.js" type="text/javascript"></script>
<script src="designeAdmin/vendors/livicons/minified/livicons-1.4.min.js" type="text/javascript"></script>
<script src="designeAdmin/js/josh.js" type="text/javascript"></script>
<script src="designeAdmin/js/metisMenu.js" type="text/javascript"></script>
<script src="designeAdmin/vendors/holder-master/holder.js" type="text/javascript"></script>
<!-- end of global js -->
<!-- begining of page level js -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="designeAdmin/vendors/datatables/select2.min.js"></script>
<script type="text/javascript" src="designeAdmin/vendors/datatables/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="designeAdmin/vendors/datatables/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="designeAdmin/js/pages/table-editable.js"></script>
<!-- end of page level js -->










<!-- jQuery -->
<script src="designeAdmin/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="designeAdmin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="designeAdmin/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="designeAdmin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>


<!-- Datatables -->
<script>
                                        $(document).ready(function () {
                                            var handleDataTableButtons = function () {
                                                if ($("#datatable-buttons").length) {
                                                    $("#datatable-buttons").DataTable({
                                                        dom: "Bfrtip",
                                                        buttons: [
                                                            {
                                                                extend: "copy",
                                                                className: "btn-sm"
                                                            },
                                                            {
                                                                extend: "csv",
                                                                className: "btn-sm"
                                                            },
                                                            {
                                                                extend: "excel",
                                                                className: "btn-sm"
                                                            },
                                                            {
                                                                extend: "pdfHtml5",
                                                                className: "btn-sm"
                                                            },
                                                            {
                                                                extend: "print",
                                                                className: "btn-sm"
                                                            },
                                                        ],
                                                        responsive: true
                                                    });
                                                }
                                            };

                                            TableManageButtons = function () {
                                                "use strict";
                                                return {
                                                    init: function () {
                                                        handleDataTableButtons();
                                                    }
                                                };
                                            }();

                                            $('#datatable').dataTable();

                                            $('#datatable-keytable').DataTable({
                                                keys: true
                                            });

                                            $('#datatable-responsive').DataTable();

                                            $('#datatable-scroller').DataTable({
                                                ajax: "js/datatables/json/scroller-demo.json",
                                                deferRender: true,
                                                scrollY: 380,
                                                scrollCollapse: true,
                                                scroller: true
                                            });

                                            $('#datatable-fixed-header').DataTable({
                                                fixedHeader: true
                                            });

                                            var $datatable = $('#datatable-checkbox');

                                            $datatable.dataTable({
                                                'order': [[1, 'asc']],
                                                'columnDefs': [
                                                    {orderable: false, targets: [0]}
                                                ]
                                            });
                                            $datatable.on('draw.dt', function () {
                                                $('input').iCheck({
                                                    checkboxClass: 'icheckbox_flat-green'
                                                });
                                            });

                                            TableManageButtons.init();
                                        });
</script>
@endsection