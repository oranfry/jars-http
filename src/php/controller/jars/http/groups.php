<?php

[$minVersion, $timeout] = Helper::getMinVersionHeaders();

return [
    'data' => $jars->groups(REPORT_NAME, PREFIX, $minVersion),
];
