<?php

$credentials = json_decode(file_get_contents('php://input'));

return [
    'data' => $jars->login(@$credentials->username, @$credentials->password),
];
