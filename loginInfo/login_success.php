// This is going to check if session is or is not registered 
// If not then we will be redirected to the main web page 
// This code is going to appear at the start of the web page
<? 
session_start();
if(!session_is_registered(myusername)){
header("location:main_login.php");
}
?>

<html>
	<head>
		<title>WELCOME TO SIMBA</title>
		<style type = "css/text">
			p.serif
			{
			font-family:"Times New Roman",Times,serif;
			}
		</style>
	</head>
	<body>
		<h1>
			<p class = "serif">Welcome, you are now logged in</p>
		</h1>
	</body>
</html>