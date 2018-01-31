<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title','Sample App')</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('layout._header')
    <div class="container">
      @yield('content')
        @include('layout._footer')
    </div>

  </body>
</html>
