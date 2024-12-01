/**
 * Apply theme on every page automatically
 */
document.addEventListener("DOMContentLoaded", () => {
    // Apply theme saved in session storage or default apply light if none saved
    switch_theme(sessionStorage.getItem("theme") || "light")
})


/**
 * Takes a String and checks if theme exists, then changes the theme attribute in <html> tag accordingly.
 * No return value, error if no theme exists.
 */
function switch_theme(whichtheme) {
    let elem = document.documentElement; // <html> tag

    // Check if theme exists
    switch (whichtheme) {
    case "light":
    case "dark":
    case "dracula":
        elem.setAttribute("theme", whichtheme);
        sessionStorage.setItem("theme", whichtheme);
        break;
    default:
        console.log("[ERROR] No theme with name: " + whichtheme);
    }
}
