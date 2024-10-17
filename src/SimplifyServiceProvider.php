<?php

namespace Simplest;

use Illuminate\Support\Facades\Blade;
use Livewire\Livewire;
use Simplest\Facades\Features\Modal;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SimplestServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name('simplest')
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
        Blade::componentNamespace('Simplest\\Views\\Components', 'simplest');
    }
}
