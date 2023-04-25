<?php

return [
    'data' => $jars->delete(LINETYPE_NAME, LINE_ID),
    'headers' => [
        'X-Version' => $jars->version(),
    ],
];
