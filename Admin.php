<?php
include('connect.php');
session_start();
$id = $_SESSION["id"];
$req = "SELECT * FROM `usser` ";
  $result = $conn->query($req);

  if ($result->num_rows > 0) {
      $hari = $result->fetch_assoc();
  }
  $sqlT = "SELECT * FROM admin";
$resultT = $conn->query($sqlT);


if(!$_SESSION["id"]){
  header("location:connex_admin.php");
}
else{

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Dashboard</title>
  <style type="text/css">
    .move li{
      display: inline-block;
      float: right;
      margin-top: -30px;
    }

  </style>
</head>
<body>

<table class="table">
    <h1>Tableau de bord d'administration</h1>
    <nav class="move">
    <li>
    <button class="btn" style="background-color: #1fb140;" type="submit"><a href="deconn_admin.php" style="color: white">Deconnexion</a></button>
    </li>
    </nav>
  <caption>Liste des vendeurs</caption>
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Genre</th>
      <th scope="col">Profil</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php	
    $sql = "SELECT * FROM usser";
					$result = mysqli_query($conn, $sql);

					// Afficher les informations des participants dans le tableau
					if (mysqli_num_rows($result) > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
    ?>                        
    <tr>
      <th scope="row"><?= $row['id'] ?></th>
        <td>
            <?php
            if ($row['genres'] == 'femme') {
                echo"<img src='image/imj11.png' width='30' height='30'>"; 
            }else {
                echo"<img src='image/téléchargement (2).png' width='30' height='30'>";
            }
            ?>
        </td>      
        <td>
            <button class="btn btn-danger" id="<?php echo $row['id']?>" 
            onClick="myFunction('<?php echo $row['noms'];?>','<?php echo $row['nom'];?>',
            '<?php echo $row['villes'];?>',
            '<?php echo $row['contacts'];?>','<?php echo $row['emails'];?>','<?php echo $row['genres'];?>')" data-toggle="modal"
                        data-target="#exampleModal">voir
            </button></td>
            <!-- modification des infos -->
       <td>
        <div>
            <!-- icone modification -->
        <button type="button" class="" id="<?php echo $row['id']?>" onClick="myFun('<?php echo $row['id'];?>','<?php echo $row['noms'];?>','<?php echo $row['nom'];?>','<?php echo $row['emails'];?>','<?php echo $row['genres'];?>')" data-toggle="modal" data-target="#modifi">
        <img src="image/images (2).png" width="20" height="20" alt="">
        </button>
        <!-- icone suppression -->
        <button type="button" class="btn-delete-user" data-user-id="<?php echo $row['id']?>">
        <img src="image/1345874.png" width="20" height="20" alt="">   
        </button>
        </div>
       </td>
          
    </tr>
    <?php
    }
    }
    mysqli_close($conn);
    ?>
  </tbody>
</table>


<!-- Modal -->
<div class="modal fade" id="exampleModal" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <center>
        <p style="font-weight: 800">Nom: <span id="nom"></span></p>
        <p style="font-weight: 800">Nom de la structure: <span id="structure"></span></p>
        <p style="font-weight: 800">Ville: <span id="ville"></span></p>
        <p style="font-weight: 800">Contact: <span id="cont"></span></p>
        <p style="font-weight: 800">Email: <span id="email"></span></p>
        <p style="font-weight: 800">Genre: <span id="genre"></span></p>
        </center> 
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modifi" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        
      </div>
      <div class="modal-body">
        <div class="page-wrapper bg-red p-t-180 p-b-100 font-robo">
          <div class="wrapper wrapper--w960">
              <div class="card card-2">
                  <div class="card-heading"></div>
                  <div class="card-body">
                      <form method="POST" action="modifier.php"  enctype="multipart/form-data">
                      <div class="input-group">
                              <input class="input--style-2" type="text" value="" id="use" name="id" hidden>
                          </div> <br>
                          <div class="input-group">
                              <input class="input--style-2" type="text" value="" id="no" name="nom">
                          </div> <br>
                          <div class="input-group">
                              <input class="input--style-2" type="text" value="" id="structu" name="structu">
                          </div> <br>
                          <div class="input-group">
                              <input class="input--style-2" type="text" value="" id="emai" name="email">
                          </div> <br>
                          <div class="input-group">
                              <input class="input--style-2" type="text" value="" id="genr" name="genre">
                          </div>
                          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button  name="modif" type="submit" class="btn btn-success">Modifier</button>
      </div>
                      </form>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<script>
      function myFunction($nom,$structure,$ville,$contact,$email,$genre) {
          document.getElementById("nom").innerHTML = $nom;
          document.getElementById("structure").innerHTML = $structure;
        //   document.getElementById("photo").src = $photo;
          document.getElementById("ville").innerHTML = $ville;
          document.getElementById("cont").innerText = $contact;
          document.getElementById("email").innerHTML = $email;
          document.getElementById("genre").innerHTML = $genre;
          //  
      }

      function myFun($id,$nom,$structu,$email,$genre) {
          document.getElementById("use").value = $id;
          document.getElementById("no").value = $nom;
          document.getElementById("structu").value = $structu;
          document.getElementById("emai").value = $email;
          document.getElementById("genr").value = $genre;
          //  
      }
    </script>
    <script>
      // Code JavaScript pour supprimer un utilisateur avec AJAX
$(document).on('click', '.btn-delete-user', function() {
  
  // Récupérer l'identifiant de l'utilisateur à supprimer depuis l'attribut data-user-id du bouton
  var userId = $(this).data('user-id');
  
  // Confirmer la suppression avec une boîte de dialogue
  if (confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?')) {
    
    // Envoyer une requête AJAX pour supprimer l'utilisateur
    $.ajax({
      url: 'suppression_vendeur.php',
      type: 'POST',
      data: {user_id: userId},
      success: function(response) {
        parseJson = JSON.parse(response);

        
        if(parseJson.success_msg)
        {
          window.location.href="Admin.php";
        }else{
            alert('La suppression a échouée!!');
        }
      }
    });
  }
});

    </script>
</body>
</html>
<?php
 }
?>