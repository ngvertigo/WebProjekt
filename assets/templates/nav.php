<nav>
    <div id="nav-link-container">
        <a href="/">Startseite</a>
        <a href="/shop">Shop</a>
        <a href="/wiki">Wiki</a>
        <a href="/warenkorb">Warenkorb</a>
        <form action="https://www.google.com/search" method="get" class="search-form" target="_blank">
    <input
        class="type-input"
        type="text"
        name="q"
        placeholder="Suche eingeben..."
        required
    >
    <input type="hidden" name="sitesearch" value="example.com">
    <button type="submit" class="footer-button">Suchen</button>
</form>

    </div>
    <div id="theme-menu">
        <span>Themes</span>
        <ul class="dropdown">
            <?php
            // dynamically add themes to dropdown menu
            $themes = [
                "light", "dark", "dracula", "barrierefrei"
            ];

            foreach($themes as $theme) {
                echo "<li><button class=\"theme-toggle\" onclick=\"switch_theme('$theme');\">" . ucfirst($theme) . "</button></li>";
            }
            ?>
        </ul>
    </div>
<!--    <div> <!--TODO: Scroll Indicator -->
    <!--    </div> -->
</nav>
