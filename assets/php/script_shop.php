<?php

// Load items.json and decode into PHP-Array
$jsonData = file_get_contents("data/items.json");
$products = json_decode($jsonData, true);

// Check if decoding succeeded
if ($products === null && json_last_error() !== JSON_ERROR_NONE) {
  echo "Could not decode JSON-Data.";
  exit;
}

// Render products/items
foreach($products as $prod) {
    echo '<article class="product-item">';
    echo '<img class="product-image" src="/assets/images/items/' . htmlspecialchars($prod['image']) . '" alt="' . htmlspecialchars($prod['name']) . '">';
    echo '<h2 class="product-name">' . htmlspecialchars($prod['name']) . '</h2>';
    //TODO echo '<p class="">' . htmlspecialchars($prod['beschreibung']) . '</p>';
    echo '<p class="product-price">Preis: €' . number_format($prod['price'], 2, ',', '.') . '</p>';
    echo '<p class="product-description">' . htmlspecialchars($prod['description']) . '"</p>';
   echo '<button class="add-to-cart-button product-button" data-id="' . $prod['id'] . '" data-name="' . htmlspecialchars($prod['name']) . '" data-price="' . $prod['price'] . '">Zum Warenkorb hinzufügen</button>';
    echo '</article>';
}

?>
