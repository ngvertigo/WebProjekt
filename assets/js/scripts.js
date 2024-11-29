
// Change so elem[0] for <html> tag attribute isn't "guessed"
function switch_theme() {
    let elem = document.getElementsByTagName("html");
    if (elem[0].getAttribute("theme") == "light") {
        elem[0].setAttribute("theme", "dark");
    } else {
        elem[0].setAttribute("theme", "light");
    }
}
