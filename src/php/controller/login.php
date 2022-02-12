<?php

$data = json_decode(file_get_contents('php://input'));

if (!$username = @$data->username) {
    error_response('Missing: username');
}

if (!$password = @$data->password) {
    error_response('Missing: password');
}

if (!$token = $jars->login($username, $password)) {
    error_response('Incorrect username / password');
}

return [
    'data' => (object) ['token' => $token],
];
