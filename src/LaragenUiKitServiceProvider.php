<?php

namespace Hehecoding\LaragenUiKit;

use Illuminate\Support\Facades\Blade;
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
            ->hasViews('laragen');
    }

    public function packageBooted()
    {
        Blade::componentNamespace('Hehecoding\\LaragenUiKit\\Components', 'laragen');
    }

}
