
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
 * Description of Core
 *
 * @author darkfr3ak <info at darkfr3ak.de>
 */
class CoreApplication extends Application {

    private $_db;

    public function display() {
        $this->_db = DB::getInstance();

        $data = $this->_db->get('articles', array("article_id", '=', "1"));
        echo "<pre>";
        print_r($data->first()->article_title);
        echo "</pre>";
    }

}
