<?php

$data = $jars->fields(LINETYPE_NAME);

return [
    'data' => $data,
    'headers' => [
        'X-Version' => $jars->version(),
    ],
];
