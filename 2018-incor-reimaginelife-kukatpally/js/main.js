// $(document).ready(function($) {

//   $(window).scroll(function() {

//     var height = $(window).scrollTop();

//     if(height  > 0 && $(window).width() > 767) {

//       $('#logo').attr("src", './img/onecity-logo.jpg');

//       $('#mainMenu').addClass("small-nav");

//       //$('#featuresNavbar').addClass("small-nav"); 

//       $('#interestedModal').addClass("modal-top");     

//     }

//     else {

//       $('#logo').attr("src", './img/oonecity-logo.jpg');

//       $('#mainMenu').removeClass("small-nav");

//       $('#interestedModal').removeClass("modal-top");  

//       //$('#featuresNavbar').removeClass("small-nav");            

//     }

//   });

// });



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

 
/* ****** UTM TRACKING CODE: BEGIN ********* */
function getCookie(e){for(var t=e+"=",i=decodeURIComponent(document.cookie).split(";"),r=0;r<i.length;r++){for(var o=i[r];" "==o.charAt(0);)o=o.substring(1);if(0==o.indexOf(t))return o.substring(t.length,o.length)}return""}var UtmCookie;UtmCookie=function(){function e(e){null==e&&(e={}),this._cookieNamePrefix="_uc_",this._domain=e.domain,this._sessionLength=e.sessionLength||1,this._cookieExpiryDays=e.cookieExpiryDays||365,this._additionalParams=e.additionalParams||[],this._utmParams=["utm_source","utm_medium","utm_campaign","utm_term","utm_content"],this.writeInitialReferrer(),this.writeLastReferrer(),this.writeInitialLandingPageUrl(),this.setCurrentSession(),this.additionalParamsPresentInUrl()&&this.writeAdditionalParams(),this.utmPresentInUrl()&&this.writeUtmCookieFromParams()}return e.prototype.createCookie=function(e,t,i,r,o,n){var a,s,m,l,d,u;u=null,i&&((d=new Date).setTime(d.getTime()+24*i*60*60*1e3),u=d),s=null!=u?"; expires="+u.toGMTString():"",m=null!=r?"; path="+r:"; path=/",a=null!=o?"; domain="+o:"",l=null!=n?"; secure":"",document.cookie=this._cookieNamePrefix+e+"="+escape(t)+s+m+a+l},e.prototype.readCookie=function(e){var t,i,r,o;for(o=this._cookieNamePrefix+e+"=",i=document.cookie.split(";"),r=0;r<i.length;){for(t=i[r];" "===t.charAt(0);)t=t.substring(1,t.length);if(0===t.indexOf(o))return t.substring(o.length,t.length);r++}return null},e.prototype.eraseCookie=function(e){this.createCookie(e,"",-1,null,this._domain)},e.prototype.getParameterByName=function(e){var t,i,r;return e=e.replace(/[\[]/,"\\[").replace(/[\]]/,"\\]"),i="[\\?&]"+e+"=([^&#]*)",t=new RegExp(i),(r=t.exec(window.location.search))?decodeURIComponent(r[1].replace(/\+/g," ")):""},e.prototype.additionalParamsPresentInUrl=function(){var e,t,i,r;for(e=0,t=(r=this._additionalParams).length;t>e;e++)if(i=r[e],this.getParameterByName(i))return!0;return!1},e.prototype.utmPresentInUrl=function(){var e,t,i,r;for(e=0,t=(r=this._utmParams).length;t>e;e++)if(i=r[e],this.getParameterByName(i))return!0;return!1},e.prototype.writeCookie=function(e,t){this.createCookie(e,t,this._cookieExpiryDays,null,this._domain)},e.prototype.writeAdditionalParams=function(){var e,t,i,r,o;for(e=0,t=(r=this._additionalParams).length;t>e;e++)i=r[e],o=this.getParameterByName(i),this.writeCookie(i,o)},e.prototype.writeUtmCookieFromParams=function(){var e,t,i,r,o;for(e=0,t=(r=this._utmParams).length;t>e;e++)i=r[e],o=this.getParameterByName(i),this.writeCookie(i,o)},e.prototype.writeCookieOnce=function(e,t){this.readCookie(e)||this.writeCookie(e,t)},e.prototype._sameDomainReferrer=function(e){var t;return t=document.location.hostname,e.indexOf(this._domain)>-1||e.indexOf(t)>-1},e.prototype._isInvalidReferrer=function(e){return""===e||void 0===e},e.prototype.writeInitialReferrer=function(){var e;e=document.referrer,this._isInvalidReferrer(e)&&(e="direct"),this.writeCookieOnce("referrer",e)},e.prototype.writeLastReferrer=function(){var e;e=document.referrer,this._sameDomainReferrer(e)||(this._isInvalidReferrer(e)&&(e="direct"),this.writeCookie("last_referrer",e))},e.prototype.writeInitialLandingPageUrl=function(){var e;(e=this.cleanUrl())&&this.writeCookieOnce("initial_landing_page",e)},e.prototype.initialReferrer=function(){return this.readCookie("referrer")},e.prototype.lastReferrer=function(){return this.readCookie("last_referrer")},e.prototype.initialLandingPageUrl=function(){return this.readCookie("initial_landing_page")},e.prototype.incrementVisitCount=function(){var e,t,i;e="visits",t=parseInt(this.readCookie(e),10),i=1,i=isNaN(t)?1:t+1,this.writeCookie(e,i)},e.prototype.visits=function(){return this.readCookie("visits")},e.prototype.setCurrentSession=function(){var e;e="current_session",this.readCookie(e)||(this.createCookie(e,"true",this._sessionLength/24,null,this._domain),this.incrementVisitCount())},e.prototype.cleanUrl=function(){var e;return e=window.location.search.replace(/utm_[^&]+&?/g,"").replace(/&$/,"").replace(/^\?$/,""),window.location.origin+window.location.pathname+e+window.location.hash},e}();var UtmForm,_uf;UtmForm=function(){function e(e){null==e&&(e={}),this._utmParamsMap={},this._utmParamsMap.utm_source=e.utm_source_field||"USOURCE",this._utmParamsMap.utm_medium=e.utm_medium_field||"UMEDIUM",this._utmParamsMap.utm_campaign=e.utm_campaign_field||"UCAMPAIGN",this._utmParamsMap.utm_content=e.utm_content_field||"UCONTENT",this._utmParamsMap.utm_term=e.utm_term_field||"UTERM",this._additionalParamsMap=e.additional_params_map||{},this._initialReferrerField=e.initial_referrer_field||"IREFERRER",this._lastReferrerField=e.last_referrer_field||"LREFERRER",this._initialLandingPageField=e.initial_landing_page_field||"ILANDPAGE",this._visitsField=e.visits_field||"VISITS",this._addToForm=e.add_to_form||"all",this._formQuerySelector=e.form_query_selector||"form",this.utmCookie=new UtmCookie({domain:e.domain,sessionLength:e.sessionLength,cookieExpiryDays:e.cookieExpiryDays,additionalParams:Object.getOwnPropertyNames(this._additionalParamsMap)}),"none"!==this._addToForm&&this.addAllFields()}return e.prototype.addAllFields=function(){var e,t,i,r;i=this._utmParamsMap;for(t in i)e=i[t],this.addFormElem(e,this.utmCookie.readCookie(t));r=this._additionalParamsMap;for(t in r)e=r[t],this.addFormElem(e,this.utmCookie.readCookie(t));this.addFormElem(this._initialReferrerField,this.utmCookie.initialReferrer()),this.addFormElem(this._lastReferrerField,this.utmCookie.lastReferrer()),this.addFormElem(this._initialLandingPageField,this.utmCookie.initialLandingPageUrl()),this.addFormElem(this._visitsField,this.utmCookie.visits())},e.prototype.addFormElem=function(e,t){var i,r,o,n,a;if(t&&(i=document.querySelectorAll(this._formQuerySelector)).length>0)if("first"===this._addToForm)(r=i[0]).insertBefore(this.getFieldEl(e,t),r.firstChild);else for(n=0,a=i.length;a>n;n++)(o=i[n]).insertBefore(this.getFieldEl(e,t),o.firstChild)},e.prototype.getFieldEl=function(e,t){var i;return i=document.createElement("input"),i.type="hidden",i.name=e,i.value=t,i},e}(),_uf=window._uf||{},window.UtmForm=new UtmForm(_uf);
/* ****** UTM TRACKING CODE: END *********** */


// == Date Year == //

var dateObj = new Date();
var year = dateObj.getFullYear();
var dateYear = $('#footerYear');
dateYear.html(year);

// == END Date Year == //

