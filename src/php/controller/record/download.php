<?php

$data = require __DIR__ . '/index.php';

$data['headers'] = array_merge(@$data['headers'] ?? [], [
    'Content-Disposition: attachment; filename="' . basename($file) . '"',
]);

return $data;
