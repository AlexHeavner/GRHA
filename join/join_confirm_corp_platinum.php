<?php
//Add PHP Here.  Skip down to Content-DIV for displaying content within HTML PAGE
require_once 'dbOps.php';
session_start();

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
$email = array_key_exists('email', $_POST) ? $_POST['email'] : null;
$committee = array_key_exists('committee[]', $_POST) ? $_POST['committee[]'] : null;
$role = array_key_exists('role[]2', $_POST) ? $_POST['role[]2'] : null;


$_SESSION['MemberInfo']['firstname']=$firstname;
$_SESSION['MemberInfo']['lastname']=$lastname;
$_SESSION['MemberInfo']['address']=$address;
$_SESSION['MemberInfo']['city']=$city;
$_SESSION['MemberInfo']['state']=$state;
$_SESSION['MemberInfo']['zip']=$zip;
$_SESSION['MemberInfo']['county']=$county;
$_SESSION['MemberInfo']['employer']=$employer;
$_SESSION['MemberInfo']['title']=$title;
$_SESSION['MemberInfo']['phone']=$phone;
$_SESSION['MemberInfo']['faxno']=$faxno;
$_SESSION['MemberInfo']['email']=$email;
$_SESSION['MemberInfo']['committee']=$committee;
$_SESSION['MemberInfo']['role']=$role;

$_SESSION['MemberInfo']['level']="platinum";

?>

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
<img src="../GRHA_files/divider_top.png" alt="link divider"> <a href="join.htm"><img src="../GRHA_files/join.png" alt="Join Us" border="0"></a> <img src="../GRHA_files/divider_top.png" alt="link divider">  <a href="http://www.facebook.com/GeorgiaRuralHealthAssociation" target="_blank"><img src="../GRHA_files/fb_top.png" alt="Facebook" width="192" height="26" border="0"></a><right></right> </div>

<div id="homeImg"></div>

    <div id="navarea">
 

<div id="smoothmenu1" class="ddsmoothmenu">
<ul>
<li><a href="../index.htm">Home</a></li>
<li><a href="../aboutus.htm">About Us</a>
  <ul>
  <li><a href="../board.htm">Officers & Committees</a></li>
  <li><a href="../constituency.htm">Constituency Groups</a> </li>
  
  </ul>
</li>
<li><a href="../membership.htm">Membership</a>
  <ul>
  <li><a href="../membership.htm">Membership Details</a></li>
  <li><a href="join.htm">Join/Renew GRHA</a></li>
   <li><a href="../members/congressional_contacts.php">Congressional Contacts</a></li>
  <li><a href="../students.htm">Students</a></li>
  <li><a href="../jobs.htm">Job Board</a></li>
  </ul>
</li>


<li><a href="../newsletter.htm">Newsletter</a>
<li><a href="../legislation.htm">Advocacy</a>
		<ul>
    		<li><a href="../legislation.htm">2014 Legislative Agenda</a></li>
    		<li><a href="../members/legislation_tracking_2014.php">2014 Legislative Tracking</a></li>
    		<li><a href="../legislation_2013.htm">2013 Legislative Agenda</a></li>
    		<li><a href="../members/legislation_tracking_2013.php">2013 Legislative Tracking</a></li> 		
		</ul>
    </li>
    <li><a href="../resources.htm">Resources</a>
    <ul>
    <li><a href="../events.htm">Health Care</a></li>
    <li><a href="../links.htm">Rural Links</a></li>
    </ul></li>
    <li><a href="../contact.php">Contact</a>
    		<ul><li><a href="../newsletter.htm">Get GRHA Email Notices</a></li></ul></li></li>
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
 
         <p align="center" class="heading2"><strong>
         <img src="../images/membershipapplication.png" alt="GRHA Membership Application" width="664" height="80" align="left" /></strong>      </p>
      
    
        <p class="heading add20pxLeft">&nbsp; </p>
     
      <p class="heading add10pxTop">&nbsp;  </p>
      <p class="headings"><br />
      Confirm Your Membership Information</p>
    
    
   <table width="70%" border="0" align="center" class="text">
<?php
    echo "<tr><td>First Name: </td><td>$firstname</td></tr>";
    echo "<tr><td>Last Name: </td><td>$lastname</td></tr>";
    echo "<tr><td>Address: </td><td>$address</td></tr>";
    echo "<tr><td>City: </td><td>$city</td></tr>";
    echo "<tr><td>State: </td><td>$state</td></tr>";
    echo "<tr><td>Zip Code: </td><td>$zip</td></tr>";
    echo "<tr><td>County: </td><td>$county</td></tr>";
    echo "<tr><td>Employer: </td><td>$employer</td></tr>";
    echo "<tr><td>Title/Position: </td><td>$title</td></tr>";
    echo "<tr><td>Work Phone: </td><td>$phone</td></tr>";
    echo "<tr><td>Fax: </td><td>$faxno</td></tr>";
    echo "<tr><td>Email: </td><td>$email</td></tr>";
    echo "<tr><td>Committee: </td><td>$committee</td></tr>";
    echo "<tr><td>Personal Role: </td><td>$role</td></tr>";
?>
      <td>Membership*:</td>
      <td>Corporate Platinum</td>
    </tr>
       <tr>
      <td>Total Price:</td>
      <td> $3,500.00</td>
    </tr>
        <tr>
      <td colspan="2"></td>
      </tr>
  </table>
  <p class="heading">&nbsp;</p>
  <table width="96%" border="0" align="center" class="text">
    <tr>
      <td width="100%"> <p class="text2">If you need to modify any of the values shown, please click on the Back
        button to return to the Membership Application page. Otherwise, please proceed with your payment using a credit card or by check below and click on the Submit button..<br />
        </p></td>
    </tr>
    <tr>
      <td> 
       <p align="center">  <input type=button value="Back" onClick="history.go(-1)" /> </p>
  
       </td>
       </tr>
       <tr>
       <td>After reviewing your information, please proceed with your payment using a credit card or by check below and click on the Submit button.</td>
       </tr>
       <tr>
		
		<td><br>
			<p  align='center'>
			   <span class="heading">Payment Information</span></p>
			<p >
				When you click the image below, you will be taken to a PayPal website for payment processing.
				You do not have to join PayPal to use this payment method unless your total is $2000 or greater.
			</p>
			<p>
				If your total cost is $2000 or greater, and you are not already a verified PayPal member,
				please remit your payment by check as descibed below.  If you are already a verified PayPal member,
				you may use the on-line payment process.	        </p>
			<p align="center">
			<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
			  <input type="hidden" name="cmd" value="_xclick" />
			  <input type="hidden" name="business" value="grha@grhainfo.org" />
			  <input type="hidden" name="item_name" value="GHRA Membership" />
			  <input type="hidden" name="item_number" value="GRHA Membership" />
			  <input type="hidden" name="amount" value="1,500.00" />
			  <input type="hidden" name="memberLevel" value="" />
			  <input type="hidden" name="no_shipping" value="0" />
			  <input type="hidden" name="no_note" value="1" />
			  <input type="hidden" name="currency_code" value="USD" />
			  <input type="hidden" name="tax" value="0" />
			  <input type="hidden" name="lc" value="US" />
			  <input type="hidden" name="bn" value="PP-DonationsBF" />
			  <input type="image" src="../../images/PayNow.gif" border="0" name="submit" alt="Make payments with PayPal - it's fast, free and secure!" />
			  <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1" />
		    </form>
            </p>
			<p align="center" class="heading">To pay by check, please send the remittance to the address below</p>
            <table width="40%" border="0" align="center">
              <tr>
                <td>GRHA <br />
                  P.O. 593<br />
                  Sandersville, GA 31082<br />
                  <a href="http://www.grhainfo.org">www.grhainfo.org</a></td>
              </tr>
            </table>
            <p><br />
		    </p>
			</p>

			

			
		</td>
	</tr>
    <tr>
      
      <td align="center"><p align="center" class="heading">
        <a href="join_dbAd.php"><input type="button" value="Submit" onClick="join_dbAd.php" /></a>
        </p></td>
    </tr>
    
    </table>
   
   </td>
  </div>
  <!-- InstanceEndEditable --><br style="clear:right;">

<div id="footerInfo">
<a href="../index.htm">Home</a> | <a href="../aboutus.htm">About Us</a> | <a href="../membership.htm">Membership</a> | <a href="../events.htm">Health Care</a> | <a href="../newsletter.htm">Newsletter</a> | <a href="../members/legislation.php">Advocacy</a> | <a href="../links.htm">Rural Links</a><br>
<strong>©2012 Georgia Rural Health Association</strong>
</div>
</div>

<div id="mfooter">
           <div id="footerb2">
<div id="twitterbird"><a href="http://twitter.com/grha" target="_blank"><img src="../images/twittericon.png" alt="Twitter" width="100" height="58" border="0" longdesc="http://twitter.com/grha" /></a></div><div id="footerb4"><a class="twitter-timeline"  href="https://twitter.com/grha"  data-widget-id="348154293058158592">Tweets by @grha</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script> 
		
		<script src="http://widgets.twimg.com/j/2/widget.js"></script>
<script>
new TWTR.Widget({
  version: 2,
  type: 'profile',
  rpp: 1,
  interval: 6000,
  width: 300,
  height: 100,
  theme: {
    shell: {
      background: 'transparent',
      color: '#f9f5fa'
    },
    tweets: {
      background: '#faf7fa',
      color: '#030303',
      links: '#0f07eb'
    }
  },
  features: {
    scrollbar: false,
    loop: false,
    live: false,
    hashtags: false,
    timestamp: false,
    avatars: false,
    behavior: 'all'
  }
}).render().setUser('grha').start();</script>
  </div>
           </div></div></div>



<div id="footerBottom"></div>
</body><!-- InstanceEnd --></html>