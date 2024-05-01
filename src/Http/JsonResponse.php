<?php

namespace Quagga\Contracts\Http;

interface JsonResponse extends Response
{
    public static function create($data = null, int $status = 200, array $headers = []);

    public static function fromJsonString(string $data, int $status = 200, array $headers = []);

    public function setCallback(?string $callback = null);

    public function setJson(string $json);

    public function setData($data = []);

    public function getEncodingOptions();

    public function setEncodingOptions(int $encodingOptions);
}
