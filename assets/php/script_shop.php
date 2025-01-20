<?php
// Überprüfen, ob ein Suchbegriff vorhanden ist
$searchQuery = isset($_GET['item-search']) ? trim($_GET['item-search']) : '';

// Laden der Produkte aus der JSON-Datei
$jsonData = file_get_contents("data/items.json");
$products = json_decode($jsonData, true);

// Überprüfen, ob das Dekodieren erfolgreich war
if ($products === null && json_last_error() !== JSON_ERROR_NONE) {
    echo "Konnte JSON-Daten nicht dekodieren.";
    exit;
}

// Produkte filtern, wenn ein Suchbegriff vorhanden ist
if ($searchQuery !== '') {
    $filteredProducts = array_filter($products, function($product) use ($searchQuery) {
        return stripos($product['name'], $searchQuery) !== false;
    });
} else {
    $filteredProducts = $products;
}

// Produkte anzeigen
foreach ($filteredProducts as $product) {
    echo '<article class="product-item">';
    echo '<img class="product-image" src="/assets/images/items/' . htmlspecialchars($product['image']) . '" alt="' . htmlspecialchars($product['name']) . '">';
    echo '<h2 class="product-name">' . htmlspecialchars($product['name']) . '</h2>';
    echo '<p class="product-price">Preis: €' . number_format($product['price'], 2, ',', '.') . '</p>';
    echo '<p class="product-description">' . htmlspecialchars($product['description']) . '</p>';
    echo '<button class="add-to-cart-button product-button" data-id="' . $product['id'] . '" data-name="' . htmlspecialchars($product['name']) . '" data-price="' . $product['price'] . '">Zum Warenkorb hinzufügen</button>';
    echo '</article>';
}
?>

