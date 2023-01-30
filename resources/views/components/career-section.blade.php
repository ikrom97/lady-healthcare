@props(['class' => ''])

<section class="{{ $class }} career-section container">
  <x-wysiwyg class="career-section__wysiwyg">
    <h2>Карьера</h2>
    <p>
      Сотрудники двигают компанию вперёд и с их помощью мы достигаем успехов.
      Мы стремимся создать хорошие условия работы для каждого сотрудника, чтобы
      они смогли раскрыть свой потенциал.
    </p>
  </x-wysiwyg>

  <div class="career-section__button-wrapper">
    <x-button class="career-section__button" href="mailto:info@ladyhealthcare.com">
      Присоединяйся к нам
    </x-button>
  </div>
</section>
