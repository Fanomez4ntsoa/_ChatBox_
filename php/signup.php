<?php 
	
	include_once "config.php";
	$nom = mysqli_real_escape_string($conn, $_POST['nom']);
	$prenom = mysqli_real_escape_string($conn, $_POST['prenom']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$mot_de_passe = mysqli_real_escape_string($conn, $_POST['mot_de_passe']);
	$confirmation = mysqli_real_escape_string($conn, $_POST['confirmation']);

	if( !empty($nom) && !empty($prenom) && !empty($email) && !empty($mot_de_passe) && !empty($confirmation) ) {
		/* vérifions si l'email de l'utilisateur est valide ou non */
		if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
			// Si l'email donner est valide
			// vérifions si l'email existe déjà dans la base de données ou non
			$sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
			if(mysqli_num_rows($sql) > 0) {
				// Si l'email existe déja
				echo "$email - Cet email existe déja !";
			} else {
				// vérifions si l'utilisateur à uploader une image ou pas
				if(isset($_FILES['file'])) {
					// Si l'image est uploader
					
				} else {

				}
			}
		} else {
			echo "$email - Cet email n'est pas valide";
		}
	} else {
		echo 'Tous les champs sont obligatoires';
	}

?>