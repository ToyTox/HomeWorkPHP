<?php

namespace Tariffs;

use http\Exception;

require_once 'AbstractClass.php';
require_once 'classes\GPS.php';

class StudentTariff extends Tariff
{
    use GPS;

    public function __construct($pricePerKm, $pricePerMin, $GPS = false)
    {
        $this->pricePerKm = $pricePerKm;
        $this->pricePerMin = $pricePerMin;
        $this->GPS = $GPS;

    }

    public function calcPrice($age, $timeMin, $distKm)
    {
        if ($age <= 25) {
            return parent::calcPrice($age, $timeMin, $distKm);
        } else {
            throw new \Exception('Возрост водителя не может превышать 25 лет');
        }
    }
}