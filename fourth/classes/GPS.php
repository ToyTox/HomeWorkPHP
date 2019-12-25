<?php

trait GPS
{
    public function calcPriceGPS($age, $timeMin, $distKm)
    {
        return parent::calcPrice($age, $timeMin, $distKm) + 1000;
    }
}
