@extends('app')

@section('title', 'Lady healthcare | О нас')

@section('content')
  <main class="content about-content">
    <ul class="breadcrumbs container">
      <li class="breadcrumbs__item">
        <a class="breadcrumbs__link" href="{{ route('page.home') }}">
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

    <section class="values-section container">
      <h2 class="values-section__title">Наши ценности</h2>

      <ul class="values-list">
        <li class="values-list__item">
          <div class="values-list__wysiwyg wysiwyg">
            <h3>Внимательность и этика</h3>
            <p>
              Один из главных принципов нашей корпоративной культуры – забота о здоровье каждого. С помощью нашей продукции мы стараемся повысить благополучие и уровень жизни людей, что является приоритетным путем развития компании
            </p>
          </div>
        </li>
        <li class="values-list__item">
          <div class="values-list__wysiwyg wysiwyg">
            <h3>Совершенствование</h3>
            <p>
              Мы стараемся постоянно совершенствовать методы создания своей продукции и находимся в поиске инноваций для производства еще более качественных лекарств, чтобы улучшить доступ населения к необходимой медицинской помощи
            </p>
          </div>
        </li>
        <li class="values-list__item">
          <div class="values-list__wysiwyg wysiwyg">
            <h3>Открытость и доверие</h3>
            <p>
              Доверие между коллегами – основа деятельности нашей компании. Также мы ведем открытый бизнес с партнерами на законной и взаимовыгодной основах. Укрепление взаимопонимания является приоритетом при работе во всех направлениях
            </p>
          </div>
        </li>
        <li class="values-list__item">
          <div class="values-list__wysiwyg wysiwyg">
            <h3>Забота о партнерах</h3>
            <p>
              Наша компания взаимодействует со специалистами здравоохранения, пациентами, производителями фармацевтической продукции, деловыми партнерами. Мы учитываем потребности, пожелания и интересы каждой группы людей
            </p>
          </div>
        </li>
      </ul>
    </section>
  </main>
@endsection
