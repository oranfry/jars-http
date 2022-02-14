<?php

use jars\Filesystem;

$lines = json_decode(file_get_contents('php://input'));
$jars->filesystem(new Filesystem(Filesystem::NO_PERSIST));

return [
    'data' => $jars->preview($lines),
];
