<?php

namespace Quagga\Contracts\Assets;

use Quagga\Quagga\Assets\AssetUrl;

interface AssetExternalConstract extends AssetConstract
{
    public function setUrl(AssetUrl $url): self;

    public function getUrl();
}
