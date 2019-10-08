<?php

use Illuminate\Database\Seeder;

class LkpCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lkp_categories')->insert([
            ['description' => 'Air Freight'],
            ['description' => 'Truck'],
            ['description' => 'Sea Freight']
        ]);
    }
}
