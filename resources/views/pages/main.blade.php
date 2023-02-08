@extends('app')

@section('title', 'Lady healthcare | Главная')

@section('content')
  <main class="content main-content">
    <h1 class="visually-hidden">Фармацевтическая компания Lady Healthcare</h1>

    <section class="info-section">
      <div class="info-section__container container">
        <div class="info-section__content-wrapper">
          <h2>Настоящая <br> забота о вас</h2>
          <p>
            Lady Healthcare – это воплощенная забота о здоровье благодаря
            инновациям и несомненному качеству
          </p>
          <a class="info-section__button button" href="{{ route('page.about') }}">
            Подробнее о нас
            <svg width="24" height="24">
              <use xlink:href="#arrow-right" />
            </svg>
          </a>
        </div>
      </div>
    </section>

    <section class="foundation-section container">
      <div class="foundation-section__wysiwyg wysiwyg">
        <h2>Наша основа</h2>
        <p>
          Lady Healthcare – фармацевтическая компания, которая активно <br>
          развивается с 2005 года. Мы занимаемся разработкой и дистрибьюцией <br>
          качественных и доступных лекарственных препаратов.
        </p>
      </div>

      <ul class="foundation-list">
        @foreach (getFoundationItems() as $item)
          <li class="foundation-list__item">
            <div class="foundation-list__item-top">
              <h3 class="foundation-list__item-title">{{ $item['title'] }}</h3>

              <a class="text-link" href="{{ $item['route'] }}">
                Подробнее
                <svg width="24" height="24">
                  <use xlink:href="#arrow-right" />
                </svg>
              </a>
            </div>

            <div
              class="foundation-list__item-image"
              style="background-image: url({{ $item['image'] }})">
            </div>
          </li>
        @endforeach
      </ul>
    </section>

    <section class="career-section container">
      <div class="career-section__wysiwyg wysiwyg">
        <h2>Карьера</h2>
        <p>
          Сотрудники двигают компанию вперёд и с их помощью мы достигаем успехов.
          Мы стремимся создать хорошие условия работы для каждого сотрудника, чтобы
          они смогли раскрыть свой потенциал.
        </p>
      </div>

      <div class="career-section__button-wrapper">
        <a class="career-section__button button" href="mailto:info@ladyhealthcare.com">
          Присоединяйся к нам
        </a>
      </div>
    </section>

    <section class="products-section container">
      <div class="products-section__wysiwyg wysiwyg">
        <h2>Наши препараты</h2>
        <p>
          Лекарственные средства представлены в основных <br>
          медицинских категориях и, в зависимости от назначения, <br>
          могут быть отпущены по рецепту и без рецепта врача.
        </p>
      </div>

      <div data-container="products"></div>

      <a class="products-section__text-link text-link" href="{{ route('page.products') }}">
        Все препараты
        <svg width="24" height="24">
          <use xlink:href="#arrow-right" />
        </svg>
      </a>
    </section>
  </main>
@endsection
