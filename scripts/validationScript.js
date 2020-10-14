var nav = document.getElementById('access_nav'),
    body = document.body;

nav.addEventListener('click', function(e) 
{
    body.className = body.className? '' : 'with_nav';
    e.preventDefault();
});
function RegistrationValidation()
{
    var firstName = document.getElementById("firstName").value;
    var lastName = document.getElementById("lastName").value;
	var email = document.getElementById("email").value;
	var phone = document.getElementById("number").value;
    var password1 = document.getElementById("password1").value;
    var password2 = document.getElementById("password2").value;
    var selectDOBday = document.getElementById("selectDOBday").value;
    var selectDOBmonth = document.getElementById("selectDOBmonth").value;
    var selectDOByear = document.getElementById("selectDOByear").value;
    var gender = document.getElementsByName("gender");
	var error_message = document.getElementById("error_message");
	
	var text;
	
	error_message.style.padding = "10px";//Internal css, because by default, we dont want the error message to show unless theres an error
	
	if(firstName==null|| firstName=="")/*if firstName is empty*/
	{
		text="Please enter a First name";
		error_message.innerHTML = text;
		document.getElementById('firstName').style.borderColor = "red";
		return false;
	}
    else
    {
        document.getElementById('firstName').style.borderColor = "green";
    }
    if(lastName==null|| lastName=="")/*if lastName is empty*/
	{
		text="Please enter a Last name";
		error_message.innerHTML = text;
		document.getElementById('lastName').style.borderColor = "red";
		return false;
	}
    else
    {
        document.getElementById('lastName').style.borderColor = "green";
    }

	if(!email.match(/^\S+@\S+\.\S+$/))
	{
		text="Please enter a valid Email";
		error_message.innerHTML=text;
		document.getElementById('email').style.borderColor = "red";
		return false;
	}
    else
    {
        document.getElementById('email').style.borderColor = "green";
    }

	if(!phone.match(/^[0-9]\d{9}$/))
	{
		text="Please enter a Phone Number that starts with a 0";
		error_message.innerHTML=text;
		document.getElementById('number').style.borderColor = "red";
		return false;
	}
    else
    {
        document.getElementById('number').style.borderColor = "green";
    }

	if(password1==null || password1==""||password2==null || password2=="")
	{
		text="Please type a password";
		error_message.innerHTML=text;
		document.getElementById('password1').style.borderColor = "red";
		return false;
	}
    else
    {
        document.getElementById('password1').style.borderColor = "green";
        document.getElementById('password2').style.borderColor = "green";
    }
    if(password1!=password2)
    {
        text="Please type matching passwords";
        error_message.innerHTML=text;
        document.getElementById('password1').style.borderColor = "red";
        return false;
    }
    else
    {
        document.getElementById('password1').style.borderColor = "green";
    }
	
	if(selectDOBday=="0")
	{
		text="Please Select a day from the drop down";
		error_message.innerHTML=text;
		document.getElementById('selectDOBday').style.borderColor = "red";
		return false;
	}
	else{
        document.getElementById('selectDOBday').style.borderColor = "green";
    }
    if(selectDOBmonth=="0")
	{
		text="Please Select a month from the drop down";
		error_message.innerHTML=text;
		document.getElementById('selectDOBmonth').style.borderColor = "red";
		return false;
	}
	else{
        document.getElementById('selectDOBmonth').style.borderColor = "green";
    }
    if(selectDOByear=="0")
	{
		text="Please Select a year from the drop down";
		error_message.innerHTML=text;
		document.getElementById('selectDOByear').style.borderColor = "red";
		return false;
	}
	else{
        document.getElementById('selectDOByear').style.borderColor = "green";
    }
	
    if (!(gender[0].checked || gender[1].checked || gender[2].checked)) 
    {
        text="Please Select Your Gender";
		error_message.innerHTML=text;
		document.getElementsByName('gender').style.borderColor = "red";
		return false;
    }
    else
    {
        document.getElementsByName('gender').style.borderColor = "green";
    }
	alert("Form Submitted Successfully")
	return true;
};
function LoginValidation()
{
	var UserEmail = document.getElementById("UserEmail").value;
    var UserPassword = document.getElementById("UserPassword").value;
	var error_messageLogin = document.getElementById("error_messageLogin");
	var textLogin;
	error_messageLogin.style.padding = "10px";//Internal css, because by default, we dont want the error message to show unless theres an error
	
	if(!UserEmail.match(/^\S+@\S+\.\S+$/))
	{
		textLogin="Please enter a valid Email";
		error_messageLogin.innerHTML=text;
		document.getElementById('UserEmail').style.borderColor = "red";
		return false;
	}
    else
    {
        document.getElementById('UserEmail').style.borderColor = "green";
	}
	
	if(UserPassword==null || UserPassword=="")
	{
		textLogin="Please type a password";
		error_messageLogin.innerHTML=text;
		document.getElementById('UserPassword').style.borderColor = "red";
		return false;
	}
    else
    {
        document.getElementById('UserPassword').style.borderColor = "green";
    }
	return true;
};
	function myFunction()
	{
		document.getElementById("myDropdown").classList.toggle("show");
	}
	
	// Close the dropdown if the user clicks outside of it
	window.onclick = function(event)
	{
		if (!event.target.matches('.dropbtn')) 
		{
			var dropdowns = document.getElementsByClassName("dropdown-content");
			var i;
			for (i = 0; i < dropdowns.length; i++) 
			{
				var openDropdown = dropdowns[i];
				if (openDropdown.classList.contains('show')) 
				{
					openDropdown.classList.remove('show');
				}
			}
		}
	}

