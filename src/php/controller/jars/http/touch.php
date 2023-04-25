<?php

return [
    'data' => $jars->touch(),
    'headers' => [
        'X-Version' => $jars->version(),
    ],
];
