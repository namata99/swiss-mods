<?php

use Vonama\SwissMods\Types\str;

if (!function_exists('str')) 
{
    function str(string $string): str
    {
        return new str($string);
    }
}