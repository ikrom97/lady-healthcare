@props(['class' => ''])

<section class="{{ $class }} info-section">
  <div class="info-section__container container">
    <div class="info-section__content-wrapper">
      <h2>Настоящая <br> забота о вас</h2>

      <p>Lady Healthcare – это воплощенная забота о здоровье благодаря
        инновациям и несомненному качеству</p>

      <x-button class="info-section__button" href="{{ route('page.about') }}" more>
        Подробнее о нас
      </x-button>
    </div>
  </div>
</section>
