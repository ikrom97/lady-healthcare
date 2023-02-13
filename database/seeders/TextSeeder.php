<?php

namespace Database\Seeders;

use App\Models\Text;
use Illuminate\Database\Seeder;

class TextSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $texts = [
      [
        'slug' => 'home-info',
        'page' => 'home',
        'text' => '<h2>Настоящая забота о вас</h2><p>Lady Healthcare – это воплощенная забота о здоровье благодаря инновациям и несомненному качеству</p><p><br></p><p><a href="/about" target="_self">Подробнее о нас</a></p>',
      ],
      [
        'slug' => 'home-foundation',
        'page' => 'home',
        'text' => '<h2>Наша основа</h2><p>Lady Healthcare – фармацевтическая компания, которая активно&nbsp;</p><p>развивается с 2005 года. Мы занимаемся разработкой и дистрибьюцией&nbsp;</p><p>качественных и доступных лекарственных препаратов.</p>',
      ],
      [
        'slug' => 'home-career',
        'page' => 'home',
        'text' => '<h2>Карьера</h2><p>Сотрудники двигают компанию вперёд и с их помощью мы достигаем успехов. Мы стремимся создать хорошие условия работы для каждого сотрудника, чтобы они смогли раскрыть свой потенциал.</p>',
      ],
      [
        'slug' => 'home-products',
        'page' => 'home',
        'text' => '<h2>Наши препараты</h2><p>Лекарственные средства представлены в основных&nbsp;</p><p>медицинских категориях и, в зависимости от назначения,&nbsp;</p><p>могут быть отпущены по рецепту и без рецепта врача.</p>',
      ],
      [
        'slug' => 'about-info',
        'page' => 'about',
        'text' => '',
      ],
      [
        'slug' => 'about-mission',
        'page' => 'about',
        'text' => '',
      ],
      [
        'slug' => 'about-vision',
        'page' => 'about',
        'text' => '',
      ],
      [
        'slug' => 'about-value-1',
        'page' => 'about',
        'text' => '',
      ],
      [
        'slug' => 'about-value-2',
        'page' => 'about',
        'text' => '',
      ],
      [
        'slug' => 'about-value-3',
        'page' => 'about',
        'text' => '',
      ],
      [
        'slug' => 'about-value-4',
        'page' => 'about',
        'text' => '',
      ],
    ];

    foreach ($texts as $text) {
      Text::create([
        'slug' => $text['slug'],
        'page' => $text['page'],
        'text' => $text['text'],
      ]);
    }
  }
}
