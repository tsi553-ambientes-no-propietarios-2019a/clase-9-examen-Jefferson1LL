<?php 
include('../common/utils.php');
if($_POST) {
	if (isset($_POST['user']) && isset($_POST['pass']) && !empty($_POST['user']) && !empty($_POST['pass'])) {
		$username = $_POST['user'];
		$password = $_POST['pass'];

		$sql = "SELECT *
		FROM registro
		WHERE user='$username'
		AND pass=MD5('$password')";

		$res = $conn->query($sql);

		if ($conn->error) {
			redirect('../index.php?error_message=Ocurrió un error: ' . $conn->error);
		}

		if($res->num_rows > 0) {
				while ($row = $res->fetch_assoc()) {
					$_SESSION['registro'] = [
						'nombre' => $row['nombre'],
						'tipo' => $row['tipo'],
						'user' => $row['user'],
						'id' => $row['id']
					];
					if($_SESSION['registro'] [tipo]=='Administrador'){
						redirect('../Admin.php');
					}elseif($_SESSION['registro'] [tipo]=='Cliente'){

					}
					
					redirect('../cliente.php');
				}
		} else {
			redirect('../index.php?error_message=Usuario o clave incorrectos!');
		}


	} else {
		redirect('../index.php?error_message=Ingrese todos los datos!');
	}
} else {
	redirect('../index.php');
}