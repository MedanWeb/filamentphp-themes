<?php

namespace MedanWeb\FilamentphpThemes\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MedanWeb\FilamentphpThemes\FilamentphpThemes
 */
class FilamentphpThemes extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \MedanWeb\FilamentphpThemes\FilamentphpThemes::class;
    }
}
