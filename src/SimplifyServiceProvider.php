<?php

namespace Simplify;

use Illuminate\Support\Facades\Blade;
use Livewire\Livewire;
use Simplify\Facades\Features\Modal;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SimplifyServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name('simplify')
            ->hasConfigFile()
            ->hasAssets()
            ->hasViews();
    }

    public function bootingPackage(): void
    {
        $this->registerLivewireComponents();
        $this->registerComponents();
    }

    private function registerLivewireComponents()
    {
        //
    }

    private function registerComponents(): void
    {
        Blade::componentNamespace('Simplify\\Views\\Components', 'simplify');
    }
}
