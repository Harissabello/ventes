<?php
include('connect.php');
if(isset($_POST["submit"])){
    $nom = addslashes($_POST["titre"]);
    $fonc = addslashes($_POST["fonction"]);
    $mont = addslashes($_POST["prixT"]);
    $mod = addslashes($_POST["mod"]);
    $poi = addslashes($_POST["poid"]);
    $moy = addslashes($_POST["moye"]);
    $montt = addslashes($_POST["prixP"]);
    $cara = addslashes($_POST["textes"]);
    $test = addslashes($_POST["texte"]);
    $texte = mysqli_real_escape_string($conn, $test);
    session_start();
    $userID = $_SESSION['id'];

    $image = $_FILES['imagepub']['name'];
    $tempname = $_FILES['imagepub']['tmp_name'];
    $temp = explode(".", $_FILES["imagepub"]["name"]);
    $newfilename = round(microtime(true)) . '.' .end($temp);
    $finaldestination = "imagess/".$newfilename;  
    $folder = "imagess/".$newfilename;
    if(move_uploaded_file($tempname,$folder)){
        echo 'images est uplade';
    }


    $image1 = $_FILES['imagepub1']['name'];
    $tempname1 = $_FILES['imagepub1']['tmp_name'];
    $temp1 = explode(".", $_FILES["imagepub1"]["name"]);
    $newfilename1 = round(microtime(true)) . '.' .end($temp1);
    $finaldestination1 = "imagess1/".$newfilename1;  
    $folder1 = "imagess1/".$newfilename1;
    if(move_uploaded_file($tempname1,$folder1)){
        echo 'images est uplade';
    }



    $image2 = $_FILES['imagepub2']['name'];
    $tempname2 = $_FILES['imagepub2']['tmp_name']; 
    $temp2 = explode(".", $_FILES["imagepub2"]["name"]);
    $newfilename2 = round(microtime(true)) . '.' .end($temp2);
    $finaldestination2 = "imagess2/".$newfilename2; 
    $folder2 = "imagess2/".$newfilename2;
    if(move_uploaded_file($tempname2,$folder2)){
        echo 'images est uplade';
    }



    $image3 = $_FILES['imagepub3']['name'];
    $tempname3 = $_FILES['imagepub3']['tmp_name']; 
    $temp3 = explode(".", $_FILES["imagepub3"]["name"]);
    $newfilename3 = round(microtime(true)) . '.' .end($temp3);
    $finaldestination3 = "imagess3/".$newfilename3; 
    $folder3 = "imagess3/".$newfilename3;
    
    
    if(move_uploaded_file($tempname3,$folder3)){
        echo 'images est uplade';
    }
    

    $sql = "INSERT INTO `publier`(titre, fonction, prixT, quantite, poids, moyen, prixP, delaiPaiement, detailsProduits, imagepub, imagepub1, imagepub2, imagepub3,user_id)
    VALUES('$nom', '$fonc', '$mont', '$mod', '$poi', '$moy', '$montt', '$cara', '$texte', '$finaldestination', '$finaldestination1', '$finaldestination2', '$finaldestination3', '$userID')";
    session_start();
    // session_destroy();
    header("location:index.php");
   //  echo $sql;


if(mysqli_query($conn, $sql)){
 echo "succes";
}else{
 echo "error: ". $sql . "<br>" .mysqli_error($conn);
}
mysqli_close($conn);

}
?>