<?php

$lines = json_decode(file_get_contents('php://input'));
$data = $jars->preview($lines, @getallheaders()['X-Base-Version']);

return [
    'data' => $data,
    'headers' => [
        'X-Version' => $jars->version(),
    ],
];
