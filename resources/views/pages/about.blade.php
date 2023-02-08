@extends('app')

@section('title', 'Lady healthcare | О нас')

@section('content')
  <main class="about-content">
    <ul class="breadcrumbs container">
      <li class="breadcrumbs__item">
        <a class="breadcrumbs__link" href="{{ route('page.main') }}">
          Главная
        </a>
        <svg class="breadcrumbs__icon" width="24" height="24">
          <use xlink:href="#arrow-right" />
        </svg>
      </li>
      <li class="breadcrumbs__item">
        <a class="breadcrumbs__link breadcrumbs__link--current">О нас</a>
      </li>
    </ul>

    <section class="about-section container">
      <div class="about-section__wysiwyg wysiwyg">
        <h2>О компании</h2>
        <p>
          Lady Healthcare – фармацевтическая компания, которая активно <br>
          развивается с 2005 года. Мы занимаемся разработкой и дистрибьюцией <br>
          качественных и доступных лекарственных препаратов.
        </p>
      </div>

      <ul class="about-section__list">
        <li class="about-section__list-item">
          <div class="about-section__list-wysiwygs wysiwyg">
            <h3>Миссия</h3>
            <p>
              Разрабатывать, применять и модернизировать научные инновационные
              достижения для решения задач в сфере здравоохранения, а также находить
              новые пути лечения заболеваний.
            </p>
          </div>
          <div class="about-section__list-images" style="background-image: url('/images/about-section-mission.jpg')"></div>
        </li>

        <li class="about-section__list-item">
          <div class="about-section__list-wysiwygs wysiwyg">
            <h3>Видение</h3>
            <p>
              Наша компания старается создать надежную и стабильную компанию, которая
              вносит улучшения в жизнь граждан и в практику здравоохранения.
            </p>
          </div>
          <div class="about-section__list-images" style="background-image: url('/images/about-section-vision.jpg')"></div>
        </li>
      </ul>
    </section>
  </main>
@endsection
