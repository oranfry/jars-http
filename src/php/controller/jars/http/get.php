<?php

return [
    'data' => $jars->get(LINETYPE_NAME, LINE_ID),
    'headers' => [
        'X-Version' => $jars->version(),
    ],
];
