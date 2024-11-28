# Designkonzept für The Witcher 3 Ingame Item Shop

## Kurzbeschreibung der Organisation
Der Auftragsgeber CD Projekt S.A., mit Sitz in Polen, ist ein Entwickler und Publisher von Computerspielen für den internationalen Markt. Das Unternehmen ist bekannt für seine immersiven und umfangreichen Rollenspiele, darunter Spiele wie die The Witcher Serie und Cyberpunk 2077, welche weltweit für massive Verkaufszahlen sorgten und von der Kritik sehr gelobt wurden.
Dabei ist The Witcher 3 besonders bekannt für seine spannende Story, welche dem Spiel schnell den Kult-Status in der RPG-Community erlangte.

## Ziele des Projektes
Das Ziel des Shops ist der Verkauf von virtuellen Gegenständen, die Spieler in der Witcher-Ingamewelt verwenden können, um ihr Spiel optisch anzupassen oder um Spielfortschritt zu erlangen. Dabei bietet der Shop Artikel aus verschiedenen Kategorien im Spiel an: Waffen, Rüstungen, Tränke.
Zudem bietet die Webseite auch einzelne Wikibeiträge über die Spielgegenstände, um Spieler zu Informieren und diesen vergleiche zwischen möglichen Ausrüstungskombinationen zu bieten.
Dadurch steigert der Shop die Nutzererfahrung mit dem Spiel und erlaubt ein intuitives und unkompliziertes Spielerlebnis, bei dem sich jeder Spieler sein Herausforderungslevel selber anpassen kann.

## Zielgruppen und deren Bedürfnisse
Jedoch spricht The Witcher 3 auch eine sehr breite Zielgruppe an und enthält neben Storyabschnitten auch schwere Bosskämpfe. Diese könnten für Leute mit weniger Freizeit oder für Leute mit Beeinträchtigung für Frustration sorgen oder zum Spielabbruch führen. Dabei spricht der Shop primär RPG-Spieler an, welche schnell und unkompliziert Spielitems kaufen wollen, primär Neulinge, um zeitintensive Spielphasen zu vereinfachen oder um den Spielfortschritt mit Freunden mitzuhalten. Dabei spricht der Shop auch erfahrenere Spieler an, welche präzise Informationen zu Spielgegenständen haben wollen und gezielt bestimmte Gegenstände suchen. Zudem umfasst die Zielgruppe auch Spieler mit Beeinträchtigungen, für die die vorgegebenen Spielitems nicht ausreichend sind und welche auf zusätzliche Hilfsmittel angewiesen sind. Daneben spricht der Shop auch Spieler an, welche sich für Kosmetische Items interessieren, darunter vor allem Sammler, und das Aussehen ihres Spielcharakters durch nicht erspielbare Charakterskins anpassen möchten.
Breiter gefasst, spricht der Shop alle Spieler an, die sich aus spielerischen oder kometischen Gründen Items für das Spiel The Witcher 3 kaufen möchten.

Bedürfnisse der Zielgruppen dabei sind:
- **Personen mit Beeinträchtigung**
  - Benutzerfreundliche und Barrierefreie Webseite
- **Neulinge**
  - Benutzerfreundliches intuitives Design, mit selbsterklärender Benutzerführung
- **Erfahrene Spieler**
  - Detaillierte und spezifische Angaben mit Filteroptionen nach Item Attributen wie Schaden, Gewicht und Preis
- **Sammler**
  - Visuell ansprechendes Design mit Vorschaubildern für (kosmetische) Gegestände und Skins

## Funktionen der Website

### Grundfunktionen
**Shop Funktionen**
Der Shop bietet die Möglichkeit nach Spielgegenständen zu suchen, diese zu filtern, zu sortieren und zum Kaufen in den Warenkorb zu legen. Zu den angebotenen Artikel gibt es eine bildliche Darstellung der Artikel, eine Beschreibung des Gegenstands, sowie eine Auflistung der Attribute mit gegebenfalls einer Erklärung dieser, sowie der Artikelpreis.

### Erweiterte Funktionen
**Wiki Integration**
Die eingebundene Wiki bietet zusätzliche Detailseiten mit Hintergrundinformationen zu den Items und zeigt einer detailliertere Beschreibung zu diesen.

**Interaktive Suche**
Eine interaktive Suche zeigt dynamische Ergebnisse während der Eingabe an, um eine übersichtlichere und intuitive Suche zu bieten.

### Technische Umsetzung
Für die dynamische und einheitliche Umsetzung der Artikelseiten, sowie der Detailseiten wird PHP verwendet.
Für interaktive Features, wie der Warenkorb und die Kauffunktionen verwenden wir JavaScript, sowie für optische Animationen.
Das Responsive Layout wird mit CSS realisiert um die HTML Basis optisch zu verschönern und ansprechend darzustellen.
Tastatursteuerung: Taste für bestimmte Auswahl

### Gestalterische Umsetzung
Anpassbare Farbgebung, einheitliches Farbschema, für Farbblinde und custom Themes -> Farben als Ressource in CSS.
Button Hover und Klickbestätigung, Hyperlinks unter Beschreibung (kein "Klicke Hier"), wichtige Elemente optisch hervorheben (Preis, Filter, Warenkorb), sekundäre Informationen (bspw. Beschreibungen dezent halten),


## Sitemap
""" Skizze """

navbar/footer auf jeder Seite

Startseite:
navbar = {Startseite, Shop (Waffen, Rüstungen, Tränke), Wiki, Warenkorb, Kontakt, Nachtmodus, Suche}
main   = {News zum Spiel, Vorgeschlagene/Top Artikel, Bestellhistorie/Erneut kaufen}
footer = {Impressum/Datenschutz, Newsletter (für neue Items), Social Media}

navbar:
- Logo (mit oder ohne "Startseite")
- Links...
- Shop mit Dropdownmenu
- Tag-/Nachtmodus
- Seitensuche mit direkter Texteingabe
- (Scrollt mit?)
- Einstellungen für Barrierefreiheit im Dropdownmenu (Farbblindenmodus, (Screenreader?), ...)


main:
- zentrierter auf die Mitte, leichter Seitenabstand
- Überschriften und Kategorien mit Bildern
- Kaufhistorie horizontal Scrollbar <->
- About us, Why us, ...
- Neues zur Seite/zum Spiel

footer:
- ganz unten an der Seite
- Newsletter Email als direkter Textinput mit Abonnierbestätigung
- Social Media Links
- Impressum/Datenschutz(hinweise) Link
- Lizenz zur Webseite und Spiel


Shop:
navbar = {...}
nav    = {Breadcrumbs für Kategorien: Shop > Waffen > Schwerter > Langschwert, dyn. Suche, Filter}
main   = {Suchanzeige der Artikel mit Bild, Preis und Kurzbeschreibung}
footer = {...}

Wiki:
navbar = {...}
nav    = {Breadcrumbs, dyn. Suche}
main   = {Kategorien mit Hyperlinks zu anderen Beiträgen, Top gesuchte Artikel}
footer = {...}

Warenkorb:
navbar = {...}
main   = {Auflistung der Artikel mit Gesamtpreis, Bestellformular (mit Spielername), Kauffunktion, Belegausstellung}
footer = {...}

Kontakt:
navbar = {...}
main   = {Auswahlkategorien (Problem, Frage, ...) mit dynamischem Kontaktformular}
footer = {...}

Impressum/Datenschutz:
- Option 1)
navbar = {...}
main   = {Inhalt}
footer = {...}
- Option 2)
Öffnen des Textes in neuem Tab oder Dateidownload (falls Seitenlimit erreicht)

""" Skizze """

### (Weitere Überlegungen)
- Shop als Handelsplattform / Usermarkt => User bieten Items an
