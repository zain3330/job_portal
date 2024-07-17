<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .dataTables_wrapper {
            min-height: 400px; /* Adjust the min-height as needed */
        }
    </style>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard 2</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{url('admin/plugins/fontawesome-free/css/all.min.css')}}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{url('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{url('admin/css/adminlte.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{url('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{url('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">


</head>


    <!-- Preloader -->
    {{--    <div class="preloader flex-column justify-content-center align-items-center">--}}
    {{--        <img class="animation__wobble" src="{{url('admin/images/AdminLTELogo.png')}}" alt="AdminLTELogo"--}}
    {{--             height="60" width="60">--}}
    {{--    </div>--}}



    @yield('content-section')

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{url('admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{url('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{url('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('admin/js/adminlte.js')}}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{url('admin/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{url('admin/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{url('admin/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{url('admin/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{url('admin/plugins/chart.js/Chart.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->
<script src="{{url('admin/js/demo.js')}}"></script>
<!-- AdminLTE admin demo (This is only for demo purposes) -->
<script src="{{url('admin/js/pages/dashboard2.js')}}"></script>

<!-- DataTables & Plugins -->
<script src="{{url('admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{url('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{url('admin/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{url('admin/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{url('admin/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{url('admin/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{url('admin/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{url('admin/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>


<!-- Initialize DataTables -->

@yield('script')

</html>
