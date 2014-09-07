<?php
require 'application/init.php';

if (Session::exists('home')) {
    echo Session::flash('home');
}

$user = new User();
if ($user->isLoggedIn()) {
    ?>
    <p>Hello <a href="#"><?php echo escape($user->data()->username); ?></a>!</p>

    <ul>
        <li><a href="password.php">Change Password</a></li>
        <li><a href="update.php">Update Info</a></li>
        <li><a href="logout.php">Log Out</a></li>
    </ul>
    <?php
    if ($user->hasPermission('admin')) {
        echo 'Is Admin User.';
    }
} else {
    echo '<p>You need to <a href="?task=showlogin">log in</a> or <a href="register.php">register</a>.</p>';
}

$tmpl->setWidget('headerPosition', 'Header');
$tmpl->setWidget('logoPosition', 'Logo');
$tmpl->setWidget('sidebarPosition', 'Twitter');
$tmpl->setWidget('sidebarPosition', 'Login');
$tmpl->show();
