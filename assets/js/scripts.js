
// Change so elem[0] for <html> tag attribute isn't "guessed" | direct assign?
function switch_theme(whichtheme) {
    let elem = document.getElementsByTagName("html");
    switch (whichtheme) {
    case "light":
        elem[0].setAttribute("theme", "light");
        break;
    case "dark":
        elem[0].setAttribute("theme", "dark");
        break;
    case "dracula":
        elem[0].setAttribute("theme", "dracula");
        break;
    }
}
