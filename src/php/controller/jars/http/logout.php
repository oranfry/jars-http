<?php

$jars->logout();

return [
    'data' => [],
    'headers' => [
        'X-Version' => $jars->version(),
    ],
];
