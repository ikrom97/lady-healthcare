@props([
    'class' => '',
    'white' => false,
])

<a class="{{ $class }} main-logo" @if (request()->segment(1)) href="{{ route('page.main') }}" @endif>
  @if ($white)
    <img class="main-logo__image"
      src="{{ asset('images/main-logo--white.svg') }}"
      width="96"
      height="36"
      alt="Вернуться на главную страницу">
  @else
    <img class="main-logo__image"
      src="{{ asset('images/main-logo.svg') }}"
      width="96"
      height="36"
      alt="Вернуться на главную страницу">
  @endif
</a>
