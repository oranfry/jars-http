<?php

return (object) [
    'jars' => (object) [
        'portal_home' => @$portal_home,
        'db_home' => @$db_home,
    ],
    'requires' => [SUBSIMPLE_HOME],
    'router' => 'jars\http\HttpRouter',
];
