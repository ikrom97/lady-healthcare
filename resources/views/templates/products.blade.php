<ul class="products-list">
  @foreach ($products as $product)
    <li class="products-list__item">
      <x-products-card :product="$product" />
    </li>
  @endforeach
</ul>
