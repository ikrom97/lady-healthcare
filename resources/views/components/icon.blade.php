@props([
  'icon',
  'class' => '',
])

<svg class="{{ $class }}" width="24" height="24">
  <use xlink:href="{{ asset('images/sprites.svg') }}#{{ $icon }}"/>
</svg>
