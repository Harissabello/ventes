<?php
include('connect.php');
if(isset($_POST["nom"])){
  $nomm = addslashes($_POST["noms"]);
    $nom = addslashes($_POST["nom"]);
    $cont = addslashes($_POST["contact"]);
    $gen = addslashes($_POST["genre"]);
    $pre = addslashes($_POST["numero"]);
    $emal = addslashes($_POST["email"]);
    $mo = md5(addslashes($_POST["motDepasse"]));
    $naiss = addslashes($_POST["ville"]);
    $pay = addslashes($_POST["pays"]);
   
    // $datepub = date("Y/m/d");
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    
    $temp = explode(".", $_FILES["file"]["name"]);
    $newfilename = round(microtime(true)) . '.' .end($temp);
    $finaldestination = $target_dir .$newfilename;

        if(move_uploaded_file($_FILES["file"]["tmp_name"],"" . $finaldestination)) {
            
            $sql = "INSERT INTO `usser`(noms, nom, contacts, genres, logo, numero, emails, motPasses, villes, pays)
             VALUES('$nomm', '$nom', '$cont', '$gen', '$finaldestination', '$pre', '$emal', '$mo', '$naiss', '$pay')";
            if(mysqli_query($conn, $sql)){
              echo 1;
          
            }else{
              echo "error: ". $sql . "<br>" .mysqli_error($conn);
            }
            mysqli_close($conn);
          }  
    }
?>