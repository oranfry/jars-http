<?php

$config = @json_decode(file_get_contents('php://input'), true);

$data = $jars->get(
    LINETYPE_NAME,
    LINE_ID,
    $config['children'] ?? [],
);

return [
    'data' => $data,
    'headers' => [
        'X-Version' => $jars->version(),
    ],
];
