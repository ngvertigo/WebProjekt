  <!-- Simple Routing -->
  <?php
  $request_uri = $_SERVER["REQUEST_URI"];

  // Handle search queries

  // Routes
  switch ($request_uri) {
      case "/":
          include "home.php";
          break;
      case "/shop":
          include "shop/shop.php";
          break;
      case "/wiki":
          include "wiki/wiki.php";
          break;
      default:
          include "assets/templates/404.php";
          break;
  }

  ?>
