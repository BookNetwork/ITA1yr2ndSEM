function login1(event)
{
	
	event.preventDefault();
	var passwordt = document.logFrm.Upassword.value;
	var UserEmail = document.logFrm.Uemail.value;
	
	return(!isEmptylogEmail(UserEmail) & !isEmptylogPass(passwordt))
} 

function login2(event)
{
	
	event.preventDefault();
	var email = document.regFrm.email.value;
	var fname = document.regFrm.fname.value;
	var lname = document.regFrm.lname.value;
	var password = document.regFrm.password.value;
	var repassword = document.regFrm.repassword.value;
	
	return (fnameVali(fname) & lnameVali(lname) & emailVali(email) & passwordVali(password) & repassVali(repassword))
}

function isEmptylogEmail(val)
{
	if(val == "" || val == null)
	{
		document.getElementById("userEmail").innerHTML= "Email field is Empty !!";
		document.getElementById("userEmail").style.color = "red";
		return false;	
	}
	else
		document.getElementById("userEmail").innerHTML= " ";
		return true;

}

function isEmptylogPass(val)
{
	if(val == "" || val == null)
	{
		document.getElementById("userPassword").innerHTML= "Password field is Empty !!";
		document.getElementById("userPassword").style.color = "red";
		return false;
		
	}
	else
		document.getElementById("userPassword").innerHTML= " ";
		return true;
		

}

function isEmpty(val)
{
	if(val == " " || val == null)
		return true;
}

function fnameVali(val)
{
	al=/^[a-zA-Z]+$/;
	
	if(isEmpty(val))
	{
		
		document.getElementById("fnameVal").innerHTML = "First name feild is empty";
		return false;
	}
	else
	{
		if(val.match(val))
		{
			
			if(val.length+1 >= 2 && val.length+1 <= 11 ){
			document.getElementById("fnameVal").innerHTML = " ";
				return true;
			}
			else
				document.getElementById("fnameVal").innerHTML = "Enter the name between 2 and 11 text lenght";
				return false;

		}
		else
		{
			document.getElementById("fnameVal").innerHTML = "Pleas enter only text";
			return false;
		}
	}	
}

function lnameVali(val)
{
	al=/^[a-zA-Z]+$/;
	if(isEmpty(val))
	{
		
		document.getElementById("lnameVal").innerHTML = "Last name feild is empty!!";
		return false;
	}
	else
	{
		if(val.match(al))
		{
			if(val.length+1 >= 2 && val.length+1 <= 11 ){
			document.getElementById("lnameVal").innerHTML = " ";
				return true;
			}
			else
				document.getElementById("lnameVal").innerHTML = "Enter the name between 2 and 15 text lenght";
				return false;
					
		}
		else
		{
			document.getElementById("lnameVal").innerHTML = "Pleas enter only text !!";
			return false;
		}
	}	
}


function emailVali(val)
{
	
	if(isEmpty(val))
	{
		document.getElementById("emailVal").innerHTML = "Email Feild is empty !!";
		return false;
	}
	else
	{	
		var atpos = val.indexOf("@");
		var dotpos = val.indexOf(".");
		
		 
		if (atpos<1 || dotpos<atpos+2 || dotpos+2>=val.length) 
		{			
		
			document.getElementById("emailVal").innerHTML = "Not a valid e-mail address !!";
			return false;
		}
		else
			
			document.getElementById("emailVal").innerHTML = " ";
			return true;
	}
}

function passwordVali(val)
{
	if(isEmpty(val))
	{
		document.getElementById("passwordVal").innerHTML = "Password Feild is empty !!";
		return false;
	}
	else
	{
		if(val.match(al))
		{
			document.getElementById("passwordVal").innerHTML = " ";
				return true;
		}
		else
		{
			document.getElementById("passwordVal").innerHTML = "Pleas enter only text !!";
			return false;
		}
	}
	
}

function repassVali(val)
{
	var pass = document.getElementById("password").value;
	
	if(isEmpty(val))
	{
		document.getElementById("repasswordVali").innerHTML = "Repassword Feild is empty !!";
		return false;
	}
	else
	{
		if(val == pass)
		{
			document.getElementById("repasswordVali").innerHTML = " ";
			return true;
		}
		else{
			document.getElementById("repasswordVali").innerHTML = "Password is not matched !!";
			return false;
		}
		
	}
	
}
