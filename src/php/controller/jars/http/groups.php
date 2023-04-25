<?php

return [
    'data' => $jars->groups(REPORT_NAME, @getallheaders()['X-Min-Version']),
    'headers' => [
        'X-Version' => $jars->version(),
    ],
];
