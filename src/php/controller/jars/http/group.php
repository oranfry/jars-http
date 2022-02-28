<?php

return [
    'data' => $jars->group(REPORT_NAME, GROUP, @getallheaders()['X-Min-Version']),
];
