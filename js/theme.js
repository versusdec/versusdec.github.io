!function (r) { "use strict"; var o = { init: () => { o.stickyHeader(), o.dropdownAnimation(), o.headerButtons(), o.isotope(), o.onepageHeaderOffset(), o.onepageNavLinks(), o.onepageSmoothScroll(), o.svgInject(), o.backgroundImage(), o.backgroundImageMobile(), o.backgroundVideo(), o.imageHoverOverlay(), o.rellax(), o.scrollCue(), o.showMoreItems(), o.owlCarousel(), o.heroSlider(), o.animatedCaptions(), o.lightGallery(), o.plyr(), o.progressBar(), o.pageProgress(), o.pageLoading(), o.counterUp(), o.bsTooltip(), o.bsPopover(), o.bsModal(), o.iTooltip(), o.contactForm(), o.pricingSwitcher() }, stickyHeader: () => { r(".navbar").length && new Headhesive(".navbar", { offset: 350, offsetSide: "top", classes: { clone: "banner--clone fixed ", stick: "banner--stick", unstick: "banner--unstick" }, onStick: function () { r(r.SmartMenus.Bootstrap.init), r(".navbar:not(.fixed) .language-select .dropdown-menu").removeClass("show") }, onUnstick: function () { r(".navbar.fixed .language-select .dropdown-menu").removeClass("show") } }), r(function () { r(".navbar .navbar-nav:not(.navbar-nav-other)").bind({ "show.smapi": function (a, o) { r(o).removeClass("hide-animation").addClass("show-animation") }, "hide.smapi": function (a, o) { r(o).removeClass("show-animation").addClass("hide-animation") } }).on("animationend webkitAnimationEnd oanimationend MSAnimationEnd", "ul", function (a) { r(this).removeClass("show-animation hide-animation"), a.stopPropagation() }) }) }, dropdownAnimation: () => { r(".navbar .navbar-nav:not(.navbar-nav-other)").bind({ "show.smapi": function (a, o) { r(o).removeClass("hide-animation").addClass("show-animation") }, "hide.smapi": function (a, o) { r(o).removeClass("show-animation").addClass("hide-animation") } }).on("animationend webkitAnimationEnd oanimationend MSAnimationEnd", "ul", function (a) { r(this).removeClass("show-animation hide-animation"), a.stopPropagation() }) }, headerButtons: () => { var o = r(".hamburger.animate"), e = (r(".language-select .dropdown-menu"), r(".offcanvas-nav")), a = r('[data-toggle="offcanvas-nav"]'), t = r(".offcanvas-nav-close"), n = r(".offcanvas-info"), i = r(".offcanvas-info-close"), s = r('[data-toggle="offcanvas-info"]'); o.on("click", function () { o.toggleClass("active") }), a.on("click", function (a) { a.stopPropagation(), e.toggleClass("open") }), e.on("click", function (a) { a.stopPropagation() }), t.on("click", function (a) { e.removeClass("open"), o.removeClass("active") }), s.on("click", function (a) { a.stopPropagation(), n.toggleClass("open") }), n.on("click", function (a) { a.stopPropagation() }), r(document).on("click", function () { e.removeClass("open"), n.removeClass("open"), o.removeClass("active") }), i.on("click", function (a) { n.removeClass("open") }), r(".onepage .navbar li a.scroll").on("click", function () { e.removeClass("open"), o.removeClass("active") }) }, isotope: () => { r(".grid").each(function (a, o) { var o = r(o), e = o.find(".isotope").imagesLoaded(function () { e.isotope({ itemSelector: ".item", layoutMode: "masonry", percentPosition: !0, masonry: { columnWidth: e.width() / 12 }, transitionDuration: "0.7s" }) }); r(window).resize(function () { e.isotope({ masonry: { columnWidth: e.width() / 12 } }) }), r(window).on("load", function () { e.isotope({ masonry: { columnWidth: e.width() / 12 } }) }), o.find(".isotope-filter").on("click", "a", function () { var a = r(this).attr("data-filter"); e.isotope({ filter: a }) }) }), r(".isotope-filter").each(function (a, o) { var e = r(o); e.on("click", "a", function () { e.find(".active").removeClass("active"), r(this).addClass("active") }) }) }, onepageHeaderOffset: () => { var a = r(".navbar:not(.banner--clone)").outerHeight(), o = { "padding-top": "75px", "margin-top": "-75px" }; r(".onepage section").css(o); a = { "padding-top": a + "px", "margin-top": "-" + a + "px" }; r(".onepage section:first-of-type").css(a) }, onepageNavLinks: () => { r('.onepage .navbar ul.navbar-nav a[href="#"]').on("click", function (a) { a.preventDefault() }) }, onepageSmoothScroll: () => { r(function () { function o(a) { (a = a.length ? a : r("[name=" + this.hash.slice(1) + "]")).length && r("html,body").animate({ scrollTop: a.offset().top }, 1500, "easeInOutExpo") } setTimeout(function () { var a; location.hash && (window.scrollTo(0, 0), a = location.hash.split("#"), o(r("#" + a[1]))) }, 1), r('a.scroll[href*="#"]:not([href="#"])').on("click", function () { if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) return o(r(this.hash)), !1 }) }) }, svgInject: () => { SVGInject(document.querySelectorAll("img.svg-inject")) }, backgroundImage: () => { r(".bg-image").css("background-image", function () { return "url(" + r(this).data("image-src") + ")" }) }, backgroundImageMobile: () => { !(navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || "MacIntel" === navigator.platform && 1 < navigator.maxTouchPoints || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i)) || r(".image-wrapper").addClass("mobile") }, backgroundVideo: () => { r(".video-wrapper video").backgroundVideo({ $outerWrap: r(".video-wrapper"), pauseVideoOnViewLoss: !1, parallaxOptions: { effect: 6 } }) }, imageHoverOverlay: () => { r(".overlay:not(.caption) > a, .overlay:not(.caption) > span").prepend('<span class="bg"></span>') }, rellax: () => { r(".rellax").length && (window.onload = function () { var a = new Rellax(".rellax", { speed: 2, center: !0, breakpoints: [576, 992, 1201] }); r(".projects-overflow").imagesLoaded(function () { a.refresh() }) }) }, scrollCue: () => { scrollCue.init({ interval: -400, duration: 700, percentage: .8 }), scrollCue.update() }, showMoreItems: () => { r(".show-more").each(function () { var a = r(this); a.showMoreItems({ startNum: a.data("showstart"), afterNum: a.data("showafter"), moreText: "Show More", after: function () { o.isotope(), o.rellax(), o.scrollCue() } }) }) }, owlCarousel: () => { r(".basic-slider").each(function () { var a = r(this); a.owlCarousel({ items: 1, nav: a.data("nav"), navText: ["<i class='uil-arrow-left'></i>", "<i class='uil-arrow-right'></i>"], dots: !0, dotsEach: !0, autoHeight: !0, loop: !0, margin: a.data("margin") }) }), r(".carousel").each(function () { var a = r(this); a.owlCarousel({ autoHeight: !1, nav: a.data("nav"), navText: ["<i class='uil-arrow-left'></i>", "<i class='uil-arrow-right'></i>"], dots: a.data("dots"), dotsEach: !0, loop: a.data("loop"), margin: a.data("margin"), autoplay: a.data("autoplay"), autoplayTimeout: a.data("autoplay-timeout"), responsive: a.data("responsive") }) }) }, heroSlider: () => { r(".hero-slider").each(function () { var a = r(this); a.owlCarousel({ items: 1, nav: r(this).data("nav"), navText: ["<i class='uil-arrow-left'></i>", "<i class='uil-arrow-right'></i>"], dots: r(this).data("dots"), dotsEach: !0, autoHeight: !1, loop: !0, autoplay: a.data("autoplay"), autoplayTimeout: 5e3, onInitialized: function () { a.trigger("stop.owl.autoplay"), setTimeout(function () { a.trigger("play.owl.autoplay") }, 3e3) }, autoplayHoverPause: !0, margin: 0, animateIn: "fadeIn", animateOut: "fadeOut" }), a.on("changed.owl.carousel", a => { r(".owl-item.active").find(".animated-caption").each(function (a, o) { r(this).removeClass("animate__animated").removeClass(r(this).data("anim")) }), r(".owl-item").eq(a.item.index).find(".animated-caption").each(function (a, o) { var e = r(this).data("anim-delay"), t = r(this).data("anim-duration"); r(this).addClass("animate__animated").addClass(r(this).data("anim")).css({ "animation-delay": e + "ms", "animation-duration": t + "ms" }) }) }), a.trigger("refresh.owl.carousel") }) }, animatedCaptions: () => { r(".animated-captions").find(".animated-caption").each(function () { var a = r(this).data("anim-delay"), o = r(this).data("anim-duration"); r(this).addClass("animate__animated").addClass(r(this).data("anim")).css({ "animation-delay": a + "ms", "animation-duration": o + "ms" }) }) }, lightGallery: () => { r(".light-gallery-wrapper").lightGallery({ thumbnail: !1, selector: ".lightbox", mode: "lg-fade", download: !1, autoplayControls: !1, zoom: !1, fullScreen: !1, videoMaxWidth: "1000px", loop: !1, counter: !1, hash: !1, closable: !0, mousewheel: !0, videojs: !0, videoAutoplay: !0, share: !1 }) }, plyr: () => { Plyr.setup(".player", { loadSprite: !0 }) }, progressBar: () => { var t = r(".progressbar.line"); t.each(function (a) { var o = new ProgressBar.Line(this, { strokeWidth: 3, trailWidth: 3, duration: 3e3, easing: "easeInOut", text: { style: { color: "inherit", position: "absolute", right: "0", top: "-30px", padding: 0, margin: 0, transform: null }, autoStyleContainer: !1 }, step: function (a, o, e) { o.setText(Math.round(100 * o.value()) + " %") } }), e = r(this).attr("data-value") / 100; t.waypoint(function () { o.animate(e) }, { offset: "100%" }) }) }, pageProgress: () => { var e, t, a; r(".progress-wrap").length && (e = document.querySelector(".progress-wrap path"), t = e.getTotalLength(), e.style.transition = e.style.WebkitTransition = "none", e.style.strokeDasharray = t + " " + t, e.style.strokeDashoffset = t, e.getBoundingClientRect(), e.style.transition = e.style.WebkitTransition = "stroke-dashoffset 10ms linear", (a = function () { var a = r(window).scrollTop(), o = r(document).height() - r(window).height(); e.style.strokeDashoffset = t - a * t / o })(), r(window).scroll(a), jQuery(window).on("scroll", function () { 50 < jQuery(this).scrollTop() ? jQuery(".progress-wrap").addClass("active-progress") : jQuery(".progress-wrap").removeClass("active-progress") }), jQuery(".progress-wrap").on("click", function (a) { return a.preventDefault(), jQuery("html, body").animate({ scrollTop: 0 }, 550), !1 })) }, pageLoading: () => { r(".page-loading").delay(350).fadeOut("slow"), r(".page-loading .status").fadeOut("slow") }, counterUp: () => { var e = window.counterUp.default; r(".counter").each(function (a, o) { new Waypoint({ element: r(this), handler: function () { e(o, { duration: 1e3, delay: 50 }), this.destroy() }, offset: "bottom-in-view" }) }) }, bsTooltip: () => { [].slice.call(document.querySelectorAll(".has-tooltip")).map(function (a) { return new bootstrap.Tooltip(a) }) }, bsPopover: () => { [].slice.call(document.querySelectorAll(".has-popover"), { trigger: "focus" }).map(function (a) { return new bootstrap.Popover(a) }) }, bsModal: () => { var a, o = window.innerWidth - r("body").innerWidth(); document.querySelectorAll(".modal").forEach(a => { a.addEventListener("show.bs.modal", function (a) { r(".navbar.fixed").css("padding-right", o), r(".progress-wrap").css("margin-right", o) }), a.addEventListener("hidden.bs.modal", function (a) { r(".navbar.fixed").css("padding-right", ""), r(".progress-wrap").css("margin-right", "") }) }), 0 < r(".modal-popup").length && (a = new bootstrap.Modal(document.querySelector(".modal-popup")), document.querySelector(".modal-popup"), setTimeout(function () { a.show() }, 200)) }, iTooltip: () => { new iTooltip(".itooltip").init({ className: "itooltip-inner", indentX: 15, indentY: 15, positionX: "right", positionY: "bottom" }) }, contactForm: () => { r(".contact-form").validator({ disable: !1, focus: !1 }), r(".contact-form").on("submit", function (a) { if (!a.isDefaultPrevented()) return r.ajax({ type: "POST", url: "php/contact.php", data: r(this).serialize(), success: function (a) { var o = "alert-" + a.type, e = a.message, a = '<div class="alert ' + o + ' alert-dismissible fade show"><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>' + e + "</div>"; o && e && (r(".contact-form").find(".messages").html(a), r(".contact-form")[0].reset()) } }), !1 }) }, pricingSwitcher: () => { r(".pricing-wrapper").each(function (a, o) { var e = r(o); e.find(".pricing-switcher").on("click", function () { e.find(".pricing-switcher").toggleClass("pricing-switcher-active"), e.find(".price").removeClass("price-hidden"), e.find(".price").toggleClass("price-show price-hide") }) }) } }; o.init() }(jQuery);