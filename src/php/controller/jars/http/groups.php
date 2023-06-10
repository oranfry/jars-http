<?php

$data = $jars->groups(REPORT_NAME, @getallheaders()['X-Min-Version']);

return [
    'data' => $data,
    'headers' => [
        'X-Version' => $jars->version(),
    ],
];
