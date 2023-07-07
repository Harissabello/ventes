<?php
include('connect.php');

session_start();

$a = '<a href="formPublication.php"  class="btn btn-success" role="button">Vendre</a>';
$b = ''; // Initialisez la variable $b avec une valeur vide

if (isset($_SESSION['id'])) {
    // Si l'utilisateur est connecté, affectez une valeur à la variable $b
    $b = '<a href="deconnexion.php" style="margin-left: 600px;margin-top: -50px" class="btn btn-success" role="button">Déconnexion</a>';
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styless.css">
    <link rel="stylesheet" href="css3/style3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <title>Vente Produit</title>
    <style>
    .imj1 {
        width: 50px;
        height: 50px;
        border-radius: 50%;
    }

    .rec {
        width: 600px;
        height: 40px;
        border-radius: 20px;
        padding-left: 10px;
        margin-left: 90px;
        position: absolute;
        margin-top: 45px;
        /* border: none; */
    }

    .bloc4 nav ul {
        margin-left: 100px;
    }

    form input::placeholder {
        color: #098d32;
    }

    #output {
        background-color: white;
        border: none;
        margin-left: 450px;
        position: absolute;
        margin-top: 50px;
    }

    header {
        width: 100%;
        height: 200px;
    }


    /* .bloc4{
    position: relative;
 } */
    .bloc5 {
        margin-top: 200px;
        margin-right: 400px;
    }

    .bloc4 li a {
        color: #098d32;
        font-weight: 600;
        font-size: 16px;
        float: right;
        margin-left: 750px;
        margin-top: -100px;
    }

    .bloc4 li a:hover {
        color: #098d32;
        font-weight: 600;
        font-size: 16px;
        float: right;
        margin-left: 750px;
        margin-top: -100px;
    }

    .bloc6 {
        border-bottom: 0.1px solid #098d32;
        margin-top: 140px;
        width: 100%;
    }

    #search-button {
        border: none;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        background-color: white;
        position: absolute;
    }

    /* div.gallery {
        border: 1px solid #ccc;
        width: 270px;
        height: 400px;
        border-radius: 10px;
    } */

    .lien button {
        width: 90px;
        height: 30px;
        background-color: #098d32;
        margin-left: 120px;
        display: inline-block;
        margin-top: -30px;
        position: absolute;
        border-radius: 10px;
        border: none;
    }

    .lien button:hover {
        width: 90px;
        height: 30px;
        background-color: #098d32;
        margin-left: 120px;
        display: inline-block;
        margin-top: -30px;
        position: absolute;
        border-radius: 10px;
        border: 1px solid #098d32;
    }

    .lien button a {
        color: white;
        font-size: 15px;
        font-weight: 600;
        margin-top: -20px !important;

    }
    div.gallery:hover {
        box-shadow: 2px 2px 8px lightgray;
    }

    /* div.gallery img {
        width: 298px;
        height: 250px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;

    } */
    .para {
        margin-top: 15px;
        font-size: 12px;

        width: 250px;
    }

    .para1 {
        margin-top: 50px;
        font-size: 14px;
        color: red;
        width: 268px;
    }

    div.desc1 {
        padding-left: 15px;
        text-align: center;
        width: 250px;
        height: 100px;
        background-color: blue;
    }

    .contenant {
        height: 200px;
        width: 270px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        margin-top: -200px;
        position: absolute;
    }

    .contenant:hover {
        position: absolute;
        opacity: 1;
        box-shadow: inset 0 -60px 10px 4px rgba(0, 0, 0, 0.5);

    }

    .contenant:hover .overlay {
        opacity: 1;
    }

    .contenant:hover .img_plus {
        opacity: 1;
    }




    /* texte dans image */
    .overlay {

        margin-left: 10px;
        opacity: 0;
        transition: .5s ease;
        color: white;
        vertical-align: text-bottom;
        font-size: 11px;
        float: left;
        text-align: left;
        margin-top: 150px;

    }

    /* la petite image sur l'image */
    .img_plus {

        opacity: 0;
        transition: .5s ease;
        text-align: right;
        height: 40px;
        width: 40px;

    }

    #commentaire {
        background: #f2f2f2;
        border: 1px solid #999;
        bottom: 0;
        color: #36b;
        cursor: pointer;
        display: block;
        height: 28px;
        line-height: 28px;
        min-width: 110px;
        padding: 0 5px;
        position: fixed;
        right: 20px;
        text-align: center;
        z-index: 4;
        font-family: 'Roboto', Helvetica, Sans-Serif;
        font-size: 13px;



    }

    /*caroussel*/
    .swiper {
        width: 100%;
        height: 20%;
        margin-right: 20px;
        margin-top: 80px;
    }

    .swiper-slide {

        font-size: 18px;
        background: #fff;
        border-radius: 50px;
        border: 0.5px solid #098d32;
        width: 80px;
        height: 50px;
        margin-left: 10px;
        color: black;
        text-decoration: none;
    }


    /*fin caroussel*/

    .div_text_scroll {
        font-size: 12px;
        width: 150px;
        margin-left: 40px;

        margin-top: -30px;
    }

    .img_scroll {
        width: 30px;
        height: 35px;
        border-radius: 50%;
        padding-top: 10px;
        margin-left: 5px;
    }

    head {
        min-width: 1000px;
    }

    body {
        min-width: 1000px;
    }

    #rech {
        width: 400px;
        padding-left: 15px;
        border: 1px solid #098d32;
    }

    #search-button {
        border: none;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        background-color: white;
        margin-left: 10px;
    }

    .btn2 {
        width: 100%;
        height: 40px;
        background-color: white;
        border: 1px solid rgb(39, 150, 39);
        margin-top: 50px;
       
    }

    .fil {
        margin-right: 450px;
        margin-top: -20px;
    }

    .bn1 {
        border: none;
        background-color: transparent;
    }

    .btn1 {
        margin-right: 120px !important;
    }
    .scrol{
        color: black;
        width: 50px;
    }
    .scrol:hover {
        color: black;
        text-decoration:none;
    }
    </style>
</head>

<body>
    <!-- ENTETE DU SITE -->
    <header>
        <div class="bloc1">
            <img src="image/emaraicher.png" class="imj1">
            <form method="POST">
                <input type="text" id="rech" class="rec" name="fonction" placeholder="Veuillez rechercher un type de produit" onkeup="search()">
                <button type="submit" id="output" > <img
                        src="image/b4f9ef87c592af0145044285cdc1f706-removebg-preview.png" width="25" height="20">
                </button>
            </form>

            <nav class="navi1">
                <?php
                echo $a;
                ?>
            </nav>
        </div>
        <div class="bloc5">
            <form method="POST" action="">
                <div class="fil">
                    Type de produit: &nbsp;
                    <select name="fonction" id="fil" style="border-style: none;font-weight: bold;">
                        <option selected value="">Choisir</option>
                        <option value="Légumes">Légumes</option>
                        <option value="Céréale">Céréale</option>
                        <option value="Légumineuse">Légumineuse</option>
                        <option value="Turbercule">Turbercule</option>
                    </select>
                    <button class="bn1" type="submit">Filtre <img class="imj9" src="image/img_filtre-removebg-preview.png" width="20" height="20"></button>
                    
                    <!-- <button class="bn1" type="submit">Filtre <img class="imj9" src="image/icone filtre.png"></button> -->

                </div>
            </form>
            <?php
                echo $b;
            ?>
        </div>
        <div class="bloc4">
            <!-- <button class="bout">
            <a href="formPublication.php">PUBLIER</a>
          </button> -->
            <nav>
                <ul>
                    <!-- <li>
                        <a href="formPublication.php">publier <p class="trait5"></p></a>

                    </li> -->
                </ul>
            </nav>
        </div>
        <p class="bloc6"></p>

    </header>


    </form>
    <?php
      $show = 10;

    if(isset($_POST["add"])){

      $show= $_POST["add"];
      
    }

if (isset($_POST['fonction'])) {

  $fonction = $_POST['fonction'];

  $sql = "SELECT * FROM `publier` WHERE fonction = '$fonction' LIMIT $show";

  $result1 = mysqli_query($conn, $sql);
  $result2 = mysqli_query($conn, $sql);

  

  if (mysqli_num_rows($result1) > 0 && mysqli_num_rows($result2) > 0) {
  $data1 = $result1;
  $data2 = $result2;
  }else {
    $req ="SELECT*FROM publier ORDER BY id DESC LIMIT $show";

    $result3 = mysqli_query($conn, $req);
    $result4 = mysqli_query($conn, $req);
    $data1 = $result3;
    $data2 = $result4;
  
  }

}else {
  $req ="SELECT*FROM publier ORDER BY id DESC LIMIT $show";

  $result5 = mysqli_query($conn, $req);
  $result6 = mysqli_query($conn, $req);
  $data1 = $result5;
  $data2 = $result6;
}
?>
    </div>
    <!--fin div de la 2eme ligne-->

    <!--trait de separation-->

    <!-- <div class="trait">	 	
     </div> -->


    <section id="premier" style="position: relative;">


        <div class="swiper mySwiper">
            <div class="swiper-wrapper">

                <?php
    // require('connet.php');
    
    
              while($hari = mysqli_fetch_assoc($data1)){
                 ?>

                <div class="swiper-slide">
                    <a href="visuel.php?id=<?=$hari['id']?>" class="scrol">
                        <img class="img_scroll" src="<?=$hari['imagepub']?>" alt="image">
                        <div class="div_text_scroll"><b><?=$hari['fonction']?><br> <?=$hari['poids']?> /Kg</b></div>
                    </a>
                    

                </div>




                <!--fin 3eme scroll-->
                <?php
      }
?>


            </div>
        </div>

        <!-- les fleches -->
        <div class="swiper-button-next"
            style="height: 80px;width: 50px; position: absolute; color: black; background-color: transparent;font-weight: bold;margin-top: -40px;margin-right:0;">
        </div>
        <div class="swiper-button-prev"
            style="height: 80px;width: 50px; position: absolute; color: black; background-color: transparent;font-weight: bold;margin-top: -40px;">
        </div>

        <!-- <div class="swiper-pagination"></div> -->

    </section>

    <!--galerie image-->

    <section style="margin-left:70px;margin-top:20px;">
            

    <?php
    while($har = mysqli_fetch_assoc($data2)){
    ?>
<div style="display: inline-flex; margin-bottom: 445px;padding-left:15px;">
    <div class="container-fluid">
        <div class="row d-flex flex-wrap">
            <div class="gallery" style="background-color: blue; width: 270px;position:relative;">
                <div class="card" style="width: 270px; height: 450px; margin-right: 50px;position:absolute;">
                    <a href="visuel.php?id=<?=$har['id']?>">
                        <img src="<?=$har['imagepub']?>" class="card-img-top img-fluid max-height-im" style="width: 268px; height: 200px; position: relative;">
                        <div class="contenant">
                            <div class="overlay">300 x 250 - jpg<br> maximumwall.com</div>
                            <img class="img_plus" style="height: 40px; width: 40px; float: right;" src="image/img_plus.png">
                        </div>
                    </a>
                    <div class="card-body" style="margin-right:25px;">
                        <div class="no-gutters align-items-center">
                            <div class="mr-2">
                                <div class="text-primary" style="padding: 0;">
                                        <?php
                                        $detailsProduits = $har['detailsProduits']; // Récupération du texte depuis la base de données

                                        $maxCharLength = 110; // Nombre maximum de caractères à afficher
                                        $truncatedText = substr($detailsProduits, 0, $maxCharLength); // Tronquer le texte à la longueur souhaitée

                                        if (strlen($detailsProduits) > $maxCharLength) {
                                            // Ajouter "..." à la fin si le texte est tronqué
                                            $truncatedText .= '...';
                                        }
                                        ?>

                                    <p class="text-dark" style="width: 220px; margin: 0;">
                                        <?=$truncatedText?>
                                    </p>                               
                                    <p class="para1" style="margin-right:20px; margin: 0;margin-top: 50px">Prix: <strong><?=$har['prixP']?> FCFA</strong></p>
                                </div>
                                <div class="h6 mb-0 font-weight-bold text-gray-800">
                                    <div class="lien">  
                                                <?php
                                                $myId = $har['user_id'];
                                                $sql = "SELECT * FROM usser WHERE id = '$myId' ";
                                                $result = mysqli_query($conn, $sql);
                                                $row = mysqli_fetch_assoc($result);
                            
                                                $nom = $row['noms'] ;
                                                $email = $row['emails'] ;
                                                $contact = $row['contacts'] ;
                                                $country = $row['pays'] ;
                                                ?>
                                                <!-- Button trigger modal -->
                            
                                                <button type="button"
                                                    onClick="  myFunction('<?php echo $nom;?>','<?php echo $email;?>','<?php echo $contact;?>','<?php echo  addslashes($country);?>')"
                                                    class="btn btn-success" style="color: white; padding-top: -25px;" data-toggle="modal"
                                                    data-target="#exampleModal">
                                                    Acheter
                                                </button>
                            
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Information Vendeur</h5>
                                                            </div>
                                                            <div class="modal-body">
                                                                <P><b>Nom&Prénom</b>: <span id="name"></span></P>
                                                                <P><b>E-mail</b>: <span id="email"></span></P>
                                                                <P><b>Numéro</b>: <span id="numero"></span></P>
                                                                <P><b>Pays</b>:<span id="country"></span></P>
                                                            </div>
                                                            <div class="modal-footer" style="height: 50px;">
                                                                <button type="button" class="btn3" data-dismiss="modal" style="margin-top: 15px; color:white;">Fermer</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>

    <?php
      }
       mysqli_close($conn);
      ?>
    </section>
  

       
  

    <!--commentaire-->

    <div class="commentaire" id="commentaire">
        <a style="margin-top: 5px;" href="#">
            <img style="float: left;border: 0; height: 14px; margin: 0 5px -4px 0; width: 14px; display: inline; margin-top: 8px;"
                src="image/ytiieusXgM2K8bLkEDP-AS1ePds.png">
            <div>commentaire</div>
        </a>
    </div>

    <?php
  $nbre2 = mysqli_num_rows($data1) + 10;
?>


    <form action="" method="post">
        <input  type="number" name="add" value="<?php echo $nbre2 ?>" hidden>
        <button class="btn2" type="submit">Voir plus...</button>
    </form>

    </div>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>


    <script>
     // let dropdowns = document.querySelectorAll('.dropdown-toggle')
      dropdowns.forEach((dd) => {
          dd.addEventListener('click', function(e) {
              var el = this.nextElementSibling
              el.style.display = el.style.display === 'block' ? 'none' : 'block'
          })
      })
    </script>

    <script>
      function myFunction($nom,$email,$contact,$pays) {
          document.getElementById("name").innerHTML = $nom;
          document.getElementById("email").innerHTML = $email;
          document.getElementById("numero").innerHTML = $contact;
          document.getElementById("country").innerHTML = $pays;
      }
    </script>
    <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 9,
        spaceBetween: 1,
        slidesPerGroup: 10,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    </script>
    <script src="js/rech.js"></script>
</body>

</html>

<?php
// }
?>