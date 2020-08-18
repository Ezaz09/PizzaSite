<?php

namespace App\Services;

use App\Currency;
use Carbon\Carbon;

class CurrencyConvertion
{
    protected static $container;

    public static function loadContainer()
    {
        if(is_null(self::$container)) 
        {
            $currencies = Currency::get();
            foreach($currencies as $currency)
            {
                self::$container[$currency->code] = $currency;
            }
        }
    }

    public static function getCurrencies()
    {
        self::loadContainer();

        return self::$container;
    }
    
    public static function convert($sum, $originCurrencyCode = 'USD', $targetCurrencyCode = null)
    {
        self::loadContainer();

        $originCurrency = self::$container[$originCurrencyCode];
        if ($originCurrency->rate == 0 || $originCurrency->updated_at->startOfDay() != Carbon::now()->startOfDay())
        {
           CurrencyRates::getRates();
           self::loadContainer();
           $originCurrency = self::$container[$originCurrencyCode];
        }
        
        if (is_null($targetCurrencyCode)) {
            $targetCurrencyCode = session('currency', 'USD');
        }

        $targetCurrency = self::$container[$targetCurrencyCode];
        if ($targetCurrency->rate == 0 || $targetCurrency->updated_at->startOfDay() != Carbon::now()->startOfDay())
        {
            CurrencyRates::getRates();
            self::loadContainer();
            $targetCurrency = self::$container[$targetCurrencyCode];
        }

        return $sum / $originCurrency->rate * $targetCurrency->rate;
    }

    public static function getCurrencySymbol()
    {
        self::loadContainer();

        $currencyFromSession = session('currency', 'USD');
        $currency = self::$container[$currencyFromSession] ;
        return $currency->symbol;
    }

    public static function getBaseCurrency()
    {
        self::loadContainer();

        foreach(self::$container as $code => $currency) 
        {
           if ($currency->isMain())
           {
               return $currency;
           } 
        }
    }
}