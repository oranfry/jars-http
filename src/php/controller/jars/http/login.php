<?php

$data = json_decode(file_get_contents('php://input'));

return [
    'data' => $jars->login(@$data->username, @$data->password),
];
