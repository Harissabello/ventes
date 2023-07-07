
// Récupérer la référence vers l'élément input de recherche
const searchInput = document.querySelector('#rech');

// Récupérer la référence vers l'élément de sortie (résultats de la recherche)
const outputDiv = document.querySelector('#output');

// Écouter l'événement keyup (touche relâchée) sur l'input de recherche
searchInput.addEventListener('keyup', (event) => {
  // Récupérer la valeur saisie dans l'input
  const searchValue = event.target.value.trim();

  // Vérifier si la valeur saisie n'est pas vide
  if (searchValue !== '') {
    // Envoyer une requête AJAX pour récupérer les suggestions de recherche à partir de la base de données
    const xhr = new XMLHttpRequest();
    xhr.open('GET', `index.php?q=${searchValue}`);
    xhr.onload = () => {
      if (xhr.status === 200) {
        // Convertir la réponse JSON en objet JavaScript
        const suggestions = JSON.parse(xhr.responseText);

        // Créer une liste HTML pour afficher les suggestions
        const suggestionsList = document.createElement('ul');

        // Parcourir les suggestions et créer un élément de liste pour chacune
        suggestions.forEach((suggestion) => {
          const suggestionItem = document.createElement('li');
          suggestionItem.textContent = suggestion.fonction;
          suggestionsList.appendChild(suggestionItem);
        });

        // Vider l'élément de sortie existant et ajouter la liste de suggestions
        outputDiv.innerHTML = '';
        outputDiv.appendChild(suggestionsList);
      }
    };
    xhr.send();
  } else {
    // Si la valeur saisie est vide, vider également l'élément de sortie
    outputDiv.innerHTML = '';
  }
});