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
                $validation = $validate->check(HTTP::$POST, array(
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

    public function register() {
        if (Input::exists()) {
            if (Token::check(Input::get('token'))) {
                $validate = new Validate();
                $validation = $validate->check(HTTP::$POST, array(
                    'username' => array(
                        'required' => true,
                        'minimum' => 2,
                        'maximum' => 20,
                        'unique' => 'users'
                    ),
                    'password' => array(
                        'required' => true,
                        'minimum' => 6
                    ),
                    'password_again' => array(
                        'required' => true,
                        'matches' => 'password'
                    ),
                    'name' => array(
                        'required' => true,
                        'minimum' => 2,
                        'maximum' => 50
                    )
                ));

                if ($validation->passed()) {
                    $user = new User();
                    $salt = Hash::salt(32);
                    try {
                        $user->create(array(
                            'username' => Input::get('username'),
                            'password' => Hash::make(Input::get('password'), $salt),
                            'salt' => $salt,
                            'name' => Input::get('name'),
                            'joined' => date('Y-m-d H:i:s'),
                            'group' => 1
                        ));

                        Session::flash('home', 'You have been successfully registered.');
                        Redirect::to('index.php');
                    } catch (Exception $e) {
                        die($e->getMessage());
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
                <input type="text" name="username" id="username" value="<?php echo escape(Input::get('username')); ?>" autocomplete="off">
            </div>
            <div class="field">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <div class="field">
                <label for="password_again">Confirm Password</label>
                <input type="password" name="password_again" id="password_again">
            </div>
            <div class="field">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="<?php echo escape(Input::get('name')); ?>" autocomplete="off">
            </div>
            <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
            <input type="submit" value="Register">
        </form>
        <?php
    }

    public function logout() {
        $user = new User();
        $user->logout();

        Redirect::to('index.php');
    }

    public function chPassword() {
        $user = new User();

        if (!$user->isLoggedIn()) {
            Redirect::to('index.php');
        }

        if (Input::exists()) {
            if (Token::check(Input::get('token'))) {
                $validate = new Validate();
                $validation = $validate->check(HTTP::$POST, array(
                    'password_current' => array(
                        'required' => true,
                        'minimum' => 6
                    ),
                    'password_new' => array(
                        'required' => true,
                        'minimum' => 6
                    ),
                    'password_new_again' => array(
                        'required' => true,
                        'minimum' => 6,
                        'matches' => 'password_new'
                    )
                ));

                if ($validation->passed()) {

                    if (Hash::make(Input::get('password_current'), $user->data()->salt) !== $user->data()->password) {
                        echo 'Your current password entered is incorrect.';
                    } else {
                        $salt = Hash::salt(32);
                        $user->update(array(
                            'password' => Hash::make(Input::get('password_new'), $salt),
                            'salt' => $salt
                        ));

                        Session::flash('home', 'Your password has been changed.');
                        Redirect::to('index.php');
                    }
                } else {
                    foreach ($validation->errors() as $error) {
                        echo $error, '<br>';
                    }
                }
            }
        }
        ?>

        <form action="" method="post">
            <div class="field">
                <label for="password_current">Current Password</label>
                <input type="password" name="password_current" id="password">
            </div>
            <div class="field">
                <label for="password_new">New Password</label>
                <input type="password" name="password_new" id="password_new">
            </div>
            <div class="field">
                <label for="password_new_again">Confirm Password</label>
                <input type="password" name="password_new_again" id="password_new_again">
            </div>
            <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
            <input type="submit" value="Change Password">
        </form>
        <?php
    }

    public function editUser() {
        $user = new User();

        if (!$user->isLoggedIn()) {
            Redirect::to('index.php');
        }

        if (Input::exists()) {
            if (Token::check(Input::get('token'))) {

                $validate = new Validate();
                $validation = $validate->check(HTTP::$POST, array(
                    'name' => array(
                        'required' => true,
                        'minimum' => 2,
                        'maximum' => 50
                    )
                ));

                if ($validation->passed()) {
                    try {
                        $user->update(array(
                            'name' => Input::get('name')
                        ));

                        Session::flash('home', 'Your information has been updated.');
                        Redirect::to('index.php');
                    } catch (Exception $e) {
                        die($e->getMessage());
                    }
                } else {
                    foreach ($validation->errors() as $error) {
                        echo $error, '<br>';
                    }
                }
            }
        }
        ?>

        <form action="" method="post">
            <div class="field">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="<?php echo escape($user->data()->name); ?>">

                <input type="submit" value="Update">
                <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
            </div>
        </form>
        <?php
    }

}
