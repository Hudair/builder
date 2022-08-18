<?php
	/*
	 * @autor: MultiFour
	 * @version: 1.0.0
	 */

	error_reporting(E_ALL);
	ini_set("display_errors", 1);

	define('SUPRA', 1);
    define('SUPRA_BASE_PATH', __DIR__);

	include_once 'include/modal/html.php';
	include_once "include/modal/section.php";
    include_once "include/modal/fonts.php";

	include_once 'include/view.php';

	$view = new View();
