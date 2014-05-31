<?php

	define("ROOT", dirname(__FILE__));
	define("DS", DIRECTORY_SEPARATOR);
	
	$app_path = ROOT . DS . 'application' . DS;
	$public_path = ROOT . DS . 'public' . DS;

	define("ENVIRONMENT", "development");
	
	if(defined("ENVIRONMENT")){
		switch(ENVIRONMENT){
			case 'development':
				error_reporting(E_ALL);
				ini_set("display_errors", 1);
			break;
			
			case 'production':
				error_reporting(0);
				ini_set("display_errors", 0);
			break;
			
			case 'offline':
				exit("This application is in offline environment. Please try again later!");
			break;
			
			default:
				exit("Unknown environment. Please review your code!");
			break;
		}
	}else{
		exit("Environment is not defined. Please review your code!");
	}
	
	require_once 'application/init.php';
	
	$app = new App();