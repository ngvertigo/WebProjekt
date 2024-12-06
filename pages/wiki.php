<!DOCTYPE html>
<html>
    <head>
        <?php
        $title = "Wiki | The Witcher 3";
        $keywords = "Wiki";
        $desc = "Wiki";
        include "assets/templates/head.php"; ?>
    </head>
    <body>
        <?php include "assets/templates/nav.php"; ?>
        <main class="wiki-main-section">
            <!-- Use other tag -->
            <section class="wiki-search-section">
                <h1 class="main-headline">The Witcher 3 Wiki</h1>
                <form class="wiki-search-form" action="#" method="get">
                    <input class="type-input" type="text" placeholder="Nach Einträgen suchen...">
                    <button class="wiki-search-button" type="submit">Suchen</button>
                </form>
            </section>

            <div class="wiki-main-section">
                <article class="wiki-article">
                    <h2 class="wiki-article-h">The Witcher 3: Wild Hunt</h2>
                    <p class="wiki-article-p">
                        The Witcher 3: Wild Hunt ist ein Action-Rollenspiel aus der Third-Person-Perspektive,
                        entwickelt von CD Projekt RED. Es spielt in einer offenen Welt und folgt Geralt von Riva,
                        einem professionellen Monsterjäger, bei seiner Suche nach seiner Ziehtochter Ciri.
                    </p>
                </article>

                <article class="wiki-article">
                    <h2 class="wiki-article-h">Hauptcharaktere</h2>
                    <ul class="wiki-ul">
                        <li class="wiki-ul-li">Geralt von Riva</li>
                        <li class="wiki-ul-li">Ciri</li>
                        <li class="wiki-ul-li">Yennefer von Vengerberg</li>
                        <li class="wiki-ul-li">Triss Merigold</li>
                    </ul>
                </article>

                <article class="wiki-article">
                    <h2 class="wiki-article-h">Spielwelt und Regionen</h2>
                    <p class="wiki-article-p">
                        Die Welt von The Witcher 3 ist in mehrere Regionen unterteilt, darunter Velen, Novigrad,
                        Skellige und Toussaint. Jede dieser Regionen bietet einzigartige Landschaften,
                        Quests, Monster und NPCs, die den Spieler in eine lebendige, dynamische Umgebung eintauchen lassen.
                    </p>
                </article>
            </div>
        </main>
        <?php include "assets/templates/footer.php" ?>
    </body>
</html>
