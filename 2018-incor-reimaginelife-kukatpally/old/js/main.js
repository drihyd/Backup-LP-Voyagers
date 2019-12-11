$(document).ready(function($) {
  $(window).scroll(function() {
    var height = $(window).scrollTop();
    if(height  > 0 && $(window).width() > 767) {
      $('#logo').attr("src", 'http://one-city.in/l/reimaginelife-kukatpally/img/onecity-logo-small.png');
      $('#mainMenu').addClass("small-nav");
      //$('#featuresNavbar').addClass("small-nav"); 
      $('#interestedModal').addClass("modal-top");     
    }
    else {
      $('#logo').attr("src", 'http://one-city.in/l/reimaginelife-kukatpally/img/onecity-logo.png');
      $('#mainMenu').removeClass("small-nav");
      $('#interestedModal').removeClass("modal-top");  
      //$('#featuresNavbar').removeClass("small-nav");            
    }
  });
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

        // code for smooth scrolling
    $('#goTop').click(function(){
        $('html, body').animate({
            scrollTop: $($("#0")).offset().top - 80
        }, 500);
        return false;
    });

    $('.top-menu').click(function(){
        $('html, body').animate({
            scrollTop: $( $.attr(this, '*href') ).offset().top - 80
        }, 500);
        return false;
    });
    
});

var initiateMasonry = function() {
    var $grid = $('.grid').imagesLoaded(function() {
        $grid.isotope({
            itemSelector: '.element-item',
            layoutMode: 'masonry',
            masonry: {
                columnWidth: '.element-item'
            }
        });
        
        //masonIsDead = 0;
    });
    
    var filterFns = {
        // show if number is greater than 50
        numberGreaterThan50: function() {
            var number = $(this).find('.number').text();
            return parseInt(number, 10) > 50;
        },
        // show if name ends with -ium
        ium: function() {
            var name = $(this).find('.name').text();
            return name.match(/ium$/);
        }
    };
    // bind filter button click
    $('.filters-button-group').on('click', 'button', function() {
        var filterValue = $(this).attr('data-filter');
        // use filterFn if matches value
        filterValue = filterFns[filterValue] || filterValue;
        $grid.isotope({
            filter: filterValue
        });
    });
    // change is-checked class on buttons
    $('.button-group').each(function(i, buttonGroup) {
        var $buttonGroup = $(buttonGroup);
        $buttonGroup.on('click', 'button', function() {
            $buttonGroup.find('.is-checked').removeClass('is-checked');
            $(this).addClass('is-checked');
        });
    });
}


$("#leadform").submit(function(e) {

    $("#formError").html();

    var form = $(this);
    var name = $("#FirstName").val();
    var email = $("#EmailAddress").val();
    var phone = $("#Phone").val();
    var errorMessage = '';
    var error = 0;

    if ($.trim(name) == '') {
        error = 1;
        errorMessage += 'Name cannot be empty<br>';
    }

    var emailPattern = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!emailPattern.test(email)) {
        error = 1;
        errorMessage += 'Invalid Email<br>';
    }

    var phonePattern = /^(((\+?91|0)\-?)?)?\d{10}$/;
    if (!phonePattern.test(phone)) {
        error = 1;
        errorMessage += 'Invalid Phone Number<br>';
    }
    if (error == 1) {
        e.preventDefault();
        $("#formError").html("<div class='alert alert-danger alert-dismissible fade in' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Error!</strong><br>" + errorMessage + "</div>");
    } else {
        form.submit();
    }
 });
 
 $("#leadform2").submit(function(e) {

    $("#formError2").html();

    var form = $(this);
    var name = $("#FirstName").val();
    var email = $("#EmailAddress").val();
    var phone = $("#Phone").val();
    var errorMessage = '';
    var error = 0;

    if ($.trim(name) == '') {
        error = 1;
        errorMessage += 'Name cannot be empty<br>';
    }

    var emailPattern = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if (!emailPattern.test(email)) {
        error = 1;
        errorMessage += 'Invalid Email<br>';
    }

    var phonePattern = /^(((\+?91|0)\-?)?)?\d{10}$/;
    if (!phonePattern.test(phone)) {
        error = 1;
        errorMessage += 'Invalid Phone Number<br>';
    }

    if (error == 1) {
        e.preventDefault();
        $("#formError2").html("<div class='alert alert-danger alert-dismissible fade in' role='alert' style='width:550px'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Error!</strong><br>" + errorMessage + "</div>");
    } else {
        form.submit();
    }
 });
