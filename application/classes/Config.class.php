<?php

// Copyright 2014 Nick Warren

class Config {

    public static function get($path = null) {
        if ($path) {
            $config = $GLOBALS['config'];
            $path = explode('/', $path);

            foreach ($path as $parameter) {
                if (isset($config[$parameter])) {
                    $config = $config[$parameter];
                }
            }

            return $config;
        }

        return false;
    }

}

?>