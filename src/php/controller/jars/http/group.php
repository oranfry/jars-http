<?php

$data = $jars->group(REPORT_NAME, GROUP, @getallheaders()['X-Min-Version']);

return [
    'data' => $data,
    'headers' => [
        'X-Version' => $jars->version(),
    ],
];
