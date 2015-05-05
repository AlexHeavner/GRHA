<?php
require_once 'dbOps.php';
require_once 'htmlfuncs.php';
session_start(); 
html_header();
?>
	<label id = "username">Username:</label>
	<input type="text" name="usernameinput" id="nameId">
	<label id="password">Password:</label>
	<input type="password" name="passwordinput" id="pwdId">
	<input name="admin" type="submit" id="submit" value="Log In">
	<div id="eMName"></div>
	<div id="eMPwd"></div>
	<div id ="error"></div>
	<br>

<script>
	isValidName=true;
	isValidPassword=true;  //Because in the validation process, if you find an error this will be changed to false. Else, submit is allowed.
	idName = document.getElementById("nameId");
	idPwd = document.getElementById("pwdId");
	submitButton = document.getElementById("submit");
	error = document.getElementById("error");
	
	idName.onblur=function(){
		var errorLabel1 = document.getElementById("eMName");
		if(idName.value===""){
			errorLabel1.innerHTML="Username cannot be empty";
			isValidName=false;
		}
		else if(/[^a-zA-Z0-9-_]/.test(idName.value)){  //if it's not all lowercase or upercase or numbers then do this.
			errorLabel1.innerHTML="Username can only have letters a-z, A-Z and numbers 0-9 and - and _";
			isValidName=false;
		}
		else
		{
			errorLabel1.innerHTML="";
			isValidName=true;
		}
	}  //end of username on blur
	
	idPwd.onblur=function(){
		var errorLabel2 = document.getElementById("eMPwd");
		if(idPwd.value===""){
			errorLabel2.innerHTML="Password cannot be empty";
			isValidPassword=false;
		}
		else if(idPwd.value.length<5)
		{
			errorLabel2.innerHTML="Password length must be greater than 5 characters!";
			isValidPassword = false;
		}
		else
		{
			errorLabel2.innerHTML="";
			isValidPassword = true;
		}
	} //end of password on blur

	submitButton.onclick = function()
	{
		var username = idName.value;
		var password = idPwd.value;

		var url = "adminloginajax.php";
		var params = "username=" + encodeURIComponent(username )+ "&password=" + encodeURIComponent(password);

		var request = ajaxRequest();

		request.open("POST",url, true);
		request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		request.setRequestHeader("Content-length", params.length);
		request.setRequestHeader("Connection", "close");
		request.send(params);

		request.onreadystatechange = function()
		{
			if(this.readyState == 4)
			{	
				if(this.responseText === "Sorry, unknown username and/or password")
					error.innerHTML = "<span style =\"color: red;\">"+ this.responseText + "</span>";

				else
				{
					alert(this.responseText);
					window.location = "http://alexanderheavner.com/GHRA/join/siteAdministration.php";
				}		
			}
		}		
	}
	
	function allValid()
	{
		if(isValidName && isValidPassword)
			return true;
		else
			return false;
	}	

	function ajaxRequest()
	{
		try
		{
			var request = new XMLHttpRequest();
		}
		catch(e)//for IE peasants
		{
			request = new ActiveXObject("Msxml2.XMLHTTP")
		}

		return request;
	}

</script>
<?php
html_footer();
?>