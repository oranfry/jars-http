<?php

return [
    'data' => $jars->group(REPORT_NAME, GROUP, @getallheaders()['X-Min-Version']),
    'headers' => [
        'X-Version' => $jars->version(),
    ],
];
