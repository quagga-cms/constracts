<?php

namespace Quagga\Contracts\Assets;

interface AssetOptionsConstract
{
    public static function parseOptionFromArray($options): AssetOptionsConstract;
}
