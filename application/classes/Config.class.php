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
 * Description of Config
 *
 * @author darkfr3ak <info at darkfr3ak.de>
 */
class Config {

    public $_dbh;

    //put your code here
    public function init() {
        $pdoConfig = new stdClass();
        $pdoConfig->_database = isset($dbname) ? $dbname : 'm2';
        $pdoConfig->_server = isset($servername) ? $servername : 'localhost';
        $pdoConfig->_user = isset($dbusername) ? $dbusername : 'root';
        $pdoConfig->_password = isset($dbpassword) ? $dbpassword : 'root';
        $pdoConfig->_engine = 'mysql';
        $pdoConfig->_showErrors = true;

        $this->_dbh = new Database($pdoConfig);
    }

}
