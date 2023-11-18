<?php

$credentials = json_decode(file_get_contents('php://input'));
$data = $jars->login(@$credentials->username, @$credentials->password);
$headers = ['X-Version' => $jars->version()];

return compact('data', 'headers');
