<footer class="page-footer container">
  <div class="page-footer__block">
    <iframe
      class="page-footer__map"
      src="https://yandex.ru/map-widget/v1/?ll=-0.236027%2C51.473532&z=12.93"
      frameborder="0"
      allowfullscreen="true"></iframe>

    <div class="page-footer__contacts-wrapper">
      <x-main-logo class="page-footer__main-logo" white />

      <dl class="page-footer__description-list">
        <div class="page-footer__description-item">
          <dt class="page-footer__description-term">Адрес</dt>

          <dd class="page-footer__description-definition">
            Блок 18, Норман Роуд, 53, Гринвич Центр Бизнес Парк, Лондон, Англия, SE10 9QF
          </dd>
        </div>

        <div class="page-footer__description-item">
          <dt class="page-footer__description-term">Контакты</dt>

          <dd class="page-footer__description-definition">
            <a href="mailto:info@ladyhealthcare.com">info@ladyhealthcare.com</a>
          </dd>
          <dd class="page-footer__description-definition">
            <a href="tel:+442035982050">+44 203 598 2050</a>
          </dd>
        </div>
      </dl>

      <x-social-list />
    </div>
  </div>

  <p class="page-footer__copyright">
    &copy; {{ date('Y') }} Lady Healthcare <br>
    Все права защищены
  </p>
</footer>
