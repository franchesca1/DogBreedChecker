<?php
$dogBreeds = ['Labrador', 'Poodle', 'Bulldog', 'Husky', 'Golden Retriever', 'German Shepherd'];
$breed = $_GET['breed'];

if (in_array($breed, $dogBreeds)) {
  echo "Breed found: " . $breed;
} else {
  echo "Breed not found.";
}
?>



