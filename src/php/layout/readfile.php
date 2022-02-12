<?php

header('Content-Type: ' . $content_type);
header('Content-Length: ' . filesize($file));

foreach (@$headers ?? [] as $header) {
    header($header);
}

readfile($file);
