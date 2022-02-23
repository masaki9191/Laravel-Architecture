var sp_menu_common_i = 0;
function arrowFunction() {
    sp_menu_common_i++;
    $(".navbar-toggler").toggleClass("collapsed");
    if (sp_menu_common_i%2 == 1) {
        openNav();
    }
    if (sp_menu_common_i%2 == 0) {
        closeNav();
    }
};
function openNav() {
    document.getElementById("myNav").style.width = "100%";
}
    
function closeNav() {
    document.getElementById("myNav").style.width = "0%";
}

