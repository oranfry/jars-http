<?php

$data = $jars->reports();

return [
    'data' => $data,
    'headers' => [
        'X-Version' => $jars->version(),
    ],
];
