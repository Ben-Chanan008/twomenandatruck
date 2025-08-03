<?php

use Illuminate\Support\Facades\URL;

function activeLink(string $route, ?string $class): string
{
    if (URL::current() === URL::to($route)) {
        return $class ?? '';
    }

    return '';
}

/**
 * Method getCurrencySymbol
 *
 * @param string $symbol $symbol [explicite description]
 * @param float|null $price
 *
 * @return string|null
 */
function getCurrencySymbol(string $symbol, ?float $price = null)
{
    $currencies = ['cad' => '$CAD', 'pounds' => 'GBP', 'euros' => '€', 'usd' => '$', 'naira' => '₦'];
    // dd(strval($price) . $currencies[$symbol]);
    return array_key_exists($symbol, $currencies) ? $currencies[$symbol] . ' ' . strval($price) : NULL;
}