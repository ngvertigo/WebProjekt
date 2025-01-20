<!DOCTYPE html>
<html lang="de" data-theme="gruvbox">
<head>
    <title>Kontakt | The Witcher 3</title>
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
    <section>
        <h1 class="main-headline">Kontaktieren Sie uns</h1>
    </section>

    <article class="main-article">
        <form id="contact-form" action="kontakt.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Ihr Name" required>

            <label for="email">E-Mail:</label>
            <input type="email" id="email" name="email" placeholder="Ihre E-Mail-Adresse" required>

            <label for="message">Nachricht:</label>
            <textarea id="message" name="message" placeholder="Ihre Nachricht" rows="5" required></textarea>

            <button type="submit">Absenden</button>
        </form>
    </article>
</main>


<?php include "assets/templates/footer.php" ?>
</body>
</html>
