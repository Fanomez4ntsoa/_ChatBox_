<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> | Chat-Box |</title>
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
</head>
<body>
	<div class="wrapper">
		<section class="form signup">
			<header> Application de Chat </header>
			<form action="#" enctype="multipart/form-data">
				<div class="error-txt">  Ceci est un message d'erreur !</div>
				<div class="name-details">
					<div class="field input">
						<label> Prenom </label>
						<input type="text" name="prenom" placeholder="Entrer votre prénom" required>
					</div>
				<div class="field input">
						<label> Nom </label>
						<input type="text" name="nom" placeholder="Entrer votre nom" required>
				</div>
				</div>
				<div class="field input">
						<label> Adresse email </label>
						<input type="text" name="email" placeholder="Entrer votre adresse email" required>
				</div>
				<div class="field input">
						<label> Mot de passe </label>
						<input type="password" name="mot_de_passe" placeholder="Entrer votre mot de passe" required>
						<i class="fas fa-eye"></i>
					</div>
				<div class="field input">
						<label> Confirmation mot de passe </label>
						<input type="password" name="confirmation" placeholder="Mot de passe" required>
				</div>
				<div class="field image">
						<label> Sélectionner une image </label>
						<input type="file" name="image"  required>
					</div>
				<div class="field button">
					<input type="submit" name="" value="Continuer">
				</div>
			</form>
			<div class="link"> Vous avez déjà un compte ? <a href="#"> Se connecter </a></div>
		</section>
	</div>


	<script type="text/javascript" src="assets/js/signup.js"></script>
	<script type="text/javascript" src="assets/js/password.js"></script>
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>