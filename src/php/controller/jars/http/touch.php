<?php

$data = $jars->touch();

return [
    'data' => $data,
    'headers' => [
        'X-Version' => $jars->version(),
    ],
];
