@props(['class' => ''])

<section class="{{ $class }} products-section container">
  <x-wysiwyg class="products-section__wysiwyg">
    <h2>Наши препараты</h2>

    <p>
      Лекарственные средства представлены в основных <br>
      медицинских категориях и, в зависимости от назначения, <br>
      могут быть отпущены по рецепту и без рецепта врача.
    </p>
  </x-wysiwyg>

  <div data-container="products"></div>

  <x-text-link class="products-section__text-link" href="{{ route('page.products') }}">
    Все препараты
  </x-text-link>
</section>
