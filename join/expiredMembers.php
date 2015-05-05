<?php
require_once 'dbOps.php';
require_once 'htmlfuncs.php';
session_start();

html_header();

if(isset($_SESSION['admin'])){

    
    $date = strtotime("-1 year", time());
    
    $expiredDate = date("Y-m-d H:i:s", $date);

	$expiredQuery = "SELECT * FROM members WHERE date<='$expiredDate'";
			$expiredResult=mysql_query($expiredQuery);
			if(!$expiredResult) die ("access failed".mysql_error());
			else{
				$custArray=mysql_fetch_row($expiredResult);
				$row = mysql_num_rows($expiredResult);
			
				echo "<table><form method=\"post\" action=\"renewMember.php\">"; 
				echo "<tr><th colspan=\"2\">Member Information</th></tr>";
                echo "<tr><td colspan=\"2\">&nbsp</td></tr>";
				for($i=0;$i<$row;$i++){
					
				echo <<<_END

					<tr><th>Member ID: </th><td><input name="memberid" type="textfield" value="$custArray[0]"</td></tr>
					<tr><th>First Name: </th><td><input name="firstname" type="text" value="$custArray[1]"/></td></tr>
					<tr><th>Last Name: </th><td><input name="lastname" type="text" value="$custArray[2]"/></td></tr>
					<tr><th>Address: </th><td><input name="address" type="text" value="$custArray[3]"/></td></tr>
					<tr><th>City: </th><td><input name="city" type="text" value="$custArray[4]" /></td></tr>
					<tr><th>State: </th><td><input name="state" type="textfield" value="$custArray[5]" /></td></tr>
					<tr><th>Zip: </th><td><input name="zip" type="tel" 
value="$custArray[6]" /></td></tr>
                    <tr><th>County: </th><td><input name="county" type="textfield" value="$custArray[7]" /></td></tr>
                    <tr><th>Employer: </th><td><input name="employer" type="textfield" value="$custArray[8]" /></td></tr>
                    <tr><th>Title: </th><td><input name="title" type="textfield" value="$custArray[9]" /></td></tr>
                    <tr><th>Phone: </th><td><input name="phone" type="textfield" value="$custArray[10]" /></td></tr>
                    <tr><th>Fax Number: </th><td><input name="faxno" type="textfield" value="$custArray[11]" /></td></tr>
                    <tr><th>Email: </th><td><input name="email" type="textfield" value="$custArray[12]" /></td></tr>
                    <tr><th>Committee: </th><td><input name="committee" type="textfield" value="$custArray[13]" /></td></tr>
                    <tr><th>Role: </th><td><input name="role" type="textfield" value="$custArray[14]" /></td></tr>
                    <tr><th>Level: </th><td><input name="level" type="textfield" value="$custArray[15]" /></td></tr>
                    <tr></tr>
					<tr><th colspan="2"><input name="renew" type="submit" value="Renew Membership" /></th></tr>
                    <tr><th>Delete Member?</th><td><input onclick="sureButton();" name="delete" type="submit" value="Delete Member" /></th></tr>
                    <tr><td colspan="2">&nbsp</td></tr>
                    <tr><td colspan="2">&nbsp</td></tr>
_END;
				}
				echo "</form></table>";
                echo "<br><br>";
				echo "<br><br><a href=\"siteAdministration.php\">Back to Site Administration</a><br><br>";
			}
}
else{
    echo "Sorry, you must be logged in to change your password.";
	echo "<br><br><a href=\"adminLogin.php\">Admin Login</a>";
}

html_footer();

?>