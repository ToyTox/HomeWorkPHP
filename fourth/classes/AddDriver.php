<?php

trait AddDriver
{
    public function calcPriceAddDriver($age, $timeMin, $distKm)
    {
        return parent::calcPrice($age, $timeMin, $distKm) + 1000;
    }
}
