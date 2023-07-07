<?php
// Connexion à la base de données
include("connect.php");

// Vérifie si le formulaire a été soumis
if (isset($_POST['modif'])) {
  // Récupère les valeurs des champs du formulaire
  $id = $_POST['id'];
  $nom = $_POST['nom'];
  $structu = $_POST['structu'];
  $email = $_POST['email'];
  $genre = $_POST['genre'];

  // Vérifie que les champs sont valides
  if (!empty($id) && !empty($nom) && !empty($structu) &&!empty($email) &&!empty($genre)) {
    // Échappe les caractères spéciaux pour empêcher les injections SQL
    $nom = mysqli_real_escape_string($conn, $nom);
    $structu = mysqli_real_escape_string($conn, $structu);
    $email = mysqli_real_escape_string($conn, $email);
    $genre = mysqli_real_escape_string($conn, $genre);

    // Exécute la requête SQL pour mettre à jour les informations
    $requete = "UPDATE usser SET id='$id',noms='$nom', nom='$structu', emails='$email', genres='$genre' WHERE id=$id";
    $resultat = mysqli_query($conn, $requete);

    if ($resultat) {
      // Redirige l'utilisateur vers la page de tableau de bord avec un message de succès
      header("Location: Admin.php");
    } else {
      // Affiche un message d'erreur si la requête a échoué
      echo "Erreur: " . mysqli_error($conn);
    }
  } else {
    // Affiche un message d'erreur si les champs sont vides
    echo "Erreur: les champs ne peuvent pas être vides";
  }
}

// Ferme la connexion à la base de données
mysqli_close($conn);
?>
