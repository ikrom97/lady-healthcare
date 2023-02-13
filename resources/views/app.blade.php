<!DOCTYPE html>
<html class="page" lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <meta name="robots" content="none" />
  <meta name="googlebot" content="noindex, nofollow" />
  <meta name="yandex" content="none">

  <link rel="icon" href="{{ asset('favicon.ico') }}">
  <link rel="icon" href="{{ asset('favicons/icon.svg') }}" type="image/svg+xml">
  <link rel="apple-touch-icon" href="{{ asset('favicons/180x180.png') }}">
  <link rel="manifest" href="{{ asset('manifest.webmanifest') }}">

  <link rel="stylesheet" href="{{ mix('css/style.min.css') }}">
  {{-- @if (session('editMode')) --}}
  <link rel="stylesheet" href="{{ asset('simditor/simditor.css') }}">
  {{-- @endif --}}

  <title>@yield('title')</title>
</head>

<body class="page__body">
  <x-icons />

  <x-page-header />

  @yield('content')

  <x-page-footer />

  {{-- @if (session('editMode')) --}}
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="{{ asset('simditor/module.js') }}"></script>
  <script src="{{ asset('simditor/hotkeys.js') }}"></script>
  <script src="{{ asset('simditor/uploader.js') }}"></script>
  <script src="{{ asset('simditor/simditor.js') }}"></script>
  {{-- @endif --}}

  <script src="{{ mix('js/app.js') }}"></script>
</body>

</html>
