<?php

namespace jars\http;

class HttpRouter extends \subsimple\Router
{
    protected static $routes = [
        /***************************************
         *                AUTH                 *
         ***************************************/

        // login
        'POST /auth/login' => ['PAGE' => 'login', 'AUTHSCHEME' => 'none', 'LAYOUT' => 'json'],

        // logout
        'POST /auth/logout' => ['PAGE' => 'logout', 'AUTHSCHEME' => 'header', 'LAYOUT' => 'json'],

        // touch token
        'GET /touch' => ['PAGE' => 'touch', 'LAYOUT' => 'json', 'AUTHSCHEME' => 'header'],

        /***************************************
         *                LINE                 *
         ***************************************/

        // save
        'POST /' => ['PAGE' => 'save', 'LAYOUT' => 'json', 'AUTHSCHEME' => 'header'],
        'POST /preview' => ['PAGE' => 'preview', 'LAYOUT' => 'json', 'AUTHSCHEME' => 'header'],

        // read
        'GET /([a-z]+)/([A-Z0-9]+)' => ['LINETYPE_NAME', 'LINE_ID', 'PAGE' => 'line/index', 'LAYOUT' => 'json', 'AUTHSCHEME' => 'header'],
        'GET /([a-z]+)/fields' => ['LINETYPE_NAME', 'PAGE' => 'line/fields', 'LAYOUT' => 'json', 'AUTHSCHEME' => 'header'],

        // delete
        'DELETE /([a-z]+)/([A-Z0-9]+)' => ['LINETYPE_NAME', 'LINE_ID', 'PAGE' => 'line/delete', 'LAYOUT' => 'json', 'AUTHSCHEME' => 'header'],

        /***************************************
         *               RECORD                *
         ***************************************/

        'GET /record/([a-z_]+)/([A-Z0-9]+)' => ['TABLE_NAME', 'RECORD_ID', 'PAGE' => 'record/index', 'LAYOUT' => 'readfile', 'AUTHSCHEME' => 'header'],
        'GET /record/([a-z_]+)/([A-Z0-9]+)/download' => ['TABLE_NAME', 'RECORD_ID', 'PAGE' => 'record/downoad', 'LAYOUT' => 'readfile', 'AUTHSCHEME' => 'header'],

        /***************************************
         *               REPORT                *
         ***************************************/

        'GET /report/([a-z]+)/groups' => ['REPORT_NAME', 'PAGE' => 'report/groups', 'LAYOUT' => 'json', 'AUTHSCHEME' => 'header'],
        'GET /report/([a-z]+)/([a-zA-Z0-9-]+)' => ['REPORT_NAME', 'GROUP', 'PAGE' => 'report/get', 'LAYOUT' => 'json', 'AUTHSCHEME' => 'header'],
   ];
}