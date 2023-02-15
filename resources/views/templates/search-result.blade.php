<ul class="global-search__results">
  @foreach ($data['products'] as $product)
    <li class="global-search__result">
      <a href="{{ route('page.products.selected', $product->slug) }}">
        Препараты - {{ $product->title }}
      </a>
    </li>
  @endforeach

  @foreach ($data['texts'] as $text)
    <li class="global-search__result">
      <a href="{{ route('page.' . $text->page) . '#' . $text->slug }}">
        {!! getPageTitle($text->page) . ' - ' . preg_replace('#<[^>]+>#', ' ', $text->text) !!}
      </a>
    </li>
  @endforeach
</ul>
