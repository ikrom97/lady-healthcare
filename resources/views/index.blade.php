<!DOCTYPE html>
<html class="page" lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="robots" content="none" />
  <meta name="googlebot" content="noindex, nofollow" />
  <meta name="yandex" content="none">

  <link rel="icon" href="{{ asset('favicon.ico') }}">
  <link rel="icon" href="{{ asset('favicons/icon.svg') }}" type="image/svg+xml">
  <link rel="apple-touch-icon" href="{{ asset('favicons/180x180.png') }}">
  <link rel="manifest" href="{{ asset('manifest.webmanifest') }}">

  <link rel="stylesheet" href="{{ mix('css/style.min.css') }}">

  <title>@yield('title')</title>
</head>

<body class="page__body">
  <x-page-header />

  @yield('content')

  <x-page-footer />

  <script src="{{ mix('js/script.min.js') }}"></script>
</body>

</html>
