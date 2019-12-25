<?php

namespace Tariffs;

use http\Exception;

require_once 'AbstractClass.php';

class StudentTariff extends Tariff
{
    public function __construct($pricePerKm, $pricePerMin)
    {
        $this->pricePerKm = $pricePerKm;
        $this->pricePerMin = $pricePerMin;
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