<?php

namespace jars\http;

use jars\contract\Constants;

class HttpRouter extends \subsimple\Router
{
    protected static $routes = [
        /***************************************
         *                AUTH                 *
         ***************************************/

        // login

        'POST /auth/login' => [
            'AUTHSCHEME' => 'none',
            'LAYOUT' => 'json',
            'PAGE' => 'jars/http/login',
        ],

        // logout

        'POST /auth/logout' => [
            'AUTHSCHEME' => 'header',
            'LAYOUT' => 'json',
            'PAGE' => 'jars/http/logout',
        ],

        // touch token

        'GET /touch' => [
            'AUTHSCHEME' => 'header',
            'LAYOUT' => 'json',
            'PAGE' => 'jars/http/touch',
        ],

        /***************************************
         *                INFO                 *
         ***************************************/

        'GET /info' => [
            'AUTHSCHEME' => 'header',
            'LAYOUT' => 'json',
            'PAGE' => 'jars/http/info',
            'VARNAME' => null,
        ],

        'GET /info/([_a-zA-Z]+)' => [
            'AUTHSCHEME' => 'header',
            'LAYOUT' => 'json',
            'PAGE' => 'jars/http/info',
            0 => 'VARNAME',
        ],

        /***************************************
         *               RECORD                *
         ***************************************/

        'GET /record/([a-z_]+)/([a-zA-Z0-9]+)' => [
            'AUTHSCHEME' => 'header',
            'LAYOUT' => 'jars/http/file',
            'PAGE' => 'jars/http/record',
            0 => 'TABLE_NAME',
            1 => 'RECORD_ID',
        ],

        /***************************************
         *               REPORT                *
         ***************************************/

        'GET /reports' => [
            'AUTHSCHEME' => 'header',
            'LAYOUT' => 'json',
            'PAGE' => 'jars/http/reports',
        ],

        'GET /report/([a-z]+)/linetypes' => [
            'AUTHSCHEME' => 'header',
            'LAYOUT' => 'json',
            'PAGE' => 'jars/http/linetypes',
            0 => 'REPORT_NAME',
        ],

        'GET /report/([a-z]+)' => [
            'AUTHSCHEME' => 'header',
            'LAYOUT' => 'json',
            'PAGE' => 'jars/http/group',
            'GROUP' => '',
            0 => 'REPORT_NAME',
        ],

        'GET /report/([a-z]+)/(' . Constants::GROUP_PREFIX_PATTERN . ')' => [
            'AUTHSCHEME' => 'header',
            'LAYOUT' => 'json',
            'PAGE' => 'jars/http/groups',
            0 => 'REPORT_NAME',
            1 => 'PREFIX',
        ],

        'GET /report/([a-z]+)/(' . Constants::GROUP_PATTERN . ')' => [
            'AUTHSCHEME' => 'header',
            'LAYOUT' => 'json',
            'PAGE' => 'jars/http/group',
            0 => 'REPORT_NAME',
            1 => 'GROUP',
        ],

        'GET /refresh' => [
            'AUTHSCHEME' => 'header',
            'LAYOUT' => 'json',
            'PAGE' => 'jars/http/refresh',
        ],

        /***************************************
         *                LINE                 *
         ***************************************/

        // save

        'POST /' => [
            'AUTHSCHEME' => 'header',
            'LAYOUT' => 'json',
            'PAGE' => 'jars/http/save',
        ],

        'POST /preview' => [
            'AUTHSCHEME' => 'header',
            'LAYOUT' => 'json',
            'PAGE' => 'jars/http/preview',
        ],

        // read

        'GET /fields/([a-z]+)' => [
            'AUTHSCHEME' => 'header',
            'LAYOUT' => 'json',
            'PAGE' => 'jars/http/fields',
            0 => 'LINETYPE_NAME',
        ],

        'GET /([a-z]+)/([a-zA-Z0-9]+)' => [
            'AUTHSCHEME' => 'header',
            'LAYOUT' => 'json',
            'PAGE' => 'jars/http/get',
            0 => 'LINETYPE_NAME',
            1 => 'LINE_ID',
        ],

        // delete

        'DELETE /([a-z]+)/([a-zA-Z0-9]+)' => [
            'AUTHSCHEME' => 'header',
            'LAYOUT' => 'json',
            'PAGE' => 'jars/http/delete',
            0 => 'LINETYPE_NAME',
            1 => 'LINE_ID',
        ],

        // linetypes

        'GET /linetypes' => [
            'AUTHSCHEME' => 'header',
            'LAYOUT' => 'json',
            'PAGE' => 'jars/http/linetypes',
            'REPORT_NAME' => null,
        ],

        /***************************************
         *              SEQUENCE               *
         ***************************************/

        'GET /n2h/([0-9]+)' => [
            'AUTHSCHEME' => 'header',
            'LAYOUT' => 'json',
            'PAGE' => 'jars/http/n2h',
            0 => 'N',
        ],

        'GET /h2n/([a-zA-Z0-9-]+)' => [
            'AUTHSCHEME' => 'header',
            'LAYOUT' => 'json',
            'PAGE' => 'jars/http/h2n',
            0 => 'H',
        ],
   ];
}
