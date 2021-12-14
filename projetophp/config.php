<?php


$user = 'root';
$password = '';

try {

	$pdo = new PDO('mysql:host=localhost;dbname=projetophp',$user,$password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}

?>