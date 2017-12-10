<?php

use Illuminate\Database\Seeder;

class MarketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('markets')->insert([

            [
                'name' => 'New York Stock Exchange',

            ],
            [
                'name' => 'London Stock Exchange',

            ],
            [
                'name' => 'Hong Kong Stock Exchange',

            ],
            [
                'name' => 'Shanghai Stock Exchange',

            ],
            [
                'name' => 'Deutsche Börse Frankfurt',
                
            ]

        ]);
    }
}
