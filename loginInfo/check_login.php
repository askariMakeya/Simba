<?php

// Inialize session
session_start();

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

// Check username and password match
if (mysql_num_rows($result) == 1) {
// Set username session variable
$_SESSION['myusername'] = $_POST['myusername'];
}

// Jump to previous page
header('Location: ../timeline/index.php');


?>