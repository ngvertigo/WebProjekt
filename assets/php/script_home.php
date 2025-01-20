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
for ($x = 0; $x <= 15; $x++) {
  $item = $products[rand(0, count($products) -1)];
  echo '<a href="/shop">';
  echo '<img class="item" src="/assets/images/items/' . htmlspecialchars($item['image']) . '" alt="Bild von Shop-item: ' . htmlspecialchars($item['name']) . '">';
  echo '</a>';
}

?>
