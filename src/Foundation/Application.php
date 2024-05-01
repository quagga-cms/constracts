<?php

namespace Quagga\Contracts\Foundation;

use Illuminate\Contracts\Container\Container;

interface Application extends Container
{
    /**
     * Register a new "booted" listener.
     *
     * @param  callable  $callback
     * @return void
     */
    public function booted($callback);


    public function registerBaseServiceProviders();

    public function registerCoreContainerAliases();

    public function registerConfiguredProviders();

    public function bootstrapWith(array $bootstrappers);

    public function setBasePath(string $basePath);

    public function basePath($path = '');

    public function register($provider, $force = false);

    public function getProvider($provider);

    public function getProviders($provider);

    public function resolveProvider($provider);

    public function isBooted();

    public function hasBeenBootstrapped();

    public function shouldSkipMiddleware();
}
