@extends('gentellela')

@section('head')

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<title>Home | CertNote</title>

<!-- Bootstrap -->
<link href="{{ asset('/gentellela/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- Font Awesome -->
<link href="{{ asset('/gentellela/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
<!-- NProgress -->
<link href="{{ asset('/gentellela/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
<!-- iCheck -->
<link href="{{ asset('/gentellela/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
<!-- Datatables -->
<link href="{{ asset('/gentellela/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('/gentellela/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('/gentellela/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('/gentellela/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('/gentellela/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">

<!-- Custom Theme Style -->
<link href="{{ asset('/gentellela/build/css/custom.min.css') }}" rel="stylesheet">
</head>

@endsection

@section('content')

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Users <small>Some examples to get you started</small></h3>
      </div>

      <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
              <button class="btn btn-default" type="button">Go!</button>
            </span>
          </div>
        </div>
      </div>
    </div>

    <div class="clearfix"></div>

<!-- TABLE START -->
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>My Note <small>Domains</small></h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <p class="text-muted font-13 m-b-30">
              The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
            </p>
            <table id="datatable-buttons" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Domain(FQDN)</th>
                  <th>Port No.</th>
                  <th>MEMO</th>
                  <th>Created</th>
                  <th>Modified</th>
                </tr>
              </thead>

              <tbody>
                <?php $no=1; ?>
                @foreach($notes as $note)
                <tr>
                  <td>{{$no++}}</td>
                  <td>{{$note->fqdn}}</td>
                  <td>{{$note->port}}</td>
                  <td>{{$note->memo}}</td>
                  <td>{{$note->created_at}}</td>
                  <td>{{$note->updated_at}}</td>
                </tr>
              @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
<!-- TABLE END -->

<!-- /page content -->

<!-- footer content -->
<footer>
  <div class="pull-right">
    Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
  </div>
  <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>

<!-- jQuery -->
<script src="gentellela/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="gentellela/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="gentellela/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="gentellela/vendors/nprogress/nprogress.js"></script>
<!-- iCheck -->
<script src="gentellela/vendors/iCheck/icheck.min.js"></script>
<!-- Datatables -->
<script src="gentellela/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="gentellela/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="gentellela/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="gentellela/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
<script src="gentellela/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="gentellela/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="gentellela/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="gentellela/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
<script src="gentellela/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="gentellela/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="gentellela/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
<script src="gentellela/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
<script src="gentellela/vendors/jszip/dist/jszip.min.js"></script>
<script src="gentellela/vendors/pdfmake/build/pdfmake.min.js"></script>
<script src="gentellela/vendors/pdfmake/build/vfs_fonts.js"></script>

<!-- Custom Theme Scripts -->
<script src="gentellela/build/js/custom.min.js"></script>

<!-- Datatables -->
<script>
$(document).ready(function() {
var handleDataTableButtons = function() {
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

TableManageButtons = function() {
  "use strict";
  return {
    init: function() {
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
  'order': [[ 1, 'asc' ]],
  'columnDefs': [
    { orderable: false, targets: [0] }
  ]
});
$datatable.on('draw.dt', function() {
  $('input').iCheck({
    checkboxClass: 'icheckbox_flat-green'
  });
});

TableManageButtons.init();
});
</script>
<!-- /Datatables -->
</body>
</html>

@endsection
