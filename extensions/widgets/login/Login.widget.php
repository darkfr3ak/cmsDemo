<?php
/*
 * Copyright (C) 2014 darkfr3ak <info at darkfr3ak.de>
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

/**
 * Description of Login
 *
 * @author darkfr3ak <info at darkfr3ak.de>
 */
class LoginWidget extends Widget {

    function display() {
        $user = new User();
        if ($user->isLoggedIn()) {
            ?>
            <p>Hello <a href="#"><?php echo escape($user->data()->username); ?></a>!</p>

            <ul>
                <li><a href="password.php">Change Password</a></li>
                <li><a href="update.php">Update Info</a></li>
                <li><a href="?app=UserMGMT&task=logout">Log Out</a></li>
            </ul>
            <?php
            if ($user->hasPermission('admin')) {
                echo 'Is Admin User.';
            }
        } else {
            echo '<p>You need to <a href="?app=UserMGMT&task=login">log in</a> or <a href="?app=UserMGMT&task=register">register</a>.</p>';
        }
    }

}
