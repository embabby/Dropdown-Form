<?php

use Illuminate\Database\Seeder;
use App\Brand;
use App\Branch;

class BranchesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = Brand::all();
        foreach ($brands as $brand) {
        	factory('App\Branch', 4)->create(['brand_id' => $brand->id]);
        }
    }
}
