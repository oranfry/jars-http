<?php

$success = $jars->logout();

return [
    'data' => [
        'success' => $success,
    ],
    'headers' => [
        'X-Version' => $jars->version(),
    ],
];
