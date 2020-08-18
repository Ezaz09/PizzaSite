<?php

namespace App\Services;

use App\Services\CurrencyConvertion;
use GuzzleHttp\Client;
use Exception;

class CurrencyRates
{
    public static function getRates()
    {
        $baseCurrency = CurrencyConvertion::getBaseCurrency();

        $url = config('currency_rates.api_url') . '?base=' . $baseCurrency->code; 

        $client = new Client();

        $response = $client->request('GET', $url);

        if ($response->getStatusCode() !== 200) 
        {
            throw new Exception('There is a problem with currency rate service');
        }

        $rates = json_decode($response->getBody()->getContents(), true)['rates'];

        foreach(CurrencyConvertion::getCurrencies() as $currency)
        {
            if(!$currency->isMain()) 
            {
                if(!isset($rates[$currency->code]))
                {
                    throw new Exception('there is a problem with currency ' . $currency->code);
                } else 
                {
                    $currency->update(['rate' => $rates[$currency->code]]);
                    $currency->touch();
                }
            }
        }
    }
}