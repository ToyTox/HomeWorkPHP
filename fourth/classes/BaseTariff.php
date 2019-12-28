<?php

namespace Tariffs;
require_once 'AbstractClass.php';
require_once 'classes\GPS.php';

class BaseTariff extends Tariff
{
    use GPS;

    public function __construct($pricePerKm, $pricePerMin, $GPS = false)
    {
        $this->pricePerKm = $pricePerKm;
        $this->pricePerMin = $pricePerMin;
        $this->GPS = $GPS;
    }

}