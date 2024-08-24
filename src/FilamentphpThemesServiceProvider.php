<?php

namespace MedanWeb\FilamentphpThemes;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use MedanWeb\FilamentphpThemes\Commands\FilamentphpThemesCommand;

class FilamentphpThemesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filamentphp-themes')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filamentphp_themes_table')
            ->hasCommand(FilamentphpThemesCommand::class);
    }
}
