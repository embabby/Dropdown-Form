<?php

use Illuminate\Database\Seeder;
use App\Brand;
use App\Company;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = Company::all();
        foreach ($companies as $company) {
        	factory('App\Brand', 3)->create(['company_id' => $company->id]);
        }
    }
}
