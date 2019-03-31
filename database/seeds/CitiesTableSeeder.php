<?php

use Illuminate\Database\Seeder;
use App\Country;
use App\City;


class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = Country::all();
        foreach ($countries as $country) {
        	factory('App\City', 2)->create(['country_id' => $country->id]);
        }
    }
}
