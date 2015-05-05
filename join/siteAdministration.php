<?php
require_once 'dbOps.php';
require_once 'htmlfuncs.php';
session_start();

html_header();
if(isset($_SESSION['admin']))
{
	if($_SESSION['admin']==1){
		if($_SESSION['username']!=null){
			$strUsername = stringify($_SESSION['username']);
			
			//Display Admin Site Links
			adminSiteLinks();
		}
	}
	else
	{
		echo "An error has occured!  Session username not found.";
	}
}
else{
	echo "You must login to administer this site.";
}


function adminSiteLInks(){
	echo <<<_END
	<br><br>
	<a href="memberLookup.php">Update Member Info</a><br>
    Lookup membership info, change info, delete members, check membership payment, etc.
    <br><br>
	<a href="expiredMembers.php">Expired Members</a><br>
    List all expired members in members table.
    <br><br>
	<a href="adminSignup.php">Add Admin</a><br>
    Add Admin to Site administration
    <br><br>
    <a href="checkByDate.php">View Members</a><br>
    View members based on sign up date
    <br><br>
    <a href="changePassword.php">Change My Password</a><br>
	Change the password of the current logged in user.
	<br><br>
	<a href="logout.php">Logout of Admin</a><br><br>
	</div>
_END;
}

html_footer();
?> 