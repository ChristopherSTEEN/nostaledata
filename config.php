<?php
	session_start();

	define ('MYSQLHOST', 'localhost');
	define ('MYSQLUSER', 'root');
	define ('MYSQLPSW', 'root');
	define ('MYSQLDB', 'nostaledata');
	
	try {
		$PDO = new PDO('mysql:host=' . MYSQLHOST . ';dbname=' . MYSQLDB, MYSQLUSER, MYSQLPSW);
		$PDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
		$PDO->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	} catch (PDOException $e) {
		$e->getMessage();
	}
?>
