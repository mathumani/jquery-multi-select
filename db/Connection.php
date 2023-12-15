<?php

namespace Controller;
use \PDO as PDO;

$dsn = "mysql:host=app-db;dbname=school;charset=UTF8";

try {
	$pdo = new PDO($dsn, "root", "Secured.");
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		

} catch (PDOException $ex) {
	echo $ex->getMessage();
}
?>
