<?php

// Load items.json and decode into PHP-Array
$jsonData = file_get_contents("data/wiki.json");
$articles = json_decode($jsonData, true);

// Check if decoding succeeded
if ($articles === null && json_last_error() !== JSON_ERROR_NONE) {
  echo "Could not decode JSON-Data.";
  exit;
}

// Function to format text with **bold**
function formatBoldText($text) {
    return preg_replace('/\*\*(.*?)\*\*/', '<strong>$1</strong>', htmlspecialchars($text));
}

// Render wiki articles
foreach ($articles as $art) {
    echo '<article class="wiki-article">';
    echo '<h2 class="wiki-article-h">' . htmlspecialchars($art['title']) . '</h2>';

    if ($art['type'] === 'p') {
        // Render p
        echo '<pre>';
        echo '<p class="wiki-article-p">' . formatBoldText($art['content']) . '</p>';
        echo '</pre>';
    } elseif ($art['type'] === 'ul' && isset($art['content']['li']) && is_array($art['content']['li'])) {
        // Render ul
        echo '<ul class="wiki-ul">';
        foreach ($art['content']['li'] as $listItem) {
            echo '<pre>';
            echo '<li class="wiki-ul-li">' . formatBoldText($listItem['text']) . '</li>';
            echo '</pre>';
        }
        echo '</ul>';
    }

    echo '</article>';
}

?>

