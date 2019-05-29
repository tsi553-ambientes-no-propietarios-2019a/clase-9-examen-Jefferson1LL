<?php 
include('../common/utils.php');

if($_POST) {
	if (isset($_POST['prod']) && isset($_POST['precio'])  && isset($_POST['prod']) && !empty($_POST['precio'])) {
		$prod = $_POST['prod'];
		$precio = $_POST['precio'];
	
		//$user = $_SESSION['user']['id'];

		$sql_insert = "INSERT INTO admin
		(producto,precio)
		VALUES ('$prod','$precio')";

		echo $sql_insert;
		$conn->query($sql_insert);

		if ($conn->error) {
			echo 'Ocurrió un error ' . $conn->error;
		} else {
			redirect('../index.php');
		}
	} else {
		redirect('../admin.php?error_message=Ingrese todos los datos!');
	}
} else {
	redirect('../admin.php');
}