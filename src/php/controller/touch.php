<?php

if (!$jars->verify_token($jars->token())) {
    error_response('Invalid / Expired Token');
}

return [
    'data' => (object) [
        'timestamp' => time(),
    ],
];
