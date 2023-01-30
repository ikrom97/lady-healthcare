@props([
    'class' => '',
    'href' => '',
])

@if ($href)
  <a class="{{ $class }} text-link" href="{{ $href }}">
    {{ $slot }}
    <x-icon icon="arrow-right" />
  </a>
@else
  <div class="{{ $class }} text-link">
    {{ $slot }}
    <x-icon icon="arrow-right" />
  </div>
@endif
