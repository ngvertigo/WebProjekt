<?php
// Load team.json and decode into PHP-Array
$jsonData = file_get_contents("data/team.json");
$team = json_decode($jsonData, true);

// Check if decoding succeeded
if ($team === null && json_last_error() !== JSON_ERROR_NONE) {
  echo "Could not decode JSON-Data.";
  exit;
}

// Render products/items
foreach($team as $per) {
    echo '<div class="person">';
    echo '<img src="' . htmlspecialchars($per['image']) . '" alt="Bild von Teammitglied: ' . htmlspecialchars($per['name']) . '">';
    echo '<div class="person-info">';
    echo '<h2>' . htmlspecialchars($per['name']) . '</h2>';
    echo '<pre>';
      echo '<p>' . htmlspecialchars($per['description']) . '</p>';
    echo '</pre>';
    echo '</div>';
    echo '</div>';
}
?>
