<?php

namespace Hehecoding\LaragenUiKit;

use Hehecoding\LaragenUiKit\Commands\LaragenUiKitCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaragenUiKitServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laragen-ui-kit')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laragen-ui-kit_table')
            ->hasCommand(LaragenUiKitCommand::class);
    }
}
