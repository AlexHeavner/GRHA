<?php
require_once 'dbOps.php';
require_once 'htmlfuncs.php';
session_start();
html_header();

echo <<<_END
<br><br>

	<form id="phoneNumber" name="lookup" method="post" action="updateMember.php">
		Enter your phone Number: <input type="tel" name="phone" />
		<input name="phoneSubmit" type="submit" id="button" value="submit"/>
	</form>
    
    
    <form id="email" name="email" method="post" action="updateMember.php">
        Enter member email address: <input type="textfield" name="email" />
        <input name="emailSubmit" type="submit" id="button" value="submit"/>
    </form><br><br>
_END;

html_footer();
?>