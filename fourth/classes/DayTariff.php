<?php

namespace Tariffs;
require_once 'AbstractClass.php';

class DayTariff extends Tariff
{
    public function __construct($pricePerKm, $pricePerDay)
    {
        $this->pricePerKm = $pricePerKm;
        $this->pricePerMin = $pricePerDay / 1440;
    }

    public function calcPrice($age, $timeMin, $distKm)
    {
        $day = ceil($timeMin / 1470);

        return parent::calcPrice($age, $day * 1440, $distKm);
    }
}