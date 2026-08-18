<?php

$data = $jars->extra(KEY);

return [
    'data' => $data,
    'headers' => [
        'X-Version' => $jars->version(),
    ],
];
