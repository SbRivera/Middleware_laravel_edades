<?php

namespace App\Services;

class AgeRouterService
{
    public static function getRouteForAge(int $edad): string
    {
        return match (true) {
            $edad <= 5     => '/bebes',
            $edad <= 12    => '/ninos',
            $edad <= 17    => '/adolescentes',
            $edad <= 25    => '/jovenes',
            $edad <= 59    => '/adultos',
            $edad <= 74    => '/mayores',
            default        => '/longevos',
        };
    }
}
