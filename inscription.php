<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css3/styles.css">
    <title>Inscription</title>
</head>
<body>
    <div class="wrapper">
      <section class="form login">
        <header>INSCRIPTION</header>
        <form  method="POST" id="forms" enctype="multipart/form-data" autocomplete="off">
          <div class="error-text"></div>
          <div class="field input">
            <label>Nom et Prénom</label>
            <input type="text" name="noms" id="noms" placeholder="Entrer votre nom et prénom" required>
          </div>
          <div class="field input">
            <label>Nom Coopérative</label>
            <input type="text" name="nom" id="nom" placeholder="Entrer le nom de la coopérative" required>
          </div>
          <div class="field input">
            <label>Logo</label>
            <input type="file" name="file" id="file" required>
          </div>
          <div class="field input">
            <label>Contact</label>
            <input type="objet" name="contact" id="contact" placeholder="Entrer votre contact" required>
          </div>
          <div class="field input">
            <div class="field input">
              <select name="genre" id="genre">
                <option disabled="disabled" selected="selected">Genre</option>
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
              </select>
            </div>
          </div>
          <div class="field input">
            <label>Email</label>
            <input type="objet" name="email" id="email" placeholder="Entrer votre email" required>
          </div>
          <div class="field input">
            <label>mot de passe</label>
            <input type="password" name="motDepasse" id="motPasse" placeholder="Entrer votre mot de passe" required>
          </div>
          <div class="field input">
            <label>Ville</label>
            <input type="objet" name="ville" id="ville" placeholder="Entrer votre ville" required>
          </div>
          <div class="field input">
            <label>Pays</label>
            <input type="objet" name="pays" id="pays" placeholder="Entrer votre pays" required>
          </div>
          <div id="res" style="color:red;"></div>
          <div class="field button" >
            <input type="submit" id="inscris" name="submit" style="background-color:#098d32;" value="S'inscrire">
          </div>
         
        </form>
      </section>
    </div>
    
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/connexion.js"></script>
  
    <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
	$('#inscris').click(function (e) {
		e.preventDefault();
		let emptyInputCount = 0;

    $("#forms input").each(function(){
                var input = $(this);
                if(input.val() == ''){
                    $('#res').html("Veuillez remplir correctement les champs !");  
                    emptyInputCount = 1;
                }
                else{
                    input.css('border-color','#ced4da');
                }
            });
            

		if (emptyInputCount == 0) {
      let nomutilisateurs = $('#noms').val();
			let nomutilisateur = $('#nom').val();
      let contactutilisateur = $('#contact').val();
      let utilisateur = $('#genre').val();
      let numeutilisateur = $('#nume').val();
      let emaileutilisateur = $('#email').val();
			let motdepasseutilisateur = $('#motPasse').val();
      let villeutilisateur = $('#ville').val();
      let payseutilisateur = $('#pays').val();
      let file_data = $('#file').prop('files')[0];
			let form_data = new FormData();
			form_data.append('file', file_data);
      form_data.append('noms', nomutilisateurs);
			form_data.append('nom', nomutilisateur);
      form_data.append('contact', contactutilisateur);
      form_data.append('genre', utilisateur);
			form_data.append('numero', numeutilisateur);
      form_data.append('email', emaileutilisateur);
      form_data.append('motDepasse', motdepasseutilisateur);
      form_data.append('ville', villeutilisateur);
      form_data.append('pays', payseutilisateur);
            
			

			// if (nomutilisateur == '') {
			// 	// Verifier si champ est vide
			// 	$('#nom').html('Entrez votre nom !');
			// }  else {
				$.ajax({
					url: 'inserIns.php',
					type: 'POST',
					dataType: 'script',
					cache: false,
					contentType: false,
					processData: false,
					data: form_data,
          success: function (data) {
						if (data == 1) {
                            // alert("cgt");
							window.location.href = 'login.php';
							document.getElementById('forms').reset();
							// $('#succes').html(
							// 	'<div class="alert alert-success">' +
							// 		'Compte créé avec succès, veuillez vous connecter !' +
							// 		'</div>',
							// );
						} 
          }
				});
			// }
		}
	});
});
    </script>
  </body>
  </html>