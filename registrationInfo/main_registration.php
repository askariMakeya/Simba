<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<style type="text/css">
		body, label,a 
		{
		font-family : Arial, Helvetica, sans-serif;
		font-size : 12px; 
		color : FFCC00;
		}
		.formcontainer
		{
		text-align:left;
		width:330px;
		border-top: 1px solid FF0000;
		border-bottom: 1px solid FF0000;
		padding:10px;
		margin: auto;
		}
		.para
		{
		margin-bottom: 10px;
		}
	</style>
	<link rel="STYLESHEET" type="text/css" href="pwdwidget.css" />
	<script src="pwdwidget.js" type="text/javascript"></script>

	</head>

	<body >
		<div class='formcontainer'>
		<h3><strong><u style = "border-bottom: 1px solid FFCC3;">REGISTER</u></strong></h3>
		<form id = "register" method="post"  action="register.php" accept-charset="UTF-8">
			<input type = "hidden" name = "submitted" id = "submitted" value = "1"/>
			<div class='para'>
				<label for='name'>First Name: </label><br />
				<input type="text" id='first_name' name="first_name" maxlength = "30"/>
			</div>
			
			<div class='para'>
				<label for='name'>Last Name: </label><br />
				<input type="text" id='last_name' name="last_name" maxlength = "30"/>
			</div>
			
			<div class='para'>
				<label for='email'>Email:</label><br />
				<input type="text" id='email' name="email" maxlength = "50"/>
			</div>
			
			<div class='para'>
				<label for='regpwd'>Password:</label> <br />
				<div class='pwdwidgetdiv' id='thepwddiv'></div>
				<script  type="text/javascript" >
				var pwdwidget = new PasswordWidget('thepwddiv','regpwd');
				// The parameters of PasswordWidget are : 1. The id of the div for the widget
				//										  2. The name of the password field
				pwdwidget.MakePWDWidget();
				</script>
				<noscript>
				<div>
				<input type='password' id='regpwd' name='regpwd' /></div>		
				</noscript>
			</div>
			
			<div class='para'><br /><br />
				<input type="submit" name='submit' value="SUBMIT" />
			</div>
			
		</form>
		</div>
	</body>
</html>