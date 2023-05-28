<?php

namespace parzival42codes\laravelResourcesOptimisation;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class UserManagementServiceProvider extends PackageServiceProvider
{
    public const PACKAGE_NAME = 'laravel-user-management';

    public const PACKAGE_NAME_SHORT = 'user-management';

    public function configurePackage(Package $package): void
    {
        $package->name(self::PACKAGE_NAME)
            ->hasViews()
            ->hasRoute('route');
    }

    public function registeringPackage(): void
    {

    }
}
