<nav>
    <div id="nav-link-container">
        <a href="/">Startseite</a>
        <a href="/shop">Shop</a>
        <a href="/wiki">Wiki</a>
        <a href="#">Warenkorb</a>
        <input placeholder="Suche eingeben..."></input>
    </div>
    <div id="theme-menu">
        <span>Themes</span>
        <ul class="dropdown">
            <?php
            // dynamically add themes to dropdown menu
            $themes = [
                "light", "dark", "dracula", "gruvbox"
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
