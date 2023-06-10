<?php

$data = $jars->h2n(H);

return [
    'data' => $data,
    'headers' => [
        'X-Version' => $jars->version(),
    ],
];
