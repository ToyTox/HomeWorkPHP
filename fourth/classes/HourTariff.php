<?php

namespace Tariffs;
require_once 'AbstractClass.php';
require_once 'classes\GPS.php';
require_once 'classes\AddDriver.php';

class HourTariff extends Tariff
{
    use GPS;
    use AddDriver;

    public function __construct($pricePerKm, $pricePerHour, $GPS = false, $secondDriver = false)
    {
        $this->pricePerKm = $pricePerKm;
        $this->pricePerMin = $pricePerHour / 60;
        $this->GPS = $GPS;
        $this->secondDriver = $secondDriver;

    }

    public function calcPrice($age, $timeMin, $distKm)
    {
        $hours = ceil($timeMin / 60);

        return parent::calcPrice($age, $hours * 60, $distKm);
    }
}