<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    Category::create(['name' => 'lifestyle']);
    Category::create(['name' => 'food']);
    Category::create(['name' => 'fashion']);
    Category::create(['name' => 'travel']);
  }
}
