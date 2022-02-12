<?php

if (!$report = $jars->report(REPORT_NAME)) {
    error_response('No such report');
}

if (!in_array(GROUP, $report->groups())) {
    error_response('No such group');
}

$min_version = @getallheaders()['X-Min-Version'];

return [
    'data' => $report->get(GROUP, $min_version),
];
