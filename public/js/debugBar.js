// If no key is set in local storage yet for debug bar display value, set it to true
// Then toggles the debug bar appropriately
$(document).ready(function(){
    let tmp = localStorage.getItem("debug_bar_toggled");

    if (tmp == null)
        localStorage.setItem("debug_bar_toggled", "true");

    showOrHideDebugBar();
});

// Upon toggle debug bar click
function closeOpenDebugBar() {
    // Get the current display value of debug bar from storage,
    // Updates it
    if (localStorage.getItem("debug_bar_toggled") == "true")
        localStorage.setItem("debug_bar_toggled", "false");
    else
        localStorage.setItem("debug_bar_toggled", "true");

    showOrHideDebugBar();
}

// Show/hide the debug bar appropriately depending on localstorage
function showOrHideDebugBar() {
    if (localStorage.getItem("debug_bar_toggled") == "true")
        $("#debugger_bar").show();
    else
        $("#debugger_bar").hide();
}

