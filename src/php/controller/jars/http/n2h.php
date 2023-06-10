<?php

$data = $jars->n2h(N);

return [
    'data' => $data,
    'headers' => [
        'X-Version' => $jars->version(),
    ],
];
