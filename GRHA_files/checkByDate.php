<?php
require_once 'dbOps.php';
require_once 'htmlfuncs.php';
session_start();

html_header();
if(isset($_POST['userCreation']))
   {
    
?>
    <form action="checkByDate.php" method="post">
Enter a date:<br>
<input type="date" name="userCreation" min="2000-01-01" autofocus><br><br>
<input type="submit">
<?php
    $dbDate = $_POST['userCreation'];
$fetch = mysql_query("SELECT firstname FROM `members` WHERE CAST(date AS DATE) = '$dbDate'") or die("Whoops! Cannot find the user");
$firstNameArray = array();
while($row = mysql_fetch_assoc($fetch)){
    $firstNameArray[]=$row['firstname'];
}

    $fetch1 = mysql_query("SELECT lastname FROM `members` WHERE CAST(date AS DATE) = '$dbDate'") or die("Whoops! Cannot find the user");
$lastNameArray = array();
while($row = mysql_fetch_assoc($fetch1)){
    $lastNameArray[]=$row['lastname'];
}
echo"<table>"; 
    echo"<table>
        <caption>Accounts created on ".$dbDate."</caption>
        <tr>
            <td>
            First
            </td>
            <td>
            Last
            </td>
        </tr>";
    for($i =0;$i<count($firstNameArray);$i++)
    {
        echo"<tr>";
        echo "<td>".$firstNameArray[$i]."</td>"; 
        echo "<td>".$lastNameArray[$i]."</td>"; 
        echo"<br>";
        echo"</tr>";
    }
    echo"</table>";
   }else{
       ?>
<form action="checkByDate.php" method="post">
Enter a date:<br>
<input type="date" name="userCreation" min="2000-01-01" autofocus><br><br>
<input type="submit"> 
    
<?php
    
   }
html_footer();
?> 