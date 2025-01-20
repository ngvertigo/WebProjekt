<!DOCTYPE html>
<html lang="de" data-theme="gruvbox">
    <head>
        <?php
        $title = "Shop | The Witcher 3";
        $keywords = "Shop";
        $desc = "Shop";
        include "assets/templates/head.php"; ?>
        <script src="/assets/js/wk.js"></script>
        <style>
            .search-filter-section {
                display: flex;
                flex-wrap: wrap;
                gap: 1rem;
                align-items: flex-start;
                margin-bottom: 1.5rem;
            }

            .form-search {
                flex: 1 1 auto;
                min-width: 300px;
            }

            .filters-container {
                display: flex;
                flex-direction: column;
                gap: 1rem;
                flex: 1 1 auto;
                min-width: 200px;
            }

            .filter-group-category,
            .filter-group-sort {
                display: flex;
                flex-direction: column;
            }
        </style>
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

                <div id="products-list-section">
                    <?php include "assets/php/script_shop.php"; ?>
                </div>
            </div>
        </main>
        <?php include "assets/templates/footer.php" ?>
    </body>
</html>
