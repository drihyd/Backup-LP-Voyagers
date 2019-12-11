function validate_data()
	{
	var mobilepattern=/^\d{10}$/;
	var emailpattern= /^([a-zA-Z0-9\_\.\-])+\@([a-zA-Z0-9\_\-\.])+\.([a-zA-Z0-9]{2,4})$/;
	var name=document.getElementById('name').value;
	var email=document.getElementById('email').value;
	var mobile=document.getElementById('mobile').value;

	if(name=='')
		{
			alert('Enter your name');
			document.getElementById('name').focus();
			return false;
		}	
		
	if(email=='')
		{
			alert('Enter your email address');
			document.getElementById('email').focus();
			return false;
		}
		else if(!emailpattern.test(email))
		{
			alert('Enter valid email id');
			document.getElementById('email').focus();
			return false;
		}		
	
	if(mobile=='')
		{
			alert('Enter your 10 digit mobile num');
			document.getElementById('mobile').focus();
			return false;
		}
		else if(!mobilepattern.test(mobile))
		{
			alert('Enter valid 10 digit mobile num');
			document.getElementById('mobile').focus();
			return false;
		}
		if(email=='')
		{
			alert('Enter your email address');
			document.getElementById('email').focus();
			return false;
		}
		else if(!emailpattern.test(email))
		{
			alert('Enter valid email id');
			document.getElementById('email').focus();
			return false;
		}

}	