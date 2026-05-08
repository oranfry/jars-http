<?php

namespace OranFry\Jars\HTTP;

class Helper
{
    public function getMinVersionHeaders(): array
    {
        $headers = getallheaders();

        $minVersion = null;
        $timeout = null;

        if (array_key_exists('X-Min-Version', $headers)) {
            $minVersion = $headers['X-Min-Version'];
        }

        if (array_key_exists('X-Timeout', $headers)) {
            $timeout = (int) $headers['X-Timeout'];
        }

        return [$minVersion, $timeout];
    }
}