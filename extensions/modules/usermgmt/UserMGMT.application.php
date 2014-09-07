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
 * Description of UserMGMT
 *
 * @author darkfr3ak <info at darkfr3ak.de>
 */
class UserMGMTApplication extends Application {

    //put your code here
    public function login() {
        if (Input::exists()) {
            if (Token::check(Input::get('token'))) {
                $validate = new Validate();
                $validation = $validate->check($_POST, array(
                    'username' => array('required' => true),
                    'password' => array('required' => true)
                ));

                if ($validation->passed()) {
                    $user = new User();
                    $remember = (Input::get('remember') === 'on') ? true : false;
                    $login = $user->login(Input::get('username'), Input::get('password'), $remember);

                    if ($login) {
                        Redirect::to('index.php');
                    } else {
                        echo 'Check yo self foo.';
                    }
                } else {
                    echo '<ul>';
                    foreach ($validation->errors() as $error) {
                        echo '<li>' . $error . '</li>';
                    }
                    echo '</ul>';
                }
            }
        }
        ?>

        <form action="" method="post">
            <div class="field">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" autocomplete="off">
            </div>
            <div class="field">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" autocomplete="off">
            </div>
            <div class="field">
                <label for="remember">
                    <input type="checkbox" name="remember" id="remember">
                    Remember Me</label>
            </div>
            <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
            <input type="submit" value="Log In">
        </form>
        <?php
    }

    public function display() {
        echo 'here view content functionality will takes place';
        echo $this->site_root;
    }

}
