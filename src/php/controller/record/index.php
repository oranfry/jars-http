<?php

$tableinfo = @$jars->config($jars->token())->tables[TABLE_NAME];
$ext = @$tableinfo->extension ?? 'json';
$content_type = @$tableinfo->type ?? 'application/json';
$file_rel = 'current/records/' . TABLE_NAME . '/' . RECORD_ID . ($ext ? '.' . $ext : null);
$file = $jars->db_path($file_rel);

if (!is_file($file)) {
    return null;
}

return compact('file', 'content_type');
