<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannersSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    foreach (range(1, 3) as $key) {
      Banner::create([
        'image' => 'img/banners/banner.png',
        'title' => 'Нео Витес',
        'subtitle' => 'Для иммунитета',
        'text' => 'НЕО ВИТЕС (для иммунитета) стимулирует как специфические, так и неспецифические факторы иммунитета.',
        'link' => 'К препарату',
        'url' => '#',
      ]);
    }
  }
}
