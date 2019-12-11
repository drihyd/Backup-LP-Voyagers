// == Date Year == //

var dateObj = new Date();
var year = dateObj.getFullYear();
var dateYear = $('#footerYear');
dateYear.html(year);

// == END Date Year == //


function toggleMinClass(el){
    if(el.className == "open"){
        el.className = "close";
    } else {
        el.className = "open";
    }
}

function toggleOpeClass(el){
    if(el.className == "opacOff"){
        el.className = "opacOn";
    } else {
        el.className = "opacOff";
    }
}
$(window).scroll(function() {
    var scrollPos = $(window).scrollTop();
    //console.log(scrollPos);
});

$('.top-menu').click(function(){
    $('html, body').animate({
        scrollTop: $( $.attr(this, '*href') ).offset().top - 80
    }, 500);
    return false;
});


jQuery(document).ready(function($){
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
		//browser window scroll (in pixels) after which the "back to top" link opacity is reduced
		offset_opacity = 1200,
		//duration of the top scrolling animation (in ms)
		scroll_top_duration = 700,
		//grab the "back to top" link
		$back_to_top = $('.cd-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('cd-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});

});
$(window).on('load resize', function() {
    hideForm();
    positionForm();
});
$(document).on('ready scroll', function() {
    hideForm();
    positionForm();
});

 function hideForm() {
    var footerHeight = $('#footerSignup').height();
    var footerPos = $('#footerSignup').offset().top;
   
    var scrollPos = $(document).scrollTop();
     
    if (scrollPos > footerPos-800) {
        $('.form-container').css('display', 'inline-block');
    } else {
        $('.form-container').css('display', 'inline-block');
    }
}; 

function positionForm() {
    var formPos = $('#about').offset().top;
    console.log('form '+formPos);
    
    var scrollPos = $(document).scrollTop();
    console.log('scroll '+scrollPos);
    
    if (scrollPos > (formPos-200)) {
        console.log(' '+scrollPos+','+(formPos-200));
        $('#form').addClass('sticky');
    } else {
        console.log('correct');
        $('#form').removeClass('sticky');
    }
};