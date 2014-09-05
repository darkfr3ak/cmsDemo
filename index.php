<?php

require 'application/init.php';
$tmpl->setWidget('headerPosition', 'Header');
$tmpl->setWidget('logoPosition', 'Logo');
$tmpl->setWidget('sidebarPosition', 'HelloWorld', array('hello_to' => 'MyCms'));
$tmpl->show();
