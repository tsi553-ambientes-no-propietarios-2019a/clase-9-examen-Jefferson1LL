<?php 
session_start();


$conn = new mysqli('localhost', 'root', '', 'empresa');

if($conn->connect_error) {
	echo 'Existió un error en la conexión ' . $conn->connect_error;
	exit;
}

function redirect($url) {
	header('Location: ' . $url);
	exit;
}

function getProductos($conn) {
	$user_id = $_SESSION['registro']['id'];
	$sql = "SELECT producto
		FROM admin";

	$products = [];
		if($res->num_rows > 0) {
			while ($row = $res->fetch_assoc()) {
				$products[] = $row;
			}
		}

		return $products;


}

/*
$public_pages = [
	'/Examen1/index.php', 
	'/Examen1/php/process_login.php',
	'/Examen1/registro.php',
	'/Examen1/php/process_registration.php'
];

if ( !isset($_SESSION['registro']) && !in_array( $_SERVER['SCRIPT_NAME'], $public_pages)) {
	redirect($_SERVER["HTTP_HOST"] . '/Examen1/index.php');
} elseif( 
	isset($_SESSION['registro']) && (
	$_SERVER['SCRIPT_NAME'] == '/Examen1/index.php' || 
	$_SERVER['SCRIPT_NAME'] == '/Examen1/registration.php')) {
	redirect($_SERVER["HTTP_HOST"] . '/Examen1/index.php');
}
*/
