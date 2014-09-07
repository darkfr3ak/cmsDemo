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

function application_autoloader($class) {
    $class_filename = $class . '.class.php';
    $lib_filename = $class . '.lib.php';
    $class_root = dirname(__FILE__) . "/../";
    $cache_file = "{$class_root}/cache/classpaths.cache";
    $cache_folder = "{$class_root}/cache/";
    $path_cache = (file_exists($cache_file)) ? unserialize(file_get_contents($cache_file)) : array();

    if (!file_exists($cache_folder)) {
        mkdir($cache_folder);
    }

    if (!is_array($path_cache)) {
        $path_cache = array();
    }

    if (array_key_exists($class, $path_cache)) {
        /* Load class using path from cache file (if the file still exists) */
        if (file_exists($path_cache[$class])) {
            require_once $path_cache[$class];
        }
    } else {
        /* Determine the location of the file within the $class_root and, if found, load and cache it */
        $directories = new RecursiveDirectoryIterator($class_root);
        foreach (new RecursiveIteratorIterator($directories) as $file) {
            if ($file->getFilename() == $class_filename || $file->getFilename() == $lib_filename) {
                $full_path = $file->getRealPath();
                $path_cache[$class] = $full_path;
                require_once $full_path;
                break;
            }
        }
    }

    $serialized_paths = serialize($path_cache);
    if ($serialized_paths != $path_cache) {
        file_put_contents($cache_file, serialize($path_cache));
    }
}

spl_autoload_register('application_autoloader');
