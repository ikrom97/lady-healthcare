@extends('index')

@section('title', 'Lady healthcare | Главная')

@section('content')
  <main class="content content--main">
    <h1 class="visually-hidden">Фармацевтическая компания Lady Healthcare</h1>

    <x-info-section />

    <x-foundation-section />

    <x-career-section />

    <x-products-section />
  </main>
@endsection
