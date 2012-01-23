<html>
	<head>
		<link rel="stylesheet" type="text/css" href="slider.css" />
		<script src="jquery-1.7.1.min.js"></script>
		<script type="text/javascript">
			var cname = 's1'
			$(document).ready(function(){
				$(".navbar li").hover(function(){
					$(".navbar ."+cname+" img").css("border","none");
					$("#sb"+cname.charAt(1)).hide();
					cname = this.className;
					$(".navbar ."+cname+" img").css("border","solid red");
					$("."+cname).show();
				});
			});
		</script>
	</head>
	<body>
		<div class="main">
			<div class="s1" id="sb1">
				<a href="http://www.ign.com/videos/2012/01/18/1up-max-payne-3-embargo-gameplay-video-2">
					<img src="pics/mp3.jpg"/>
				</a>
			</div>
			<div class="s2" id="sb2">
				<a href="http://www.ign.com/wikis/best-of-2011/Overall">
					<img src="pics/goty.jpg"/>
				</a>
			</div>
			<div class="s3" id="sb3">
				<a href="http://ps3.ign.com/articles/121/1216709p1.html">
					<img src="pics/re6.jpg"/>
				</a>
			</div>
		</div>
		<div class="navbar">
			<ul>
				<li class="s1"><img src="pics/mp3small.jpg"></li>
				<li class="s2"><img src="pics/gotysmall.jpg"></li>
				<li class="s3"><img src="pics/re6small.jpg"></li>
			</ul>
		</div>
	</body>
</html>