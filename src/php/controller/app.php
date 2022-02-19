<?php

use subsimple\Config;
use jars\Jars;

$jars_config = Config::get()->jars;
$jars = Jars::of($jars_config->portal_home, $jars_config->db_home);

switch (AUTHSCHEME) {
    case 'header':
        if (!$token = @getallheaders()['X-Auth']) {
            error_response('Invalid auth ' . PAGE);
        }

        $jars->token($token);

        if (!$jars->touch()) {
            error_response('Invalid auth');
        }

        break;

    case 'none':
        break;

    default:
        error_response('Internal Server Error', 500);
}

return compact('jars');
