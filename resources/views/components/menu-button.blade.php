@props(['class' => ''])

<button class="{{ $class }} menu-button" type="button" aria-label="Переключать меню">
  <x-icon class="menu-button__open-icon" icon="menu" />
  <x-icon class="menu-button__close-icon" icon="close" />
</button>
