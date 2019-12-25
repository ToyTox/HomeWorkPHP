<?php

namespace Tariffs;
require_once 'AbstractClass.php';

class HourTariff extends Tariff
{

    public function __construct($pricePerKm, $pricePerHour)
    {
        $this->pricePerKm = $pricePerKm;
        $this->pricePerMin = $pricePerHour / 60;
    }

    public function calcPrice($age, $timeMin, $distKm)
    {
        $hours = ceil($timeMin / 60);

        return parent::calcPrice($age, $hours * 60, $distKm);
    }
}