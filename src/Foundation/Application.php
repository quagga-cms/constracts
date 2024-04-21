<?php

namespace Quagga\Contracts\Foundation;

interface Application
{
    /**
     * Register a new "booted" listener.
     *
     * @param  callable  $callback
     * @return void
     */
    public function booted($callback);


    /**
     * Register all of the configured providers.
     *
     * @return void
     */
    public function registerConfiguredProviders();
}
