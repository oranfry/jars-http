<?php

use jars\Filesystem;

$lines = json_decode(file_get_contents('php://input'));
$jars->filesystem(new Filesystem(Filesystem::NO_PERSIST));
$data = $jars->preview($lines, @getallheaders()['X-Base-Version']);

return [
    'data' => $data,
    'headers' => [
        'X-Version' => $jars->version(),
    ],
];
