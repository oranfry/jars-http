<?php

$data = $jars->get(LINETYPE_NAME, LINE_ID);

return [
    'data' => $data,
    'headers' => [
        'X-Version' => $jars->version(),
    ],
];
