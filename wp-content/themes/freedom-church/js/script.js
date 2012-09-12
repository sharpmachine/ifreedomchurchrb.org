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

	$("a.open-info-box").click(function() {
		$(".info-box, .get-directions-icon").hide();	
		$(".see-map-icon").show();
		$("#visiting_box").fadeIn();				
	});
	
	$(".see-map-icon").click(function() {
		var box_id = $(this).data("box");		
		$(".info-box, .get-directions-icon").hide();	
		$(".see-map-icon").show();				
		$(".info-box[data-box='" + box_id + "']").fadeIn();
		$(".get-directions-icon[data-box='" + box_id + "']").show();
		$(this).hide();		
	});

	$(".close-box").click(function(){
		$(".info-box, .get-directions-icon").hide();	
		$(".see-map-icon").show();
	});
});















