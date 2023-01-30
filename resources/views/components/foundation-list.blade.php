@props(['class' => ''])

<ul class="foundation-list">

  @foreach (getFoundationItems() as $item)
    <li class="foundation-list__item">
      <div class="foundation-list__item-top">
        <h3 class="foundation-list__item-title">{{ $item['title'] }}</h3>

        <x-text-link href="{{ $item['route'] }}">
          Подробнее
        </x-text-link>
      </div>

      <div
        class="foundation-list__item-image"
        style="background-image: url({{ $item['image'] }})">
      </div>
    </li>
  @endforeach

</ul>
