<?php
require_once 'htmlfuncs.php';
require_once 'dbOps.php';
session_start();
html_header();
if(isset($_SESSION['admin'])){
    if(isset($_POST['renew'])){
        $date = date("Y-m-d H:i:s");
       	$memberid = array_key_exists('memberid', $_POST) ? $_POST['memberid'] : null;
        $renewQuery = "UPDATE members SET date='$date' WHERE memberid='$memberid';";
        $renewResult = mysql_query($renewQuery);
        if(!$renewResult) die ("Unable to renew membership. ".mysql_error());
        else{
            echo "Membership renewed for member id $memberid";   
        }
    }
    else{
        echo "Oops, something must have gone wrong.";
    }
}
else{
    echo "Sorry, you must be logged in to site administration to renew memberships.";
	echo "<br><br><a href=\"adminLogin.php\">Admin Login</a>";
}
html_footer();
?>