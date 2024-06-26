<?php
namespace Vonama\SwissMods\Type\Factory;

use Vonama\SwissMods\Type\str;

function ss(string $string): str
{
    return new str($string);
}

function str(string $string): str
{
    return new str($string);
}