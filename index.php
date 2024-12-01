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
        require $_SERVER["DOCUMENT_ROOT"] . "/shop/shop.php";
        break;
    case "/wiki":
        include $_SERVER["DOCUMENT_ROOT"] . "/wiki/wiki.php";
        break;
    default:
        include $_SERVER["DOCUMENT_ROOT"] . "/assets/templates/404.php";
        break;
}

?>
