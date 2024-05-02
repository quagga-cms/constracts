<?php

namespace Quagga\Contracts\Foundation;

use Closure;
use Illuminate\Contracts\Container\Container;

interface Application extends Container
{
    public function registerBaseServiceProviders();

    public function registerCoreContainerAliases();

    public function detectEnvironment(Closure $callback);

    public function registerConfiguredProviders();

    public function getCachedServicesPath();

    public function getCachedPackagesPath();

    public function configurationIsCached();

    public function getCachedConfigPath();

    public function bootstrapWith(array $bootstrappers);

    public function setBasePath(string $basePath);

    public function path($path = '');

    public function basePath($path = '');

    public function bootstrapPath($path = '');

    public function configPath($path = '');

    public function register($provider, $force = false);

    public function getProvider($provider);

    public function getProviders($provider);

    public function resolveProvider($provider);

    public function isBooted();

    public function booted($callback);

    public function boot();

    public function hasBeenBootstrapped();

    public function shouldSkipMiddleware();

    public function getDeferredServices();

    public function setDeferredServices(array $services);

    public function addDeferredServices(array $services);
}
