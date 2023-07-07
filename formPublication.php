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
  header("location:login.php");
}
else{

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formpublication</title>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css1/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css1/style.css">
    <style>
    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .form-group select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
</style>

</head>
<body>
<div class="main">

<section class="signup">
    <!-- <img src="images/signup-bg.jpg" alt=""> -->
    <div class="container">
        <div class="signup-content">
            <form method="POST" id="signup-form" class="signup-form" action="upload.php"  enctype="multipart/form-data">
                <h2 class="form-title">JE PUBLIE</h2>
                <div class="form-group">
                    <label for="">Titre du produit</label>
                    <input type="text" class="form-input" name="titre" id="titre"/>
                </div>
                <div class="form-group">
                    <label for="">Types de Produit</label>
                    <select name="fonction" select="select">
                        <option selected>Faire un choix</option>
                        <option value="Légumes">Légumes</option>
                        <option value="Céréale" >Céréale</option>
                        <option value="Légumineuse" >Légumineuse</option>
                        <option value="Tubercule" >Tubercule</option>
                    </select>    
                </div> 
                
                <div class="form-group">
                    <label for="texte">Image Produit</label>
                    <input  class="form-input" type="file" name="imagepub"/>
                </div>

                <div class="form-group">
                    <label for="texte">Produit 1</label>
                    <input  class="form-input" type="file" name="imagepub1"/>
                </div>
                <div class="form-group">
                    <label for="texte">Produit 2</label>
                    <input  class="form-input" type="file" name="imagepub2"/>
                </div>

                <div class="form-group">
                    <label for="texte">Produit 3</label>
                    <input  class="form-input" type="file" name="imagepub3"/>
                </div>

                <div class="form-group">
                    <label for="">Prix de Transport</label>
                    <input type="text" class="form-input" name="prixT" id="coul"/>
                </div>
            
                <div class="form-group">
                    <label for="">Quantité</label>
                    <input type="text" class="form-input" name="mod" id="mod"/>
                </div>
                <div class="form-group">
                    <label for="">Poids</label>
                    <input type="text" class="form-input" name="poid" id="poid"/>
                </div>
                <div class="form-group">
                <label for="">Moyen de Paiement</label>
                <select name="moye" id="moye">
                    <option disabled="disabled" selected="selected">Faire un choix</option>
                    <option value="espèce">espèce</option>
                    <option value="mobile">mobile</option>
                </select>
                </div>
                <div class="form-group">
                    <label for="">prix du Produit</label>
                    <input type="text" class="form-input" name="prixP" id="name"/>
                </div>
                <div class="form-group">
                    <label for="texte">Délais de Paiement</label>
                    <input type="date" class="form-input" name="textes" id="name"/>
                </div>
                <div class="form-group">

                    <label for="texte">Détails Produit</label>
                    <textarea name="texte" id="" cols="58" rows="8"></textarea>
                </div>
               
                <div class="form-group">
                    <input type="submit" name="submit" id="submit" class="form-submit" value="Publier"/>
                </div>
            </form>
        
        </div>
    </div>
</section>

</div>

<!-- JS -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
<?php
 }
?>