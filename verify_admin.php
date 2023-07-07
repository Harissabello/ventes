<?php
session_start();
include('connect.php');

if(isset($_POST["emai"])){

$email = $_POST["emai"];
$motDePasse = $_POST["pwde"];

// @$roles = 0;

    $sql="SELECT * FROM admin WHERE email ='$email' AND password ='$motDePasse'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $id_session = $row['id'];
        $_SESSION["id"] = $id_session;
        echo json_encode(['success_msg' => 'User a été enregistrer']);
    } 
    else {
      echo json_encode(['suces_msg' => 'User n a pas été enregistrer']);
  }
  
    $conn->close();
   
  }

?>






