<?php

$file = $jars->record(TABLE_NAME, RECORD_ID, $content_type);

return compact('file', 'content_type');
