<?php
require_once 'dbOps.php';
require_once 'htmlfuncs.php';

session_start();

html_header();
if(isset($_SESSION['admin'])){
    if(isset($_POST['delete'])){
        $memberid = array_key_exists('memberid', $_POST) ? $_POST['memberid'] : null;
        $firstname = array_key_exists('firstname', $_POST) ? $_POST['firstname'] : null;
	    $lastname = array_key_exists('lastname', $_POST) ? $_POST['lastname'] : null;
        $deleteQuery = "DELETE FROM members WHERE memberid='$memberid';";
        
        $deleteUser = mysql_query($deleteQuery);
        if(!$deleteUser) die ("Unable to delete user. ".mysql_error());
        else{
            echo "$firstname $lastname deleted from membership table";  
            echo "<br><br><a href=\"memberLookup.php\">Back to Member Lookup</a>";
        }
    }
    else if(isset($_POST['update'])){

	$memberid = array_key_exists('memberid', $_POST) ? $_POST['memberid'] : null;
	$firstname = array_key_exists('firstname', $_POST) ? $_POST['firstname'] : null;
	$lastname = array_key_exists('lastname', $_POST) ? $_POST['lastname'] : null;
	$address = array_key_exists('address', $_POST) ? $_POST['address'] : null;
	$city = array_key_exists('city', $_POST) ? $_POST['city'] : null;
	$state = array_key_exists('state', $_POST) ? $_POST['state'] : null;
	$zip = array_key_exists('zip', $_POST) ? $_POST['zip'] : null;
    $county = array_key_exists('county', $_POST) ? $_POST['county'] : null;
    $employer = array_key_exists('employer', $_POST) ? $_POST['employer'] : null;
    $title = array_key_exists('title', $_POST) ? $_POST['title'] : null;
    $phone = array_key_exists('phone', $_POST) ? $_POST['phone'] : null;
    $faxno = array_key_exists('faxno', $_POST) ? $_POST['faxno'] : null;
    $email = array_key_exists('zip', $_POST) ? $_POST['email'] : null;
    $committee = array_key_exists('committee', $_POST) ? $_POST['committee'] : null;
    $role = array_key_exists('role', $_POST) ? $_POST['role'] : null;
    $level = array_key_exists('level', $_POST) ? $_POST['level'] : null;
	
	$memberUpdate = "UPDATE members SET        firstname='$firstname',lastname='$lastname',address='$address',city='$city', state='$state', zip='$zip', county='$county', employer='$employer', title='$title', phone='$phone', faxno='$faxno', email='$email', committee='$committee', role='$role', level='$level' WHERE memberid='$memberid';";
	$updateInfo = mysql_query($memberUpdate);
	if(!$updateInfo){
		die ("Unable to Update Member Info ".mysql_error());
		echo "<br><br><a href=\"updateMember.php\">Back to Customer</a>";
	}
	else{
		echo "Information Updated for $firstname $lastname";
		echo "<br><br><a href=\"memberLookup.php\">Back to Member Lookup</a>";
    }
	
    }
else if(isset($_POST['phone']))
{
	$phone = array_key_exists('phone', $_POST) ? $_POST['phone'] : null;

	$phoneQuery = "SELECT * FROM members WHERE phone='$phone'";
			$phoneResult=mysql_query($phoneQuery);
			if(!$phoneResult) die ("access failed".mysql_error());
			else{
				$custArray=mysql_fetch_row($phoneResult);
				$row = mysql_num_rows($phoneResult);
			
				echo "<table><form method=\"post\" action=\"updateMember.php\">";  //action.php?clear=1 is another way
				echo "<tr><th colspan=\"2\">Member Information</th></tr>";
				for($i=0;$i<$row;$i++){
					
					//Salt and hash the password. Function Located in htmlfuncs.php
					echo <<<_END

					<tr><th>Member ID: </th><td><input name="memberid" type="textfield" value="$custArray[0]"</td></tr>
					<tr><th>First Name: </th><td><input name="firstname" type="text" value="$custArray[1]"/></td></tr>
					<tr><th>Last Name: </th><td><input name="lastname" type="text" value="$custArray[2]"/></td></tr>
					<tr><th>Address: </th><td><input name="address" type="text" value="$custArray[3]"/></td></tr>
					<tr><th>City: </th><td><input name="city" type="text" value="$custArray[4]" /></td></tr>
					<tr><th>State: </th><td><input name="state" type="text" value="$custArray[5]" /></td></tr>
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
					<tr><th>Update Member Info?</th><td><input name="update" type="submit" value="Update Information" /></td></tr>
                    <tr><th>Delete Member?</th><td><input onclick="return sureButton();" name="delete" type="submit" value="Delete Member" /></th></tr>
_END;
				}
				echo "</form></table>";
                echo "<br><br>Note: Member ID cannot be changed through site administration.";
				echo "<br><br><a href=\"memberlookup.php\">Back to Member Lookup</a><br><br>";
			}
}
else if(isset($_POST['email']))
{
	$email = array_key_exists('email', $_POST) ? $_POST['email'] : null;

	$emailQuery = "SELECT * FROM members WHERE email='$email'";
			$emailResult=mysql_query($emailQuery);
			if(!$emailResult) die ("access failed".mysql_error());
			else{
				$custArray=mysql_fetch_row($emailResult);
				$row = mysql_num_rows($emailResult);
			
				echo "<table><form method=\"post\" action=\"updateMember.php\">";  //action.php?clear=1 is another way
				echo "<tr><th colspan=\"2\">Member Information</th></tr>";
				for($i=0;$i<$row;$i++){
					
					//Salt and hash the password. Function Located in htmlfuncs.php
					echo <<<_END
                    <tr><th>Member ID: </th><td><input name="memberid" type="textfield" value="$custArray[0]"</td></tr>
					<tr><th>First Name: </th><td><input name="firstname" type="text" value="$custArray[1]"/></td></tr>
					<tr><th>Last Name: </th><td><input name="lastname" type="text" value="$custArray[2]"/></td></tr>
					<tr><th>Address: </th><td><input name="address" type="text" value="$custArray[3]"/></td></tr>
					<tr><th>City: </th><td><input name="city" type="text" value="$custArray[4]" /></td></tr>
					<tr><th>State: </th><td><input name="state" type="text" value="$custArray[5]" /></td></tr>
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
					<tr><th>Update Member Info?</th><td><input name="update" type="submit" value="Update Information" /></td></tr>
                    <tr><th>Delete Member?</th><td><input onclick="return sureButton();" name="delete" type="submit" value="Delete Member" /></th></tr>
_END;
				}
				echo "</form></table>";
                echo "<br><br>Note: Member ID cannot be changed through site administration.";
				echo "<br><br><a href=\"memberlookup.php\">Back to Member Lookup</a><br><br>";
			}
}
}
else{
    
    echo "Sorry, you must be logged in as an admin to add new admin users";
	echo "<br><br><a href=\"adminLogin.php\">Admin Login</a>";
}
html_footer();
?>
<script>
function sureButton(){
    if(confirm('Are you sure you want to delete this user?  This cannot be undone.')){
        return true;
    }
    else{
        return false;   
    }
}
</script>