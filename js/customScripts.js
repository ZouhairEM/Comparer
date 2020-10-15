$(document).ready(function(){
	
	// Get heights of certain block elements
	var bannersHeight = $('#banner_page').outerHeight();
	var headerHeight = $('#header').outerHeight();
	var headerContactHeight = $('#header_contact').outerHeight();
	var headerHeightMax = headerHeight + headerContactHeight;
	
	// Set top padding on banner
	$('#banner_page').css("padding-top",headerHeightMax);
	
	jQuery('.fadein').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated zoomIn',
        offset: 100
    });
	
	jQuery('.choiceColumn a').addClass("hidden").viewportChecker({
        classToAdd: 'visible animated zoomIn',
        offset: 100
    });
	
	var footerComment = $('#contact form div').outerHeight();
	$('#footerComment').css('height',footerComment);
	
	var headerBar = $('#header_contact').outerHeight();
	var header = $('#header').outerHeight();
	var uitkomst = headerBar + header;

	$(window).scroll(function(){
		if($(window).scrollTop() > headerBar){
			$('#header').css("position","fixed");
			$('#header').css("background","#fff");
			$('#header').css("border-bottom","1px solid #c6c6c6");
			$('.t_text_fade').css("opacity","1");
			$('.t_mail_fade').css("opacity","1");
			$('.mail_fade').css("opacity","1");
		}else{
			$('#header').css("position","none");
			$('#header').css("border-bottom","none");
			$('.t_text_fade').css("opacity","0");
			$('.t_mail_fade').css("opacity","0");
			$('.mail_fade').css("opacity","0");
			
		}
	});
});
$(document).ready(function() {
   FooterBottom(); 
});
function FooterBottom(){
	
	var BottomHoogte = $("html").height(); 
	
	if ( BottomHoogte < $(window).height()){
		
		$('.footer').css("float","none");
		$('.footer').css("position","fixed");
		$('.footer').css("bottom","0");		
	}else{}

}
function addInput(){

	var option = $('.selectType').last();
	option.clone().insertAfter(option);
	
	$('.selectType').unbind("change");
	$(this).removeClass("selectType");
	
	rebindSomeEvents();
}

function rebindSomeEvents() {
	$(".selectType").on("change",addInput);
}

$(function(){
	rebindSomeEvents();
});

