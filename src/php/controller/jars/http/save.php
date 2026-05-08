<?php

$lines = json_decode(file_get_contents('php://input'));

return [
    'data' => $jars->save($lines, @getallheaders()['X-Base-Version']),
];
