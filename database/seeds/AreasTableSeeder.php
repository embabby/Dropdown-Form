<?php

use Illuminate\Database\Seeder;
use App\Area;
use App\City;

class AreasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = City::all();
        foreach ($cities as $city) {
        	factory('App\Area', 2)->create(['city_id' => $city->id]);
        }
    }
}
