<?php

namespace jars\http;

class HttpRouter extends \subsimple\Router
{
    protected static $routes = [
        /***************************************
         *                AUTH                 *
         ***************************************/

        // login

        'POST /auth/login' => [
            'AUTHSCHEME' => 'none',
            'LAYOUT' => 'jars/http/json',
            'PAGE' => 'jars/http/login',
        ],

        // logout

        'POST /auth/logout' => [
            'AUTHSCHEME' => 'header',
            'LAYOUT' => 'jars/http/json',
            'PAGE' => 'jars/http/logout',
        ],

        // touch token

        'GET /touch' => [
            'AUTHSCHEME' => 'header',
            'LAYOUT' => 'jars/http/json',
            'PAGE' => 'jars/http/touch',
        ],

        /***************************************
         *                LINE                 *
         ***************************************/

        // save

        'POST /' => [
            'AUTHSCHEME' => 'header',
            'LAYOUT' => 'jars/http/json',
            'PAGE' => 'jars/http/save',
        ],

        'POST /preview' => [
            'AUTHSCHEME' => 'header',
            'LAYOUT' => 'jars/http/json',
            'PAGE' => 'jars/http/preview',
        ],

        // read

        'GET /fields/([a-z]+)' => [
            'AUTHSCHEME' => 'header',
            'LAYOUT' => 'jars/http/json',
            'PAGE' => 'jars/http/fields',
            0 => 'LINETYPE_NAME',
        ],

        'GET /([a-z]+)/([a-zA-Z0-9]+)' => [
            'AUTHSCHEME' => 'header',
            'LAYOUT' => 'jars/http/json',
            'PAGE' => 'jars/http/get',
            0 => 'LINETYPE_NAME',
            1 => 'LINE_ID',
        ],

        // delete

        'DELETE /([a-z]+)/([a-zA-Z0-9]+)' => [
            'AUTHSCHEME' => 'header',
            'LAYOUT' => 'jars/http/json',
            'PAGE' => 'jars/http/delete',
            0 => 'LINETYPE_NAME',
            1 => 'LINE_ID',
        ],

        // linetypes

        'GET /linetypes' => [
            'AUTHSCHEME' => 'header',
            'LAYOUT' => 'jars/http/json',
            'PAGE' => 'jars/http/linetypes',
            'REPORT_NAME' => null,
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
            'LAYOUT' => 'jars/http/json',
            'PAGE' => 'jars/http/reports',
        ],

        'GET /report/([a-z]+)/linetypes' => [
            'AUTHSCHEME' => 'header',
            'LAYOUT' => 'jars/http/json',
            'PAGE' => 'jars/http/linetypes',
            0 => 'REPORT_NAME',
        ],

        'GET /report/([a-z]+)/groups' => [
            'AUTHSCHEME' => 'header',
            'LAYOUT' => 'jars/http/json',
            'PAGE' => 'jars/http/groups',
            0 => 'REPORT_NAME',
        ],

        'GET /report/([a-z]+)/([a-zA-Z0-9-]+)' => [
            'AUTHSCHEME' => 'header',
            'LAYOUT' => 'jars/http/json',
            'PAGE' => 'jars/http/group',
            0 => 'REPORT_NAME',
            1 => 'GROUP',
        ],

        'GET /refresh' => [
            'AUTHSCHEME' => 'header',
            'LAYOUT' => 'jars/http/json',
            'PAGE' => 'jars/http/refresh',
        ],

        /***************************************
         *              SEQUENCE               *
         ***************************************/

        'GET /n2h/([0-9]+)' => [
            'AUTHSCHEME' => 'header',
            'LAYOUT' => 'jars/http/json',
            'PAGE' => 'jars/http/n2h',
            0 => 'N',
        ],

        'GET /h2n/([a-zA-Z0-9-]+)' => [
            'AUTHSCHEME' => 'header',
            'LAYOUT' => 'jars/http/json',
            'PAGE' => 'jars/http/n2h',
            0 => 'H',
        ],
   ];
}
