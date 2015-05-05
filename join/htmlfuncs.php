<?php
//Checks to see if username is logged in, adds username to $str, which is used in the logout button.
function html_header(){
    
echo <<<_END
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/template.dwt" codeOutsideHTMLIsLocked="false" --><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- InstanceBeginEditable name="doctitle" -->
<title> Georgia Rural Health Association</title>
<script src="corp.js"></script>
<!-- InstanceEndEditable -->
<link href="../GRHA_files/default.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../GRHA_files/jqueryslidemenu.css">
<link rel="shortcut icon" href="../favicon.ico" >

<!--[if lte IE 6]>
<script type="text/javascript" src="js/supersleight-min.js"></script>
<![endif]-->

<!--[if lte IE 7]>
<style type="text/css">
html .jqueryslidemenu{height: 1%;} /*Holly Hack for IE7 and below*/
</style>
<![endif]-->



<script src="../GRHA_files/ga.js" async="" type="text/javascript"></script><script type="text/javascript" src="../GRHA_files/jquery.js"></script>
<script type="text/javascript" src="../GRHA_files/jqueryslidemenu.js"></script>
<script type="text/javascript" src="../GRHA_files/fadeslideshow.js">

/***********************************************
* Ultimate Fade In Slideshow v2.0- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
***********************************************/

</script>


<link rel="stylesheet" type="text/css" href="../ddsmoothmenu.css" />
<link rel="stylesheet" type="text/css" href="../ddsmoothmenu-v.css" />

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="../ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "smoothmenu1", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

ddsmoothmenu.init({
	mainmenuid: "smoothmenu2", //Menu DIV id
	orientation: 'v', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu-v', //class added to menu's outer DIV
	//customtheme: ["#804000", "#482400"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
<style type="text/css">
<!--
.headings {
	font-size: 16px;
	color: #333399;
	font-weight: bold;
}
.whitetext {
	font-size: 12pt;
	color: #FFF;
}
}
-->
</style>
<title>Visual Slideshow</title>

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="keywords" content="Visual Slideshow" />

<meta name="description" content="Visual Slideshow" />

<!-- Start VisualSlideShow.com HEAD section -->

<link rel="stylesheet" type="text/css" href="../engine/css/slideshow.css" media="screen" />
<style type="text/css">
.slideshow a#vlb{display:none}
</style>

<script type="text/javascript" src="../engine/js/mootools.js"></script>

<script type="text/javascript" src="../engine/js/visualslideshow.js"></script>

<!-- End VisualSlideShow.com HEAD section -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>

<div id="container">

  <div id="top"><span style="float:right;margin:0;"> 


<!--<form method="get" action="http://vrha.org/search_results.php" style="margin-right:10px;">
<input size="25" id="q" name="q" style="vertical-align: middle;" type="text">
<input name="op" src="Georgia%20Rural%20Health%20Association_files/magnifier.jpg" style="vertical-align: middle;" type="image">
</form>-->
      
 </span> <a href="../donate.htm"><img src="../GRHA_files/donate.png" alt="Donate" border="0"></a>
<img src="../GRHA_files/divider_top.png" alt="link divider"> <a href="join.html"><img src="../GRHA_files/join.png" alt="Join Us" border="0"></a> <img src="../GRHA_files/divider_top.png" alt="link divider">  <a href="http://www.facebook.com/GeorgiaRuralHealthAssociation" target="_blank"><img src="../GRHA_files/fb_top.png" alt="Facebook" width="192" height="26" border="0"></a><right></right> </div>

<div id="homeImg"></div>

    <div id="navarea">
 

<div id="smoothmenu1" class="ddsmoothmenu">
<ul>
<li><a href="/GHRA/">Home</a></li>
<li><a href="/GHRA/aboutus.html">About Us</a>
  <ul>
  <li><a href="/GHRA/board.html">Officers & Committees</a></li>
  <li><a href="/GHRA/constituency.html">Constituency Groups</a> </li>
  
  </ul>
</li>
<li><a href="GHRA/membership.html">Membership</a>
  <ul>
  <li><a href="/GHRA/membership.html">Membership Details</a></li>
  <li><a href="/GHRA/join/join.html">Join/Renew GRHA</a></li>
   <li><a href="/GHRA/members/congressional_contacts.php">Congressional Contacts</a></li>
  <li><a href="/GHRA/students.html">Students</a></li>
  <li><a href="/GHRA/jobs.html">Job Board</a></li>
  </ul>
</li>


<li><a href="/GHRA/newsletter.htm">Newsletter</a>
<li><a href="/GHRA/legislation.htm">Advocacy</a>
		<ul>
    		<li><a href="/GHRA/legislation.html">2014 Legislative Agenda</a></li>
    		<li><a href="/GHRA/members/legislation_tracking_2014.php">2014 Legislative Tracking</a></li>
    		<li><a href="/GHRA/legislation_2013.html">2013 Legislative Agenda</a></li>
    		<li><a href="/GHRA/members/legislation_tracking_2013.php">2013 Legislative Tracking</a></li> 		
		</ul>
    </li>
    <li><a href="/GHRA/resources.htm">Resources</a>
    <ul>
    <li><a href="/GHRA/events.html">Health Care</a></li>
    <li><a href="/GHRA/links.html">Rural Links</a></li>
    </ul></li>
    <li><a href="/GHRA/contact.php">Contact</a>
    		<ul><li><a href="../newsletter.html">Get GRHA Email Notices</a></li></ul></li></li>
    </ul>
  </li>
  </ul>
</li>

</ul>
<br style="clear: left" />
</div>


    <!--<div id="myslidemenu" class="jqueryslidemenu">
<ul>
<li><a href="http://vrha.org/about.php">Home</a>
  <ul style="top: 47px; display: none; visibility: visible; left: 0px; width: 171px;">
  <li><a href="http://vrha.org/donate.php">Support VRHA</a></li>
  </ul>
</li>
<li><a href="aboutus.htm">About Us</a></li>
  <ul style="top: 47px; display: none; visibility: visible; left: 0px; width: 171px;">
  <li><a href="board.htm">Officers & Committees</a></li>
   <li><a href="contact.php">Contact</a></li>
    <li><a href="http://grha.boardweb.org/index.php">Board Meeting Info</a></li>
  </ul>
<li><a href="http://vrha.org/vrha_board.php">VRHA Board</a></li>
<li><a href="http://vrha.org/legislation.php">Legislation</a>
  <ul style="top: 47px; display: none; visibility: visible; left: 0px; width: 171px;">
  <li><a href="http://vrha.org/legislation_policy.php">VRHA's Policy Priorities</a></li>
  <li><a href="http://vrha.org/legislation_trackinglinks.php">State Legislative Tracking Links</a></li>
  <li><a href="http://vrha.org/legislation_national.php">National Legislation</a></li>
  </ul>
</li>
<li><a href="http://vrha.org/calendar.php">Calendar</a></li>
<li><a href="http://vrha.org/events.php">VRHA Events</a></li>
<li><a href="http://vrha.org/weekly_update.php">Weekly Update</a></li>
<li><a href="http://vrha.org/resources.php">Resources</a></li>
<li><a href="http://vrha.org/contact.php">Contact Us</a></li>
</ul>
<br style="clear: left;">
</div>
-->
    
    
    
    </div>
  <br style="clear:both;">
  <!-- InstanceBeginEditable name="EditRegion3" -->  
  <div id="content">
_END;
if(isset($_SESSION['username']))
{
	//$username = $_SESSION['username'][0];
	$str= stringify($_SESSION['username']);
	//echo "<p id=\"login\">You are logged in as $str";
}

//Displays banner and nav links at top of page.  Uses css for div id#nav in main css page.
echo <<<_END
<div id="nav">
<a id="nav" href="siteAdministration.php"><strong>Site Administration</strong></a> | 
_END;

if(isset($_SESSION['login'])){
	if($_SESSION['login']==1){
		echo "<a href=\"logout.php\">Logout $str</a>";
	}
	else if($_SESSION['login']==0){
		echo "<a href=\"adminLogin.php\"> Log In</a>";
	}
}
else
	echo "<a href=\"adminLogin.php\">Log In</a>";

echo "<br><br>";
}
function html_footer()
{
	echo <<<_END
    <div id="footerInfo">
<a href="../index.htm">Home</a> | <a href="../aboutus.htm">About Us</a> | <a href="../membership.htm">Membership</a> | <a href="../events.htm">Health Care</a> | <a href="../newsletter.htm">Newsletter</a> | <a href="../members/legislation.php">Advocacy</a> | <a href="../links.htm">Rural Links</a><br>
<strong>©2012 Georgia Rural Health Association</strong>
</div>
</div>

_END;
    
}
function stringify($item)
{
    return (string)$item;
}
function saltPassword($tempPassword)
{
	//Salt and Hash temp Password, store in token
	$salt1 = "qm\$h*";
	$salt2 = "pg!@";
	$token = hash('ripemd128', "$salt1$tempPassword$salt2");
	return $token;
}
?>