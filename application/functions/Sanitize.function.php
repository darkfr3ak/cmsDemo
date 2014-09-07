<?php

// Copyright 2014 Nick Warren

function escape($string) {
	return htmlentities($string, ENT_QUOTES, 'UTF-8');
}