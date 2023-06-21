<!doctype html>
<html lang="{{ app()->getLocale() }}">
    
    @include('header.header')
    @yield('headercss')

    <body>
   
   
    @yield('content')
    
    @include('footer.footer')
    @yield('script')

    </body>
</html>