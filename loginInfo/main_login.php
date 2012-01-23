<html>
	<head>
		<title>Main Login</title>
		<link href="css/login.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="login">
				<form name="form1" method="post" action="check_login.php">
					<td>
						<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
							<tr>
								<td colspan="3"><strong>Member Login </strong></td>
							</tr>
							<tr>
								<td width="78">Username</td>
								<td width="6">:</td>
								<td width="294"><input name="myusername" type="text" id="myusername"></td>
							</tr>
							<tr>
								<td>Password</td>
								<td>:</td>
								<td><input name="mypassword" type="text" id="mypassword"></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>&nbsp;</td>
								<td><input type="submit" name="Submit" value="Login"></td>
							</tr>
						</table>
					</td>
				</form>
			</div>
	</body>
</html>