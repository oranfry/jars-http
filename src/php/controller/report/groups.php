<?php

if (!$report = $jars->report(REPORT_NAME)) {
    error_response('No such report');
}

$min_version = @getallheaders()['X-Min-Version'];

return [
    'data' => $report->groups($min_version),
];
