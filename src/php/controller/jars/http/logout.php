<?php

$data = $jars->logout();

return [
    'data' => $data,
    'headers' => [
        'X-Version' => $jars->version(),
    ],
];
