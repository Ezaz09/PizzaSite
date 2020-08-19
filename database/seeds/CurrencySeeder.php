<?php

use Illuminate\Database\Seeder;
use App\Currency;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

           $currency = [
               'code' => 'USD',
               'symbol' => '$',
               'is_main' => 1,
               'rate' => 1,
           ];
        Currency::create($currency);
        
           $currency = [
            'code' => 'EUR',
            'symbol' => '€',
            'is_main' => 0,
            'rate' => 0,
           ];
        Currency::create($currency);
       
    }
}
