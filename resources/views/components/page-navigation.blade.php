@props(['class' => ''])

<ul class="{{ $class }} page-navigation">

  @foreach (getAppPages() as $page)
    <li class="page-navigation__item {{ isCurrentPage($page) ? 'page-navigation__item--current' : '' }}">
      <a class="page-navigation__link" @if (!isCurrentPage($page)) href="{{ $page['route'] }}" @endif>
        {{ $page['title'] }}
      </a>
    </li>
  @endforeach

</ul>
