<?php

// Load items.json and decode into PHP-Array
$jsonData = file_get_contents("data/wiki.json");
$articles = json_decode($jsonData, true);

// Check if decoding succeeded
if ($articles === null && json_last_error() !== JSON_ERROR_NONE) {
  echo "Could not decode JSON-Data.";
  exit;
}

// Render wiki articles
foreach ($articles as $art) {
    echo '<article class="wiki-article">';
    echo '<h2 class="wiki-article-h">' . htmlspecialchars($art['title']) . '</h2>';

    if ($art['type'] === 'p') {
        // Render p
        echo '<p class="wiki-article-p">' . htmlspecialchars($art['content']) . '</p>';
    } elseif ($art['type'] === 'ul' && isset($art['content']['li']) && is_array($art['content']['li'])) {
        // Render ul
        echo '<ul class="wiki-ul">';
        foreach ($art['content']['li'] as $listItem) {
            echo '<li class="wiki-ul-li">' . htmlspecialchars($listItem['text']) . '</li>';
        }
        echo '</ul>';
    }

    echo '</article>';
}

?>
