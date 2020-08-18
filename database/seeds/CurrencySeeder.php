<?php

use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->insert([
           [
               'code' => 'USD',
               'symbol' => '$',
               'is_main' => 1,
               'rate' => 1,
           ],
           [
            'code' => 'EUR',
            'symbol' => '€',
            'is_main' => 0,
            'rate' => 0,
        ],
        ]);
    }
}
