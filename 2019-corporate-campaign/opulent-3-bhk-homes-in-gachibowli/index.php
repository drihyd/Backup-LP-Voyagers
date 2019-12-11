<?php
  $full_company_name = '';
  if(isset($_GET['cname']))
  {
  	$company_name=$_GET['cname'];
  }
  else{
  	$company_name="";
  }
    
  switch($company_name)  
  {
	// 

	case 'IBM': $full_company_name="IBM"; $distance="14";break;
	// case 'Google': $full_company_name="Amazon"; $distance="11";break;
	case 'Deloitte': $full_company_name="Deloitte"; $distance="10";break;
	case 'Cognizant': $full_company_name="Cognizant"; $distance="12";break;
	// case 'TCS': $full_company_name="TCS"; $distance="5";break;
	// case 'DLF': $full_company_name="DLF"; $distance="5";break;
	case 'PWC': $full_company_name="PWC"; $distance="30";break;
	case 'Amazon': $full_company_name="Amazon"; $distance="11";break;
	 default:
		$distance="";break;
    }
  
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title>The Botanika | Opulent 3-BHK Homes In Gachibowli | <?php echo stripslashes($full_company_name); ?></title>
	
	<meta name="description" content="Own an opulent 3-BHK home at The Botanika in Gachibowli, minutes away from Kondapur, HITEC City & workplaces like Google, Deloitte, Infosys, Microsoft, DLF, Amazon, etc.">
	<meta name="keywords" content="Gachibowli, 3-BHK homes, The Botanika, Gated community, Kondapur, Financial District, HITEC City, Google, Deloitte, Infosys, Microsoft, DLF, Amazon, Wipro, Microsoft, PWC, Value Labs, SITEL India, ICICI, Genpact, IBM, ISB, Q City, Medicover hospitals, Image hospitals, Apollo Hospitals, KIMS, Care hospitals, Cognizant Tech Solutions, GE Energy Pvt. Ltd, TCS, ORR, Botanical Garden">
	
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css"/>

	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i|Roboto:300,400,500,700" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css" />
	<link rel="stylesheet" href="./css/intlTelInput.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="./css/style.css?v=1.0">
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NSP4Q7K');</script>
	<!-- End Google Tag Manager -->
	
</head>

<body>
	
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NSP4Q7K"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	
	<header id="main-header">
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<a href="./index.html" class=""><img src="./img/brand-logo.png" class="main-logo img-responsive" title="Botanika" alt="Botanika"></a>
				</div>
				<div class="col-sm-8">
					<div class="headerList">
						<ul class="list list-inline">
							<li>From the makers of Whisper Valley, Palm County, and Ambience Fort</li>
							<li class="call hidden-xs"><a href="tel:18001020293"> <i class="fas fa-phone"></i> 1800 102 0293</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>


	<section class="hero">
		<div class="bg" style="background: url(./img/bg.jpg)center center no-repeat;background-size: cover;"></div>
		<div class="hero-content">
			<div class="container">
				<div class="wrapper">
                  <div class="row">
                  <div class="col-sm-6">
                  	<div class="wrapper banner-wrapper" style="padding-top: 100px;padding-bottom: 100px">
					<h1 class="title">Rejoice in a <br> hassle-free drive to work</h1>
					<p class="sub-text" style="color:#7fb108">Spacious 3-BHK homes starting at <strong>₹ 2 Cr* </strong></p>
				</div>
				</div>
				<div class="col-sm-6 text-align-center">
					
				<img src="./img/building.png" class="img-responsive mobile-building-img"><p class="company_name_1"><b><?php echo stripslashes($full_company_name); ?> </b></p>
				<p class="company_distance_1"><b><?php echo $distance; ?> min </b> </p>
				</div>
				</div>
			</div>
		</div>
<p  class="condition_apply"><em>*T&C Apply</em></p>
	</div>

	</section>

	<section class="info bg-light glimpse">
		<div class="container">
			<h2 class="title text-align-center scrollTop">Discover The Botanikan life</h2>

			<form class="leadform" id="leadform" method="post" enctype="multipart/form-data" action="leadgrab.php">

				<div class="row">
					<div class="col-md-3">
						<div class="form-group">
							<label class="f-lable">Name</label>
							<input type="text" class="form-control" name="fullname" id="fullname" value="" required>
						</div>
					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label class="f-lable">Email</label>
							<input type="email" class="form-control" name="email" id="email" value="" required>
						</div>
					</div>

					<div class="col-md-3">
						<div class="form-group">
							<label class="f-lable">Phone</label>
							<input type="tel" class="form-control intl-tel-input" name="phone" id="phone" placeholder="." value="">
						</div>
					</div>
					
					<div class="col-md-3">
						<div class="btn-container text-align-center">
							<button type="submit" class="btn btn-brand btn-wide btn-block ajaxFormButton formSubmit text-uppercase">Download Brochure</button>
						</div>
					</div>

					<div class="col-xs-12">
						<div class="formMessage"></div>
					</div>
					
					<input type="hidden" id="leadutmsource" name="leadutmsource" value="" />
					<input type="hidden" id="leadutmcampaign" name="leadutmcampaign" value=""/>
					<input type="hidden" id="leadutmmedium" name="leadutmmedium" value="" />
					<input type="hidden" id="leadutmterm" name="leadutmterm" value="" />
					<input type="hidden" id="leadutmcontent" name="leadutmcontent" value="" />
					
				</div>
			</form>
		</div>
	</section>

	<section class="info bg-bright">
		<div class="sp-wrapper">
			<span class="bg" style="background: url(./img/why-living-close-to-work-matters.jpg) center center no-repeat;background-size: cover"></span>
			<div class="sp-container">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-6">
							<h2 class="title padding-top-0">Why living close to work matters</h2>
							<ul>
								<li>
									<h3 class="title">Enhanced state of mind</h3>
									<p>A stress-free start and a relaxed end to each day ensure that you stay in the most productive mind frame. You will be empowered to accomplish so much more than you already do. And living close to work makes all of this practically possible.</p>
								</li>
								<li>
									<h3 class="title">Better work-life balance</h3>
									<p>When you spend less time commuting to work, your personal desires gain more attention. Exercising after work, leisurely dining with friends and still finding time to prepare for the next day’s meeting become doable and highly effortless.</p>
								</li>
								<li>
									<h3 class="title">Improved quality of life</h3>
									<p>You work in the heart of the city, so why not live in it too? Gachibowli offers the finest blend of robust infrastructure and an ultra-modern lifestyle. From upscale malls to upcoming business centres, experience an enriched life, every single day.</p>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="info bg-light">
		<div class="container">
			<h2 class="text-align-center">Sophisticated living, heart-crafted for you</h2>
			<div class="row width-90-desktop-block">
				<div class="col-md-4 col-sm-4">
					<div class="wrapper">
						<img src="./img/an-exclusive-collection-of-ready-to-use-amenities.jpg" class="img-responsive" alt="An exclusive collection of ready-to-use amenities">
						<h3 class="title">An exclusive collection of <br class="hidden-sm">ready-to-use amenities</h3>
						<p>Squash court, business centre, infinity pool, restaurant, gymnasium, cafe and much more</p>

					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="wrapper">
						<img src="./img/passionate-and-highly-accomplished-neighbours.jpg" class="img-responsive" alt="Passionate and highly-accomplished neighbours">
						<h3 class="title">Passionate and highly-accomplished neighbours</h3>
						<p>A network of art aficionados, fitness fiends, golfers, race-car enthusiasts and so many more</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="wrapper">
						<img src="./img/an-opulent-lifestyle-crafted-with-top-class-quality.jpg" class="img-responsive" alt="An opulent lifestyle crafted with top-class quality">
						<h3 class="title">An opulent lifestyle crafted <br class="hidden-sm">with top-class quality</h3>
						<p>Cosy floor plans spanning over 2,255 sq ft to 2,717 sq ft & overlooking the Botanical Garden</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="info bg-bright glimpse">
		<div class="container">
				<h2 class="text-align-center">The Botanika in numbers</h2>
			<div class="grid clearfix">
				<div class="item">
					<div class="wrapper">
						<img src="./img/lm-icon-01.png" alt="Two new 3-BHK towers">
						<p class="text">Two new <br class="hidden-sm">3-BHK towers</p>
					</div>
				</div>
				<div class="item">
					<div class="wrapper">
						<img src="./img/lm-icon-02.png" alt="2,255 sq ft to 2,717 sq ft">
						<p class="text">Only 3-6 residences <br class="hidden-sm">per floor</p>
					</div>
				</div>
				<div class="item">
					<div class="wrapper">
						<img src="./img/lm-icon-03.png" alt="2,255 sq ft to 2,717 sq ft">
						<p class="text">Unit sizes<br class="hidden-sm">2,255 sq ft to 2,717 sq ft</p>
					</div>
				</div>
				<div class="item">
					<div class="wrapper">
						<img src="./img/lm-icon-04.png" alt="Homes overlooking the 200-acre Botanical Garden">
						<p class="text">Homes overlooking the <br class="hidden-sm">200-acre Botanical Garden</p>
					</div>
				</div>
				<div class="item">
					<div class="wrapper">
						<img src="./img/lm-icon-05.png" alt="Clubhouse spanning over 40,000 sq ft ">
						<p class="text">Clubhouse spanning <br class="hidden-sm">over 40,000 sq ft </p>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<section class="info bg-light padding-bottom-0">
		<div class="container">
			<h2 class="text-align-center">Ultra-modern living intertwined with top-class quality of construction</h2>
			<div class="width-70-desktop-block text-align-center">
				<p class="intro-text"><b>Opulent amenities enhance the quality of life that you buy into.</b> Which is why every space that we create at The Botanika is finely crafted with exceptional quality and the finest details.</p>
				<p class="intro-text">Take a look at the quintessential lifestyle you get to experience overlooking the Botanical Garden.</p>
			</div>
			<h2 class="text-align-center">Ready-to-use amenities in Club Botanika</h2>
		</div>
		<div class="amenities">
			<div class="wrapper amenities-slider">
				<div class="dp" style="background: url(./img/slider/amenities-01.jpg) center center no-repeat; background-size: cover;">
					<!-- <img src="./img/slider/amenities-01.jpg" class="img-responsive" alt="Asaba - Spa and Salon"> -->
					<span class="dp-text">Asaba - Spa and Salon</span>
				</div>
				<div class="dp" style="background: url(./img/slider/amenities-02.jpg) center center no-repeat; background-size: cover;">
					<!-- <img src="./img/slider/amenities-02.jpg" class="img-responsive" alt="Cuisinekraft - Restaurant"> -->
					<span class="dp-text">Cuisinekraft - Restaurant</span>
				</div>
				<div class="dp" style="background: url(./img/slider/amenities-03.jpg) center center no-repeat; background-size: cover;">
					<!-- <img src="./img/slider/amenities-03.jpg" class="img-responsive" alt="Kalakriti Contemporary - Art Gallery"> -->
					<span class="dp-text">Kalakriti Contemporary - Art Gallery</span>
				</div>
				<div class="dp" style="background: url(./img/slider/amenities-04.jpg) center center no-repeat; background-size: cover;">
					<!-- <img src="./img/slider/amenities-04.jpg" class="img-responsive" alt="Nova - Mini Theatre"> -->
					<span class="dp-text">Nova - Mini Theatre</span>
				</div>
				<div class="dp" style="background: url(./img/slider/amenities-05.jpg) center center no-repeat; background-size: cover;">
					<!-- <img src="./img/slider/amenities-05.jpg" class="img-responsive" alt="Shuttle - Badminton Court"> -->
					<span class="dp-text">Shuttle - Badminton Court</span>
				</div>
				<div class="dp" style="background: url(./img/slider/amenities-06.jpg) center center no-repeat; background-size: cover;">
					<!-- <img src="./img/slider/amenities-06.jpg" class="img-responsive" alt="Squash - Indoor Squash Court"> -->
					<span class="dp-text">Squash - Indoor Squash Court</span>
				</div>
				<div class="dp" style="background: url(./img/slider/amenities-07.jpg) center center no-repeat; background-size: cover;">
					<!-- <img src="./img/slider/amenities-07.jpg" class="img-responsive" alt="The Cafe - Coffee Lounge"> -->
					<span class="dp-text">The Cafe - Coffee Lounge</span>
				</div>
				<div class="dp" style="background: url(./img/slider/amenities-08.jpg) center center no-repeat; background-size: cover;">
					<!-- <img src="./img/slider/amenities-08.jpg" class="img-responsive" alt="The Enterprise - Business Centre"> -->
					<span class="dp-text">The Enterprise - Business Centre</span>
				</div>
				<div class="dp" style="background: url(./img/slider/amenities-09.jpg) center center no-repeat; background-size: cover;">
					<!-- <img src="./img/slider/amenities-09.jpg" class="img-responsive" alt="Windsor - Banquet Hall"> -->
					<span class="dp-text">Windsor - Banquet Hall</span>
				</div>
				<div class="dp" style="background: url(./img/slider/amenities-10.jpg) center center no-repeat; background-size: cover;">
					<!-- <img src="./img/slider/amenities-10.jpg" class="img-responsive" alt="Zymnasio - Gymnasium"> -->
					<span class="dp-text">Zymnasio - Gymnasium</span>
				</div>
			</div>
			<ul class="slider-nav-list amenities-slider-nav-list padding-bottom-0">
				<li class="slider-nav prev"><span class="glyphicon glyphicon-menu-left"></span></li>
				<li class="slider-nav next"><span class="glyphicon glyphicon-menu-right"></span></li>
			</ul>
		</div>
	</section>
	<section class="info bg-light">
		<div class="container">
			<h2 class="text-align-center margin-bottom-30 padding-top-0">Podium-level amenities coming up with the two new 3-BHK towers</h2>
			<div class="row">
				<div class="col-md-5 col-sm-7 col-xs-12">
					<div class="row">
						<div class="col-md-6 col-sm-6  col-xs-12">
							<ol class="amenities-list">
								<li>Meditation Pavilion</li>
								<li>Reflexology Path</li>
								<li>Elder's Outdoor Gym</li>
								<li>Entertainment Room</li>
								<li>Lawn</li>
								<li>Cafe</li>
								<li>Poolside Seating</li>
								<li>Kids Pool</li>
								<li>Swimming Pool</li>
								<li>Party Lawn</li>
								<li>Cantilevered Deck</li>
							</ol>
						</div>
						<div class="col-md-6 col-sm-6  col-xs-12">
							<ol class="amenities-list" start="12">
								<li>Creche</li>
								<li>Kindergarten</li>
								<li>Changing Rooms</li>
								<li>Sand Pit</li>
								<li>Climbing Wall</li>
								<li>Synthetic Mat</li>
								<li>Skating Rink</li>
								<li>Lawn With Play Area</li>
								<li>Hop Scotch</li>
								<li>Viewing Deck - 1</li>
								<li>Viewing Deck - 2</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="amenities-img">
			<img src="./img/podium-level-amenities.png" class="img-responsive" alt="Podium-level amenities coming up with the two new 3-BHK towers">
		</div>
		<div class="container">
			<a href="" class="btn btn-brand btn-wide scrollLink margin-top-15">Discover The Botanikan life <i style="font-size:16px;color:#fff;margin-left: 2%;margin-top:1%" class="fa">&#xf061;</i></a>
		</div>
		
	</section>
	
	<footer class="call-footer-fixed">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 text-align-center">
					<p>TS RERA Project Registration Number - P02400001081  &nbsp;&nbsp; |&nbsp;&nbsp; <br class="mobile_copyright">  &copy; Botanika <span id="footerYear">2019 </span> </span> </p>
				</div>
			</div>
		</div>
	</footer>

	<a href="tel:18001020293" class="call-footer fixed" id="call"><span class="fas fa-phone-volume"></span> 1800 102 0293</a>
	
	<div id="mqCheck-1199"></div>
	<div id="mqCheck-991"></div>
	<div id="mqCheck-767"></div>
	<div id="mqCheck-600"></div>
	<div id="mqCheck-500"></div>
	<div id="mqCheck-479"></div>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="./js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	
	<script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
	<script src="./js/vendor/intlTelInput.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.13.1/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.13.1/additional-methods.min.js"></script>

	<script src="./js/plugins.js"></script>
	<script src="./js/main.js?v=1.0"></script>
	
	
	<script>
		$("#phone").intlTelInput(
			{
				utilsScript: "js/vendor/utils.js",
				initialCountry: 'in',
				autoHideDialCode: false
			}
		);
		
		$("#leadform").on('submit', function(e) {
			e.preventDefault();
			var form = $(this);
			var elem = $("#phone");
			$("#gen-error").remove();
			elem.val(elem.intlTelInput("getNumber"));
			
			if(elem.intlTelInput("isValidNumber") === false) {
				
				elem.addClass('error');
				elem.after("<label id='gen-error' class='cust-error' for='phone'>Enter a valid phone number</label>");
				$("#gen-error").css('display', 'block');
				return false;
				
			} else {
				
				$("#gen-error").css('display', 'none');
				
				e.preventDefault();
	
				var form = $(this);
				var submitButton = form.find('.formSubmit');
				var messageBox = form.find('.formMessage');
				messageBox.html('');
				
				var origButtonHTML = submitButton.html();
				submitButton.attr('disabled', 'disabled');
				submitButton.html('<span class="fa fa-spin fa-spinner"></span>');
				
				var postData = form.serializeArray();
				var formURL = "./leadgrab.php";
				var methodType = form.attr('method');
				
				form.children('.form-group').removeClass('error');
				
				$.ajax({
					url: formURL,
					type: methodType,
					contentType: false,
					processData: false,
					data: new FormData(this),
					
					success: function(data, textStatus, jqXHR) {
						var response = jQuery.parseJSON(data);
						if(response.success === true) {
							document.location.href = "thankyou.html";
							messageBox.html("<div class='alert alert-success' style='margin: 15px 0px 0px; line-height: 1.5;'>" + response.success_message + "</div>");
							submitButton.attr('disabled', 'disabled');
							submitButton.html("<span class='glyphicon glyphicon-thumbs-up'></span>");
							;
							return false;
						} else {
							var error_phrase = '<div>';
							console.log(response.error_messages);
							var error_messages = response.error_messages;
							console.log(error_messages);
							
							$.each(error_messages, function(index, value) {
								var key = Object.keys(value)[0];
								
								$('#'+key).parent('.form-group').addClass('error');
								//$('#'+key).after("<small class='help-block error text-danger'>" + value + "</small>")
								
								error_phrase = error_phrase + '<div>' + value;
								error_phrase = error_phrase + '</div>';
							});
							error_phrase += '</div>';
							
							messageBox.html("<div class='alert alert-danger' style='margin: 15px 0px 0px; line-height: 1.5;'>" + error_phrase + "</div>");
							submitButton.html(origButtonHTML);
							submitButton.removeAttr('disabled');
							return false;
						}
					},
					error: function(jqXHR, textStatus, errorThrown) {}
				});
			}
		});
		
		$.validator.addMethod(
			"regex",
			function(value, element, regexp) 
			{
				if (regexp.constructor != RegExp)
					regexp = new RegExp(regexp);
				else if (regexp.global)
					regexp.lastIndex = 0;
				return this.optional(element) || regexp.test(value);
			},
			"Please check your input."
		);
		
		$("#leadform").validate({
			rules: {
				fullname: "required",
				email: {
					required: true,
					email: true,
					regex: /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/
				},
			},
			messages: {
				fullname: "Full Name is required",
				email: "Invalid Email",
			}
		});
		
		$("#leadutmsource").val(getCookie("_botanikalp_utm_source"));
		$("#leadutmcampaign").val(getCookie("_botanikalp_utm_campaign"));
		$("#leadutmedium").val(getCookie("_botanikalp_utm_medium"));
		$("#leadutmterm").val(getCookie("_botanikalp_utm_term"));
		$("#leadutmcontent").val(getCookie("_botanikalp_utm_content"));
		
		
		// function adjustServicesGrid() {
		// 	$('.grid').each(function() {
		// 		var heights = [];
		// 		var grid = $(this);
		// 		var wrappers = $(grid).find('.wrapper');
				
		// 		$(wrappers).each(function() {
		// 			var elem = $(this);
		// 			var height = elem.outerHeight();
		// 			heights.push(height);
		// 		});
				
		// 		heights = heights.sort(function(a, b){return b-a});
		// 		var tallest = heights[0];
		// 		$(wrappers).css('height', tallest+'px');
		// 	});
		// };
		
		$('.amenities-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            /*swipeToSlide: true,*/
            autoplay: false,
            autoplaySpeed: 5000,
            pauseOnHover:true,
            dots: true,
            fade: false,
            arrows: true,
            //centerMode: true,
            infinite: true,
            loop: true,
            prevArrow: $('.amenities-slider-nav-list .slider-nav.prev'),
            nextArrow: $('.amenities-slider-nav-list .slider-nav.next'),
        });
        
	</script>
	
</body>
</html>
