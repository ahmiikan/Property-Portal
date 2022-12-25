<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Utils\AppGlobals;


class CountriesSeeder extends Seeder
{

 /**
     * Run the database seeds.
     *
     * @return void
  */
  public function run()
  {

        Country::insert(AppGlobals::$countries);

  }
}

