// Wordpress ships with JQuery installed
// the $ sign is not assumed to be working with JQuery, Wordpress canwork with other JS
// we need to add a wrapper for "no conflict JQuery" 
// http://codex.wordpress.org/Function_Reference/wp_enqueue_script#jQuery_noConflict_Wrappers

jQuery(document).ready(function ($) {
    $(document).foundation();
    
        // Inside of this function, $() will work as an alias for jQuery()
        // and other libraries also using $ will not be accessible under this shortcut
    $(".nav.toggle").click(function () {
        $(this).toggleClass("open");
        $("nav").fadeToggle(100);
    
        return false;
    });
});




