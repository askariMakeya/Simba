<html>
	<head>
		<link rel="stylesheet" type="text/css" href="home.css" />
		<script src="jquery-1.7.1.min.js"></script>
		<script type="text/javascript">
			var cname = 's1'
			$(document).ready(function(){
				$(".navbar li").hover(function(){
					$(".navbar ."+cname+" img").css("border","solid white");
					$("#sb"+cname.charAt(1)).hide();
					$("#st"+cname.charAt(1)).hide();
					cname = this.className;
					$(".navbar ."+cname+" img").css("border","solid red");
					$("."+cname).show();
				});
			});
		</script>
	</head>
	<body>
	<div class="mainsite">
	<div class="top">
	<div class="title">
		<h1 >SIMBA</h1>
		<h4 >I think we can come up with a cool tagline.</h3>
	</div>
	
	<div class="logon">
		<h6 class="signup"><a href="">Login</a> | <a href="">Signup</a></h6>
		</br></br>
		<form><input type ="text" value="Find a specific issue"/></form>
	</div>
	</br>
	<nav>
	<ul class="categorybar">
		<li><a id="first" href="">2012 Presidential Election</a></li>
		<li><a href="">Economy</a></li>
		<li><a href="">Technology</a></li>
		<li><a href="">International</a></li>
		<li><a href="">Science</a></li>
		<li><a href="">Business</a></li>
		<li><a href="">Business</a></li>
		<li><a id="last"href="">Business</a></li>
	</ul>
	</nav>
	<img class="simba" src="pics/lion.jpg"/>
	</div>
	</br>
	<div class="main">
			<div class="s1" id="sb1">
				<a href="">
					<img src="pics/obama.jpg"/>
				</a>
			</div>
			<div class="s2" id="sb2">
				<a href="">
					<img src="pics/romney.jpg"/>
				</a>
			</div>
			<div class="s3" id="sb3">
				<a href="">
					<img src="pics/newt1.jpg"/>
				</a>
			</div>
			<div class="s4" id="sb4">
				<a href="">
					<img src="pics/florida.jpg"/>
				</a>
			</div>
			<div class="s5" id="sb5">
				<a href="">
					<img src="pics/pentagon.jpg"/>
				</a>
			</div>
			<div class="text">
				<div class= "s1" id="st1">
				<h3> State of the Union to offer a 'blueprint' for the economy</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis negat? Iam in altera philosophiae parte. Age sane, inquam. Si longus, levis; Quid nunc honeste dicit? </p>
				<a href="">See Obama's Timeline</a>
				</div>
				<div class= "s2" id="st2">
				<h3> Analysis: Romney's Southern discomfort</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis negat? Iam in altera philosophiae parte. Age sane, inquam. Si longus, levis; Quid nunc honeste dicit? </p>
				<a href="">See Romney's Timeline</a>
				</div>
				<div class= "s3" id="st3">
				<h3> A perfect storm for Gingrich</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis negat? Iam in altera philosophiae parte. Age sane, inquam. Si longus, levis; Quid nunc honeste dicit? </p>
				<a href="">See Gingrich's Timeline</a>
				</div>
				<div class= "s4" id="st4">
				<h3> For candidates, its boom burbs or bust</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis negat? Iam in altera philosophiae parte. Age sane, inquam. Si longus, levis; Quid nunc honeste dicit? </p>
				<a href="">See the Republican Timeline</a>
				</div>
				<div class= "s5" id="st5">
				<h3> Pentagon targets military sex assaults</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quis negat? Iam in altera philosophiae parte. Age sane, inquam. Si longus, levis; Quid nunc honeste dicit? </p>
				<a href="">See Military's Timeline</a>
				</div>
				
			</div>
	</div>
	<div class="navbar">
			<ul>
				<li class="s1"><img src="pics/obamasmall.jpg"></li>
				<li class="s2"><img src="pics/romneysmall.jpg"></li>
				<li class="s3"><img src="pics/newt1small.jpg"></li>
				<li class="s4"><img src="pics/floridasmall.jpg"></li>
				<li class="s5"><img src="pics/pentagonsmall.jpg"></li>
			</ul>
	</div>
	</div>
	</body
</html>