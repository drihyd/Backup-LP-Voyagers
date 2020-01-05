
                  $(document).ready(function() {
                  	qCardAdjust();
                  });
                  
                  $(window).resize(function() {
                  	qCardAdjust();
                  });
                  
                  function qCardAdjust() {
                  	$('.q-card').css('height', 'auto');
                  	var heights = [];
                  	$('.q-card').each(function() {
                  		var elem = $(this);
                  		var height = elem.outerHeight();
                  		heights.push(height);
                  	});
                  	heights = heights.sort(function(a, b){return b-a});
                  	var tallest = heights[0];
                  	$('.question-sec').css('min-height', '0px');
                  	$('.q-card').css('height', tallest+'px');
                  }
                  
                  var success_url = 'success.html#scoreSec';
                  var assess_url  = 'thankyou.html';
                  var fail_url = 'thankyou1.html';
                  var totalQuestions = 5;
                  
                  var scores = {
                  	'option-1': 1,
                  	'option-2': 0,
                        'option-3':0,
                  };
                  
                  var ans1  = getCookie('ans1');
                  console.log(ans1);
                  if(ans1) {
                  	$('#qNum-1 .ans-grid #' + ans1).addClass('active');
                  }
                  var ans2  = getCookie('ans2');
                  if(ans2) {
                  	$('#qNum-1 .ans-grid #' + ans2).addClass('active');
                  }
                  var ans3  = getCookie('ans3');
                  if(ans3) {
                  	$('#qNum-1 .ans-grid #' + ans3).addClass('active');
                  }
                  var ans4  = getCookie('ans4');
                  if(ans4) {
                  	$('#qNum-1 .ans-grid #' + ans4).addClass('active');
                  }
                  var ans5  = getCookie('ans5');
                  if(ans5) {
                  	$('#qNum-1 .ans-grid #' + ans5).addClass('active');
                  }
                 
                  
                  if(getCookie('currentQuestion') == '') {
                  	var currentQuestion = 1;
                  } else {
                  	var currentQuestion = parseInt(getCookie('currentQuestion'));
                  }
                  
                  if(getCookie('totalScore') == '') {
                  	var totalScore = 0;
                  } else {
                  	var totalScore = parseInt(getCookie('totalScore'));
                        console.log(totalScore);
                  }
                  
                  if(currentQuestion > totalQuestions) {
                  	window.location.replace(assess_url);
                  }
                  
                  $('.q-card').removeClass('active');
                  $('#qNum-' + currentQuestion).addClass('active');
                  
                  if(currentQuestion > 1) {
                  	$('#btnPrev').addClass('vis');
                  } else {
                  	$('#btnPrev').removeClass('vis');
                  }
                  
                  //console.log('totalQuestions: ' + totalQuestions);
                  //console.log('currentQuestion: ' + currentQuestion);
                  //console.log('totalScore: ' + totalScore);
                  
                  $('body').on('click', '.ans-btn', function(e) {
                  	var btn = $(this);
                  	var id = btn.attr('id');
                  	var varname = 'ans' + currentQuestion;
                  	var score = scores[id];
                  	
                  	btn.siblings().removeClass('active');
                  	btn.addClass('active');
                  	
                  	window[varname] = id;
                  	document.cookie = varname + "=" + id;
                  	
                  	currentQuestion += 1;
                  	document.cookie = "currentQuestion=" + currentQuestion;
                  	
                  	totalScore += score;
                  	document.cookie = "totalScore=" + totalScore;
                     console.log(totalScore);
                  	
                  	if(currentQuestion > totalQuestions) {
                  		//window.location.replace(success_url);
                  		//console.log('success');
                  		
                  		if(totalScore > 3) {
                  			window.location.replace(assess_url);
                  		} else {
                  			window.location.replace(fail_url);
                  			//window.location.replace(success_url);
                  		}
                  		
                  	} else {
                  		$('.q-card').removeClass('active');
                  		$('#qNum-' + currentQuestion).addClass('active');
                  	}
                  	
                  	if(currentQuestion > 1) {
                  		$('#btnPrev').addClass('vis');
                  	} else {
                  		$('#btnPrev').removeClass('vis');
                  	}
                  });
                  
                  $('body').on('click', '#btnPrev', function(e) {
                  	var varname = 'ans' + (currentQuestion - 1);
                  	var prevScore = window[varname];
                  	
                  	prevScore = scores[prevScore];
                  	console.log(prevScore);
                  	window[varname] = '';
                  	document.cookie = varname + "=" + '';
                  	
                  	totalScore -= prevScore;
                  	document.cookie = "totalScore=" + totalScore;
                  	
                  	currentQuestion -= 1;
                  	document.cookie = "currentQuestion=" + currentQuestion;
                  	
                  	if(currentQuestion > totalQuestions) {
                  		var success_url = 'success.html#scoreSec';
                  		
                  		if(totalScore > 3) {
                  			window.location.replace(assess_url);
                  		} else {
                  			window.location.replace(fail_url);
                  			//window.location.replace(success_url);
                  		}
                  	} else {
                  		$('.q-card').removeClass('active');
                  		$('#qNum-' + currentQuestion).addClass('active');
                  	}
                  	
                  	if(currentQuestion > 1) {
                  		$('#btnPrev').addClass('vis');
                  	} else {
                  		$('#btnPrev').removeClass('vis');
                  	}
                              
                        
                  });
                  
         