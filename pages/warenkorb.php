<!DOCTYPE html>
<html lang="zxx" data-theme="Dark">
<!-- VALIDATED -->

<head>
    <title>
        Shop | The Witcher 3
    </title>
    <!-- Import stylesheets (CSS) and scripts (JS) -->
    <link rel="stylesheet" type="text/css" href="/assets/css/styles.css">
    <link rel="icon" type="image/x-icon" href="/assets/images/favicon/favicon.ico">
    <script src="/assets/js/scripts.js"></script>
    <script src="/assets/js/wk.js" defer></script>
    <meta charset="UTF-8">
    <!-- Viewport for responsive design  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Shop, Items, The Witcher 3">
    <meta name="description" content="The Witcher 3 Shop Seite">
    <meta name="author" content="Nils, Michael, Sven, Leon">
</head>

<body>
        <?php include "assets/templates/nav.php"; ?>

    <main>
        <section>
            <h1 class="main-headline">Warenkorb</h1>
        </section>

        <article class="main-article">
            <h2 class="main-sub-headline">Ihre ausgewählten Artikel</h2>
            <div class="container">
                <table class="cart-table">
                    <thead>
                        <tr>
                            <th>Artikel</th>
                            <th>Anzahl</th>
                            <th>Preis</th>
                            <th>Gesamt</th>
                            <th>Aktion</th>
                        </tr>
                    </thead>
                    <tbody id="cart-items">
                        <!-- Dynamisch generierte Warenkorb-Einträge -->
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" class="text-right">Zwischensumme:</td>
                            <td id="subtotal">0.00 €</td>
                            <td></td>
                        </tr>
                    </tfoot>
                </table>

                <div class="cart-actions">
                    <a href="/shop" class="button">Weiter einkaufen</a>
                    <button id="checkout-button" class="button">Zur Kasse</button>
                </div>
            </div>
        </article>
    </main>

<?php include "assets/templates/footer.php" ?>

</body>
</html>
