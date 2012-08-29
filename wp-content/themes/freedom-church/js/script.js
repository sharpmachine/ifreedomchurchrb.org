/* Author: 

*/

// Allows you to use the $ shortcut.  Put all your code  inside this wrapper
jQuery(document).ready(function($) {
	
	// Forces WordPress to place nice with dropdowns
 	$("li.dropdown > a").addClass('dropdown-toggle');
	$("li.dropdown > a").attr('data-toggle','dropdown');
	$("a.dropdown-toggle").append('<b class="caret"></b>');
	
});

jQuery(document).ready(function($) {
	$("ul#ticker").liScroll();	
});

jQuery(document).ready(function($) {
	$("a.open-info-box").click(function(){
		$(".info-box,.see-map").fadeOut();
		$(".info-box,.visiting-info").fadeToggle();
	});	
	$("a.open-map").click(function(){
		$(".info-box,.visiting-info").fadeOut();
		$(".info-box,.see-map").fadeToggle();
	});
	
	$(".close-box").click(function(){
		$(".info-box").fadeOut();
	});
});























