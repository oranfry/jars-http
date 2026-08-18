<?php

$data = $jars->info(VARNAME);

return [
    'data' => $data,
    'headers' => [
        'X-Version' => $jars->version(),
    ],
];
