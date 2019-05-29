<?php 
include('../common/utils.php');

if($_POST) {
	if (isset($_POST['nombre']) && isset($_POST['tipo']) && isset($_POST['username']) && isset($_POST['password'])
	&& !empty($_POST['nombre']) && !empty($_POST['tipo']) && !empty($_POST['username']) && !empty($_POST['password'])) {
		$nombre = $_POST['nombre'];
		$tipo = $_POST['tipo'];
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql_insert = "INSERT INTO registro
		(nombre,tipo, user, pass)
		VALUES ('$nombre','$tipo','$username', MD5('$password'))";

		echo $sql_insert;
		$conn->query($sql_insert);

		if ($conn->error) {
			echo 'Ocurrió un error ' . $conn->error;
		} else {
			redirect('../index.php');
		}
	} else {
		redirect('../registro.php?error_message=Ingrese todos los datos!');
	}
} else {
	redirect('../registration.php');
}