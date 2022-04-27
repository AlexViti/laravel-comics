<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=PT+Sans+Narrow:wght@400;700&family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">

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
