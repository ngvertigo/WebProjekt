/**
 * Apply theme on every page automatically
 */
document.addEventListener("DOMContentLoaded", () => {
    // Apply theme saved in session storage or use user preferred theme (else fallback light theme)
    let pref_theme = window?.watchMedia?.("(prefers-color-scheme:dark)")?.matches ? "dark" : "light";
    switch_theme(sessionStorage.getItem("theme") || pref_theme);
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
    case "gruvbox":
        elem.setAttribute("theme", whichtheme);
        sessionStorage.setItem("theme", whichtheme);
        break;
    default:
        console.log("[ERROR] No theme with name: " + whichtheme);
    }
}

