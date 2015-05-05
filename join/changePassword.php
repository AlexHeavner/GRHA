<?php
require_once 'dbOps.php';
require_once 'htmlfuncs.php';
session_start();
html_header();

if(isset($_SESSION['admin'])){
    if(isset($_SESSION['username'])){
        if(isset($_POST['password'])){
            $tempPassword = $_POST['password']; 
            $password = saltPassword($tempPassword);
            $username = $_SESSION['username'];
            $adminUpdate = "UPDATE admin SET password='$password' WHERE username='$username';";
	       $updateInfo = mysql_query($adminUpdate);
	       if(!$updateInfo){
		      die ("Unable to Update Admin Password".mysql_error());
	       }
	       else{
		      echo "Password changed for $username";
            }
        }
        else{
            $username = $_SESSION['username'];  
    
            echo <<<_END
            <form id="change" name="change" method="post" action="changePassword.php"   onsubmit="return validatePassword()">
		      Enter a new password for $username:  <input type="password" id="pwd1" name="password" />
            <br><label id="pwd1Error"></label><br>
            Confirm your new password: <input type="password" id="pwd2" name="confirmpassword" />
            <br><label id="pwd2Error"></label><br>
		      <input name="submit" type="submit" id="button" value="Change"/>
	       </form>
_END;
        }
    }
}
else{
    echo "Sorry, you must be logged in to change your password.";
	echo "<br><br><a href=\"adminLogin.php\">Admin Login</a>";
}
html_footer();

?>
<script>
    var isValidPwd1 = true;
    var isValidPwd2 = true;
    //Get first password and password label, check for empty
    var pwd1 = document.getElementById("pwd1");
    pwd1.onblur=function(){
        var pwd1Error = document.getElementById("pwd1Error");
        if(pwd1.value===""){
            pwd1Error.innerHTML="Password required";
            isValidPwd1 = false;
        }
        else{
            pwd1Error.innerHTML="";
            isValidPwd1 = true;
        }
    }
    //get second password and password label, check for empty and equal
    var pwd2 = document.getElementById("pwd2");
    pwd2.onblur=function(){
        var pwd2Error = document.getElementById("pwd2Error");
        if(pwd2.value===""){
            pwd2Error.innerHTML="Please confirm password";
            isValidPwd2 = false;
        }
        else if(pwd2.value!==pwd1.value){
            pwd2Error.innerHTML="Passwords do not match";
            isValidPwd2 = false;
        }
        else{
            pwd2Error.innerHTML = "";
            isValidPwd2 = true;
        }
    }
    function validatePassword(){
        if(pwd1.value==="")
            isValidPwd1 = false;
        if(pwd2.value==="")
            isValidPwd2 = false;
        if(isValidPwd1 && isValidPwd2){
            return true;
        }
        else return false;
    }

</script>