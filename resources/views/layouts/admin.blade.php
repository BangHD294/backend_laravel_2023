<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('title')

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{asset("adminlte/plugins/fontawesome-free/css/all.min.css")}}">
    <link rel="stylesheet" href="{{asset("adminlte/dist/css/adminlte.min.css")}}">
    <link rel="stylesheet" href="{{asset("adminlte/plugins/fontawesome-free/css/all.min.css")}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset("adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css")}}">
    <link rel="stylesheet" href="{{asset("adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css")}}">
    <link rel="stylesheet" href="{{asset("adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css")}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset("adminlte/dist/css/adminlte.min.css")}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    @include("partials.header")
    @include("partials.siderbar")
    @yield('content')
    @include("partials.footer")
</div>

<script src="{{asset("adminlte/plugins/jquery/jquery.min.js")}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset("adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<script src="{{asset("adminlte/dist/js/adminlte.min.js")}}"></script>
{{--add new--}}

<script src="{{asset("adminlte/plugins/jquery/jquery.min.js")}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset("adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js")}}"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset("adminlte/plugins/datatables/jquery.dataTables.min.js")}}"></script>
<script src="{{asset("adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js")}}"></script>
<script src="{{asset("adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js")}}"></script>
<script src="{{asset("adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js")}}"></script>
<script src="{{asset("adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js")}}"></script>
<script src="{{asset("adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js")}}"></script>
<script src="{{asset("adminlte/plugins/jszip/jszip.min.js")}}"></script>
<script src="{{asset("adminlte/plugins/pdfmake/pdfmake.min.js")}}"></script>
<script src="{{asset("adminlte/plugins/pdfmake/vfs_fonts.js")}}"></script>
<script src="{{asset("adminlte/plugins/datatables-buttons/js/buttons.html5.min.js")}}"></script>
<script src="{{asset("adminlte/plugins/datatables-buttons/js/buttons.print.min.js")}}"></script>
<script src="{{asset("adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js")}}"></script>
<script src="{{asset("adminlte/dist/js/adminlte.min.js")}}"></script>
{{--<script src="{{asset("adminlte/dist/js/demo.js")}}"></script>--}}
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
</body>
</html>
