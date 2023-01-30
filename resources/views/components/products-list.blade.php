@props(['class' => ''])

@if ($GLOBALS['products'] == '')
  <p>Продукты загружаются...</p>
@endif

@if ($GLOBALS['products'] == [])
  <p>Нет продуктов</p>
@endif

@if ($GLOBALS['products'] && count($GLOBALS['products']) != 0)
  <ul class="products-list">

    @foreach ($GLOBALS['products'] as $product)
      <li class="products-list__item">
        <x-products-card :product="$product" />
      </li>
    @endforeach

  </ul>
@endif
