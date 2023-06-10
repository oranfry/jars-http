<?php

$data = $jars->linetypes(REPORT_NAME);

return [
    'data' => $data,
    'headers' => [
        'X-Version' => $jars->version(),
    ],
];
