<?php

$data = json_decode(file_get_contents('php://input'));

$data = $jars->login(@$data->username, @$data->password);

return [
    'data' => $data,
    'headers' => [
        'X-Version' => $jars->version(),
    ],
];
