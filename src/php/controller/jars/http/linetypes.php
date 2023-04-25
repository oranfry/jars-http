<?php

return [
    'data' => $jars->linetypes(REPORT_NAME),
    'headers' => [
        'X-Version' => $jars->version(),
    ],
];
