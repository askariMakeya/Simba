<!DOCTYPE HTML>

<?php

// Inialize session
session_start();

// Check, if user is already login, then jump to secured page
if (isset($_SESSION['myusername'])) {
	$lg = true;
}

?>

<html>
	<head>
		<title>Timeline Example</title>
		<link href="timeline.css" rel="stylesheet" type="text/css" />
		<link href='http://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>
		<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js'></script>
		<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.5/jquery-ui.min.js'></script>
		
		<script type="text/javascript">
			$(document).ready(function(){    
				$('#loginPopup').hide();
				//$('.showLogin').hide();
				
				$('.hide').click(function(){
					$('#loginPopup').slideUp();
					$('span.showLogin').fadeIn('slow');
					return false;
				});
				
				$('a.showLogin').click(function(){
				    $('#loginPopup').slideDown();
				    return false;
				});
			});
		</script>
		<script type="text/javascript">
        	//function to check username availability  
			function check_availability(){  
		  
		        //get the username  
		    	var myusername = $('#myusername').val();  
		  
		        //use ajax to run the check  
		    	$.post("../logininfo/check_usr.php", { myusername: myusername },  
		        function(result){  
		            //if the result is 1  
		            if(result == 1){  
		                //show that the username is available  
		                document.getElementById("submit").value="Signup";
		                document.getElementById("loginsignup").action="../logininfo/register.php"; 
		            }else{  
		                //show that the username is NOT available  
		                document.getElementById("submit").value="Login";  
		                document.getElementById("loginsignup").action="../logininfo/check_login.php"; 
		                }  
		        });  
		  
		}  
		</script>
	</head>
	<body>
		<div id="wrapper">
			<div id="header">
				<div id="login">
					<?php 
						if($lg){
							echo "Welcome ";
							echo $_SESSION['myusername'];
							echo " | <a href='../logininfo/logout.php'>Logout</a>";
						}else{
							echo "<a href=# class=showLogin>Login Options</a>";
						}
					?>
				</div>
				<input type="text" class="search" name="search" value="search" placeholder="Search" />
				<div id="loginPopup" class="divLoginDialog">
					<form id="loginsignup" name="form1" method="post" action="../logininfo/check_login.php">
						<input name="myusername" type="text" id="myusername" placeholder="Username" onkeyup="check_availability(this.id)" />
						</br>
						<input name="mypassword" type="text" id="mypassword" placeholder="Password" />
						</br>
						<a href=# class=hide><input type="button" name="Cancel" value="Cancel" style="width:70px;" /></a>
						<input id="submit" type="submit" name="Submit" value="Login" style="width:70px;" />
					</form>
				</div>
				<div id="nav">
					<ul>
						<li><a href="#">2012 Election</a></li>
						<li><a href="#">Civil Rights</a></li>
						<li><a href="#">Defense</a></li>
						<li><a href="#">Disabilities</a></li>
						<li><a href="#">Education</a></li>
						<li><a href="#">Health Care</a></li>
						<li><a href="#">Economy</a></li>
						<li><a href="#">Energy</a></li>
						<li><a href="#">Foreign Policy</a></li>
						<li><a href="#">Immigration</a></li>
					</ul>
				</div>
			</div>
			<div id="content">
				<h1>Climate Change</h1>
				<div id="timeline">
					<div id="time" class="blue">
						<div id="stack">
						<ul class="stacks">
							<li><a href="#" title="Florida"><img src="../pics/floridasmall.jpg" alt="florida"/></a></li>
							<li><a href="#" title="Florida"><img src="../pics/gotysmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/lionsmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/mp3small.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/newt1small.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/obamasmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/pentagonsmall.jpg" /></a></li>
						</ul>
						</div>
						<div id="stack">
						<ul class="stacks">
							<li><a href="#" title="Florida"><img src="../pics/floridasmall.jpg" alt="florida"/></a></li>
							<li><a href="#" title="Florida"><img src="../pics/gotysmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/lionsmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/mp3small.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/newt1small.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/obamasmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/pentagonsmall.jpg" /></a></li>
						</ul>
						</div>
					</div>
					<div id="time" class="grey">
						<div id="stack">
						<ul class="stacks">
							<li><a href="#" title="Florida"><img src="../pics/floridasmall.jpg" alt="florida"/></a></li>
							<li><a href="#" title="Florida"><img src="../pics/gotysmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/lionsmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/mp3small.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/newt1small.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/obamasmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/pentagonsmall.jpg" /></a></li>
						</ul>
						</div>
						<div id="stack">
						<ul class="stacks">
							<li><a href="#" title="Florida"><img src="../pics/floridasmall.jpg" alt="florida"/></a></li>
							<li><a href="#" title="Florida"><img src="../pics/gotysmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/lionsmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/mp3small.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/newt1small.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/obamasmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/pentagonsmall.jpg" /></a></li>
						</ul>
						</div>
					</div>
					<div id="time" class="blue">
						<div id="stack">
						<ul class="stacks">
							<li><a href="#" title="Florida"><img src="../pics/floridasmall.jpg" alt="florida"/></a></li>
							<li><a href="#" title="Florida"><img src="../pics/gotysmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/lionsmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/mp3small.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/newt1small.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/obamasmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/pentagonsmall.jpg" /></a></li>
						</ul>
						</div>
						<div id="stack">
						<ul class="stacks">
							<li><a href="#" title="Florida"><img src="../pics/floridasmall.jpg" alt="florida"/></a></li>
							<li><a href="#" title="Florida"><img src="../pics/gotysmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/lionsmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/mp3small.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/newt1small.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/obamasmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/pentagonsmall.jpg" /></a></li>
						</ul>
						</div>
					</div>
					<div id="time" class="grey">
						<div id="stack">
						<ul class="stacks">
							<li><a href="#" title="Florida"><img src="../pics/floridasmall.jpg" alt="florida"/></a></li>
							<li><a href="#" title="Florida"><img src="../pics/gotysmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/lionsmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/mp3small.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/newt1small.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/obamasmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/pentagonsmall.jpg" /></a></li>
						</ul>
						</div>
						<div id="stack">
						<ul class="stacks">
							<li><a href="#" title="Florida"><img src="../pics/floridasmall.jpg" alt="florida"/></a></li>
							<li><a href="#" title="Florida"><img src="../pics/gotysmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/lionsmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/mp3small.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/newt1small.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/obamasmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/pentagonsmall.jpg" /></a></li>
						</ul>
						</div>
					</div>
					<div id="time" class="blue">
						<div id="stack">
						<ul class="stacks">
							<li><a href="#" title="Florida"><img src="../pics/floridasmall.jpg" alt="florida"/></a></li>
							<li><a href="#" title="Florida"><img src="../pics/gotysmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/lionsmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/mp3small.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/newt1small.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/obamasmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/pentagonsmall.jpg" /></a></li>
						</ul>
						</div>
						<div id="stack">
						<ul class="stacks">
							<li><a href="#" title="Florida"><img src="../pics/floridasmall.jpg" alt="florida"/></a></li>
							<li><a href="#" title="Florida"><img src="../pics/gotysmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/lionsmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/mp3small.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/newt1small.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/obamasmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/pentagonsmall.jpg" /></a></li>
						</ul>
						</div>
					</div>
					<div id="time" class="grey">
						<div id="stack">
						<ul class="stacks">
							<li><a href="#" title="Florida"><img src="../pics/floridasmall.jpg" alt="florida"/></a></li>
							<li><a href="#" title="Florida"><img src="../pics/gotysmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/lionsmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/mp3small.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/newt1small.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/obamasmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/pentagonsmall.jpg" /></a></li>
						</ul>
						</div>
						<div id="stack">
						<ul class="stacks">
							<li><a href="#" title="Florida"><img src="../pics/floridasmall.jpg" alt="florida"/></a></li>
							<li><a href="#" title="Florida"><img src="../pics/gotysmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/lionsmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/mp3small.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/newt1small.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/obamasmall.jpg" /></a></li>
							<li><a href="#" title="Florida"><img src="../pics/pentagonsmall.jpg" /></a></li>
						</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>