var YIT_Browser = {
    isTablet: function () {
        var a = jQuery("body").hasClass("responsive") || jQuery("body").hasClass("iPad") || jQuery("body").hasClass("Blakberrytablet") || jQuery("body").hasClass("isAndroidtablet") || jQuery("body").hasClass("isPalm"),
            b = 1024 >= jQuery(window).width() && 768 <= jQuery(window).width();
        return a && b
    },
    isPhone: function () {
        var a = jQuery("body").hasClass("responsive") || jQuery("body").hasClass("isIphone") || jQuery("body").hasClass("isWindowsphone") || jQuery("body").hasClass("isAndroid") || jQuery("body").hasClass("isBlackberry"),
            b = 480 >= jQuery(window).width() && 320 <= jQuery(window).width();
        return a && b
    },
    isViewportBetween: function (a, b) {
        "undefinied" == b && (b = 0);
        return b ? jQuery(window).width() < a && jQuery(window).width() > b : jQuery(window).width() < a
    },
    isLowResMonitor: function () {
        return 1200 > jQuery(window).width()
    },
    isMobile: function () {
        return this.isTablet() || this.isPhone()
    },
    isIE: function () {
        return jQuery.browser.msie
    },
    isIE8: function () {
        return this.isIE() && "8.0" == jQuery.browser.version
    },
    isIE9: function () {
        return this.isIE() && "9.0" == jQuery.browser.version
    },
    isIE10: function () {
        return this.isIE() && "10.0" == jQuery.browser.version
    }
};
(function (a) {
    var b;
    a.fn.extend({
        stickyFooter: function (c) {
            function d() {
                var c = a(document.body).height() - a("#sticky-footer-push").height();
                c < a(window).height() && (c = a(window).height() - c, 0 < !a("#sticky-footer-push").length && a(b).before('<div id="sticky-footer-push"></div>'), 0 < a("#wpadminbar").length && (c -= 28), a("#sticky-footer-push").height(c))
            }
            b = this;
            d();
            a(window).on("sticky", d).scroll(d).resize(d)
        }
    })
})(jQuery);
jQuery(document).ready(function (a) {
    a("li.megamenu > div > ul.sub-menu").each(function () {
        a(this).addClass("megamenu-length-" + a(this).children("li").length)
    });
    var b = function () {
        var c;
        containerWidth = a("#header").width();
        marginRight = a("#nav ul.level-1 > li").css("margin-right");
        submenuWidth = a(this).find("ul.sub-menu").outerWidth();
        offsetMenuRight = a(this).position().left + submenuWidth;
        leftPos = -18;
        c = offsetMenuRight > containerWidth ? {
            left: leftPos - (offsetMenuRight - containerWidth)
        } : {};
        a("ul.sub-menu:not(ul.sub-menu li > div.submenu > ul.sub-menu), ul.children:not(ul.children li > div.submenu > ul.children)",
            this).parent().css(c).stop(!0, !0).fadeIn(300)
    };
    a("#nav ul > li").hover(b, function () {
        a("ul.sub-menu:not(ul.sub-menu li > div.submenu > ul.sub-menu), ul.children:not(ul.children li > div.submenu > ul.children)", this).parent().fadeOut(300)
    });
    a("#nav ul > li, #header-sidebar ul > li").each(function () {
        var c = a(this);
        if (0 < a("ul", this).length) {
            a(this).children("a").append('<span class="sf-sub-indicator"> &raquo;</span>');
            var b;
            (b = function () {
                c.children("a").css("padding-right", "").css({
                    paddingRight: parseInt(c.children("a").css("padding-right")) +
                        16
                })
            })();
            a(window).resize(b)
        }
    });
    a("#nav li:not(.megamenu) ul.sub-menu li, #nav li:not(.megamenu) ul.children li").hover(function () {
        0 < a(this).closest(".megamenu").length || (containerWidth = a("#header").width(), containerOffsetRight = a("#header").offset().left + containerWidth, submenuWidth = a("ul.sub-menu, ul.children", this).parent().width(), offsetMenuRight = a(this).offset().left + 2 * submenuWidth, leftPos = -10, offsetMenuRight > containerOffsetRight && a(this).addClass("left"), a("ul.sub-menu, ul.children", this).parent().stop(!0, !0).fadeIn(300))
    }, function () {
        0 < a(this).closest(".megamenu").length || a("ul.sub-menu, ul.children", this).parent().fadeOut(300)
    });
    a("#nav .megamenu").mouseover(function () {
        var b = a(".container").width(),
            d = a(".container").offset(),
            g = a(this),
            e = a(this).closest("ul.sub-menu"),
            f = e.outerWidth(),
            h = e.offset();
        g.position().left + f > b && e.offset({
            top: h.top,
            left: d.left + (b - f)
        })
    });
//    !a("body").hasClass("isMobile") || a("body").hasClass("iphone") || a("body").hasClass("ipad") || a(".sf-sub-indicator").parent().click(function () {
//        a(this).parent().toggle(b,
//            function () {
//                document.location = a(this).children("a").attr("href")
//            })
//    })
    if ( a('body').hasClass('isMobile') && ! a('body').hasClass('iphone') && ! a('body').hasClass('ipad') ) {
        a('.menu-item').click(function( e ){
            e.stopPropagation();
            // Remove Link from item on level 1 for dropdown menu
            a('li.megamenu > a, .dropdown > a, .menu-item-has-children > a' ).attr('href', '#');
            var _submenu = a('.submenu', this);
            if( _submenu.length ) {
                e.preventDefault();
                if( _submenu.is(':hidden') ) { show_dropdown( _submenu ); }
                else { hide_dropdown( _submenu ); }
            }
        });
    }
});