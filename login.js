$(document).ready(function(){
	if(window.location.href == "http://localhost/Online%20Tests/login/index.html?err=invalidpass"){
		$('.errorpasssignin').show().text('Invalid Username or Password!').css('color','red');
	}
	else if(window.location.href == "http://localhost/Online%20Tests/login/index.html?status=accountcreated"){
		$('.errorpasssignin').show().text('Account Created. SignIn using your Credentials.').css('color','green');
		$('#tab-1').attr('checked','checked');
	}
	else if(window.location.href == "http://localhost/Online%20Tests/login/index.html?status=accountexists"){
		$('.erroremailsignup').show().text('Account already exists. Please SignIn.').css('color','red');
		$('#tab-2').attr('checked','checked');
	}
	$('#sign-in-form').submit(function() {
		user = $('input[name="usernamesignin"]').val().trim();
		pass = $('input[name="passwordsignin"]').val().trim();
		if(user!="" && pass!=""){
			return true;
		}
		else if(user==""&&pass==""){
			$('.errornamesignin').show().html("Please Enter Username");
			$('.errorpasssignin').show().html("Please Enter Password");
			return false;
		}
		else if(user==""){
			$('.errorpasssignin').hide();
			$('.errornamesignin').show().html("Please Enter Username");
			return false;
		}
		else {
			$('.errornamesignin').hide();
			$('.errorpasssignin').show().html("Please Enter Password");
			return false;
		}
	});
	$('#sign-up-form').submit(function() {
		user = $('input[name="usernamesignup"]').val().trim();
		pass = $('input[name="passwordsignup"]').val().trim();
		passconfirm = $('input[name="confirmpasswordsignup"]').val().trim(); 
		email = $('input[name="emailsignup"]').val().trim(); 
		$('.errorconfirmpasssignup').hide();
		$('.erroremailsignup').hide();
		if(user!="" && pass!="" && passconfirm!="" && email!="" && pass==passconfirm){
			return true;
		}
		else if(user!="" && pass!="" && passconfirm!="" && email!="" && pass!=passconfirm){
			$('.errorconfirmpasssignup').show().html("Passwords don't match! Try Again!").css('color','red');
			return false;
		}
		else if(user=="" || pass=="" || passconfirm=="" || email==""){
			$('.erroremailsignup').show().html("Please fill in all fields!").css('color','red');
			return false;
		}
	});
});