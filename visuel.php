<?php
include('connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>image</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styless.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <style type="text/css">
                .imj1{
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }
       
        form input.rec{
            width: 400px;
            height: 40px;
            border-radius: 20px;
            padding-left: 10px;
            margin-left: 90px;
            border: none;
            box-shadow: 0px 0px 0px 0.5px rgb(129, 128, 128);
        }
        .bloc4 nav ul{
    margin-left: 100px;
}
        form input::placeholder{
  color: #098d32;
 }
 #output{
    background-color: white;
    border: none;
    margin-left: 10px;
    margin-top: 45px;
 }
 header{
    width: 100%;
    height: 200px;
    background-color: white;
 }
 .dropdown{
    margin-top: -50px;
    margin-right:300px;
 }
 /* .bloc4{
    position: relative;
 } */
 .bloc5{
    margin-top: -80px;
 }
 .bloc4 li a{
   font-size: 12px;
   color:  black;
   font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
   margin-left: 10px;
   font-weight: -700;
 }
.bloc4 li a:hover{
    font-size: 12px;
    text-decoration: none;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 12px;
    color: black;
}
 
 .trait2{
    border-bottom: 3px solid #098d32;
    margin-left: 6px;
    margin-top: -5px;
 }

 div.gallery {
  width: 500px;
  height: 300px;
  padding: 60px 0px 0px 20px;
}

		.img_scroll {
			width: 100px;
			height: 100px;
      padding-left: 25px;
		}
    .swiper-wrapper{
      margin-left: 30px;
    }
    
    .blc1{
	width:600px;
	height: 200px;
  float: right;
  margin-top: -300px;
 }
 .siz{
  font-size: 20px;
  color: rgb(96, 93, 93);
  margin-top: 20px;
 }
 .trait{
  border-bottom: 1px solid rgb(231, 231, 231);
  width: 560px;
  padding-top: 50px;
 }

 .pri{
  padding-top: 30px;
  margin-left: 30px;
  font-size: 25px;
  color: red;
 }
 .ron1{
  color: black;
  background-color: transparent;
  border: none;
  padding-top: 5px;
  margin-left: 20px;
}
.ron2{
  color: black;
  background-color: transparent;
  border: none;
  padding-top: 10px;
  margin-left: 20px;
}

.lienn{
  background-color: #098d32;
  border-radius: 4px;
  border: none;
  width: 200px;
  height: 40px;
  margin-left: 170px;
  margin-top: 30px;

}
.lienn a{
  text-decoration: none;
  color: white;
  font-size: 17px;
}


 .carr{
  float: right;
  margin-right: 200px;
  margin-top: -600px;
 }
.carr button{
  border: none;
}
.lienn1{
  width: 280px;
  height: 50px;
  background-color: rgb(236, 234, 234); 
  padding-right: 180px;  
  padding-top: 5px;
  border-top-left-radius: 2px;
  border-top-right-radius: 2px;
}
.lienn1 a{
  font-size: 14px;
  color: black;
  text-decoration: none;
  font-weight: 500;
}
.lienn2{
  width: 280px;
  height: 50px;
  background-color: white; 
  padding-right: 120px; 
  padding-top: 5px;
  margin-top: -15px;
  position: relative;
}

.lienn2 a{
  font-size: 14px;
  text-decoration: none;
  color: rgb(79, 77, 77);
}
.lienn3{
  width: 280px;
  height: 50px;
  background-color: white; 
  padding-right: 90px; 
  padding-top: 5px;
  margin-top: -20px;
  position: relative;
  border-bottom-left-radius: 2px;
  border-bottom-right-radius: 2px;
}

.lienn3 a{
  font-size: 14px;
  color: rgb(79, 77, 77);
  text-decoration: none;
}
.cad{
  width: 280px;
  height: 150px;
  background-color: white;
  border-radius: 2px;
  margin-top: 20px;
}
.sizz{
  font-size: 12px;
  padding-top: 5px;
  color: rgb(96, 93, 93);
  float: right;
  margin-left: 20px;
  width: 200px;
 }
 .prii{
  font-size: 15px;
  color: red;
  float: right;
  margin-right: 80px;
  margin-top: -15px;

 }
 .ptlien{
  background-color: #098d32;
  border-radius: 4px;
  border: none;
  width: 270px;
  height: 30px;
  margin-left: 5px;
  margin-top: 15px;

}
.ptlien a{
  text-decoration: none;
  color: white;
  font-size: 14px;
}
.tir{
  font-size: 18px;
  font-weight: 600;
  color: black;
  margin-left: 20px;
}
.trt2{
  border-bottom: 1px solid rgb(231, 231, 231);
  width: 860px;
 }
 .carr1{
  width: 400px;
  height: 350px;
  border: 1px solid rgb(231, 231, 231);
  margin-top: 40px;
  margin-left: 30px;
 }
 .tir1{
  font-size: 13px;
  font-weight: 500;
  color: black;
  margin-left: 20px;
  padding-top: 10px;
}
.trt3{
  border-bottom: 1px solid rgb(231, 231, 231);
  width: 400px;
 }
 .carr2{
  width: 330px;
  height: 350px;
  border: 1px solid rgb(231, 231, 231);
  margin-top: -350px;
  margin-right: 80px;
  float: right;
 }
 .tir2{
  font-size: 13px;
  font-weight: 500;
  color: black;
  margin-left: 20px;
  padding-top: 10px;
}
.trt4{
  border-bottom: 1px solid rgb(231, 231, 231);
  width: 330px;
 }
 .par4 li{
  margin-left: 10px;
  font-size: 15px;
  color: black;
 }
 .par1{
  margin-left: 10px;
  font-size: 14px;
 }
 .par2{
  margin-left: 10px;
  font-size: 14px;
 }
 .par3{
  margin-left: 10px;
  font-size: 14px;
 }
 .par5{
  margin-left: 10px;
  font-size: 14px;
 }
 .par6{
  font-size: 16px;
  color: black;
  margin-left: 10px;
  margin-top: 15px;
  width: 500px;

 }
 .imr img{
  margin-left:130px;
 }

	</style>
</head>
<body style="background-color: rgb(224, 220, 220);">

<!-- l'entête du site -->

<header>
<div class="bloc1">

            <img src="image/emaraicher.png" class="imj1">
               <form method="POST">
                 <input type="text" id="rech" class="rec" name="rech" placeholder="Search..." onkeup="search()">
                 <button type="button" id="output"> <img  src="image/b4f9ef87c592af0145044285cdc1f706-removebg-preview.png" width="25" height="20"> </button>
              </form>
              <nav class="navi1">
            <a href="formPublication.php" class="btn btn-success" role="button">Vendre</a>
            </nav>
        </div>
        <div class="bloc4">
            <nav>
            <ul>
                    <li class="lien1">
                        <a href="index.php">TOUT <p class="trait1"></p></a>

                    </li>
                    <li>
                        <a class="lien4" href="#">IMAGES <p class="trait2"></p></a>
                    </li>
                    <li>
                        <a href="#">VIDÉOS <p class="trait3"></p></a>

                    </li>
                    <li>
                        <a href="#">CARTES<p class="trait4"></p></a>

                    </li>
                    <li>
                        <a href="#">ACTUALITÉS <p class="trait5"></p></a>

                    </li>
                </ul>
            </nav>
        </div>
      
    
      </form>
        </div>

    </header>

<!-- première partie du site -->

      <section id="deuxieme" >
      <div style="width: 860px;  height:600px; margin-left: 30px; padding-top: 20px; position: relative; background-color: white; border-radius: 2px">
      <?php
    if(isset($_GET["id"])){
        $id= $_GET["id"];
    }
    $req ="SELECT * FROM `publier` WHERE id = $id";
    $result = mysqli_query($conn, $req);
    $har = mysqli_fetch_assoc($result);
    ?>


      <div class="gallery">
        <a  href="#premier">
        <img style="width: 230px;height: 190px;position:relative;" src="<?=$har['imagepub']?>" alt="">
        </a>
      </div>

      <div class="blc1">
        <p class="siz">Le nom de l'article est <?=$har['titre']?> et de la catégories <?=$har['fonction']?> </p>

<p class="trait"></p>
<P class="pri"> prix: <STRONG><?=$har['prixP']?> FCFA</STRONG></P>

<!-- Ajout au panier -->
<div style="display: flex;">
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
<!-- button acheter -->
<button type="button"
  onClick="myFunction('<?php echo $nom;?>','<?php echo $email;?>','<?php echo $contact;?>','<?php echo  addslashes($country);?>')"
  class="btn btn-success"
  style="color: white; padding-top: -25px; width: 200px; margin-left: 100px;"
  data-toggle="modal"
  data-target="#exampleModal">J'achète</button>


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
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-success" data-dismiss="modal" >Fermer</button>
                                  </div>
                              </div>
                          </div>
                      </div>
</div>
      </div>
      <!-- Pour le slide -->
      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
              <a href="#premier">
              <img class="img_scroll" src="<?=$har['imagepub1']?>" alt="image">
              </a>
          </div>
          <div class="swiper-slide">
              <a href="#premier">
              <img class="img_scroll" src="<?=$har['imagepub2']?>" alt="image">
              </a>
          </div>
          <div class="swiper-slide">
              <a href="#premier">
              <img class="img_scroll" src="<?=$har['imagepub3']?>" alt="image">
              </a>
          </div>
      </div> 
      </div> 
    <!-- les fleches -->
      <div class="swiper-button-next" style="height: 30px;width: 35px;color: black;position: absolute;margin-top:50px; padding-right: 550px;">
    </div>
      <div class="swiper-button-prev" style="height: 30px;width: 35px; color: black;margin-top: 50px;"></div>
      <P class="trt"></P>
      <p style=" font-weight:500; padding-left: 10px">PARTAGER CE PRODUIT</p>
     <div style="padding-left: 10px">
     <a href="https://facebook.com"><img src="images/facebook.svg" alt=""></a>
      <a href="https://twitter.com">
        <img src="images/twitter.svg" alt="">
      </a>
     </div>
      </div>
      <div class="carr">
        <p>
        <button class="lienn1">
          <a href="#premier">
            <img src="image/téléchargement__3_-removebg-preview - Copie.png" width="20" height="20" alt="photo">
            Détails
          </a>
        </button>
        </p>
        <p>
        <button class="lienn2">
          <a href="#deuxieme">
            <img src="image/1541514-removebg-preview.png" width="20" height="20" alt="photo">
            Fiche Technique
          </a>
        </button>
        </p>
        <!-- <p class="trt1"></p> -->
        <button class="lienn3">
          <a href="#">
            <img src="image/54761-removebg-preview.png" width="20" height="20" alt="photo">
            Avis  clients
          </a>
      </button>
      <div class="cad">
      <img style="width: 60px;height: 50px; margin-top: 25px;padding-left: 5px;" src="<?=$har['imagepub']?>" alt="">
      <p class="sizz">Le nom de l'article est <?=$har['titre']?> et de la catégories <?=$har['fonction']?> </p>
      <P class="prii"> prix: <STRONG><?=$har['prixP']?> FCFA</STRONG></P>
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
<!-- button acheter -->
<button type="button"
  onClick="myFunction('<?php echo $nom;?>','<?php echo $email;?>','<?php echo $contact;?>','<?php echo  addslashes($country);?>')"
  class="btn btn-success"
  style="color: white; padding-top: -25px; width: 200px; margin-left: 50px;"
  data-toggle="modal"
  data-target="#exampleModal">J'achète</button>


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
                                  <div class="modal-footer">
                                      <button type="button" class="btn btn-success" data-dismiss="modal" >Fermer</button>
                                  </div>
                              </div>
                          </div>
                      </div>
</div>
      </div>
      </div>
      </section>
      <section id="premier">
        <div style="width: 860px;  height:1400px; margin-left: 30px; padding-top: 20px; position: relative; background-color: white; border-radius: 2px; margin-top: 550px;">
        <p class="tir" >Détails</p>
        <p class="trt2"></p>
        <div class="par6" style="height: 200px; overflow: auto;">
  <?=$har['detailsProduits']?>
</div>
        <div class="imr">
          <P><img src="<?=$har['imagepub']?>" width="300" height="250" alt=""></P>
          <P><img src="<?=$har['imagepub1']?>" width="300" height="250" alt=""></P>
          <P><img src="<?=$har['imagepub2']?>" width="300" height="250" alt=""></P>
          <P><img src="<?=$har['imagepub3']?>" width="300" height="250" alt=""></P>
        </div>
        </div>
      </section>

      <section id="deuxieme">
        <div style="width: 860px;  height:600px; margin-left: 30px; padding-top: 20px; position: relative; background-color: white; border-radius: 2px;">
        <p class="tir" >Fiche Technique</p>
        <p class="trt2"></p>
        <div class="carr1">
          <p class="tir1">Modalité de Paiement et Livraison</p>
          <p class="trt3"></p>
          <p class="par4">
            <li>
              Délais de Livraison : 
            <strong><?=$har['delaiPaiement']?></strong>
            </li>
          </p>
          <p class="par4">
            <li>
             Moyen de Paiement : 
            <strong><?=$har['moyen']?></strong>
            </li>
          </p>
          <p class="par4">
            <li>
              Prix de Transport : 
            <strong><?=$har['prixT']?> FCFA</strong>
            </li>
          </p>
        </div>
        <div class="carr2">
          <p class="tir2">Descriptif Technique</p>
          <p class="trt4"></p>
          <p class="par2">
            <strong>Qantité</strong>: <?=$har['quantite']?>
          </p>
          <p class="par3">
            <strong>Produit</strong>: <?=$har['fonction']?>
          </p>
          <p class="par5">
            <strong>Poids(Kg)</strong>: <?=$har['poids']?>
          </p>
        </div>
        </div>
      </section>

   <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 11,
        slidesPerGroup: 11,
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
      <script>
    function myFunction($contact) {
          document.getElementById("name").innerHTML = $contact;
      }
//information du vendeur
      function myFunction($nom,$email,$contact,$pays) {
          document.getElementById("name").innerHTML = $nom;
          document.getElementById("email").innerHTML = $email;
          document.getElementById("numero").innerHTML = $contact;
          document.getElementById("country").innerHTML = $pays;
      }

    </script>
</body>
</html>

