<?php

$lines = json_decode(file_get_contents('php://input'));

return [
    'data' => $jars->preview($lines, @getallheaders()['X-Base-Version']),
];
