<!DOCTYPE html>
<html lang="de" theme="dracula">
  <!-- Metainformation about the Page  -->
    <head>
        <?php
        $title = "The Witcher 3 Shop | Landing Page";
        $keywords = "Witcher 3, Shop, Items";
        $desc = "Witcher 3 Item Shop Landing Page";
        include "assets/templates/head.php";
?>
        <script src="/assets/js/home.js" defer></script>
    </head>
    <!-- Displayed content -->
    <body>
      <!-- Navbar  -->
      <?php include "assets/templates/nav.php"; ?>

        <main>
            <section>
                <h1 class="main-headline">Willkommen im Witcher 3 Item Shop</h1>
            </section>
          <article class="main-article">
              <h2 class="main-sub-headline">News</h2>
              <p>
    <strong>Monster gesichtet: Seltene Erscheinung eines Basilisken in Velen</strong><br>
    Bewohner des Dorfes Lindenvale berichten von nächtlichen Schreien und einer mysteriösen Kreatur, die ihre Schafe verschleppt. Ein erfahrener Hexer wird dringend gesucht, um den Verdacht zu bestätigen und die Gefahr zu beseitigen.<br><br>

    <strong>König Radovid erlässt neues Gesetz zur Magie</strong><br>
    In Novigrad wurde ein Dekret erlassen, das die Verfolgung von Magiern und Alchemisten intensiviert. Hexenjagden nehmen zu, und die Straße der Märtyrer füllt sich erneut mit Scheiterhaufen. Bürger berichten von Spannungen zwischen Magieanwendern und der Kirche des ewigen Feuers.<br><br>

    <strong>Skellige-Krieger trotzen Stürmen und besiegen Seeschlangen</strong><br>
    Eine Heldengruppe der Clan-An Craite behauptet, eine gigantische Seeschlange nahe der Insel Hindarsfjall getötet zu haben. Das Monster, so erzählen die Krieger, bedrohte seit Jahren die Fischer. Die sterblichen Überreste sollen am nächsten Fest öffentlich ausgestellt werden.<br><br>

    <strong>Neuer Schatz im verlassenen Schloss Kaer Morhen entdeckt</strong><br>
    Ein alter Tagebucheintrag eines verstorbenen Hexers enthüllt die Existenz eines versteckten Schatzes in der Nähe von Kaer Morhen. Händler und Abenteurer strömen in die Region, obwohl Gerüchte von Flüchen und Geistern die Runde machen.<br><br>

    <strong>Heilmittel für "Weiße Fäule" angeblich entdeckt</strong><br>
    Ein Alchemist in Beauclair behauptet, ein Heilmittel gegen die Weiße Fäule entwickelt zu haben, eine Seuche, die in den letzten Jahren große Teile der Ernte in Toussaint und Velen zerstört hat. Die königliche Akademie untersucht die Wirkung, doch Skepsis bleibt, da frühere Versuche gescheitert sind.
</p>
          </article>
          
          <article class="main-article">
              <h2 class="main-sub-headline">Kauf-Vorschläge</h2>
                <p>Aktuelle Items im Shop:</p>
                <div id="wrapper">
         <div id="carousel">
            <div id="content">
<?php include "assets/php/script_home.php" ?>
            </div>
         </div>
         <button id="prev">
            <svg
               xmlns="http://www.w3.org/2000/svg"
               width="24"
               height="24"
               viewBox="0 0 24 24"
               >
               <path fill="none" d="M0 0h24v24H0V0z" />
               <path d="M15.61 7.41L14.2 6l-6 6 6 6 1.41-1.41L11.03 12l4.58-4.59z" />
            </svg>
         </button>
         <button id="next">
            <svg
               xmlns="http://www.w3.org/2000/svg"
               width="24"
               height="24"
               viewBox="0 0 24 24"
               >
               <path fill="none" d="M0 0h24v24H0V0z" />
               <path d="M10.02 6L8.61 7.41 13.19 12l-4.58 4.59L10.02 18l6-6-6-6z" />
            </svg>
         </button>
      </div>          </article>
          <article class="main-article">
              <h2 class="main-sub-headline">Angebote und Rabatte</h2>
              <p>Zurzeit gibt es leider keine Angebote und Rabatte.</p>
          </article>
      </main>

      <?php include "assets/templates/footer.php" ?>
  </body>
</html>
