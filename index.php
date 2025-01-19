<!-- Simple Routing -->
<?php
$request_uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

// Handle search queries

// Routes
switch ($request_uri) {
    case "/":
        include "home.php";
        break;
    case "/shop":
        include "pages/shop.php";
        break;
    case "/wiki":
        include "pages/wiki.php";
        break;
    case "/warenkorb":
        include "pages/warenkorb.html";
        break;
    case "/impressum":
        include "pages/impressum.html";
        break;
    case "/about":
        include "pages/about.html";
        break;
    case "/datenschutz":
        include "pages/datenschutz.html";
        break;
    default:
        include "assets/templates/404.php";
        break;
}

?>
