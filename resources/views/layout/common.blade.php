<!DOCTYPE HTML>
<html lang="ja">
  <head>
    @yield('head')
  </head>
  <body>
    @yield('header')
    <div class="contents">
      <div class="sidebar">
        @yield('sidebar')
      </div>
      <div class="main">
        @yield('content')
      </div>
    </div>
    @yield('footer')
  </body>
</html>
