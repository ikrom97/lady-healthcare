@props([
    'class' => '',
    'href' => '',
    'type' => 'button',
    'more' => false,
])

@if ($href)
  <a class="{{ $class }} button" href="{{ $href }}">
    {{ $slot }}

    @if ($more)
      <x-icon class="button__icon button__icon--after" icon="arrow-right" />
    @endif
  </a>
@else
  <button class="{{ $class }} button" type="{{ $type }}">
    {{ $slot }}

    @if ($more)
      <x-icon class="button__icon button__icon--after" icon="arrow-right" />
    @endif
  </button>
@endif
