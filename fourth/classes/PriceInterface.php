<?php

namespace Tariffs;

interface IPrice
{
    public function calcPrice($age, $timeMin, $distKm);
}