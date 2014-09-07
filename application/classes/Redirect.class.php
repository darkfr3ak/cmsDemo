<?php

// Copyright 2014 Nick Warren

class Redirect {
	public static function to($location = null) {
		if($location) {
			if(is_numeric($location)) {
				switch($location) {
					case 404:
						header('HTTP/1.0 404 Not Found');
						include('core/includes/errors/include.404.php');
						exit();
					break;	
				}
			}
			header('Location: '.$location);
			exit();
		}
	}
}