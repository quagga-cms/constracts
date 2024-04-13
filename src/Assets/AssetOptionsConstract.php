<?php

namespace Quagga\Constracts\Assets;

interface AssetOptionsConstract
{
    public static function parseOptionFromArray($options): AssetOptionsConstract;
}
