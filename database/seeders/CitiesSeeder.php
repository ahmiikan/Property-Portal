<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;
use App\Models\Country;
use App\Utils\AppGlobals;


class CitiesSeeder extends Seeder
{
    
    private function getPakistanID(){
        return Country::where('name','Pakistan')->first()->id;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $id = $this->getPakistanID();

        for($i=0; $i < count(AppGlobals::$cities); $i++)
        {
            $city = new City();
            $city->name = AppGlobals::$cities[$i];
            $city->country_id = $id;
            $city->save();
        }
    }
}
