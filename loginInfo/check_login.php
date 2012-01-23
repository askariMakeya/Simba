<?php
$host = "localhost"; 			// Host name 
$username = "root"; 				// Mysql username 
$password = "root"; 				// Mysql password 
$db_name = "simba"; 			// Database name 
$tbl_name = "users"; 		// Table name

// This will connect to our Simba server and select the username/password databse.
$connection = mysql_connect("$host", "$username", "$password");
if (!$connection) {
	die("cannot connect to the server:" . mysql_error());
} 
$database = mysql_select_db("$db_name");
if (!$database) {
	die("cannot select DB:". mysql_error());
}

// Usernames and Passwords sent from form 
$myusername = $_POST['myusername']; 
$mypassword = $_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$sql = "SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result = mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("myusername");
session_register("mypassword"); 
header("location:login_success.php");
}
else {
echo "Error!!!Wrong Username or Password";
}
?>