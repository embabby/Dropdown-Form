<?php

use Illuminate\Database\Seeder;
use App\Stand;
use App\Branch;

class StandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $branches = Branch::all();
        foreach ($branches as $branch) {
        	factory('App\Stand', 4)->create(['branch_id' => $branch->id]);
        }
    }
}
