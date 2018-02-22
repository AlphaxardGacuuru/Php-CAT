<!DOCTYPE html>
<html>
<head>
	<title>HAVI High School Welcome</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="keywords" value="Grade,Mathematics,English">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="background-color: #808080;">
	<nav class="navbar navbar-inverse navbar-static-top navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<span style="color: white; font-family: agency fb; font-size: 25px">HAVI High School</span>
			</div>
			<ul class="nav navbar-nav" style="padding-left: 300px;">
				<li><a href="CAT_welcome.php"><span style="float: left; padding-right: 20px;" class="glyphicon glyphicon-home"></span>Home</a></li>
				<li><a href="Charts.html"><span style="float: left; padding-right: 20px;" class="glyphicon glyphicon-stats"></span>Grade Calculator</a></li>
				<li><a href="#"><span style="float: left; padding-right: 20px;" class="glyphicon glyphicon-globe"></span>About Us</a></li>
				<li><a href="#">Contact us</a></li>
			</ul>
			<a href="index_CAT.php" style="float: right; padding-top: 0.8%;"><button class="btn btn-sm btn-danger">Sign out</button></a>
		</div>
	</nav>
	<br>
	<br>
	<h1 style="color: white; text-align: center;">Welcome to HAVI High School</h1>
	<br>
	<div class="well well-lg row">
		<div class="col-sm-4">
			<h1  style="text-align: center;">Vision</h1>
			<p style="text-align: center;">A nation with the best education system in the world</p>
			<img src="air_show-1920x1080.jpg" width="100%;">
		</div>
		<div class="col-sm-4">
			<h1  style="text-align: center;">Mision</h1>
			<p style="text-align: center;">To be the world leader in Education</p>
			<img src="aviation_in_france-1920x1080.jpg" width="100%";>
		</div>
		<div class="col-sm-4">
			<h1  style="text-align: center;">Motto</h1>
			<p style="text-align: center;">Smart Learning</p>
			<img src="macross_fighter-1920x1080.jpg" width="100%;">
		</div>
	</div>
	<fieldset style="text-align: center;padding-top: 10%; padding-bottom: 10%; width: 100%; height: 80%;">
		<form action="" method="">
			<div class="form-group row">
				<div class="col-sm-4">
					<h4>Mathematics </h4><input type="number" class="form-control" name="Mathematics" placeholder="enter grade">
				</div>
				<div class="col-sm-4">
					<h4>English </h4><input type="number" class="form-control" name="English" placeholder="enter grade">
				</div>
				<div class="col-sm-4">
					<h4>Kiswahili </h4><input type="number" class="form-control" name="Kiswahili" placeholder="enter grade">
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-4">
					<h4>Biology </h4><input type="number" class="form-control" name="Biology" placeholder="enter grade">
				</div>

				<div class="col-sm-4">
					<h4>Chemistry </h4><input type="number" class="form-control" name="Chemistry" placeholder="enter grade">
				</div>
				<div class="col-sm-4">
					<h4>Physics </h4><input type="number" class="form-control" name="Physics" placeholder="enter grade">
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-4">
					<h4>History </h4><input type="number" class="form-control" name="History" placeholder="enter grade">
				</div>
				<div class="col-sm-4">
					<h4>Geography </h4><input type="number" class="form-control" name="Geography" placeholder="enter grade">
				</div>
				<div class="col-sm-4">
					<h4>Business </h4><input type="number" class="form-control" name="Business" placeholder="enter grade">
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-4">
					<h4>CRE </h4><input type="number" class="form-control" name="CRE" placeholder="enter grade">
				</div>
				<div class="col-sm-4">
					<h4>Agriculture </h4><input type="number" class="form-control" name="Agriculture" placeholder="enter grade">
				</div>
				<div class="col-sm-4">
					<h4>French </h4><input type="number" class="form-control" name="French" placeholder="enter grade">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<button type="submit" class="btn btn-sm btn-danger">Reset &rtrif;</button>
					<a href="#" style="padding-left: 10px">need help?</a>
					<br>
					<br>
					<button type="submit" class="btn btn-sm btn-success">Calculate &rtrif;</button>
				</div>
			</div>
			<?php
			?>
			<?php
			$one=($_GET["Mathematics"]);
			$two=($_GET["English"]);
			$three=($_GET["Kiswahili"]);
			$four=($_GET["Biology"]);
			$five=($_GET["Chemistry"]);
			$six=($_GET["Physics"]);
			$seven=($_GET["History"]);
			$eight=($_GET["Geography"]);
			$nine=($_GET["Business"]);
			$ten=($_GET["CRE"]);
			$eleven=($_GET["Agriculture"]);
			$twelve=($_GET["French"]);
			$thirteen=$one+$two+$three+$four+$five+$six+$seven+$eight+$nine+$ten+$eleven+$twelve;
			$grade=$thirteen /12;
			echo "<b>Your Marks are ";
			echo $thirteen;
			echo " which means your Grade is ";
			echo "<h3>";
			if ($grade<40) {
		# code...
				echo " F";
			}
			elseif ($grade<50) {
		# code...
				echo " E";
			}
			elseif ($grade<60) {
		# code...
				echo " D";
			}
			elseif ($grade<70) {
		# code...
				echo " C";
			}
			elseif ($grade<80) {
		# code...
				echo " B";
			}
			else {echo " A";}
			echo "</h3>";
			echo "</b>";

			?>
		</form>
	</fieldset>
	<div class="well well-lg">
		<h1  style="text-align: center;">About Us</h1>
		<h3 style="text-align: center;">We are an Epic School</h3>
		<p>HAVI High School originally registered a YouTube account under the name "Pewdie"; he explains that "pew" represents the sound of lasers and "die" means death. After forgetting the password to this account, he then registered the "PewDiePie" YouTube channel on 29 April 2010. After he dropped out of Chalmers, his parents refused to support him, and as a result he funded his early videos by selling prints of his Photoshop art, as well as working at a hot dog stand. On having to work at the stand, PewDiePie stated, "the fact that I could make videos was so much more important to me than [that] I had to spend a few hours a day doing a job that wasn't that prestigious." Five years later, PewDiePie recalled, "I knew people were big at other types of videos, but there was no one big in gaming, and I didn't know you could make money out of it. It was never like a career that I could just quit college to pursue. It was just something I loved to do. And here we are five years later and it's exploded." By December 2011, PewDiePie's channel had around 60,000 subscribers. Around the time his channel earned 700,000 subscribers, PewDiePie spoke at Nonick Conference 2012. On 11 July 2012, the channel reached 1 million subscribers,and it reached 2 million subscribers in September.[19] In October, OpenSlate ranked the PewDiePie channel as the No. 1 YouTube channel. That December, PewDiePie signed with Maker Studios.

Early in his YouTube career, PewDiePie used rape jokes in his videos. Criticism of these jokes stirred controversy, and in October 2012, he addressed the issue through a Tumblr post, writing, "I just wanted to make clear that I'm no longer making rape jokes, as I mentioned before I'm not looking to hurt anyone and I apologise if it ever did." The Globe and Mail stated "unlike many young gamers, he listened when fans and critics alike pointed out their harmful nature, and resolved to stop making rape jokes."</p>
		<img src="slider7.jpg" width="100%;">
	</div>
	<div class="well well-lg">
		<h1  style="text-align: center;">Contact Us</h1>
		<table id="tabletwo">
	<tr>
		<th colspan="2">Grade School</th>
		<th colspan="2">Junior School</th>
		<th colspan="2">Senior School</th>
	</tr>
	<tr>
		<td colspan="2">Responses to the School content are mixed; Anthony Taormina of Game Rant writes "It's no secret that as his popularity continues to grow, PewDiePie has become an increasingly divisive figure. While some love the YouTuber for the entertainment he provides, others see PewDiePie as the singular representation of our gameplay commentary obsessed culture."Chris Reed of The Wall St. Cheat Sheet commented on the divisive opinions about PewDiePie, stating, "PewDiePie is not universally adored  the great divide in opinion on PewDiePie seems to be largely generational. Older people are less likely to subscribe to YouTube channels, or to pay much credence to YouTube personalities in general. Many younger viewers, on the other hand, see him as endlessly entertaining and relatable."</td>
		<td colspan="2">We offer content; Anthony Taormina of Game Rant writes "It's no secret that as his popularity continues to grow, PewDiePie has become an increasingly divisive figure. While some love the YouTuber for the entertainment he provides, others see PewDiePie as the singular representation of our gameplay commentary obsessed culture." Chris Reed of The Wall St. Cheat Sheet commented on the divisive opinions about PewDiePie, stating, "PewDiePie is not universally adored  the great divide in opinion on PewDiePie seems to be largely generational. Older people are less likely to subscribe to YouTube channels, or to pay much credence to YouTube personalities in general. Many younger viewers, on the other hand, see him as endlessly entertaining and relatable."</td>
		<td colspan="2">Anthony Taormina of Game Rant writes "It's no secret that as his popularity continues to grow, PewDiePie has become an increasingly divisive figure. While some love the YouTuber for the entertainment he provides, others see PewDiePie as the singular representation of our gameplay commentary obsessed culture." Chris Reed of The Wall St. Cheat Sheet commented on the divisive opinions about PewDiePie, stating, "PewDiePie is not universally adored the great divide in opinion on PewDiePie seems to be largely generational. Older people are less likely to subscribe to YouTube channels, or to pay much credence to YouTube personalities in general. Many younger viewers, on the other hand, see him as endlessly entertaining and relatable."</td>
	</tr>
	<tr>
		<td><img src="facebook-logo-with-rounded-corners_318-9850.jpg" width="40px"></td>
		<td><a href="https://www.facebook.com/">like us</td>
		<td><img src="23931.svg" width="40px"></td>
		<td></a>
		<a href="https://www.twitter.com/">follow us</td>
		<td><img src="512px-Instagram_simple_icon.svg.png" width="40px"></td>
		<td><a href="https://www.instagram.com">like us</td>
	</tr>
</table>
	</div>
	
</body>
</html>