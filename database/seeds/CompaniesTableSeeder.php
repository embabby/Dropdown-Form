<?php

use Illuminate\Database\Seeder;
use App\Area;
use App\Company;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $areas = Area::all();
        foreach ($areas as $area) {
        	factory('App\Company', 3)->create(['area_id' => $area->id]);
        }
    }
}
