<!DOCTYPE html>
<html lang="de" data-theme="Dark">
<head>
    <title>Barrierefreiheit | The Witcher 3</title>
    <link rel="stylesheet" type="text/css" href="/assets/css/styles.css">
    <link rel="icon" type="image/x-icon" href="/assets/images/favicon/favicon.ico">
    <script src="/assets/js/scripts.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Team, Steckbrief, The Witcher 3">
    <meta name="description" content="Unser Team stellt sich vor: Vier Mitglieder mit Leidenschaft für The Witcher 3.">
    <meta name="author" content="Nils, Michael, Sven, Leon">
</head>

<body>
    <?php include "assets/templates/nav.php"; ?>


<main> 
<main>
    <section>
        <h1 class="main-headline">Barrierefreiheitseinstellungen</h1>
    </section>

    <article class="main-article">
        <form id="accessibility-settings-form" action="speichere_einstellungen.php" method="post">
            <!-- Schriftgröße -->
            <label for="font-size">Schriftgröße:</label>
            <select id="font-size" name="font_size">
                <option value="small">Klein</option>
                <option value="medium" selected>Mittel</option>
                <option value="large">Groß</option>
            </select>

            <!-- Kontrastmodus -->
            <label for="contrast-mode">Kontrastmodus:</label>
            <select id="contrast-mode" name="contrast_mode">
                <option value="normal" selected>Normal</option>
                <option value="high-contrast">Hoher Kontrast</option>
            </select>

            <!-- Farbschema -->
            <label for="color-scheme">Farbschema:</label>
            <select id="color-scheme" name="color_scheme">
                <option value="default" selected>Standard</option>
                <option value="dark">Dunkel</option>
                <option value="light">Hell</option>
            </select>

            <!-- Animationen -->
            <label for="animations">Animationen:</label>
            <select id="animations" name="animations">
                <option value="enabled" selected>Aktiviert</option>
                <option value="disabled">Deaktiviert</option>
            </select>

            <!-- Screenreader-Unterstützung -->
            <label for="screenreader-support">Screenreader-Unterstützung:</label>
            <select id="screenreader-support" name="screenreader_support">
                <option value="enabled" selected>Aktiviert</option>
                <option value="disabled">Deaktiviert</option>
            </select>

            <button type="submit">Einstellungen speichern</button>
        </form>
    </article>
</main>

</main>

<?php include "assets/templates/footer.php" ?>
</body>
</html>
