<?php

$data = $jars->get(
    LINETYPE_NAME,
    LINE_ID,
    @json_decode(file_get_contents('php://input')) ?? [],
);

return [
    'data' => $data,
    'headers' => [
        'X-Version' => $jars->version(),
    ],
];
