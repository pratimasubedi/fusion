<!doctype html>
<html lang="{{ app()->getLocale() }}">
    
    @include('userlayout.include.header')
    @yield('headercss')

    <body>
   
   
    @yield('usercontent')
    
    @include('userlayout.include.footer')
    @yield('script')

    </body>
</html>