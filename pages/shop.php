<!DOCTYPE html>
<html>
    <head>
        <?php
        $title = "Shop | The Witcher 3";
        $keywords = "Shop";
        $desc = "Shop";
        include "assets/templates/head.php"; ?>
    </head>
    <body>
        <?php include "assets/templates/nav.php"; ?>
        <main>
            <div class="shop-section">
                <h1 class="main-headline">Witcher 3 Item Shop</h1>
                <div class="search-filter-section">
                    <form class="form-search" action="#" method="get">
                        <input class="type-input" type="text" name="q" placeholder="Nach Gegenständen suchen...">
                        <button class="footer-button" type="submit">Suchen</button>
                    </form>
                    <div class="filters-container">
                        <div class="filter-group-category">
                            <label class="label-category">Kategorie:</label>
                            <select class="select-category">
                                <option class="option-category">Tränke</option>
                                <option class="option-category">Waffen</option>
                                <option class="option-category">Rüstungen</option>
                            </select>
                        </div>
                        <div class="filter-group-sort">
                            <label class="label-sort">Sortieren nach:</label>
                            <select class="select-sort">
                                <option class="option-sort">Beliebtheit</option>
                                <option class="option-sort">Neueste</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="products-list-section">
                    <article class="product-item">
                        <img class="product-image" src="TODO" alt="Stahlschwert">
                        <h2 class="product-name">Stahlschwert</h2>
                        <p class="product-price">200 Kronen</p>
                        <button class="product-button">In den Warenkorb</button>
                    </article>
                    <article class="product-item">
                        <img class="product-image" src="TODO" alt="Leder-Rüstung">
                        <h2 class="product-name">Leder-Rüstung</h2>
                        <p class="product-price">350 Kronen</p>
                        <button class="product-button">In den Warenkorb</button>
                    </article>
                    <article class="product-item">
                        <img class="product-image" src="TODO" alt="Schwalbe-Trank">
                        <h2 class="product-name">Schwalbe-Trank</h2>
                        <p class="product-price">50 Kronen</p>
                        <button class="product-button">In den Warenkorb</button>
                    </article>
                </div>
            </div>
        </main>
        <?php include "assets/templates/footer.php" ?>
    </body>
</html>
