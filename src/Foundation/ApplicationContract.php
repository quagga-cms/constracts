<?php

namespace Quagga\Contracts\Foundation;

interface ApplicationContract
{
    /**
     * Register a new "booted" listener.
     *
     * @param  callable  $callback
     * @return void
     */
    public function booted($callback);
}
