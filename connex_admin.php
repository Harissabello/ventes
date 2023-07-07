<?php 

session_start();
if (isset($_SESSION['id'])) {
  
  header("Location: Admin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>connexion Admin</title>
</head>
<body>
<section class="vh-100" style="background-color: #cbe9d2;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;" id="forms" >
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Se connecter</h3>

            <div class="form-outline mb-4">
            <label class="form-label" for="typeEmailX-2">Email</label>
              <input type="email" id="email" class="form-control form-control-lg" name="emai" />
              
            </div>

            <div class="form-outline mb-4">
            <label class="form-label" for="">Mot de passe</label>
              <input type="password" id="Password" class="form-control form-control-lg" name="pwde" />
              
            </div>

            <!-- Checkbox -->
            <!-- <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label class="form-check-label" for="form1Example3"> Remember password </label>
            </div> -->
            <div id="res" style="color: red"></div>
            <div id="res1" style="color: red"></div>
            <button class="btn btn-lg btn-block " id="connexion" style="background-color: #1fb140;" type="submit">Valider</button>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>


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
                let getmotDePasse = $("#Password").val();
              
                postObj = {
                    emai: getEmail,
                    pwde: getmotDePasse,
                }
                
                $.ajax({
                    type: 'POST',
                    url:'verify_admin.php',
                    data:postObj,
                    success: function(data){
                        parseJson = JSON.parse(data);

                        if(parseJson.success_msg)
                        {
                          window.location.href="Admin.php";
                          document.getElementById('forms').reset();
                        }
                        else{
                            if (parseJson.suces_msg) {
                                $('#res1').html("Veuillez vérifier votre email ou mot de passe!");   
                            }
                        }
         
                    }

                })
            }

        });
    });
</script>

</body>
</html>