// Loading
$(function () {
	$("#loading-wrapper").fadeOut(3000);
});

// Card Loading
$(function () {
	$(".card-loading").fadeOut(10000);
});

// Toggle sidebar
$("#toggle-sidebar").on("click", function () {
	$(".page-wrapper").toggleClass("toggled");
});

// Sidebars JS
jQuery(function ($) {
	// Sidebar menu
	$.sidebarMenu = function (menu) {
		var animationSpeed = 300;

		$(menu).on("click", "li a", function (e) {
			var $this = $(this);
			var checkElement = $this.next();

			if (checkElement.is(".treeview-menu") && checkElement.is(":visible")) {
				checkElement.slideUp(animationSpeed, function () {
					checkElement.removeClass("menu-open");
				});
				checkElement.parent("li").removeClass("active");
			}

			//If the menu is not visible
			else if (
				checkElement.is(".treeview-menu") &&
				!checkElement.is(":visible")
			) {
				//Get the parent menu
				var parent = $this.parents("ul").first();
				//Close all open menus within the parent
				var ul = parent.find("ul:visible").slideUp(animationSpeed);
				//Remove the menu-open class from the parent
				ul.removeClass("menu-open");
				//Get the parent li
				var parent_li = $this.parent("li");

				//Open the target menu and add the menu-open class
				checkElement.slideDown(animationSpeed, function () {
					//Add the class active to the parent li
					checkElement.addClass("menu-open");
					parent.find("li.active").removeClass("active");
					parent_li.addClass("active");
				});
			}
			//if this isn't a link, prevent the page from being redirected
			if (checkElement.is(".treeview-menu")) {
				e.preventDefault();
			}
		});
	};
	$.sidebarMenu($(".sidebar-menu"));

	// Added by Srinu
	$(function () {
		// When the window is resized,
		$(window).resize(function () {
			// When the width and height meet your specific requirements or lower
			if ($(window).width() <= 768) {
				$(".page-wrapper").removeClass("pinned");
			}
		});
		// When the window is resized,
		$(window).resize(function () {
			// When the width and height meet your specific requirements or lower
			if ($(window).width() >= 768) {
				$(".page-wrapper").removeClass("toggled");
			}
		});
	});
});

// Toggle Pricing Plan
$(".pricing-change-plan a").on("click", function () {
	if ($(this).hasClass("active-plan")) {
		$(".pricing-change-plan a").removeClass("active-plan");
	} else {
		$(".pricing-change-plan a").removeClass("active-plan");
		$(this).addClass("active-plan");
	}
});

// Download File
$(".download-reports").on("click", function () {
	$.ajax({
		url: "sample.txt",
		crossOrigin: null,
		xhrFields: {
			responseType: "blob",
		},
		success: function (blob) {
			console.log(blob.size);
			var link = document.createElement("a");
			link.href = window.URL.createObjectURL(blob);
			link.download = "Reports" + ".txt";
			link.click();
		},
	});
});

$("#play-pause").on("click", function () {
	$("a i").toggleClass("icon-play_circle_outline");
});

/***********
***********
***********
	Bootstrap JS 
***********
***********
***********/

// Tooltip
var tooltipTriggerList = [].slice.call(
	document.querySelectorAll('[data-bs-toggle="tooltip"]')
);
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
	return new bootstrap.Tooltip(tooltipTriggerEl);
});

// Popover
var popoverTriggerList = [].slice.call(
	document.querySelectorAll('[data-bs-toggle="popover"]')
);
var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
	return new bootstrap.Popover(popoverTriggerEl);
});
