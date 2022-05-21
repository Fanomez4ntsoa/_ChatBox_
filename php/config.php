<?php 
	// Connexion à la base de donnée mysql
	$conn = mysqli_connect("localhost", "admin", "admin", "chat");
	if (!$conn) {
		echo 'Database connected' .mysqli_connect_error();
	}


?>