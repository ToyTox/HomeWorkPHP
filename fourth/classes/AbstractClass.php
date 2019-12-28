<?php

namespace Tariffs;
require_once 'PriceInterface.php';

abstract class Tariff implements IPrice
{
    protected $pricePerKm;
    protected $pricePerMin;
    public $GPS;
    public $secondDriver;


    public function calcPrice($age, $timeMin, $distKm)
    {
        $totalPricePerKm = $this->pricePerKm * $distKm;
        $totalPricePerMin = $this->pricePerMin * $timeMin;
        return ($totalPricePerKm + $totalPricePerMin) * $this->calcAgeFactor($age);
    }

    private function calcAgeFactor($age)
    {
        if (($age < 18) || ($age > 65)) {
            throw new \Exception('Водителю должно быть от 18 до 65 лет');
        } elseif (($age >= 18) && ($age <= 21)) {
            return 1.1;
        } else {
            return 1;
        }
    }

}

