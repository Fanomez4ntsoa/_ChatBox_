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
				if(isset($_FILES['image'])) {
					//$_FILES[] return us an array with file name, file type, error, file size, tmp_name
					// Si l'image est uploader
					$img_name = $_FILES['image']['name']; // getting user uploaded img name
					$tmp_name = $_FILES['image']['tmp_name']; // this temporary name is used to save/move file in our folder


					// Let's explode image and get the last extension like jpg/png
					$img_explode = explode('.', $img_name);
					$img_ext = end($img_explode); // here we get the extension of an user uploaded img file

					$extensions = ['png', 'jpeg', 'jpg']; // these are some valid img ext and we've store them in array
					if(in_array($img_ext, $extensions) === true) {
						// if user uploaded img ext is matched with any array extensions
						$time = time(); // this will return us current time ...
														// we need this time because when you uploading user img to in our folder we rename user file with current time
														// so all the img file will have a unique name
						// let's move the user uploaded img to our particular folder
						// Remember we don't upload user uploaded file in the database we just save the file url their. Actual file will be saved in our particular folder
						$new_img_name = $time.$img_name;
						if(move_uploaded_file($tmp_name, "images/".$new_img_name)) {
							// if user upload img move to our folder successfully
							$status = "Active now"; // once user signed up then his status will be active now)
							$random_id = rand(time(), 10000000); // creating random id for user

							// Let's insert all user data inside table
							$sql2 = mysqli_query()
						}

					} else {
						echo "Please select an Image file - jpeg, jpg, png!";
					}

				} else {
					echo "Sélectionner l'image";
				}
			}
		} else {
			echo "$email - Cet email n'est pas valide";
		}
	} else {
		echo 'Tous les champs sont obligatoires';
	}

?>