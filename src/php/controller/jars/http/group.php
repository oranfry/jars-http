<?php

[$minVersion, $timeout] = Helper::getMinVersionHeaders();

return [
    'data' => $jars->group(REPORT_NAME, GROUP, $minVersion, $timeout),
];
