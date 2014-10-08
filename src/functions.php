<?php
namespace Fit;

function integerToBinaryString($integer, $length)
{
    return str_pad(decbin($integer), $length, '0', STR_PAD_LEFT);
}

function integerToBooleanArray($integer)
{
    return array_reverse(
        array_map(
            function ($bit) {
                return (bool) $bit;
            },
            str_split(integerToBinaryString($integer, 16))
        )
    );
}

function positionToDegrees($semicircles)
{
    return number_format(round($semicircles / (pow(2, 31) / 180), 6, PHP_ROUND_HALF_EVEN), 6, '.', '');
}

function positionToSemicircles($degrees)
{
    return round($degrees * (pow(2, 31) / 180), 0, PHP_ROUND_HALF_EVEN);
}
