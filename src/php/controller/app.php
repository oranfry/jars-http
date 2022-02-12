<?php

use subsimple\Config;
use jars\Jars;

$jars_config = Config::get()->jars;
$jars = Jars::of($jars_config->portal_home, $jars_config->db_home);

switch (AUTHSCHEME) {
    case 'header':
        if ((!$token = @getallheaders()['X-Auth']) || !$jars->verify_token($token)) {
            error_response('Invalid auth');
        }

        $jars->token($token);

        break;

    case 'none':
        break;

    default:
        error_response('Internal Server Error', 500);
}

return compact('jars');
