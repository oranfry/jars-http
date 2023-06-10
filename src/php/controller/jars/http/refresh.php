<?php

$data = $jars->refresh();

return [
    'data' => $data,
    'headers' => [
        'X-Version' => $jars->version(),
    ],
];
