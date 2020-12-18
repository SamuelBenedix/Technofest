(function ($) {
	"use strict";
	console.log("oke");

	/*[ Load page ]
    ===========================================================*/
	$(".animsition").animsition({
		inClass: "fade-in",
		outClass: "fade-out",
		inDuration: 1500,
		outDuration: 800,
		linkElement: ".animsition-link",
		loading: true,
		loadingParentElement: "html",
		loadingClass: "animsition-loading-1",
		loadingInner: '<div class="loader05"></div>',
		timeout: false,
		timeoutCountdown: 5000,
		onLoadEvent: true,
		browser: ["animation-duration", "-webkit-animation-duration"],
		overlay: false,
		overlayClass: "animsition-overlay-slide",
		overlayParentElement: "html",
		transition: function (url) {
			window.location.href = url;
		},
	});

	/*[ Back to top ]
    ===========================================================*/
	var windowH = $(window).height() / 2;

	$(window).on("scroll", function () {
		if ($(this).scrollTop() > windowH) {
			$("#myBtn").css("display", "flex");
		} else {
			$("#myBtn").css("display", "none");
		}
	});

	$("#myBtn").on("click", function () {
		$("html, body").animate({ scrollTop: 0 }, 300);
	});

	/*==================================================================
    [ Fixed Header ]*/
	var headerDesktop = $(".container-menu-desktop");
	var wrapMenu = $(".wrap-menu-desktop");

	if ($(".top-bar").length > 0) {
		var posWrapHeader = $(".top-bar").height();
	} else {
		var posWrapHeader = 0;
	}

	if ($(window).scrollTop() > posWrapHeader) {
		$(headerDesktop).addClass("fix-menu-desktop");
		$(wrapMenu).css("top", 0);
	} else {
		$(headerDesktop).removeClass("fix-menu-desktop");
		$(wrapMenu).css("top", posWrapHeader - $(this).scrollTop());
	}

	$(window).on("scroll", function () {
		if ($(this).scrollTop() > posWrapHeader) {
			$(headerDesktop).addClass("fix-menu-desktop");
			$(wrapMenu).css("top", 0);
		} else {
			$(headerDesktop).removeClass("fix-menu-desktop");
			$(wrapMenu).css("top", posWrapHeader - $(this).scrollTop());
		}
	});

	/*==================================================================
    [ Menu mobile ]*/
	$(".btn-show-menu-mobile").on("click", function () {
		$(this).toggleClass("is-active");
		$(".menu-mobile").slideToggle();
	});

	var arrowMainMenu = $(".arrow-main-menu-m");

	for (var i = 0; i < arrowMainMenu.length; i++) {
		$(arrowMainMenu[i]).on("click", function () {
			$(this).parent().find(".sub-menu-m").slideToggle();
			$(this).toggleClass("turn-arrow-main-menu-m");
		});
	}

	$(window).resize(function () {
		if ($(window).width() >= 992) {
			if ($(".menu-mobile").css("display") == "block") {
				$(".menu-mobile").css("display", "none");
				$(".btn-show-menu-mobile").toggleClass("is-active");
			}
		}
	});

	$("#second").css("display", "none");
	$("#third").css("display", "none");

	$("#inputMember").prop("selectedIndex", 0);

	$("#inputMember").change(function () {
		if (this.value == 2) {
			$("#second").css("display", "flex");
			$("#third").css("display", "none");
		} else if (this.value == 3) {
			$("#second").css("display", "flex");
			$("#third").css("display", "flex");
		} else {
			$("#second").css("display", "none");
			$("#third").css("display", "none");
		}
	});

	$(".custom-file-input").on("change", function () {
		let fileName = $(this).val().split("\\").pop();
		$(this).next(".custom-file-label").addClass("selected").html(fileName);
	});
})(jQuery);
