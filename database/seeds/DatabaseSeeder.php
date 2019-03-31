<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
	        CountriesTableSeeder::class,
            CitiesTableSeeder::class,
            AreasTableSeeder::class,
            CompaniesTableSeeder::class,
            BrandsTableSeeder::class,
            BranchesTableSeeder::class,
	        StandsTableSeeder::class,

	        

    ]);
    }
}
