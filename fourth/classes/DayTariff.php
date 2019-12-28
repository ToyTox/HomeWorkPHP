<?php

namespace Tariffs;
require_once 'AbstractClass.php';
require_once 'classes\GPS.php';
require_once 'classes\AddDriver.php';

class DayTariff extends Tariff
{
    use GPS;
    use AddDriver;

    public function __construct($pricePerKm, $pricePerDay, $GPS = false, $secondDriver = false)
    {
        $this->pricePerKm = $pricePerKm;
        $this->pricePerMin = $pricePerDay / 1440;
        $this->GPS = $GPS;
        $this->secondDriver = $secondDriver;
    }

    public function calcPrice($age, $timeMin, $distKm)
    {
        $day = ceil($timeMin / 1470);

        return parent::calcPrice($age, $day * 1440, $distKm);
    }
}