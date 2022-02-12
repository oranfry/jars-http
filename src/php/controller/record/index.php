<?php

$tableinfo = @$jars->config($jars->token())->tables[TABLE_NAME];
$ext = @$tableinfo->extension ?? 'json';
$content_type = @$tableinfo->type ?? 'application/json';
$record_file_rel = 'current/records/' . TABLE_NAME . '/' . RECORD_ID . ($ext ? '.' . $ext : null);
$record_file = $jars->db_path($record_file_rel);

if (!is_file($record_file)) {
    error_response('No such record: ' . $record_file, 400);
}

return compact('file', 'content_type');
