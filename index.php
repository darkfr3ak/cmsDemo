<?php

require 'application/init.php';

if (Session::exists('home')) {
    echo Session::flash('home');
}

$tmpl->setWidget('headerPosition', 'Header');
$tmpl->setWidget('logoPosition', 'Logo');
$tmpl->setWidget('sidebarPosition', 'Twitter');
$tmpl->show();
