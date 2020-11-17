<?php


class Speedometer
{
    const kmMiles = 1.609;

    public static function convertKmToMiles($km)
    {
        return round($km * self::kmMiles);
    }

    public static function convertMilesToKm($km)
    {
        return round( $km * self::kmMiles);
    }
}

echo Speedometer::convertKmToMiles(10);