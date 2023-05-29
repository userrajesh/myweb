<!DOCTYPE html>
<html lang="en">
<head>
   @include('include.link')
</head>
<body @yield('changeimg')>
@yield ('header')
@yield('menu')
@yield('aboutcontent')

@include('include.footer')
</body>

</html>
