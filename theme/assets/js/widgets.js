jQuery(document).ready(function(c){c(".yit_toggle_menu ul.menu.open_first > li:first-child, .yit_toggle_menu ul.menu.open_all > li").addClass("opened");c(".yit_toggle_menu ul.menu.open_active li.current-menu-ancestor, .yit_toggle_menu ul.menu.open_active li.current-menu-parent").addClass("opened");c(".yit_toggle_menu ul li.dropdown > a").click(function(b){b.preventDefault();b=c(this).next("ul");var a=b.parent(".dropdown");b.width(a.width());a.width(a.parent().width());a.hasClass("opened")?a.removeClass("opened"):
a.addClass("opened");b.slideToggle()})});