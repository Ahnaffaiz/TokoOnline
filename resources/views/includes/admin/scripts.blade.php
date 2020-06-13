  <!-- Bootstrap core JavaScript-->
  <script src="{{url('backend/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  
    <!-- Core plugin JavaScript-->
  <script src="{{url('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  
    <!-- Custom scripts for all pages-->
  <script src="{{url('backend/js/sb-admin-2.min.js')}}"></script>
  
    <!-- Page level plugins -->
  <script src="{{url('backend/vendor/chart.js/Chart.min.js')}}"></script>
  
    <!-- Page level custom scripts -->
  <script src="{{url('backend/js/demo/chart-area-demo.js')}}"></script>
  <script src="{{url('backend/js/demo/chart-pie-demo.js')}}"></script>
  <script src="{{url('backend/vendor/moment/moment.min.js')}}"></script>
  <script src="backend/vendor/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
  <script src="{{url('backend/vendor/datepicker/custom.js')}}"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>

  <script>
    $(document).ready(function(){
        setYearPicker()
        setYearRangePicker(".startyear", ".endyear")
    })
    </script>
