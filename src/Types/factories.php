<?php
namespace Vonama\SwissMods\Types\Factory;
use Vonama\SwissMods\Types\str;

function ss(string $string): str
{
    return new str($string);
}

function str(string $string): str
{
    return new str($string);
}