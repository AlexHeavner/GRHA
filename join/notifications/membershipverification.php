<?php
function memberCreationNotification($member_info)
{
	$to = $member_info['email'];
	$subject = "GRHA Membership Creation";
	
	//$message = $member_ship['firstname'] + " " + $membership_info['lastname']+ ",\r\nTahnk you for suppourting GRHA. To continue
	account creation please follow the link to create an user account for our site.\r\n<a href=\"www.google.com</a>";
	$message = var_dump($member_info);
	$message = wordwrap($message, 70, "\r\n");

	mail($to, $subject, $message);
}
?>