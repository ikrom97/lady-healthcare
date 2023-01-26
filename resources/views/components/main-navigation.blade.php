@props(['class' => ''])

<nav class="{{ $class }} main-navigation">
  <x-main-logo class="main-navigation__main-logo" />

  <x-menu-button class="main-navigation__toggler" />

  <x-page-navigation />
</nav>
