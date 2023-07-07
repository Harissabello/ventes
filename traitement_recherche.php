<?php
// Récupérer le terme de recherche
$recherche = $_GET['recherche'];

// Effectuer la recherche dans la base de données et obtenir les résultats
// ...

// Générer le HTML des résultats de recherche
$resultats_html = '<ul>';
foreach ($resultats as $produit) {
    $resultats_html .= '<li>'.$produit['nom'].'</li>';
}
$resultats_html .= '</ul>';

// Renvoyer les résultats de recherche
echo $resultats_html;
?>
