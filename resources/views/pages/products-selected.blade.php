@extends('app')

@section('title', 'Lady healthcare | ' . $product->title)

@section('content')
  <main class="products-selected content container">
    <ul class="breadcrumbs">
      <li class="breadcrumbs__item">
        <a class="breadcrumbs__link" href="{{ route('page.home') }}">
          Главная
        </a>
        <svg class="breadcrumbs__icon" width="24" height="24">
          <use xlink:href="#arrow-right" />
        </svg>
      </li>
      <li class="breadcrumbs__item">
        <a class="breadcrumbs__link" href="{{ route('page.products') }}">
          Все препараты
        </a>
        <svg class="breadcrumbs__icon" width="24" height="24">
          <use xlink:href="#arrow-right" />
        </svg>
      </li>
      <li class="breadcrumbs__item">
        <a class="breadcrumbs__link breadcrumbs__link--current">{{ $product->title }}</a>
      </li>
    </ul>

    <div class="products-selected__container">
      <div class="products-selected__top">
        <p>{{ $product->prescription->title }} препарат</p>

        <img src="{{ asset($product->image) }}" alt="{{ $product->title }}">

        <div prescription="{{ $product->prescription->title }}">
          <a class="button" href="{{ asset($product->file) }}" target="_blank">
            <svg width="24" height="24">
              <use xlink:href="#download" />
            </svg>
            Скачать инструкцию
          </a>
          <a class="button" href="{{ $product->url }}" target="_blank">
            <svg width="24" height="24">
              <use xlink:href="#basket" />
            </svg>
            Купить в аптеке
          </a>
        </div>
      </div>

      <div class="products-selected__wysiwyg wysiwyg">
        <h1>{{ $product->title }}</h1>
        {!! $product->description !!}
        <p></p>
        {!! $product->body !!}
      </div>
    </div>

    <section class="popular-section">
      <div class="wysiwyg" data-text="popular-products" style="margin-bottom: 32px">
        {!! texts()['popular-products'] !!}
      </div>

      <div data-container="products"></div>
    </section>
  </main>
@endsection
