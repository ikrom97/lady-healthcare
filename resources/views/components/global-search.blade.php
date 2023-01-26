@props(['class' => ''])

<form
  class="{{ $class }} global-search {{ request()->segment(1) ? 'global-search--hidden' : '' }}"
  onsubmit="return false">
  @csrf

  <label class="global-search__label" for="global-search" aria-label="Искать">
    <x-icon icon="search" />
  </label>

  <input class="global-search__input"
    id="global-search"
    name="keyword"
    type="search"
    placeholder="Введите запрос поиска"
    autocomplete="off">

  <button class="global-search__button" type="reset" aria-label="Сбросить">
    <x-icon class="arrow-right-icon" icon="arrow-right" />
    <x-icon class="close-icon" icon="close" />
  </button>

  <ul class="global-search__tag-list">
    <li class="global-search__tag-item">
      <a class="global-search__tag-link" href="#">Витамины</a>
    </li>
    <li class="global-search__tag-item">
      <a class="global-search__tag-link" href="#">Ухо</a>
    </li>
    <li class="global-search__tag-item">
      <a class="global-search__tag-link" href="#">Горло</a>
    </li>
    <li class="global-search__tag-item">
      <a class="global-search__tag-link" href="#">Нос</a>
    </li>
  </ul>
</form>
