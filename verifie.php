<?php

include('connect.php');

session_start();
if(isset($_POST["emai"])){

$email = $_POST["emai"];
$motDePasse = $_POST["pwde"];

// @$roles = 0;

    $sql="SELECT * FROM usser WHERE emails ='$email' AND motPasses ='$motDePasse'";
    // $rss = mysqli_query($conn,$sql);
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {

      $row = $result->fetch_assoc();
      $id_session = $row['id'];
      $_SESSION["id"] = $id_session;
      echo json_encode(['success_msg' => 'User a été enregistrer']);
  } else {
    echo json_encode(['success_msg' => 'User a été enregistrer']);
  }
  $conn->close();
    
      // if(mysqli_num_rows($rss) > 0){
      //   echo json_encode(['success_msg' => 'User a été enregistrer']);
      // }
    
      // mysqli_close($conn);
    
   
    // $number = mysqli_num_rows($resultat);
    // if ($number==1) {
    //   $row = mysqli_fetch_assoc($resultat);
    //   $id_session = $row['id'];
    //   $_SESSION["id"] = $id_session;
    //   header('location:Accueil.php');
    // }
    // else{
    //   header('location:index.php');
    // }
  }




?>