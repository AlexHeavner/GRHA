<?php
require_once 'dbOps.php';
require_once 'emailfunctions.php';

session_start();


if(isset($_SESSION['MemberInfo'])){
    //send conformation email
    memberCreationNotification($_SESSION['MemberInfo']);
    //Firstname
    if(isset($_SESSION['MemberInfo']['firstname']))
        $firstname=$_SESSION['MemberInfo']['firstname'];
    else $firstname="";
    //Lastname
    if(isset($_SESSION['MemberInfo']['lastname']))
        $lastname=$_SESSION['MemberInfo']['lastname'];
    else $lastname="";
    //Address
    if(isset($_SESSION['MemberInfo']['address']))
        $address=$_SESSION['MemberInfo']['address'];
    else $address="";
    //City
    if(isset($_SESSION['MemberInfo']['city']))
        $city=$_SESSION['MemberInfo']['city'];
    else $city="";
    //State
    if(isset($_SESSION['MemberInfo']['state']))
        $state=$_SESSION['MemberInfo']['state'];
    else $state="";
    //Zip
    if(isset($_SESSION['MemberInfo']['zip']))
        $zip=$_SESSION['MemberInfo']['zip'];
    else $zip="";
    //County
    if(isset($_SESSION['MemberInfo']['county']))
        $county=$_SESSION['MemberInfo']['county'];
    else $county="";
    //employer
    if(isset($_SESSION['MemberInfo']['employer']))
        $employer=$_SESSION['MemberInfo']['employer'];
    else $employer="";
    //title
    if(isset($_SESSION['MemberInfo']['title']))
        $title=$_SESSION['MemberInfo']['title'];
    else $title="";
    //phone
    if(isset($_SESSION['MemberInfo']['phone']))
        $phone=$_SESSION['MemberInfo']['phone'];
    else $phone="";
    //faxno
    if(isset($_SESSION['MemberInfo']['faxno']))
        $faxno=$_SESSION['MemberInfo']['faxno'];
    else $faxno="";
    //email
    if(isset($_SESSION['MemberInfo']['email']))
        $email=$_SESSION['MemberInfo']['email'];
    else $email="";
    //committee
    if(isset($_SESSION['MemberInfo']['committee']))
        $committee=$_SESSION['MemberInfo']['committee'];
    else $committee="";
    //role
    if(isset($_SESSION['MemberInfo']['role']))
        $role=$_SESSION['MemberInfo']['role'];
    else $role="";
    //level
    if(isset($_SESSION['MemberInfo']['level']))
        $level=$_SESSION['MemberInfo']['level'];
    else $level="individual";
    
    $sqlInsert = "INSERT INTO members (firstname, lastname, address, city, state, zip, county, employer, title, phone, faxno, email, committee, role, level,date) values ('$firstname', '$lastname', '$address', '$city', '$state', $zip, '$county', '$employer', '$title', '$phone', '$faxno', '$email', '$committee', '$role','$level', NOW());";
    
    $result = mysql_query($sqlInsert);
    if(!$result){
        die("Unable to confirm your membership.  Please contact us for more info.       ".mysql_error());
    }
    else{
        
    header("Location: join_thanks.html");
    exit;
    }
}

?>