/* Détails du formulaire d'inscription en utilisant Javascript ajax à Php */
const form = document.querySelector(".signup form");
continueBtn = form.querySelector(".button input");

form.onsubmit = (e) => {
	e.preventDefault(); // empêche le formulaire de se soumettre
}
/* Le formulaire se soumet après avoir cliqué sur le bouton "Continuer" */
continueBtn.onclick = () => {
	/* -- AJAX -- */
	let xhr = new XMLHttpRequest(); // création d'un objet XML
	xhr.open("POST", "php/signup.php", true);
	xhr.onload = () => {
		if(xhr.readyState === XMLHttpRequest.DONE) {
			if(xhr.status === 200) {
				let data = xhr.response; // xhr.response nous donne la réponse de l'URL passée.
				console.log(data); // Afficher la réponse en console
			}
		}
	}
	xhr.send();
}