
<!DOCTYPE html>
<html>

<!--start of heder-->
@include('adminlayout.include.header')
@yield('header')
<!--End of header-->


<body>
<!--start of body -->
@include('adminlayout.include.sidenav')
@yield('body')
@show

<!--end of body -->

<!--footer-->
@include('adminlayout.include.footer')
@yield('footer')
<!--End of footer-->

</body>
</html>