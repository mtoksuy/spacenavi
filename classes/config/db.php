<?php
/**
 * The development database settings. These get merged with the global settings.
 */
if($_SERVER["HTTP_HOST"] == "localhost") {
	$host_name = 'localhost';
	$user_name = 'root';
	$password  = 'root';
}
	else {
		$host_name = '150.95.155.33';
		$host_name = 'localhost';
		$user_name = 'root';
		$password  = 'Sm_10120726';
	}
$db_config_array = array(
	'default' => array(
		'type'         => 'mysql',           // 
		'profiling'    => 'true',            // 
		'table_prefix' => '',                // 
		'charset'      => 'utf8',            // 
		'connection'   => array(             // 
			'database'     =>'fuel_judge',     // 
			'hostname'     => $host_name,      // 
			'username'     => $user_name,      // 
			'password'     => $password,       //
		),
	'charset' => 'utf8mb4',    // charaset をutf8mb4に指定して追加
	),
);
