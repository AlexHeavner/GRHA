<?php
	require_once "join/dbOps.php";

	$return_string = "";

	//email verification
	if(!(array_key_exists('email', $_POST) ? $_POST['email'] : null))
	{
		$return_string .="1";
	}
	else if(!strpos($_POST['email'], '@'))
	{
		$return_string .= "2";
	}
	else
		$return_string .= "0";

	//name verification
	if(!(array_key_exists('newsname', $_POST) ? $_POST['newsname'] : null))
	{
		$return_string .= "1";
	}
	else
		$return_string .="0";

	//company verification
	if(!(array_key_exists('company', $_POST) ? $_POST['company'] : null))
	{
		$return_string .= "1";
	}
	else
		$return_string .="0";
	//Job verification
	if(!(array_key_exists('jobtitle', $_POST) ? $_POST['jobtitle'] : null))
	{
		$return_string .= "1";
	}
	else
		$return_string .= "0";

	//Address1 verification
	if(!(array_key_exists('address1', $_POST) ? $_POST['address1'] : null))
	{
		$return_string .= "1";
	}
	else
		$return_string .="0";

	//City vericication
	if(!(array_key_exists('city', $_POST) ? $_POST['city'] : null))
	{
		$return_string .= "1";
	}
	else
		$return_string .= "0";

	//Zip verificaition
	if(!(array_key_exists('zip', $_POST) ? $_POST['zip'] : null))
	{
		$return_string .= "1";
	}
	else if(! is_numeric($_POST['zip']))
	{
		$return_string .= "2";
	}
	else
		$return_string .= "0";


	if($return_string == "0000000")
	{
		$query = sprintf("INSERT INTO newsletter (email, name, company, jobtitle, address, city, state, zip) VALUES('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s');",
			mysql_real_escape_string($_POST['email']),
			mysql_real_escape_string($_POST['newsname']),
			mysql_real_escape_string($_POST['company']),
			mysql_real_escape_string($_POST['jobtitle']),
			mysql_real_escape_string($_POST['address1'].$_POST['address2']),
			mysql_real_escape_string($_POST['city']),
			$_POST['state'],
			mysql_real_escape_string($_POST['zip']));

		mysql_query($query) or die("Invalid query.".$query);
		echo $return_string;
	}
	else
		echo $return_string;
?>