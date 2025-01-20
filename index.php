<?php
$request_uri = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

// Routes
switch ($request_uri) {
    case "/":
        include "home.php";
        break;
    case "/shop":
    case "/shop.php":
        include "pages/shop.php";
        break;
    case "/wiki":
        include "pages/wiki.php";
        break;
    case "/warenkorb":
        include "pages/warenkorb.php";
        break;
    case "/impressum":
        include "pages/impressum.php";
        break;
    case "/about":
        include "pages/about.php";
        break;
    case "/datenschutz":
        include "pages/datenschutz.php";
        break;
    case "/kontakt":
        include "pages/kontakt.php";
        break;
    case "/sitemap":
        header('Content-Type: application/xml; charset=utf-8');
        readfile('pages/sitemap.xml');
        break;
    case "/barrierefreiheit":
        include "pages/barrierefreiheit.php";
        break;
    default:
        include "assets/templates/404.php";
        break;
}
?>

