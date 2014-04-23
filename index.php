<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

session_start();

include_once($_SERVER['DOCUMENT_ROOT'].'lib/autoload.php');

new Controller();
