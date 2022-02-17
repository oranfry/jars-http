<?php

header('Content-Type: ' . $content_type);
header('Content-Length: ' . strlen($file));

foreach (@$headers ?? [] as $header) {
    header($header);
}

echo $file;
