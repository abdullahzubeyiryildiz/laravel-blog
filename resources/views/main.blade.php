<!doctype html>
<html lang="en">
<head>
   @include('inc._head')
</head>
<body>
   @include('inc._nav')

   <div class="container">

    @yield('content')

    @include('inc._footer')

  </div>

  @include('inc._javascript')

  @yield('scripts')
</body>
</html>