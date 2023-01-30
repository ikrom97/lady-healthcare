@props([
  'icon',
  'class' => '',
])

<svg class="{{ $class }}" width="24" height="24">
  <use xlink:href="#{{ $icon }}"/>
</svg>
