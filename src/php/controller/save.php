<?php

$lines = json_decode(file_get_contents('php://input'));
$data = $jars->save($lines);

return [
    'data' => $data,
    'version' => $jars->version(),
];
