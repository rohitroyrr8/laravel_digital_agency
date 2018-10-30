<!doctype html>
<html lang="{{ app()->getLocale() }}">
  @include('include.header')
  @include('include.script')
  <body>

  @include('include.navbar')
  
  <!-- @include('include.alert') -->
  
  @yield('content')  

  @include('include.footer')

  </body>

</html>