<!-- jQuery 3 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
{{-- <script src="{{ url('public/fusionadmin/bower_components/jquery/dist/jquery.min.js') }}"></script> --}}
<!-- jQuery UI 1.11.4 -->
<script src="{{ url('public/fusionadmin/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ url('public/fusionadmin/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

<script src="{{ url('public/fusionadmin/dist/js/adminlte.min.js') }}"></script>
<script src="{{url('public/fusionadmin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>

<script src="{{url('public/fusionadmin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
  })
})
</script>
<script src="{{ url('public/js/custom.js') }}"></script>

 <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Fusion</b> 
    </div>
    <strong>Copyright &copy; 2017-2018 <a href="https://www.echoinnovators.com.np/">Echo Innovator</a>.</strong> All rights
    reserved.
  </footer>

</div>

