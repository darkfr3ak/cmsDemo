<?php

/*
 * Copyright (C) 2014 darkfr3ak
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */
ob_start();
ini_set('session.use_trans_sid', false);
ini_set('session.use_only_cookies', true);
ini_set('url_rewriter.tags', '');
header("Content-type:text/html; charset=utf-8");
error_reporting(E_ALL ^ E_NOTICE);

define("DS", DIRECTORY_SEPARATOR);
define("SITE_ROOT", str_replace($DOCUMENT_ROOT, "", dirname($PHP_SELF)));

session_start();

$GLOBALS['config'] = array(
    'mysql' => array(
        'host' => '127.0.0.1',
        'username' => 'root',
        'password' => 'root',
        'db' => 'reg'
    ),
    'remember' => array(
        'cookie_name' => 'hash',
        'cookie_expiry' => 1209600,
    ),
    'session' => array(
        'session_name' => 'user',
        'token_name' => 'token'
    )
);
require_once('application/functions/Autoload.function.php');
require_once('application/functions/Sanitize.function.php');

if (Cookie::exists(Config::get('remember/cookie_name')) && !Session::exists(Config::get('session/session_name'))) {
    $hash = Cookie::get(Config::get('remember/cookie_name'));
    $hashCheck = DB::getInstance()->get('users_session', array('hash', '=', $hash));

    if ($hashCheck->count()) {
        $user = new User($hashCheck->first()->user_id);
        $user->login();
    }
}
HTTP::init();

$tmpl = new TemplateFunctions();
$tmpl->setTemplate("silverenergy");
