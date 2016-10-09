<?php
header("content-type:text/html;charset=utf-8");
// function __autoload($className){
// 	$class= "./php/".strtolower($className).".class.php";
// 	if(file_exists($class)){
// 		require_once  $class;
// 	}
// } 

require '/php/mysql.class.php';
require '/smarty/libs/Smarty.class.php';
require '/php/home.class.php';

if (!empty($_SERVER["PATH_INFO"])){
	$path = $_SERVER["PATH_INFO"];
	$path = explode("/",ltrim($path,"/")) ;
	$entry=ucwords( $path[0] );
	if(!empty($path[1])){
		$method=$path[1];
		if( class_exists($entry) ){
			if( method_exists($entry, $method) ){
				$entry=new $entry();
				$entry->$method();
				exit;
			}
		}
	}
}
$home=new Home();
$home->loadHome();
exit;














