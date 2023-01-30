@props([
    'class' => '',
    'product',
])

<article class="{{ $class }} products-card">
  <h3 class="products-card__title"
    data-prescription="{{ $product->prescription->title }}">
    Премавит Е
  </h3>

  <div class="products-card__inner">
    <img class="products-card__image"
      src="{{ $product->image_thumb }}"
      alt="{{ $product->title }}"
      width="210"
      height="268">

    <p class="products-card__category">{{ $product->category->title }}</p>

    <p class="product-card__description">{!! strip_tags($product->description) !!}</p>

    <x-button href="{{ route('page.products.selected', $product->slug) }}" more>
      Подробнее
    </x-button>
  </div>
</article>
