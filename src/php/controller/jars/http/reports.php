<?php

return [
    'data' => $jars->reports(),
    'headers' => [
        'X-Version' => $jars->version(),
    ],
];
