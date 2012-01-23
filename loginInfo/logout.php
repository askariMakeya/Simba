<?php
// This code goes in first line of web page. 


// Inialize session
session_start();

// Delete certain session
unset($_SESSION['myusername']);
// Delete all session variables
// session_destroy();

// Jump to login page
header('Location: ../timeline/index.php');

?>