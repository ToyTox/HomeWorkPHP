<?php

namespace Tariffs;
require_once 'PriceInterface.php';

trait GPS
{
    public function calcPriceGPS($age, $timeMin, $distKm)
    {
        $pricePerHourGPS = 15;
        $timeWithGPS = ceil($timeMin / 60);
        $whitGPS = $pricePerHourGPS * $timeWithGPS;
        return parent::calcPrice($age, $timeMin, $distKm) + $whitGPS;
    }
}
