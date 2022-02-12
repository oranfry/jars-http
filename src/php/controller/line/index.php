<?php

if (!$linetype = $jars->linetype(LINETYPE_NAME)) {
    error_response('No such linetype', 400);
}

if (!$data = $linetype->get(LINE_ID)) {
    error_response('No such line', 400);
}

return compact('data');
