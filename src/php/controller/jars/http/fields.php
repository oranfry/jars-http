<?php

return [
    'data' => $jars->fields(LINETYPE_NAME),
    'headers' => [
        'X-Version' => $jars->version(),
    ],
];
