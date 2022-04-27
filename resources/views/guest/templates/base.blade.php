<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">

  <title>@yield('title') | DC</title>

  <link rel="stylesheet" href="{{  asset('css/app.css')  }}">
</head>
<body>
  <header>
    @include('guest.partials.header')
  </header>
  @yield('content')
  <script src="{{  asset('js/app.js')  }}"></script>
</body>
</html>
