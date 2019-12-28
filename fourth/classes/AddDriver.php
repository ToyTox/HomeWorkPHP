<?php

namespace Tariffs;
require_once 'PriceInterface.php';

trait AddDriver
{
    public function calcPriceAddDriver($age, $timeMin, $distKm)
    {
        $pricePerSecondDriver = 100;
        $day = ceil($timeMin / 1470);

        return parent::calcPrice($age, $day * 1440, $distKm) + $pricePerSecondDriver;
    }
}
