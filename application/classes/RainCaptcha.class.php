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

/*
 * * RainCaptcha PHP Wrapper v1.1.0
 * *
 * * Documentation: http://raincaptcha.driversworld.us/pages/docs_php_wrapper
 * *
 * * This code is in the public domain.
 */

class RainCaptcha {

    const HOST = 'http://raincaptcha.driversworld.us/api/v1';

    private $sessionId;

    public function __construct($sessionId = null) {
        if ($sessionId === null)
            $this->sessionId = md5($_SERVER['SERVER_NAME'] . ':' . $_SERVER['REMOTE_ADDR']);
        else
            $this->sessionId = $sessionId;
    }

    public function getImage() {
        return self::HOST . '/image/' . $this->sessionId . '?rand' . rand(100000, 999999);
    }

    public function checkAnswer($answer) {
        if (empty($answer))
            return false;
        $response = @file_get_contents(self::HOST . '/check/' . $this->sessionId . '/' . $answer);
        if ($response === false)
            return true;
        return $response === 'true';
    }

}
