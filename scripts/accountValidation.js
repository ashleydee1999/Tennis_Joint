function accountValidation()
{
   
    var firstName = document.getElementById("Username").value;
    var lastName = document.getElementById("lastname").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var address = document.getElementById("address").value;
    var password1 = document.getElementById("password").value;
    var password2 = document.getElementById("password2").value;
    var error_messageAcc = document.getElementById("error_messageAcc");
	
	var text;
	
	error_messageAcc.style.padding = "10px";//Internal css, because by default, we dont want the error message to show unless theres an error
	
	if(firstName==null|| firstName=="")/*if firstName is empty*/
	{
		text="Please enter a First name";
		error_messageAcc.innerHTML = text;
		document.getElementById('Username').style.borderColor = "red";
		return false;
	}
    else
    {
        document.getElementById('Username').style.borderColor = "green";
    }
    if(lastName==null|| lastName=="")/*if lastName is empty*/
	{
		text="Please enter a Last name";
		error_messageAcc.innerHTML = text;
		document.getElementById('lastname').style.borderColor = "red";
		return false;
	}
    else
    {
        document.getElementById('lastname').style.borderColor = "green";
    }

	if(!email.match(/^\S+@\S+\.\S+$/))
	{
		text="Please enter a valid Email";
		error_messageAcc.innerHTML=text;
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
		error_messageAcc.innerHTML=text;
		document.getElementById('phone').style.borderColor = "red";
		return false;
	}
    else
    {
        document.getElementById('phone').style.borderColor = "green";
    }
    if(address==null|| address=="")/*if lastName is empty*/
	{
		text="Please enter Your Address";
		error_messageAcc.innerHTML = text;
		document.getElementById('address').style.borderColor = "red";
		return false;
	}
    else
    {
        document.getElementById('address').style.borderColor = "green";
    }

	if(password1==null || password1==""||password2==null || password2=="")
	{
		text="Please type a password";
		error_messageAcc.innerHTML=text;
		document.getElementById('password').style.borderColor = "red";
		return false;
	}
    else
    {
        document.getElementById('password').style.borderColor = "green";
        document.getElementById('password2').style.borderColor = "green";
    }
    if(password1!=password2)
    {
        text="Please type matching passwords";
        error_messageAcc.innerHTML=text;
        document.getElementById('password').style.borderColor = "red";
        return false;
    }
    else
    {
        document.getElementById('password').style.borderColor = "green";
    }
	return true;
};