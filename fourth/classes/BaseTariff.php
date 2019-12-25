<?php

namespace Tariffs;
require_once 'AbstractClass.php';

class BaseTariff extends Tariff
{
//    use GPS;

    public function __construct($pricePerKm, $pricePerMin)
    {
        $this->pricePerKm = $pricePerKm;
        $this->pricePerMin = $pricePerMin;
    }

}