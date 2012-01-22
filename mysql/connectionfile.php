<?php
//opens connection to mysql server
$dbc = mysql_connect('localhost','root','root');
//$dbc = mysql_connect('localhost','bexodim','beastmode');
if (!$dbc) {
	die('Not connected : ' .mysql_error());
}

//select database
$db_select = mysql_select_db('simba', $dbc);
if (!$db_select) {
	die('cant connect : ' . mysql_error());
}

//test
$query = "UPDATE users SET password = 'beastmode' WHERE username = 'bexodim'";
$result = mysql_query($query);
?>