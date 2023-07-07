<?php 

session_start();
if (isset($_SESSION['id'])) {
  
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css3/styles.css">
    <title>connexion</title>
</head>
<body>
    <div class="wrapper">
      <section class="form login">
        <header>CONNEXION</header>
        <form  method="POST" id="forms" enctype="multipart/form-data" autocomplete="off">
          <div class="error-text"></div>
          
          <div class="field input">
            <label>Email</label>
            <input type="objet" name="email" id="email" placeholder="Entrer votre email" required>
          </div>

          <div class="field input">
            <label>mot de passe</label>
            <input type="password" name="motDepasse" id="pwd" placeholder="Entrer votre mot de passe" required>
          </div>
          <div id="res" style="color:red;"></div>

          <div class="field button" >
            <input type="submit" id="connexion" name="submit" value="Connexion" style="background-color: #098d32">
          </div>
         <p>si vous n'avez pas un compte<a href="inscription.php" style="color: #098d32"> cliquez ici</a></p>
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
    $(document).ready(function(){       
        $("#connexion").click(function(e){
            e.preventDefault();
            let emptyInputCount=0;
            
            $("#forms input").each(function(){
                var input = $(this);
                console.log(input.val());
                if(input.val() == ''){
                    input.css('border-color','red');
                    $('#res').html("Veuillez remplir correctement les champs !");  
                    emptyInputCount = 1;
                }
                else{
                    input.css('border-color','#ced4da');
                }
            });
            if(emptyInputCount == 0){
                let getEmail = $("#email").val();
                let getmotDePasse = $("#pwd").val();
              
                postObj = {
                    emai: getEmail,
                    pwde: getmotDePasse,
                }
                
                $.ajax({
                    type: 'POST',
                    url:'verifie.php',
                    data:postObj,
                    success: function(data){
                        parseJson = JSON.parse(data);

                        if(parseJson.success_msg)
                        {
                          window.location.href="formPublication.php";
                          document.getElementById('forms').reset();
                        }
                        else{
                          window.location.href="login.php";
                        }
         
                    }

                })
            }

        });
    });
</script>
  </body>
  </html>
