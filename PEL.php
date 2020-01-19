<?php
session_start();
if(!isset($_SESSION['userid'])) {
    die('You have to be logged in to access this area. Go to <a href="login.php">login</a>');
}
 
//Abfrage der Nutzer ID vom Login
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];
$rank = $_SESSION['rank'];
$PP = $_SESSION['PP'];




?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initinal-scale=1">
<title>PEL</title>
<link rel="icon" href="images/logo.png">
<link href="stylesheet.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Orbitron|Oswald" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
</script>
<style>
a:link#link {
color: #BA73D2;
}

a:visited#link{
	color:#BA73D2;
}

a.top-black-link:link{
text-decoration:none;
color:#D3C16B;
}

a.top-black-link:visited{
text-decoration:none;
color:#D3C16B;
}

a.top-black-link:link:hover{
text-decoration:underline;
}

.ui{
	margin-left:15px;
	margin-right:15px;
	margin-bottom: 60px;
	border:2px solid white;
	border-radius:15px;
	width:250px;
	max-width:100%;
}
#pelcurrent{
	font-size:20px;
}

#pelcurrent{
	text-align:left;
}

h1{
	font-size:30px;
}

h2{
	text-decoration:none;
	text-align:left;
}

button{
	text-decoration: none;
}
button:hover{
	background-color:#616161;
}

tr.matchsummary:hover{
	background: linear-gradient(#05486A 50%, #032536 50%);
}

tr.matchsummary{	
}
tr.matchsummary:hover{
}

td.matchsummary_links{
	background: linear-gradient(#05486A 50%, #032536 50%);
}

td.matchsummary_rechts{
	background: linear-gradient(#6a0505 50%, #360303 50%);
}
td.matchsummary_mitte{
	background:url('images/matches/leer.png');
	padding-left:85px;
	padding-right:85px;
	background-color:#2c3137;
	font-size:17px;
}
img.strich{
	z-index:0;position:absolute;padding-top:10px;padding-left:12px;
}


.gruppe{
	border-collapse: collapse;
    width: 100%;
	margin-left:auto;
	margin-right:auto;
	font-size:20px;
}

thead tr{
	border-bottom:1px solid white;
	background: linear-gradient(#616161 50%, #404040 50%);
}

tbody tr{
	background: linear-gradient(#05486A 50%, #032536 50%);
}

tr.clash{
	background:url('images/matches/leer.png');
}

tr.clash:hover{
	background:url('images/matches/leer.png');
	background-color:#05486A;
}

tbody tr:hover{
	background: linear-gradient(#616161 50%, #404040 50%);
}

td{
	text-align:center;
}

td.price{
	border: solid 1px white;
	border-radius: 15px;
	height:200px;
}

th{
	text-align:center;
	padding-left:20px;
	padding-right:20px;
}

table.match{
	width:100%;
}

td.score{
	font-size:30px;
	padding-left:32px;
	padding-right:32px;
}

#platzhalter2{
	margin-bottom:300px;
}

details[open]
{
    height: 285px;
	background-color: #2c3137;
}

details:not([open])
{
    height: 80px;
	background-color:#2c3137;
}

details.detailhistory{
	transition: max-height 0.7s ease;
    overflow: hidden;
}

details[open].detailhistory
{
    height: auto;
	max-height:1000px;
}

.detailhistory.collapsed{
	max-height: 0;
}


details:not([open]).detailhistory
{
    height: 0px;
}

details:not([open]).month
{
    height: 180px;
	background-color: #2c3137;
}

details[open].month
{
    height: 1110px;
	background-color: #2c3137;
}

.tooltip:hover .tooltiptext {
width:300px;
}

button.showhistory{
	-webkit-appearance: none;
	background: url(images/point-button.png);
	background-repeat: no-repeat;
	background-size: 40px 40px;
	width: 41px;
	height: 41px;
}
input[type=text]
{
	margin-left:10px;
	width:300px;
}

input[type=number]
{
	margin-left:10px;
	width:70px;
}

input[type=submit]
{
	margin-left:50px;
	width:220px;
	height:50px;
}

.signup{
	margin-left:10px;
}

p#demo{
	font-size: 35px;
}
input[type=submit]{
    border: 2px solid transparent;
	border-image: linear-gradient(to top right, #33ccff 0%, #66ffff 100%);
	border-image-slice: 1;
    border-radius: 4px;
	background-color: black;
    color: white;
	font-size:20px;
	font-family: arial;
	font-weight: bold;
	padding: 0px;
	-webkit-transition: 0.5s;
	transition: 0.5s;
	outline: none;
	margin-bottom:5px;
	width:90%;
	height:50px;
}

input[type=submit]:disabled{
    border: 2px solid grey;
	border-image: none;
	border-image-slice: 1;
    border-radius: 4px;
	background-color: black;
    color: grey;
	font-size:20px;
	font-family: arial;
	font-weight: bold;
	padding: 0px;
	-webkit-transition: 0.5s;
	transition: 0.5s;
	outline: none;
	margin-bottom:5px;
	width:90%;
	height:50px;
}

input[type=submit]:hover{
    background: linear-gradient(to top right, #33ccff 0%, #66ffff 100%);
}

.matchsummary_links_div{
	float:left;
	background: linear-gradient(#05486A 50%, #032536 50%);
}

.matchsummary_mitte_div{
	float:left;
	background-color: #2c3137;
	margin-left:80px;
	margin-right:80px;
	font-size: 19px;
	width:240px;
	height:63px;
}

.matchsummary_rechts_div{
	float:left;
	background:linear-gradient(#6a0505 50%, #360303 50%);
}


@media (max-width: 960px)
{
	.gruppe{
	border-collapse: collapse;
    width: 100%;
	margin-left:auto;
	margin-right:auto;
	font-size:15px;
	}
	
	.ui{
	margin-left:15px;
	margin-right:15px;
	margin-bottom: 60px;
	border:2px solid white;
	border-radius:15px;
	width:150px;
	max-width:100%;
	}
	
	th{
	text-align:center;
	padding-left:0px;
	padding-right:0px;
	}
	
	button.showhistory{
	-webkit-appearance: none;
	background: url(images/point-button.png);
	background-repeat: no-repeat;
	background-size: 30px 30px;
	width: 31px;
	height: 31px;
	}
	td.score{
	font-size:20px;
	padding-left:0px;
	padding-right:0px;
	}
	tr.clash img{
		max-width:100%;
	}
	td.matchsummary_mitte{
		font-size:15px;
		padding-left:10px;
		padding-right:10px;
	}
	
	.matchsummary_mitte_div{
	float:none;
	background-color: #2c3137;
	width:100%;
	margin-left:0px;
	margin-right:0px;
	font-size: 19px;
	}
	
	.matchsummary_links_div{
	float:none;
	margin-left:0 auto;
	margin-right:0 auto;
	}

.matchsummary_rechts_div{
	float:none;
	margin-left:0 auto;
	margin-right:0 auto;
	}
	
	.top-block{
		font-size: 15px;
		height: 105px;
	}
	
}
@media (max-width: 768px)
{
	input[type=submit]{
		margin-left:40px;
	}
}
@media (max-width: 425px)
{
	input[type=submit]{
		margin-left:20px;
	}
}
</style>
</head>
<body>
<div id="navbar">
<ul>
	<li class="dropdown">
		<a href="index.php" class="dropbtn">Home</a>
	</li>
	<li class="dropdown">
		<a href="PEL.php" class="dropbtn">PEL</a>
		<div class="dropdown-content">
			<a href="PEL.php">Prime Entertainment League. Battle monthly for shiny prices and Prime Points.</a>
		</div>
	</li>
	<li class="dropdown">
		<a href="Battle-Area.php" class="dropbtn">Gym Battles</a>
		<div class="dropdown-content">
			<a href="Battle-Area.php">Here you can Battle Gym Leaders and Elite Four Members<br>
										(inspired by the real game data).<br>Earn badges and qualify for the Prime League.</a>
		</div>
	</li>
	<li class="dropdown">
		<a href="league-off.php" class="dropbtn">Prime League</a>
		<div class="dropdown-content">
			<a href="league-off.php">Those who own all eight Stage 2 Badges<br>are able to participate in the Prime League <br>
						to become the Prime League Champion.</a>
		</div>
	</li>
	<li class="dropdown">
		<a href="database.php" class="dropbtn">Trainer Database</a>
		<div class="dropdown-content">
			<a href="database.php">Here you can find all Trainers<br>who are registered in the Prime League<br>and everything we've seen from them so far.</a>
		</div>
	</li>
	<li class="dropdown" style="padding-left:50px;">
		<a href="logout.php" class="logoutbtn">Logout</a>
	</li>
	<li class="dropdown" style="position:absolute;padding-left:10px;">
		<a href="profil.php" class="profilbtn"><b><?php echo $username?></b><br><font size="2"><font id="rank"><?php echo $rank ?></font> <?php echo $PP?>PP</font></a>
	</li>
	
</ul>
</div>

	<div id="mobile-nav">
		<a href="index.php" class="topbar" style="padding: 2px 4px; background: rgba(220,160,140,0.0);">
			<img src="images/Prime-Music-Logo-white-format.png" height="50" width="50">
		</a>
		
		<a href="javascript:void(0);" class="icon" style="float:right" onclick="showmobile()">
			<i class="fa fa-bars"></i>
		</a>
		<a href="logout.php" style="float:right;" class="logoutbtn">Logout</a>
		<a href="profil.php" style="float:right;padding-bottom:2px;padding-top:2px;margin-right:10px;" class="profilbtn"><b><?php echo $username . " "?></b><font size="2"><?php echo $PP?>PP<br><font id="ranking"><?php echo $rank ?></font> </font></a>
		<div id="Links">
			<a href="index.php" class="dropbtn">Home</a>
			<a href="PEL.php" class="dropbtn">PEL</a>
			<a href="Battle-Area.php" class="dropbtn">Gym Battles</a>
			<a href="league-off.php" class="dropbtn">Prime League</a>
			<a href="database.php" class="dropbtn">Trainer Database</a>
			</li>
		</div>
	</div>
	
	<script>
	function showmobile(){
		var x = document.getElementById("Links");
		if(x.style.display === "block"){
			x.style.display = "none";
		} else{
			x.style.display = "block";
		}
	}
	</script>

<div id="platzhalter"></div>

<div id="body-content">
	<h1>PEL: Prime Entertainment League</h1>
	<br>
	<img src="images/Banner-PEL.png" alt="PEL Banner" style="width:920px; max-width:100%;"><br><br>
<script>

	function showpart(event){
		var bild = event.target.id;
		var part = document.getElementById("pel"+bild);
		if(part.style.display == 'none'){
			document.getElementById("pelcurrent").style.display = 'none';
			document.getElementById("pelgeneral").style.display = 'none';
			document.getElementById("pelrules").style.display = 'none';
			part.style.display = '';
		}
	}

	function showmonth(event){
		var month = event.target.className;
    var open = document.getElementById(month);
    if(open.style.display == 'none')
   		open.style.display = '';
    else
    	open.style.display = 'none';
	}
</script>
<div>
		<center>
		<img class="ui" id="general" onClick="showpart(event)" src="images/PEL-general.png" alt="PEL-general">
		<img class="ui" id="current" onClick="showpart(event)" src="images/PEL-current.png" alt="PEL-current">
		<img class="ui" id="rules" onClick="showpart(event)" src="images/PEL-rules.png" alt="PEL-rules"><br>
		</center>
	<div id="pelgeneral" style="display:;">
	
		
		<center><p id="demo"></p></center><br>
		
		<center>		
		<div class="signup">
		<h1>Sign Up for the PEL September &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 29th September, 8 pm(CET)</h1><br><br><br>
			<form method="post" action="schicken.php">
				<input type="checkbox" id="checkbox" name="checkbox" onChange="CheckFunction()"> I want to participate and I've read the <a href="#" onClick="showrules()" style="color:red;text-decoration:underline;">PEL Rules</a> and I accept them.<br>
				<br>
				<input id="sendButton" type="submit" value="Participate">
			</form><br>
			</center><br>

		<!-- </div> keine Ahnung was hier geht-->
		
		<b>Welcome to the PEL, the new format on this website.</b>
		<br><br>
		<h3>What is the PEL?</h3>
			The PEL is a format where you can battle monthly against other trainers to earn prices. You can also get <a id="link" href="content2.php">Prime Points</a> 
			to improve your status on this website.<br>
			The Battles will take place in the Pok&eacute;mon Games: Pok&eacute;mon Ultrasun and Pok&eacute;mon Ultramoon.<br><br>
		
		<h3>What kind of system does the PEL use?</h3>
			In the PEL you get placed in a group of minimum 3 and maximum 8 people. The groups then compete in a <div class="tooltip">single round robin<span class="tooltiptext">Everybody fights against everybody</span></div>
			schedule where the trainers prove who is the best. <br> Your rank in the group depends on your overall wins and on your <div class="tooltip">Pok&eacute;mon Difference<span class="tooltiptext">Gets determined by how many Pok&eacute;mons you or your opponent had left after the battle.</span></div>.<br>
			The PEL begins on Monday and ends on Sunday. During this week all battles have to be done.<br><br>
			
		<h3>What prices can you win?</h3>
			Most likely the first place of every group will get a <font color="#fff386">competitive Shiny Pok&eacute;mon</font> and the secound place will get the normal version of that Pok&eacute;mon.<br>
			Place 3 to 8 gets the pre-evolution of the Pok&eacute;mon at lvl 1 but with good stats.<br>
			Furthermore you'll get or lose Prime Points depending on your placement and the amount of trainers in your group.<br>
			<a id="link" href="content3.php">Here you can find a table.</a><br><br>
			
		<h3>How to participate:</h3>
			The only things you need to participate are: a 3DS, Pok&eacute;mon Ultrasun or Pok&eacute;mon Ultramoon, minimum 6 Pok&eacute;mon and an account on this website.<br><br>
			<script>
			// Set the date we're counting down to
			var countDownDate = new Date("September 29, 2019 15:00:00").getTime();

			// Update the count down every 1 second
			var x = setInterval(function() {

			  // Get todays date and time
			  var now = new Date().getTime();

			  // Find the distance between now and the count down date
			  var distance = countDownDate - now;

			  // Time calculations for days, hours, minutes and seconds
			  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
			  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
			  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

			  // Display the result in the element with id="demo"
			  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
			  + minutes + "m " + seconds + "s ";

			  // If the count down is finished, write some text
			  if (distance < 0) {
				clearInterval(x);
				document.getElementById("demo").innerHTML = "PEL started";
			  }
			}, 1000);
			</script>
		</div>
		
	<div id="pelcurrent" style="display:none;">
	
	<div class="top-banner">
		<img onClick="showmonth(event)" class="September" src="images/top-banner-september.png" width="100%">
		</div>	
		<div id="September" style="display:; padding-bottom:30px;">
		
		<div class="back-current-PEL">
			<!--
				 <div class="matches-top-info">
					<div class="top-block">
					28 June 2019 - 20:30<br>
					<a class="top-black-link" href="database.php#LovelyTheFirst">LovelyTheFirst</a><br>
					-v- <br>
					<a class="top-black-link" href="database.php#eviLDiabolus">eviLDiabolus</a>
					</div>
					<div class="top-block">
					28 June 2019 - 21:00<br>
					<a class="top-black-link" href="database.php#eviLDiabolus">eviLDiabolus</a><br>
					-v- <br>
					<a class="top-black-link" href="database.php#Prof.Eich">Prof.Eich</a>
					</div>
					<div class="top-block">
					28 June 2019 - 21:30<br>
					<a class="top-black-link" href="database.php#Prof.Eich">Prof.Eich</a><br>
					-v- <br>
					<a class="top-black-link" href="database.php#LovelyTheFirst">LovelyTheFirst</a>
					</div>
				</div> 
			-->
			<?php 
				$pdo = new PDO('mysql:host=localhost;dbname=prime_users', 'prime_prime', 'l1e45ac37yt');
				$sql = "SELECT * from pel order by platz asc";
				echo "<center>Group A</center>";
				echo "<table class='gruppe'>";
				echo "<thead>";
				echo "<tr>";
				echo "<th>Place</th>";
				echo "<th>Trainer</th>";
				echo "<th>Wins</th>";
				echo "<th>Loses</th>";
				echo "<th>Draws</th>";
				echo "<th>Difference</th>";
				echo "<th>PP</th>";
				echo "</tr>";
				echo "</thead>";
				echo "<tbody>";
				$i = 1;
				foreach ($pdo->query($sql) as $row) {
					echo "<tr>";
					echo "<td>".$row['platz']."</td>";
					echo "<td>".$row['username']."</td>";
					echo "<td>".$row['wins']."</td>";
					echo "<td>".$row['loses']."</td>";
					echo "<td>".$row['draws']."</td>";
					echo "<td>".$row['difference']."</td>";
					echo "<td>".$row['PP']."</td>";
					//echo "<td style='display:;'><div class='history-content'><section class='history",$i,"'><button class='showhistory'></button></section></div></td>";
					echo "</tr>";
					$i++;
				}
				
				echo "</tbody>";
				echo "</table>";
			?>
			</tbody>
			</table>
			
		<br>
		<!--
		<details class="detailhistory" id="history1">
			<summary></summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/1-links.png" alt="match1" class="center"></td><td class="score">5</td><td class="score">vs</td><td class="score">0</td><td><img src="images/matches/4-rechts.png" alt="match1" class="center"></td></tr></table>
			<table class="match"><tr class="clash"><td><img src="images/matches/1-links.png" alt="match1" class="center"></td><td class="score">3</td><td class="score">vs</td><td class="score">0</td><td><img src="images/matches/6-rechts.png" alt="match1" class="center"></td></tr></table>
			</details>
		<details class="detailhistory" id="history2">
			<summary></summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/4-links.png" alt="match1" class="center"></td><td class="score">0</td><td class="score">vs</td><td class="score">5</td><td><img src="images/matches/1-rechts.png" alt="match1" class="center"></td></tr></table>
			<table class="match"><tr class="clash"><td><img src="images/matches/4-links.png" alt="match1" class="center"></td><td class="score">4</td><td class="score">vs</td><td class="score">0</td><td><img src="images/matches/6-rechts.png" alt="match1" class="center"></td></tr></table>
		</details>
		<details class="detailhistory" id="history3">
			<summary></summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/6-links.png" alt="match1" class="center"></td><td class="score">0</td><td class="score">vs</td><td class="score">3</td><td><img src="images/matches/1-rechts.png" alt="match1" class="center"></td></tr></table>
			<table class="match"><tr class="clash"><td><img src="images/matches/6-links.png" alt="match1" class="center"></td><td class="score">0</td><td class="score">vs</td><td class="score">4</td><td><img src="images/matches/4-rechts.png" alt="match1" class="center"></td></tr></table>
		</details>
		-->
		
		<br>
		
		
		
		<br>
		<!--
		<center>(Click on your match to report your score)</center>
		
		<details class="matchup">
			<summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/1-links.png" alt="match1" class="center"></td><td class="score">5</td><td class="score">vs</td><td class="score">0</td><td><img src="images/matches/4-rechts.png" alt="match1" class="center"></td></tr></table></summary>
				<div style="margin-top:10px"></div>
				<center>
				-->
				<!--
				<div class="matchsummary_links_div">
					LovelyTheFirst:<br>
						<img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-garchomp.png"><img src="images/smallsprites/small-kartana.png"><img src="images/smallsprites/small-swampert.png"><img src="images/smallsprites/small-yveltal.png"><img src="images/smallsprites/small-metagross.png"><img src="images/smallsprites/small-sylveon.png">
				</div>
				<div class="matchsummary_mitte_div">
					Video-Code: 93KG-WWWW-WWXA-BLXP
				</div>
				<div class="matchsummary_rechts_div">
					eviLDiabolus:<br>
						<img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-aegislash.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-ferrothorn.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-toxapex.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-lucario.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-tapu-koko.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-rhyperior.png">
				</div>
			-->
				<?php 
			//		if ($username == "Prime" || $username == "TestUser"){
			//			echo "<form method='post' action='videocode.php'>";
			//			echo "<div class='tooltip'><img src='images/help.png' alt='tip' height='20' width='20'>";
			//			echo "<span class='tooltiptext'>Enter the score of your match. Details in the rules.</span></div>";
			//			echo "&nbsp;Score:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type='number' name='p1' id='p1' min='0' max='6' placeholder='0' /><input type='number' name='p2' id='p2' min='0' max='6' placeholder='0' /><br>";
						
			//			echo "<input type='text' style='display:none;' name='matchid' value='1' id='input-matchid' />";

			//			echo "<div class='tooltip'><img src='images/help.png' alt='tip' height='20' width='20'>";
			//			echo "<span class='tooltiptext'>Enter the Video Code of your match<br>(XXXX-XXXX-XXXX-XXXX) <a id='link' href='https://www.youtube.com/watch?v=rrMLxGJDnzQ'>Tutorial</a>.</span></div>";
			//			echo "&nbsp;Video Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type='text' name='video' id='video1' maxlength='19' placeholder='Enter Video Code' /><br>";
			//			echo "<input type='submit' value='Sumbit Score'>";
			//		}

				?>
			<!--	</center>
				
		</details> -->
		<!--
		<details class="matchup">
			<summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/4-links.png" alt="match1" class="center"></td><td class="score">4</td><td class="score">vs</td><td class="score">0</td><td><img src="images/matches/6-rechts.png" alt="match1" class="center"></td></tr></table></summary>
				<div style="margin-top:10px"></div>
				<center>
				
				<div class="matchsummary_links_div">
					eviLDiabolus:<br>
						<img src="images/smallsprites/small-rhyperior.png"><img src="images/smallsprites/small-milotic.png"><img src="images/smallsprites/small-metagross.png"><img src="images/smallsprites/small-gyarados.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-ferrothorn.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-blaziken.png">
				</div>
				<div class="matchsummary_mitte_div">
					Video-Code: RQ5G-WWWW-WWXA-BM3D
				</div>
				<div class="matchsummary_rechts_div">
					Prof.Eich:<br>
						<img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-salamence.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-swampert.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-virizion.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-blacephalon.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-nidoking.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-incineroar.png">
				</div>
				-->
				<!--
				<?php 
			//		if ($username == "Prime" || $username == "TestUser"){
			//			echo "<form method='post' action='videocode.php'>";
			//			echo "<div class='tooltip'><img src='images/help.png' alt='tip' height='20' width='20'>";
			//			echo "<span class='tooltiptext'>Enter the score of your match. Details in the rules.</span></div>";
			//			echo "&nbsp;Score:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type='number' name='p1' id='p1' min='0' max='6' placeholder='0' /><input type='number' name='p2' id='p2' min='0' max='6' placeholder='0' /><br>";
						
			//			echo "<input type='text' style='display:none;' name='matchid' value='1' id='input-matchid' />";

			//			echo "<div class='tooltip'><img src='images/help.png' alt='tip' height='20' width='20'>";
			//			echo "<span class='tooltiptext'>Enter the Video Code of your match<br>(XXXX-XXXX-XXXX-XXXX) <a id='link' href='https://www.youtube.com/watch?v=rrMLxGJDnzQ'>Tutorial</a>.</span></div>";
			//			echo "&nbsp;Video Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type='text' name='video' id='video1' maxlength='19' placeholder='Enter Video Code' /><br>";
			//			echo "<input type='submit' value='Sumbit Score'>";
			//		}

				?>
				</center>
				
		</details> -->
		<!--
		<details class="matchup">
			<summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/6-links.png" alt="match1" class="center"></td><td class="score">0</td><td class="score">vs</td><td class="score">3</td><td><img src="images/matches/1-rechts.png" alt="match1" class="center"></td></tr></table></summary>
				<div style="margin-top:10px"></div>
				<center>
				
				<div class="matchsummary_links_div">
					Prof. Eich:<br>
						<img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-salamence.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-virizion.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-magnezone.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-swampert.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-gallade.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-blacephalon.png">
				</div>
				<div class="matchsummary_mitte_div">
					Video-Code:XZLG-WWWW-WWXA-BM93
				</div>
				<div class="matchsummary_rechts_div">
					LovelyTheFirst:<br>
						<img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-garchomp.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-kartana.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-swampert.png"><img src="images/smallsprites/small-yveltal.png"><img src="images/smallsprites/small-metagross.png"><img src="images/smallsprites/small-sylveon.png">
				</div>
				-->
				<?php 
			//		if ($username == "Prime" || $username == "TestUser"){
			//			echo "<form method='post' action='videocode.php'>";
			//			echo "<div class='tooltip'><img src='images/help.png' alt='tip' height='20' width='20'>";
			//			echo "<span class='tooltiptext'>Enter the score of your match. Details in the rules.</span></div>";
			//			echo "&nbsp;Score:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type='number' name='p1' id='p1' min='0' max='6' placeholder='0' /><input type='number' name='p2' id='p2' min='0' max='6' placeholder='0' /><br>";
						
			//			echo "<input type='text' style='display:none;' name='matchid' value='1' id='input-matchid' />";

			//			echo "<div class='tooltip'><img src='images/help.png' alt='tip' height='20' width='20'>";
			//			echo "<span class='tooltiptext'>Enter the Video Code of your match<br>(XXXX-XXXX-XXXX-XXXX) <a id='link' href='https://www.youtube.com/watch?v=rrMLxGJDnzQ'>Tutorial</a>.</span></div>";
			//			echo "&nbsp;Video Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type='text' name='video' id='video1' maxlength='19' placeholder='Enter Video Code' /><br>";
			//			echo "<input type='submit' value='Sumbit Score'>";
			//		}
				?>
				<!--
				</center>
		</details>
		-->
		<br>
	</div>
	</div>
	
	<div class="top-banner">
		<img onClick="showmonth(event)" class="August" src="images/top-banner-august.png" width="100%">
		</div>	
		<div id="August" style="display:none; padding-bottom:30px;">
		
		<div class="back-current-PEL">
			
				 <div class="matches-top-info">
					<div class="top-block">
					01 September 2019 - 20:30<br>
					<a class="top-black-link" href="database.php#LovelyTheFirst">LovelyTheFirst</a><br>
					5 v 0 <br>
					<a class="top-black-link" href="database.php#eviLDiabolus">eviLDiabolus</a>
					</div>
					<div class="top-block">
					01 September 2019 - 21:00<br>
					<a class="top-black-link" href="database.php#eviLDiabolus">eviLDiabolus</a><br>
					4 v 0 <br>
					<a class="top-black-link" href="database.php#Prof.Eich">Prof.Eich</a>
					</div>
					<div class="top-block">
					01 September 2019 - 21:30<br>
					<a class="top-black-link" href="database.php#Prof.Eich">Prof.Eich</a><br>
					0 v 3 <br>
					<a class="top-black-link" href="database.php#LovelyTheFirst">LovelyTheFirst</a>
					</div>
				</div> 

			<center>Group A</center>
			<table class="gruppe">
			<thead>
				<tr>
					<th>Place</th>
					<th>Trainer</th>
					<th>Wins</th>
					<th>Loses</th>
					<th>Draws</th>
					<th>Difference</th>
					<th>PP</th>
					
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>LovelyTheFirst</td>
					<td>2</td>
					<td>0</td>
					<td>0</td>
					<td>+8</td>
					<td>1174</td>
					<td style="display:;">
						<div class="history-content">
						<section class="history1">
							<button class="showhistory"></button>
						</section>
						</div>
					</td>
				</tr>
				<tr>
					<td>2</td>
					<td>eviLDiabolus</td>
					<td>1</td>
					<td>1</td>
					<td>0</td>
					<td>-1</td>
					<td>1076</td>
					<td style="display:;">
						<div class="history-content">
						<section class="history2">
							<button class="showhistory"></button>
						</section>
						</div>
					</td>
				</tr>
				<tr>
					<td>3</td>
					<td>Prof. Eich</td>
					<td>0</td>
					<td>2</td>
					<td>0</td>
					<td>-7</td>
					<td>0</td>
					<td style="display:;">
						<div class="history-content">
						<section class="history3">
							<button class="showhistory"></button>
						</section>
						</div>
					</td>
				</tr>
			</tbody>
		</table>
		<br>
		
		<details class="detailhistory" id="history1">
			<summary></summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/1-links.png" alt="match1" class="center"></td><td class="score">5</td><td class="score">vs</td><td class="score">0</td><td><img src="images/matches/4-rechts.png" alt="match1" class="center"></td></tr></table>
			<table class="match"><tr class="clash"><td><img src="images/matches/1-links.png" alt="match1" class="center"></td><td class="score">3</td><td class="score">vs</td><td class="score">0</td><td><img src="images/matches/6-rechts.png" alt="match1" class="center"></td></tr></table>
			</details>
		<details class="detailhistory" id="history2">
			<summary></summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/4-links.png" alt="match1" class="center"></td><td class="score">0</td><td class="score">vs</td><td class="score">5</td><td><img src="images/matches/1-rechts.png" alt="match1" class="center"></td></tr></table>
			<table class="match"><tr class="clash"><td><img src="images/matches/4-links.png" alt="match1" class="center"></td><td class="score">4</td><td class="score">vs</td><td class="score">0</td><td><img src="images/matches/6-rechts.png" alt="match1" class="center"></td></tr></table>
		</details>
		<details class="detailhistory" id="history3">
			<summary></summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/6-links.png" alt="match1" class="center"></td><td class="score">0</td><td class="score">vs</td><td class="score">3</td><td><img src="images/matches/1-rechts.png" alt="match1" class="center"></td></tr></table>
			<table class="match"><tr class="clash"><td><img src="images/matches/6-links.png" alt="match1" class="center"></td><td class="score">0</td><td class="score">vs</td><td class="score">4</td><td><img src="images/matches/4-rechts.png" alt="match1" class="center"></td></tr></table>
		</details>
		
		
		<br>
		
		
		
		<br>
		
		<center>(Click on your match to upload video code)</center>
		
		
		<details class="matchup">
			<summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/1-links.png" alt="match1" class="center"></td><td class="score">5</td><td class="score">vs</td><td class="score">0</td><td><img src="images/matches/4-rechts.png" alt="match1" class="center"></td></tr></table></summary>
				<div style="margin-top:10px"></div>
				<center>
				
				<div class="matchsummary_links_div">
					LovelyTheFirst:<br>
						<img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-garchomp.png"><img src="images/smallsprites/small-kartana.png"><img src="images/smallsprites/small-swampert.png"><img src="images/smallsprites/small-yveltal.png"><img src="images/smallsprites/small-metagross.png"><img src="images/smallsprites/small-sylveon.png">
				</div>
				<div class="matchsummary_mitte_div">
					Video-Code: 93KG-WWWW-WWXA-BLXP
				</div>
				<div class="matchsummary_rechts_div">
					eviLDiabolus:<br>
						<img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-aegislash.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-ferrothorn.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-toxapex.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-lucario.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-tapu-koko.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-rhyperior.png">
				</div>
			
			<!--
				<form method="post" action="videocode.php">
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter the Video Code of your match<br>(XXXX-XXXX-XXXX-XXXX) <a id="link" href="https://www.youtube.com/watch?v=rrMLxGJDnzQ">Tutorial</a>.</span></div>
				&nbsp;Video Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="video" id="video1" placeholder="Enter Video Code" /><br>
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter your Username.</a></span></div>
				&nbsp;Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="von" id="video1" placeholder="Enter your Username" /><br>
				<input type="submit" value="Send">
				<br><font size="5" color="red">Video not received from: LovelyTheFirst, eviLDiabolus</font>
				</form>
				-->
				</center>
				
		</details>
		
		<details class="matchup">
			<summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/4-links.png" alt="match1" class="center"></td><td class="score">4</td><td class="score">vs</td><td class="score">0</td><td><img src="images/matches/6-rechts.png" alt="match1" class="center"></td></tr></table></summary>
				<div style="margin-top:10px"></div>
				<center>
				
				<div class="matchsummary_links_div">
					eviLDiabolus:<br>
						<img src="images/smallsprites/small-rhyperior.png"><img src="images/smallsprites/small-milotic.png"><img src="images/smallsprites/small-metagross.png"><img src="images/smallsprites/small-gyarados.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-ferrothorn.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-blaziken.png">
				</div>
				<div class="matchsummary_mitte_div">
					Video-Code: RQ5G-WWWW-WWXA-BM3D
				</div>
				<div class="matchsummary_rechts_div">
					Prof.Eich:<br>
						<img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-salamence.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-swampert.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-virizion.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-blacephalon.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-nidoking.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-incineroar.png">
				</div>
				
				<!--
				<form method="post" action="videocode.php">
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter the Video Code of your match<br>(XXXX-XXXX-XXXX-XXXX) <a id="link" href="https://www.youtube.com/watch?v=rrMLxGJDnzQ">Tutorial</a>.</span></div>
				&nbsp;Video Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="video" id="video1" placeholder="Enter Video Code" /><br>
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter your Username.</a></span></div>
				&nbsp;Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="von" id="video1" placeholder="Enter your Username" /><br>
				<input type="submit" value="Send">
				<br><font size="5" color="red">Video not received from: eviLDiabolus, Prof.Eich</font>
				</form>
					-->	
				</center>
				
		</details>
		
		<details class="matchup">
			<summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/6-links.png" alt="match1" class="center"></td><td class="score">0</td><td class="score">vs</td><td class="score">3</td><td><img src="images/matches/1-rechts.png" alt="match1" class="center"></td></tr></table></summary>
				<div style="margin-top:10px"></div>
				<center>
				
				<div class="matchsummary_links_div">
					Prof. Eich:<br>
						<img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-salamence.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-virizion.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-magnezone.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-swampert.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-gallade.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-blacephalon.png">
				</div>
				<div class="matchsummary_mitte_div">
					Video-Code:XZLG-WWWW-WWXA-BM93
				</div>
				<div class="matchsummary_rechts_div">
					LovelyTheFirst:<br>
						<img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-garchomp.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-kartana.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-swampert.png"><img src="images/smallsprites/small-yveltal.png"><img src="images/smallsprites/small-metagross.png"><img src="images/smallsprites/small-sylveon.png">
				</div>
				
				<!--
				<form method="post" action="videocode.php">
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter the Video Code of your match<br>(XXXX-XXXX-XXXX-XXXX) <a id="link" href="https://www.youtube.com/watch?v=rrMLxGJDnzQ">Tutorial</a>.</span></div>
				&nbsp;Video Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="video" id="video1" placeholder="Enter Video Code" /><br>
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter your Username.</a></span></div>
				&nbsp;Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="von" id="video1" placeholder="Enter your Username" /><br>
				<input type="submit" value="Send">
				<br><font size="5" color="red">Video not received from: Prof.Eich, LovelyTheFirst</font>
				</form>
				-->
				</center>
		</details>
		
		<br>
	</div>
	</div>
	
	<div class="top-banner">
	<img onClick="showmonth(event)" class="June" src="images/top-banner-june.png" width="100%">
		</div>	
		<div id="June" style="display:none; padding-bottom:30px;">
		
		<div class="back-current-PEL">
			
				 <div class="matches-top-info">
					<div class="top-block">
					28 June 2019 - 22:00<br>
					<a class="top-black-link" href="database.php#LovelyTheFirst">LovelyTheFirst</a><br>
					0 v 3 <br>
					<a class="top-black-link" href="database.php#eviLDiabolus">eviLDiabolus</a>
					</div>
					<div class="top-block">
					28 June 2019 - 22:30<br>
					<a class="top-black-link" href="database.php#Killerdogge">Killerdogge</a><br>
					0 v 4 <br>
					<a class="top-black-link" href="database.php#LovelyTheFirst">LovelyTheFirst</a>
					</div>
					<div class="top-block">
					28 June 2019 - 23:00<br>
					<a class="top-black-link" href="database.php#eviLDiabolus">eviLDiabolus</a><br>
					2 v 0 <br>
					<a class="top-black-link" href="database.php#Killerdogge">Killerdogge</a>
					</div>
				</div> 
				
			<center>Group A</center>
			<table class="gruppe">
			<thead>
				<tr>
					<th>Place</th>
					<th>Trainer</th>
					<th>Wins</th>
					<th>Loses</th>
					<th>Draws</th>
					<th>Difference</th>
					<th>PP</th>
					
				</tr>
			</thead>
			<tbody>				
				
				<tr style="display:;">
					<td>1</td>	
					<td>eviLDiabolus</td>
					<td>2</td>
					<td>0</td>
					<td>0</td>
					<td>+5</td>
					<td>1018</td>
					
					<td style="display:;">
						<div class="history-content">
						<section class="history4">
							<button class="showhistory"></button>
						</section>
						</div>
					</td>
					
				</tr>
				<tr>
					<td>2</td>	
					<td>LovelyTheFirst</td>
					<td>1</td>
					<td>1</td>
					<td>0</td>
					<td>+1</td>
					<td>1114</td>
					
					<td style="display:;">
						<div class="history-content">
						<section class="history5">
							<button class="showhistory"></button>
						</section>
						</div>
					</td>
					
				</tr>
				<tr>
					<td>3</td>	
					<td>Killerdogge</td>
					<td>0</td>
					<td>2</td>
					<td>0</td>
					<td>-6</td>
					<td>0</td>
					
					<td style="display:;">
						<div class="history-content">
						<section class="history6">
							<button class="showhistory"></button>
						</section>
						</div>
					</td>
					
				</tr>
			</tbody>
			</table>
		<br>
			
		<details class="detailhistory" id="history4">
			<summary></summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/4-links.png" alt="match1" class="center"></td><td class="score">3</td><td class="score">vs</td><td class="score">0</td><td><img src="images/matches/1-rechts.png" alt="match1" class="center"></td></tr></table>
			<table class="match"><tr class="clash"><td><img src="images/matches/4-links.png" alt="match1" class="center"></td><td class="score">2</td><td class="score">vs</td><td class="score">0</td><td><img src="images/matches/5-rechts.png" alt="match1" class="center"></td></tr></table>
			</details>
		<details class="detailhistory" id="history5">
			<summary></summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/1-links.png" alt="match1" class="center"></td><td class="score">0</td><td class="score">vs</td><td class="score">3</td><td><img src="images/matches/4-rechts.png" alt="match1" class="center"></td></tr></table>
			<table class="match"><tr class="clash"><td><img src="images/matches/1-links.png" alt="match1" class="center"></td><td class="score">4</td><td class="score">vs</td><td class="score">0</td><td><img src="images/matches/5-rechts.png" alt="match1" class="center"></td></tr></table>
		</details>
		<details class="detailhistory" id="history6">
			<summary></summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/5-links.png" alt="match1" class="center"></td><td class="score">0</td><td class="score">vs</td><td class="score">4</td><td><img src="images/matches/1-rechts.png" alt="match1" class="center"></td></tr></table>
			<table class="match"><tr class="clash"><td><img src="images/matches/5-links.png" alt="match1" class="center"></td><td class="score">0</td><td class="score">vs</td><td class="score">2</td><td><img src="images/matches/5-rechts.png" alt="match1" class="center"></td></tr></table>
		</details>
		
		
		<br>
		
		
		
		<br>
		
		<center>(Click on your match to upload video code)</center>
		
		
		<details class="matchup">
			<summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/1-links.png" alt="match1" class="center"></td><td class="score">0</td><td class="score">vs</td><td class="score">3</td><td><img src="images/matches/4-rechts.png" alt="match1" class="center"></td></tr></table></summary>
				<div style="margin-top:10px"></div>
				<center>
				
				<table class="center">
					<tr class="matchsummary">
						<td class="matchsummary_links">
							LovelyTheFirst:<br>
							<img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-metagross.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-sylveon.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-vaporeon.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-tyranitar.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-decidueye.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-charizard.png">
						</td>						
						<td class="matchsummary_mitte">
						Video-Code: SERW-WWWW-WWX8-ATRC
						</td>
						<td class="matchsummary_rechts">
							eviLDiabolus:<br>
							<img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-aegislash.png"><img src="images/smallsprites/small-ferrothorn.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-toxapex.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-golem.png"><img src="images/smallsprites/small-rhyperior.png"><img src="images/smallsprites/small-ampharos.png">
						</td>
					</tr>
				</table>
			
			<!--
				<form method="post" action="videocode.php">
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter the Video Code of your match<br>(XXXX-XXXX-XXXX-XXXX) <a id="link" href="https://www.youtube.com/watch?v=rrMLxGJDnzQ">Tutorial</a>.</span></div>
				&nbsp;Video Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="video" id="video1" placeholder="Enter Video Code" /><br>
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter your Username.</a></span></div>
				&nbsp;Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="von" id="video1" placeholder="Enter your Username" /><br>
				<input type="submit" value="Send">
				<br><font size="5" color="red">Video not received from: LovelyTheFirst, eviLDiabolus</font>
				</form>
				
				</center>
				-->
		</details>
		
		<details class="matchup">
			<summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/5-links.png" alt="match1" class="center"></td><td class="score">0</td><td class="score">vs</td><td class="score">4</td><td><img src="images/matches/1-rechts.png" alt="match1" class="center"></td></tr></table></summary>
				<div style="margin-top:10px"></div>
				<center>
				
				<table class="center">
					<tr class="matchsummary">
						<td class="matchsummary_links">
							Killerdogge:<br>
							<img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-snorlax.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-alolan-dugtrio.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-zoroark.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-decidueye.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-alolan-raichu.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-kabutops.png">
						</td>						
						<td class="matchsummary_mitte">
						Video-Code: V88W-WWWW-WWx8-AUF7
						</td>
						<td class="matchsummary_rechts">
							LovelyTheFirst:<br>
							<img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-tyranitar.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-decidueye.png"><img src="images/smallsprites/small-vaporeon.png"><img src="images/smallsprites/small-sylveon.png"><img src="images/smallsprites/small-decidueye.png"><img src="images/smallsprites/small-charizard.png">
						</td>
					</tr>
				</table>
				
				<!--
				<form method="post" action="videocode.php">
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter the Video Code of your match<br>(XXXX-XXXX-XXXX-XXXX) <a id="link" href="https://www.youtube.com/watch?v=rrMLxGJDnzQ">Tutorial</a>.</span></div>
				&nbsp;Video Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="video" id="video1" placeholder="Enter Video Code" /><br>
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter your Username.</a></span></div>
				&nbsp;Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="von" id="video1" placeholder="Enter your Username" /><br>
				<input type="submit" value="Send">
				<br><font size="5" color="red">Video not received from:</font>
				</form>
						
				</center>
				-->
		</details>
		
		<details class="matchup">
			<summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/4-links.png" alt="match1" class="center"></td><td class="score">2</td><td class="score">vs</td><td class="score">0</td><td><img src="images/matches/5-rechts.png" alt="match1" class="center"></td></tr></table></summary>
				<div style="margin-top:10px"></div>
				<center>
				
				<table class="center">
					<tr class="matchsummary">
						<td class="matchsummary_links">
							eviLDiabolus:<br>
							<img src="images/smallsprites/small-aegislash.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-ferrothorn.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-toxapex.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-golem.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-rhyperior.png"><img src="images/smallsprites/small-ampharos.png">
						</td>						
						<td class="matchsummary_mitte">
						Video-Code:TEJG-WWWW-WWX8-AUFB
						</td>
						<td class="matchsummary_rechts">
							Killerdogge:<br>
							<img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-snorlax.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-alolan-dugtrio.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-zoroark.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-decidueye.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-alolan-raichu.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-kabutops.png">
						</td>
						</tr>
				</table>
				
				<!--
				<form method="post" action="videocode.php">
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter the Video Code of your match<br>(XXXX-XXXX-XXXX-XXXX) <a id="link" href="https://www.youtube.com/watch?v=rrMLxGJDnzQ">Tutorial</a>.</span></div>
				&nbsp;Video Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="video" id="video1" placeholder="Enter Video Code" /><br>
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter your Username.</a></span></div>
				&nbsp;Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="von" id="video1" placeholder="Enter your Username" /><br>
				<input type="submit" value="Send">
				<br><font size="5" color="red">Video not received from: eviLDiabolus</font>
				</form>
				-->
				</center>
		</details>
		
		<br>
	</div>
	</div>
	
	
	<div class="top-banner">
		<img onClick="showmonth(event)" class="May" src="images/top-banner-may.png" width="100%">
		</div>	
		<div id="May" style="display:none; padding-bottom:30px;">
		<div class="back-current-PEL">
			
				 <div class="matches-top-info">
					<div class="top-block">
					24 May 2019 - 20:15<br>
					<a class="top-black-link" href="database.php#eviLDiabolus">eviLDiabolus</a><br>
					5 v 0 <br>
					<a class="top-black-link" href="database.php#LovelyTheFirst">LovelyTheFirst</a>
					</div>
					<div class="top-block">
					24 May 2019 - 20:45<br>
					<a class="top-black-link" href="database.php#Killerdogge">Killerdogge</a><br>
					0 v 6 <br>
					<a class="top-black-link" href="database.php#eviLDiabolus">eviLDiabolus</a>
					</div>
					<div class="top-block">
					24 May 2019 - 21:15<br>
					<a class="top-black-link" href="database.php#LovelyTheFirst">LovelyTheFirst</a><br>
					6 v 0 <br>
					<a class="top-black-link" href="database.php#Killerdogge">Killlerdogge</a>
					</div>
				</div> 
				
			<center>Participants</center>
			<table class="gruppe">
			<thead>
				<tr>
					<th>Place</th>
					<th>Trainer</th>
					<th>Wins</th>
					<th>Loses</th>
					<th>Draws</th>
					<th>Difference</th>
					<th>PP</th>
					
				</tr>
			</thead>
			<tbody>				
				
				<tr>
					<td>1</td>	
					<td>eviLDiabolus</td>
					<td>2</td>
					<td>0</td>
					<td>0</td>
					<td>+11</td>
					<td>988</td>
					<td style="display:;">
						<div class="history-content">
						<section class="history7">
							<button class="showhistory"></button>
						</section>
						</div>
					</td>
				</tr>
				<tr style="display:;">
					<td>2</td>	
					<td>LovelyTheFirst</td>
					<td>1</td>
					<td>1</td>
					<td>0</td>
					<td>+1</td>
					<td>1106</td>
					
					<td style="display:;">
						<div class="history-content">
						<section class="history8">
							<button class="showhistory"></button>
						</section>
						</div>
					</td>
				</tr>
				<tr>
					<td>3</td>	
					<td>Killerdogge</td>
					<td>0</td>
					<td>2</td>
					<td>0</td>
					<td>-12</td>
					<td>0</td>
					<td style="display:;">
						<div class="history-content">
						<section class="history9">
							<button class="showhistory"></button>
						</section>
						</div>
					</td>
				</tr>
				
			</tbody>
			</table>
		<br>
			
		<details class="detailhistory" id="history7">
			<summary></summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/4-links.png" alt="match1" class="center"></td><td class="score">5</td><td class="score">vs</td><td class="score">0</td><td><img src="images/matches/1-rechts.png" alt="match1" class="center"></td></tr></table>
			<table class="match"><tr class="clash"><td><img src="images/matches/4-links.png" alt="match1" class="center"></td><td class="score">6</td><td class="score">vs</td><td class="score">0</td><td><img src="images/matches/5-rechts.png" alt="match1" class="center"></td></tr></table>
		</details>
		<details class="detailhistory" id="history8">
			<summary></summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/1-links.png" alt="match1" class="center"></td><td class="score">0</td><td class="score">vs</td><td class="score">5</td><td><img src="images/matches/4-rechts.png" alt="match1" class="center"></td></tr></table>
			<table class="match"><tr class="clash"><td><img src="images/matches/1-links.png" alt="match1" class="center"></td><td class="score">6</td><td class="score">vs</td><td class="score">0</td><td><img src="images/matches/5-rechts.png" alt="match1" class="center"></td></tr></table>
			</details>
		<details class="detailhistory" id="history9">
			<summary></summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/5-links.png" alt="match1" class="center"></td><td class="score">0</td><td class="score">vs</td><td class="score">6</td><td><img src="images/matches/1-rechts.png" alt="match1" class="center"></td></tr></table>
			<table class="match"><tr class="clash"><td><img src="images/matches/5-links.png" alt="match1" class="center"></td><td class="score">0</td><td class="score">vs</td><td class="score">6</td><td><img src="images/matches/4-rechts.png" alt="match1" class="center"></td></tr></table>
		</details>
		
		
		<br>
		
		
		
		<br>
		
		<center>(Click on your match to upload video code)</center>
		
		
		<details class="matchup">
			<summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/4-links.png" alt="match1" class="center"></td><td class="score">5</td><td class="score">vs</td><td class="score">0</td><td><img src="images/matches/1-rechts.png" alt="match1" class="center"></td></tr></table></summary>
				<div style="margin-top:10px"></div>
				<center>
				
				<table class="center">
					<tr class="matchsummary">
						<td class="matchsummary_links">
							eviLDiabolus:<br>
							<img src="images/smallsprites/small-rhyperior.png"><img src="images/smallsprites/small-charizard.png"><img src="images/smallsprites/small-ferrothorn.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-ampharos.png"><img src="images/smallsprites/small-toxapex.png"><img src="images/smallsprites/small-swampert.png">
						</td>						
						<td class="matchsummary_mitte">
						Video-Code: /
						</td>
						<td class="matchsummary_rechts">
							LovelyTheFirst:<br>
							<img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-tyranitar.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-decidueye.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-vikavolt.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-vaporeon.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-mawile.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-charizard.png">
						</td>
					</tr>
				</table>
			
				<!--
				<form method="post" action="videocode.php">
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter the Video Code of your match<br>(XXXX-XXXX-XXXX-XXXX) <a id="link" href="https://www.youtube.com/watch?v=rrMLxGJDnzQ">Tutorial</a>.</span></div>
				&nbsp;Video Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="video" id="video1" placeholder="Enter Video Code" /><br>
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter your Username.</a></span></div>
				&nbsp;Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="von" id="video1" placeholder="Enter your Username" /><br>
				<input type="submit" value="Send">
				<br><font size="5" color="red">Video not received from: eviLDiabolus, LovelyTheFirst</font>
				</form>
				-->
				</center>
					
		</details>
		
		<details class="matchup">
			<summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/5-links.png" alt="match1" class="center"></td><td class="score">0</td><td class="score">vs</td><td class="score">6</td><td><img src="images/matches/4-rechts.png" alt="match1" class="center"></td></tr></table></summary>
				<div style="margin-top:10px"></div>
				<center>
				
				<table class="center">
					<tr class="matchsummary">
						<td class="matchsummary_links">
							Killerdogge:<br>
							<img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-poliwhirl.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-dartrix.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-magnemite.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-magby.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-zoroark.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-inkay.png">
						</td>						
						<td class="matchsummary_mitte">
						Video-Code: 9WUG-WWWW-WWX7-2TLE
						</td>
						<td class="matchsummary_rechts">
							eviLDiabolus:<br>
							<img src="images/smallsprites/small-silvally.png"><img src="images/smallsprites/small-chandelure.png"><img src="images/smallsprites/small-ampharos.png"><img src="images/smallsprites/small-rapidash.png"><img src="images/smallsprites/small-rhyperior.png"><img src="images/smallsprites/small-swampert.png">
						</td>
					</tr>
				</table>
				
				<!--
				<form method="post" action="videocode.php">
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter the Video Code of your match<br>(XXXX-XXXX-XXXX-XXXX) <a id="link" href="https://www.youtube.com/watch?v=rrMLxGJDnzQ">Tutorial</a>.</span></div>
				&nbsp;Video Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="video" id="video1" placeholder="Enter Video Code" /><br>
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter your Username.</a></span></div>
				&nbsp;Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="von" id="video1" placeholder="Enter your Username" /><br>
				<input type="submit" value="Send">
				<br><font size="5" color="red">Video not received from: Killerdogge, eviLDiabolus</font>
				</form>
					-->	
				</center>
				
		</details>
		
		<details class="matchup">
			<summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/1-links.png" alt="match1" class="center"></td><td class="score">6</td><td class="score">vs</td><td class="score">0</td><td><img src="images/matches/5-rechts.png" alt="match1" class="center"></td></tr></table></summary>
				<div style="margin-top:10px"></div>
				<center>
				
				<table class="center">
					<tr class="matchsummary">
						<td class="matchsummary_links">
							LovelyTheFirst:<br>
							<img src="images/smallsprites/small-tyranitar.png"><img src="images/smallsprites/small-decidueye.png"><img src="images/smallsprites/small-sylveon.png"><img src="images/smallsprites/small-metagross.png"><img src="images/smallsprites/small-charizard.png"><img src="images/smallsprites/small-vaporeon.png">
						</td>						
						<td class="matchsummary_mitte">
						Video-Code:/
						</td>
						<td class="matchsummary_rechts">
							Killerdogge:<br>
							<img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-poliwhirl.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-dartrix.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-magnemite.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-magby.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-zoroark.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-inkay.png">
					</tr>
				</table>
				
				
				<!--
				<form method="post" action="videocode.php">
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter the Video Code of your match<br>(XXXX-XXXX-XXXX-XXXX) <a id="link" href="https://www.youtube.com/watch?v=rrMLxGJDnzQ">Tutorial</a>.</span></div>
				&nbsp;Video Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="video" id="video1" placeholder="Enter Video Code" /><br>
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter your Username.</a></span></div>
				&nbsp;Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="von" id="video1" placeholder="Enter your Username" /><br>
				<input type="submit" value="Send">
				<br><font size="5" color="red">Video not received from: LovelyTheFirst, Killerdogge</font>
				</form>
				-->
				</center>
		</details>
		
		<br>
	</div>
	</div>
	
	<div class="top-banner">
	<img onClick="showmonth(event)" class="April" src="images/top-banner-apr.png" width="100%">
		</div>	
		<div id="April" style="display:none; padding-bottom:30px;">
		<div class="back-current-PEL">
			
				 <div class="matches-top-info">
					<div class="top-block">
					20 April 2019 - 15:00<br>
					<a class="top-black-link" href="database.php#LovelyTheFirst">eviLDiabolus</a><br>
					1 v 0 <br>
					<a class="top-black-link" href="database.php#eviLDiabolus">LovelyTheFirst</a>
					</div>
				</div> 
				
			<center>Group A</center>
			<table class="gruppe">
			<thead>
				<tr>
					<th>Place</th>
					<th>Trainer</th>
					<th>Wins</th>
					<th>Loses</th>
					<th>Draws</th>
					<th>Difference</th>
					<th>PP</th>
					
				</tr>
			</thead>
			<tbody>				
			
				<tr style="display:;">
					<td>1</td>	
					<td>eviLDiabolus</td>
					<td>1</td>
					<td>0</td>
					<td>0</td>
					<td>+1</td>
					<td>908</td>
					<td style="display:;">
						<div class="history-content">
						<section class="history10">
							<button class="showhistory"></button>
						</section>
						</div>
					</td>
				</tr>
				<tr>
					<td>1</td>	
					<td>LovelyTheFirst</td>
					<td>0</td>
					<td>1</td>
					<td>0</td>
					<td>-1</td>
					<td>1068</td>
					<td style="display:;">
						<div class="history-content">
						<section class="history11">
							<button class="showhistory"></button>
						</section>
						</div>
					</td>
				</tr>
				
			</tbody>
			</table>
		<br>
		
		
		<details class="detailhistory" id="history10">
			<summary></summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/4-links.png" alt="match1" class="center"></td><td class="score">1</td><td class="score">vs</td><td class="score">0</td><td><img src="images/matches/1-rechts.png" alt="match1" class="center"></td></tr></table>
			</details>
			
		<details class="detailhistory" id="history11">
			<summary></summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/1-links.png" alt="match1" class="center"></td><td class="score">0</td><td class="score">vs</td><td class="score">1</td><td><img src="images/matches/4-rechts.png" alt="match1" class="center"></td></tr></table>
		</details>
		
		
		<br>
		
		
		
		<br>
		<center></center>
		
		<details class="matchup">
			<summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/4-links.png" alt="match1" class="center"></td><td class="score">1</td><td class="score">vs</td><td class="score">0</td><td><img src="images/matches/1-rechts.png" alt="match1" class="center"></td></tr></table></summary>
				<div style="margin-top:10px"></div>
				<center>
				
				<table class="center">
					<tr class="matchsummary">
						<td class="matchsummary_links">
							eviLDiabolus:<br>
							<img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-alakazam.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-steelix.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-charizard.png"><img src="images/smallsprites/small-gengar.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-tangrowth.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-blastoise.png">
						</td>						
						<td class="matchsummary_mitte">
						Video-Code: GQ6G-WWWW-WWX5-URV4
						</td>
						<td class="matchsummary_rechts">
							LovelyTheFirst:<br>
							<img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-gyarados.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-sylveon.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-steelix.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-vaporeon.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-jolteon.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-crobat.png">
						</td>
					</tr>
				</table>
				<!--
				<form method="post" action="videocode.php">
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter the Video Code of your match<br>(XXXX-XXXX-XXXX-XXXX) <a id="link" href="https://www.youtube.com/watch?v=rrMLxGJDnzQ">Tutorial</a>.</span></div>
				&nbsp;Video Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="video" id="video1" placeholder="Enter Video Code" /><br>
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter your Username.</a></span></div>
				&nbsp;Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="von" id="video1" placeholder="Enter your Username" /><br>
				<input type="submit" value="Send">
				<br><font size="5" color="red">Video not received from: LovelyTheFirst, eviLDiabolus</font>
				</form>
				-->				
				</center>
		</details>
		
		<!--
		<details class="matchup">
			<summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/1-links.png" alt="match1" class="center"></td><td class="score">3</td><td class="score">vs</td><td class="score">0</td><td><img src="images/matches/3-rechts.png" alt="match1" class="center"></td></tr></table></summary>
				<div style="margin-top:10px"></div>
				<center>
				
				<table class="center">
					<tr class="matchsummary">
						<td class="matchsummary_links">
							LovelyTheFirst:<br>
							<img src="images/smallsprites/small-tyranitar.png"><img src="images/smallsprites/small-decidueye.png"><img src="images/smallsprites/small-vikavolt.png"><img src="images/smallsprites/small-vaporeon.png"><img src="images/smallsprites/small-garchomp.png"><img src="images/smallsprites/small-metagross.png">
						</td>						
						<td class="matchsummary_mitte">
						Video-Code: /
						</td>
						<td class="matchsummary_rechts">
							Ounaghi:<br>
							(no team because of surrender)
						</td>
					</tr>
				</table>
				<!--
				<form method="post" action="videocode.php">
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter the Video Code of your match<br>(XXXX-XXXX-XXXX-XXXX) <a id="link" href="https://www.youtube.com/watch?v=rrMLxGJDnzQ">Tutorial</a>.</span></div>
				&nbsp;Video Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="video" id="video1" placeholder="Enter Video Code" /><br>
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter your Username.</a></span></div>
				&nbsp;Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="von" id="video1" placeholder="Enter your Username" /><br>
				<input type="submit" value="Send">
				<br><font size="5" color="red">Video not received from: LovelyTheFirst, Ounaghi</font>
				</form>
				
				</center>
		</details>
		-->
		<!--
		<details class="matchup">
			<summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/2-links.png" alt="match1" class="center"></td><td class="score">0</td><td class="score">vs</td><td class="score">5</td><td><img src="images/matches/1-rechts.png" alt="match1" class="center"></td></tr></table></summary>
				<div style="margin-top:10px"></div>
				<center>
				
				<table class="center">
					<tr class="matchsummary">
						<td class="matchsummary_links">
							Kerberos:<br>
							<img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-swampert.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-hariyama.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-alakazam.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-marowak-alola.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-poliwhirl.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-magneton.png">
						</td>						
						<td class="matchsummary_mitte">
						Video-Code:7PEW-WWWW-WWX3-ZWG4
						</td>
						<td class="matchsummary_rechts">
							LovelyTheFirst:<br>
							<img src="images/smallsprites/small-tyranitar.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-decidueye.png"><img src="images/smallsprites/small-vikavolt.png"><img src="images/smallsprites/small-vaporeon.png"><img src="images/smallsprites/small-garchomp.png"><img src="images/smallsprites/small-metagross.png">						</td>
					</tr>
				</table>
				
				<!--
				<form method="post" action="videocode.php">
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter the Video Code of your match<br>(XXXX-XXXX-XXXX-XXXX) <a id="link" href="https://www.youtube.com/watch?v=rrMLxGJDnzQ">Tutorial</a>.</span></div>
				&nbsp;Video Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="video" id="video1" placeholder="Enter Video Code" /><br>
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter your Username.</a></span></div>
				&nbsp;Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="von" id="video1" placeholder="Enter your Username" /><br>
				<input type="submit" value="Send">
				<br><font size="5" color="red">Video not received from: Kerberos, LovelyTheFirst</font>
				</form>
				
				</center>
		</details>
		-->
		<br>
	</div>
	</div>
	
	
	<div class="top-banner">
		<img onClick="showmonth(event)" class="March" src="images/top-banner-mar.png" width="100%">
		</div>	
		<div id="March" style="display:none; padding-bottom:30px;">
		<div class="back-current-PEL">
			
				<div class="matches-top-info">
					<div class="top-block">
					15 March 2019 - 20:30<br>
					<a class="top-black-link" href="database.php#LovelyTheFirst">LovelyTheFirst</a><br>
					6 v 0 <br>
					<a class="top-black-link" href="database.php#eviLDiabolus">eviLDiabolus</a>
					</div>
				</div>
				
			<center>Group A</center>
			<table class="gruppe">
			<thead>
				<tr>
					<th>Place</th>
					<th>Trainer</th>
					<th>Wins</th>
					<th>Loses</th>
					<th>Draws</th>
					<th>Difference</th>
					<th>PP</th>
					
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>	
					<td>LovelyTheFirst</td>
					<td>1</td>
					<td>0</td>
					<td>0</td>
					<td>+6</td>
					<td>925</td>
					<td style="display:;">
						<div class="history-content">
						<section class="history12">
							<button class="showhistory"></button>
						</section>
						</div>
					</td>
				</tr>
				
				
				<tr style="display:;">
					<td>2</td>	
					<td>eviLDiabolus</td>
					<td>0</td>
					<td>1</td>
					<td>0</td>
					<td>-6</td>
					<td>393</td>
					<td style="display:;">
						<div class="history-content">
						<section class="history13">
							<button class="showhistory"></button>
						</section>
						</div>
					</td>
				</tr>
			</tbody>
			</table>
		<br>
		
		<details class="detailhistory" id="history12">
			<summary></summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/1-links.png" alt="match1" class="center"></td><td class="score">6</td><td class="score">vs</td><td class="score">0</td><td><img src="images/matches/4-rechts.png" alt="match1" class="center"></td></tr></table>
		</details>
		
		<details class="detailhistory" id="history13">
			<summary></summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/4-links.png" alt="match1" class="center"></td><td class="score">0</td><td class="score">vs</td><td class="score">6</td><td><img src="images/matches/1-rechts.png" alt="match1" class="center"></td></tr></table>
			</details>
		
		<br>
		
		
		<br>
		<center>(Click on your match to upload video code)</center>
		
		<details class="matchup">
			<summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/1-links.png" alt="match1" class="center"></td><td class="score">6</td><td class="score">vs</td><td class="score">0</td><td><img src="images/matches/4-rechts.png" alt="match1" class="center"></td></tr></table></summary>
				<div style="margin-top:10px"></div>
				<center>
				
				<table class="center">
					<tr class="matchsummary">
						<td class="matchsummary_links">
							LovelyTheFirst:<br>
							<img src="images/smallsprites/small-tyranitar.png"><img src="images/smallsprites/small-gyarados.png"><img src="images/smallsprites/small-garchomp.png"><img src="images/smallsprites/small-mawile.png"><img src="images/smallsprites/small-sylveon.png"><img src="images/smallsprites/small-steelix.png">
						</td>						
						<td class="matchsummary_mitte">
						Video-Code: NK2G-WWWW-WWX4-BY97
						</td>
						<td class="matchsummary_rechts">
							eviLDiabolus:<br>
							<img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-tapu-koko.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-infernape.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-gyarados.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-garchomp.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-feraligator.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-trevenant.png">
						</td>
					</tr>
				</table>
				<!--
				<form method="post" action="videocode.php">
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter the Video Code of your match<br>(XXXX-XXXX-XXXX-XXXX) <a id="link" href="https://www.youtube.com/watch?v=rrMLxGJDnzQ">Tutorial</a>.</span></div>
				&nbsp;Video Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="video" id="video1" placeholder="Enter Video Code" /><br>
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter your Username.</a></span></div>
				&nbsp;Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="von" id="video1" placeholder="Enter your Username" /><br>
				<input type="submit" value="Send">
				<br><font size="5" color="red">Video not received from: LovelyTheFirst, eviLDiabolus</font>
				</form>
				-->
				</center>
		</details>
		
		<!--
		<details class="matchup">
			<summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/1-links.png" alt="match1" class="center"></td><td class="score">3</td><td class="score">vs</td><td class="score">0</td><td><img src="images/matches/3-rechts.png" alt="match1" class="center"></td></tr></table></summary>
				<div style="margin-top:10px"></div>
				<center>
				
				<table class="center">
					<tr class="matchsummary">
						<td class="matchsummary_links">
							LovelyTheFirst:<br>
							<img src="images/smallsprites/small-tyranitar.png"><img src="images/smallsprites/small-decidueye.png"><img src="images/smallsprites/small-vikavolt.png"><img src="images/smallsprites/small-vaporeon.png"><img src="images/smallsprites/small-garchomp.png"><img src="images/smallsprites/small-metagross.png">
						</td>						
						<td class="matchsummary_mitte">
						Video-Code: /
						</td>
						<td class="matchsummary_rechts">
							Ounaghi:<br>
							(no team because of surrender)
						</td>
					</tr>
				</table>
				<!--
				<form method="post" action="videocode.php">
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter the Video Code of your match<br>(XXXX-XXXX-XXXX-XXXX) <a id="link" href="https://www.youtube.com/watch?v=rrMLxGJDnzQ">Tutorial</a>.</span></div>
				&nbsp;Video Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="video" id="video1" placeholder="Enter Video Code" /><br>
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter your Username.</a></span></div>
				&nbsp;Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="von" id="video1" placeholder="Enter your Username" /><br>
				<input type="submit" value="Send">
				<br><font size="5" color="red">Video not received from: LovelyTheFirst, Ounaghi</font>
				</form>
				
				</center>
		</details>
		-->
		<!--
		<details class="matchup">
			<summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/2-links.png" alt="match1" class="center"></td><td class="score">0</td><td class="score">vs</td><td class="score">5</td><td><img src="images/matches/1-rechts.png" alt="match1" class="center"></td></tr></table></summary>
				<div style="margin-top:10px"></div>
				<center>
				
				<table class="center">
					<tr class="matchsummary">
						<td class="matchsummary_links">
							Kerberos:<br>
							<img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-swampert.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-hariyama.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-alakazam.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-marowak-alola.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-poliwhirl.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-magneton.png">
						</td>						
						<td class="matchsummary_mitte">
						Video-Code:7PEW-WWWW-WWX3-ZWG4
						</td>
						<td class="matchsummary_rechts">
							LovelyTheFirst:<br>
							<img src="images/smallsprites/small-tyranitar.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-decidueye.png"><img src="images/smallsprites/small-vikavolt.png"><img src="images/smallsprites/small-vaporeon.png"><img src="images/smallsprites/small-garchomp.png"><img src="images/smallsprites/small-metagross.png">						</td>
					</tr>
				</table>
				
				<!--
				<form method="post" action="videocode.php">
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter the Video Code of your match<br>(XXXX-XXXX-XXXX-XXXX) <a id="link" href="https://www.youtube.com/watch?v=rrMLxGJDnzQ">Tutorial</a>.</span></div>
				&nbsp;Video Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="video" id="video1" placeholder="Enter Video Code" /><br>
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter your Username.</a></span></div>
				&nbsp;Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="von" id="video1" placeholder="Enter your Username" /><br>
				<input type="submit" value="Send">
				<br><font size="5" color="red">Video not received from: Kerberos, LovelyTheFirst</font>
				</form>
				
				</center>
		</details>
		-->
		<br>
	</div>
	</div>
	
	<div class="top-banner">
		<img onClick="showmonth(event)" class="February" src="images/top-banner-feb.png" width="100%">
	</div>	
		<div id="February" style="display:none; padding-bottom:30px;">
		<div class="back-current-PEL">
				<div class="matches-top-info">
					<div class="top-block">
					01 March 2019 - 20:00<br>
					<a class="top-black-link" href="database.php#Ounaghi">Ounaghi</a><br>
					0 v 3 (ff)<br>
					<a class="top-black-link" href="database.php#Kerberos">Kerberos</a>
					</div>
					<div class="top-block">
					01 March 2019 - 20:30<br>
					<a class="top-black-link" href="database.php#Lovely">LovelyTheFirst</a><br>
					3 v 0 (ff)<br>
					<a class="top-black-link" href="database.php#Ounaghi">Ounaghi</a>
					</div>
					<div class="top-block">
					01 March 2019 - 21:00<br>
					<a class="top-black-link" href="database.php#Kerberos">Kerberos</a><br>
					0 v 5<br>
					<a class="top-black-link" href="database.php#Lovely">LovelyTheFirst</a>					
					</div>
				</div>
				
			<!-- <center>Group A</center> -->
			<center>Group A</center>
			<table class="gruppe">
			<thead>
				<tr>
					<th>Place</th>
					<th>Trainer</th>
					<th>Wins</th>
					<th>Loses</th>
					<th>Draws</th>
					<th>Difference</th>
					<th>PP</th>
					
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>	
					<td>LovelyTheFirst</td>
					<td>2</td>
					<td>0</td>
					<td>0</td>
					<td>+8</td>
					<td>720</td>
					<td style="display:;">
						<div class="history-content">
						<section class="history14">
							<button class="showhistory"></button>
						</section>
						</div>
					</td>
				</tr>
				<tr style="display:;">
					<td>2</td>	
					<td >Kerberos</td>
					<td>1</td>
					<td>1</td>
					<td>0</td>
					<td>-2</td>
					<td>8</td>
					<td style="display:;">
						<div class="history-content">
						<section class="history15">
							<button class="showhistory"></button>
						</section>
						</div>
					</td>
				</tr>
				<tr style="display:;">
					<td>3</td>	
					<td>Ounaghi</td>
					<td>0</td>
					<td>2</td>
					<td>0</td>
					<td>-6</td>
					<td>24</td>
					<td style="display:;">
						<div class="history-content">
						<section class="history16">
							<button class="showhistory"></button>
						</section>
						</div>
					</td>
				</tr>
				
			</tbody>
			</table>
		<br>

		<details class="detailhistory" id="history14">
			<summary></summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/1-links.png" alt="match1" class="center"></td><td class="score">3</td><td class="score">vs</td><td class="score">0</td><td><img src="images/matches/3-rechts.png" alt="match1" class="center"></td></tr></table>
			<table class="match"><tr class="clash"><td><img src="images/matches/1-links.png" alt="match1" class="center"></td><td class="score">5</td><td class="score">vs</td><td class="score">0</td><td><img src="images/matches/2-rechts.png" alt="match1" class="center"></td></tr></table>
		</details>
		<details class="detailhistory" id="history15">
			<summary></summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/2-links.png" alt="match1" class="center"></td><td class="score">3</td><td class="score">vs</td><td class="score">0</td><td><img src="images/matches/3-rechts.png" alt="match1" class="center"></td></tr></table>
			<table class="match"><tr class="clash"><td><img src="images/matches/2-links.png" alt="match1" class="center"></td><td class="score">0</td><td class="score">vs</td><td class="score">5</td><td><img src="images/matches/1-rechts.png" alt="match1" class="center"></td></tr></table>
			</details>
		<details class="detailhistory" id="history16">
			<summary></summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/3-links.png" alt="match1" class="center"></td><td class="score">0</td><td class="score">vs</td><td class="score">3</td><td><img src="images/matches/2-rechts.png" alt="match1" class="center"></td></tr></table>
			<table class="match"><tr class="clash"><td><img src="images/matches/3-links.png" alt="match1" class="center"></td><td class="score">0</td><td class="score">vs</td><td class="score">3</td><td><img src="images/matches/1-rechts.png" alt="match1" class="center"></td></tr></table>
		</details>
		<br>
		
		<br>
		<center></center>
		
		<details class="matchup">
			<summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/3-links.png" alt="match1" class="center"></td><td class="score">0</td><td class="score">vs</td><td class="score">3</td><td><img src="images/matches/2-rechts.png" alt="match1" class="center"></td></tr></table></summary>
				<div style="margin-top:10px"></div>
				<center>
				
				<table class="center">
					<tr class="matchsummary">
						<td class="matchsummary_links">
							Ounaghi:<br>
							(no team because of surrender)
						</td>						
						<td class="matchsummary_mitte">
						Video-Code: / &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</td>
						<td class="matchsummary_rechts">
							Kerberos:<br>
							<img src="images/smallsprites/small-swampert.png"><img src="images/smallsprites/small-hariyama.png"><img src="images/smallsprites/small-alakazam.png"><img src="images/smallsprites/small-marowak-alola.png"><img src="images/smallsprites/small-poliwhirl.png"><img src="images/smallsprites/small-magneton.png">
						</td>
					</tr>
				</table>

				<!--<form method="post" action="videocode.php">
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter the Video Code of your match<br>(XXXX-XXXX-XXXX-XXXX) <a id="link" href="https://www.youtube.com/watch?v=rrMLxGJDnzQ">Tutorial</a>.</span></div>
				&nbsp;Video Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="video" id="video1" placeholder="Enter Video Code" /><br>
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter your Username.</a></span></div>
				&nbsp;Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="von" id="video1" placeholder="Enter your Username" /><br>
				<input type="submit" value="Send">
				<br><font size="5" color="red">Video not received from: Ounaghi, Kerberos</font>
				</form> -->
				
				</center>
		</details>
		
		<details class="matchup">
			<summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/1-links.png" alt="match1" class="center"></td><td class="score">3</td><td class="score">vs</td><td class="score">0</td><td><img src="images/matches/3-rechts.png" alt="match1" class="center"></td></tr></table></summary>
				<div style="margin-top:10px"></div>
				<center>
				
				<table class="center">
					<tr class="matchsummary">
						<td class="matchsummary_links">
							LovelyTheFirst:<br>
							<img src="images/smallsprites/small-tyranitar.png"><img src="images/smallsprites/small-decidueye.png"><img src="images/smallsprites/small-vikavolt.png"><img src="images/smallsprites/small-vaporeon.png"><img src="images/smallsprites/small-garchomp.png"><img src="images/smallsprites/small-metagross.png">
						</td>						
						<td class="matchsummary_mitte">
						Video-Code: / &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</td>
						<td class="matchsummary_rechts">
							Ounaghi:<br>
							(no team because of surrender)
						</td>
					</tr>
				</table>
				<!--
				<form method="post" action="videocode.php">
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter the Video Code of your match<br>(XXXX-XXXX-XXXX-XXXX) <a id="link" href="https://www.youtube.com/watch?v=rrMLxGJDnzQ">Tutorial</a>.</span></div>
				&nbsp;Video Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="video" id="video1" placeholder="Enter Video Code" /><br>
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter your Username.</a></span></div>
				&nbsp;Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="von" id="video1" placeholder="Enter your Username" /><br>
				<input type="submit" value="Send">
				<br><font size="5" color="red">Video not received from: LovelyTheFirst, Ounaghi</font>
				</form>-->
				
				</center>
		</details>
		
		<details class="matchup">
			<summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/2-links.png" alt="match1" class="center"></td><td class="score">0</td><td class="score">vs</td><td class="score">5</td><td><img src="images/matches/1-rechts.png" alt="match1" class="center"></td></tr></table></summary>
				<div style="margin-top:10px"></div>
				<center>
				
				<table class="center">
					<tr class="matchsummary">
						<td class="matchsummary_links">
							Kerberos:<br>
							<img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-swampert.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-hariyama.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-alakazam.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-marowak-alola.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-poliwhirl.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-magneton.png">
						</td>						
						<td class="matchsummary_mitte">
						Video-Code:7PEW-WWWW-WWX3-ZWG4
						</td>
						<td class="matchsummary_rechts">
							LovelyTheFirst:<br>
							<img src="images/smallsprites/small-tyranitar.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-decidueye.png"><img src="images/smallsprites/small-vikavolt.png"><img src="images/smallsprites/small-vaporeon.png"><img src="images/smallsprites/small-garchomp.png"><img src="images/smallsprites/small-metagross.png">						</td>
					</tr>
				</table>
				
				<!--
				<form method="post" action="videocode.php">
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter the Video Code of your match<br>(XXXX-XXXX-XXXX-XXXX) <a id="link" href="https://www.youtube.com/watch?v=rrMLxGJDnzQ">Tutorial</a>.</span></div>
				&nbsp;Video Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="video" id="video1" placeholder="Enter Video Code" /><br>
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter your Username.</a></span></div>
				&nbsp;Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="von" id="video1" placeholder="Enter your Username" /><br>
				<input type="submit" value="Send">
				<br><font size="5" color="red">Video not received from: Kerberos, LovelyTheFirst</font>
				</form> -->
				
				</center>
		</details>
		<br>
	</div>
	</div>
		
	
		<div class="top-banner">
		<img onClick="showmonth(event)" class="January" src="images/top-banner.png" width="100%"></img>
		</div>
		<div id="January" style="display:none">
		<div class="back-current-PEL">
				<div class="matches-top-info">
					<div class="top-block">
					25 January 2019 - 15:00<br>
					<a class="top-black-link" href="database.php#Lovely">LovelyTheFirst</a><br>
					3 v 0<br>
					<a class="top-black-link" href="database.php#Kerberos">Kerberos</a>
					</div>
					<div class="top-block">
					25 January 2019 - 15:30<br>
					<a class="top-black-link" href="database.php#Kerberos">Kerberos</a><br>
					0 v 5<br>
					<a class="top-black-link" href="database.php#Ounaghi">Ounaghi</a>
					</div>
					<div class="top-block">
					25 January 2019 - 16:00<br>
					<a class="top-black-link" href="database.php#Ounaghi">Ounaghi</a><br>
					0 v 3<br>
					<a class="top-black-link" href="database.php#Lovely">LovelyTheFirst</a>
					
					</div>
				</div>
				
			<center>Group A</center>
			<table class="gruppe">
			<thead>
				<tr>
					<th>Place</th>
					<th>Trainer</th>
					<th>Wins</th>
					<th>Loses</th>
					<th>Draws</th>
					<th>Difference</th>
					<th>PP</th>
					
				</tr>
			</thead>
			<tbody>
			<tr>
					<td>1</td>	
					<td>LovelyTheFirst</td>
					<td>2</td>
					<td>0</td>
					<td>0</td>
					<td>+6</td>
					<td>570</td>
					<td>
						<div class="history-content">
						<section class="history17">
							<button class="showhistory"></button>
						</section>
						</div>
					</td>
				</tr>
			<tr>
					<td>2</td>
					<td>Ounaghi</td>
					<td>1</td>
					<td>1</td>
					<td>0</td>
					<td>+2</td>
					<td>8</td>
					<td>
						<div class="history-content">
						<section class="history18">
							<button class="showhistory"></button>
						</section>
						</div>
					</td>
				</tr>
				<tr>
					<td>3</td>
					<td>Kerberos</td>
					<td>0</td>
					<td>2</td>
					<td>0</td>
					<td>-8</td>
					<td>0</td>
					<td>
						<div class="history-content">
						<section class="history19">
							<button class="showhistory"></button>
						</section>
						</div>
					</td>
				</tr>
			</tbody>
			</table>
		<br>
	<script>
		
		// Reference the parent tag of <button>s
		var history1 = document.querySelector('.history1');
		var history2 = document.querySelector('.history2');
		var history3 = document.querySelector('.history3');
		var history4 = document.querySelector('.history4');
		var history5 = document.querySelector('.history5');
		var history6 = document.querySelector('.history6');
		var history7 = document.querySelector('.history7');
		var history8 = document.querySelector('.history8');
		var history9 = document.querySelector('.history9');
		var history10 = document.querySelector('.history10');
		var history11 = document.querySelector('.history11');
		var history12 = document.querySelector('.history12');
		var history13 = document.querySelector('.history13');
		var history14 = document.querySelector('.history14');
		var history15 = document.querySelector('.history15');
		var history16 = document.querySelector('.history16');
		var history17 = document.querySelector('.history17');
		var history18 = document.querySelector('.history18');
		var history19 = document.querySelector('.history19');
		var record = document.getElementsByTagName("details");

		// Register parent tag of <button>s to the click event
		history1.addEventListener('click', toggleDetails);
		history2.addEventListener('click', toggleDetails);
		history3.addEventListener('click', toggleDetails);
		history4.addEventListener('click', toggleDetails);
		history5.addEventListener('click', toggleDetails);
		history6.addEventListener('click', toggleDetails);
		history7.addEventListener('click', toggleDetails);
		history8.addEventListener('click', toggleDetails);
		history9.addEventListener('click', toggleDetails);
		history10.addEventListener('click', toggleDetails);
		history11.addEventListener('click', toggleDetails);
		history12.addEventListener('click', toggleDetails);
		history13.addEventListener('click', toggleDetails);
		history14.addEventListener('click', toggleDetails);
		history15.addEventListener('click', toggleDetails);
		history16.addEventListener('click', toggleDetails);
		history17.addEventListener('click', toggleDetails);
		history18.addEventListener('click', toggleDetails);
		history19.addEventListener('click', toggleDetails);

		// Callback function passes Event Object (e)
		function toggleDetails(e) {
		  // Reference clicked tag (ie <button>)
		  var tgt = e.target;
		  // Collect all <button>s into a NodeList
		  var btns = document.querySelectorAll('button');
		  // Declare variable
		  var num;
		  /*
		  On each loop through NodeList...
		  if there's a clicked <button>...
		  ...assign the index number +1 to previous variable (num).
		  */
		  for (let i = 0; i < btns.length; i++) {
			if (btns[i] === tgt) {
			  num = i + 1;
			}
		  }
		  /*
		  if clicked tag is NOT the registered tag (ie section.buttons)...
		  ...then reference the tag with the #id of "history"+a number which
		  will end up to be a <details> tag.
		  if this <details> tag has an [open] attribute...
		  ...remove it...
		  otherwise...
		  ...add it and set it to true.
		  */
		  if (tgt !== e.currentTarget) {
			var dtl = document.getElementById('history' + num);
			if (dtl.getAttribute('open')) {
			  dtl.removeAttribute('open');
			} else {
				for (let j = 0; j<record.length; j++){
				record[j].removeAttribute("open");
				}
			  dtl.setAttribute('open', true);
			}
		  }
		}
</script>

		<details class="detailhistory" id="history14">
			<summary></summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/1-links.png" alt="match1" class="center"></td><td class="score">3</td><td class="score">vs</td><td class="score">0</td><td><img src="images/matches/2-rechts.png" alt="match1" class="center"></td></tr></table>
			<table class="match"><tr class="clash"><td><img src="images/matches/1-links.png" alt="match1" class="center"></td><td class="score">3</td><td class="score">vs</td><td class="score">0</td><td><img src="images/matches/3-rechts.png" alt="match1" class="center"></td></tr></table>
		</details>
		<details class="detailhistory" id="history15">
			<summary></summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/3-links.png" alt="match1" class="center"></td><td class="score">5</td><td class="score">vs</td><td class="score">0</td><td><img src="images/matches/2-rechts.png" alt="match1" class="center"></td></tr></table>
			<table class="match"><tr class="clash"><td><img src="images/matches/3-links.png" alt="match1" class="center"></td><td class="score">0</td><td class="score">vs</td><td class="score">3</td><td><img src="images/matches/1-rechts.png" alt="match1" class="center"></td></tr></table>
		</details>
		<details class="detailhistory" id="history16">
			<summary></summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/2-links.png" alt="match1" class="center"></td><td class="score">0</td><td class="score">vs</td><td class="score">3</td><td><img src="images/matches/1-rechts.png" alt="match1" class="center"></td></tr></table>
			<table class="match"><tr class="clash"><td><img src="images/matches/2-links.png" alt="match1" class="center"></td><td class="score">0</td><td class="score">vs</td><td class="score">5</td><td><img src="images/matches/3-rechts.png" alt="match1" class="center"></td></tr></table>
		</details>
		<br>
		
		Matchups:<br>
		<center></center>
		
		<details class="matchup">
			<summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/1-links.png" alt="match1" class="center"></td><td class="score">3</td><td class="score">vs</td><td class="score">0</td><td><img src="images/matches/2-rechts.png" alt="match1" class="center"></td></tr></table></summary>
				<div style="margin-top:10px"></div>
				<center>
				
				<table class="center">
					<tr class="matchsummary">
						<td class="matchsummary_links">
							LovelyTheFirst:<br>
							<img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-tyranitar.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-decidueye.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-vikavolt.png"><img src="images/smallsprites/small-vaporeon.png"><img src="images/smallsprites/small-arcanine.png"><img src="images/smallsprites/small-metagross.png">
						</td>						
						<td class="matchsummary_mitte">
						Video-Code:NNCG-WWWW-WWX2-H7KU
						</td>
						<td class="matchsummary_rechts">
							Kerberos:<br>
							<img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-swampert.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-hariyama.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-alakazam.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-marowak-alola.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-poliwhirl.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-magneton.png">
						</td>
					</tr>
				</table>
				<!--
				<form method="post" action="videocode.php">
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter the Video Code of your match<br>(XXXX-XXXX-XXXX-XXXX) <a id="link" href="https://www.youtube.com/watch?v=rrMLxGJDnzQ">Tutorial</a>.</span></div>
				&nbsp;Video Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="video" id="video1" placeholder="Enter Video Code" />
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter your Username.</a>.</span></div>
				&nbsp;Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="von" id="video1" placeholder="Enter your Username" />
				<input type="submit" value="Send">
				<br><font size="5" color="red">Video not received from: Kerberos</font>
				</form>
				-->
				</center>
		</details>
		<details class="matchup">
			<summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/2-links.png" alt="match1" class="center"></td><td class="score">0</td><td class="score">vs</td><td class="score">5</td><td><img src="images/matches/3-rechts.png" alt="match1" class="center"></td></tr></table></summary>
				<div style="margin-top:10px"></div>
				<center>
				<table class="center">
					<tr class="matchsummary">
						<td class="matchsummary_links">
							Kerberos:<br>
							<img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-swampert.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-hariyama.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-alakazam.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-marowak-alola.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-poliwhirl.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-magneton.png">
						</td>						
						<td class="matchsummary_mitte">
						Video-Code:R76G-WWWW-WWX2-HBRD
						</td>
						<td class="matchsummary_rechts">
							Ounaghi:<br>
							<img src="images/smallsprites/small-gengar.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-decidueye.png"><img src="images/smallsprites/small-hawlucha.png"><img src="images/smallsprites/small-charjabug.png"><img src="images/smallsprites/small-gigalith.png"><img src="images/smallsprites/small-ampharos.png">
						</td>
					</tr>
				</table>
				
				<!--
				<form method="post" action="videocode.php">
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter the Video Code of your match<br>(XXXX-XXXX-XXXX-XXXX) <a id="link" href="https://www.youtube.com/watch?v=rrMLxGJDnzQ">Tutorial</a>.</span></div>
				&nbsp;Video Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="video" id="video2" placeholder="Enter Video Code"/>
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter your Username.</a>.</span></div>
				&nbsp;Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="von" id="video1" placeholder="Enter your Username" />
				<input type="submit" value="Send">
				<br><font size="5" color="red">Video not received from: Kerberos, Ounaghi</font>
				</form>
				-->
				</center>
		</details>
		<details class="matchup">
			<summary>
			<table class="match"><tr class="clash"><td><img src="images/matches/3-links.png" alt="match1" class="center"></td><td class="score">0</td><td class="score">vs</td><td class="score">3</td><td><img src="images/matches/1-rechts.png" alt="match1" class="center"></td></tr></table></summary>
				<div style="margin-top:10px"></div>
				<center>
				
				<table class="center">
					<tr class="matchsummary">
						<td class="matchsummary_links">
							Ounaghi:<br>
							<img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-gengar.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-decidueye.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-hawlucha.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-vikavolt.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-gigalith.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-ampharos.png">
						</td>						
						<td class="matchsummary_mitte">
						Video-Code:EMJG-WWWW-WWX2-HCQV
						</td>
						<td class="matchsummary_rechts">
							LovelyTheFirst:<br>
							<img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-tyranitar.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-decidueye.png"><img src="images/smallsprites/small-vikavolt.png"><img src="images/smallsprites/strich.png" class="strich"><img src="images/smallsprites/small-vaporeon.png"><img src="images/smallsprites/small-arcanine.png"><img src="images/smallsprites/small-metagross.png">
						</td>
					</tr>
				</table>
				
				<!--
				<form method="post" action="videocode.php">
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter the Video Code of your match<br>(XXXX-XXXX-XXXX-XXXX) <a id="link" href="https://www.youtube.com/watch?v=rrMLxGJDnzQ">Tutorial</a>.</span></div>
				&nbsp;Video Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="video" id="video3" placeholder="Enter Video Code"/>
				
				<div class="tooltip"><img src="images/help.png" alt="tip" height="20" width="20">
				<span class="tooltiptext">Enter your Username.</a>.</span></div>
				&nbsp;Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="von" id="video1" placeholder="Enter your Username" />
				<input type="submit" value="Send">
				<br><font size="5" color="red">Video not received from: Ounaghi, LovelyTheFirst</font>	
				</form>
				-->
				</center>
		</details>
		<br>
	</div>
	</div>
			
			</center>
		<div id="platzhalter2"></div>
	</div>
	</div>
	<div id="pelrules" style="display:none;">
	<h3>League System:</h3>
	Players get placed in a group of 3 to 8 Trainers.<br>
	Single Round Robin System: Everybody fights against everybody in the group.<br><br>
	
	<h3>Battle Rules</h3>
	All matches are full 6v6 Single Battles in Pok&eacute;mon Ultrasun and Ultramoon.<br>
	The Rules in game have to be set to "Single Battle" "Normal Rules".<br>
	Every Pok&eacute;mon is allowed, except those who are on the <a id="link" href="rules.php#banlist">Banlist</a>.<br>
	You are only allowed to have 1 Legendary Pok&eacute;mon on your team.<br>
	Cheated Pok&eacute;mon or hacking in general is not allowed.<br>
	You are allways allowed to surrender a battle by telling me in Discord or simply leaving the battle.<br>
	If a Player doesn't show up to a battle, surrenders or disconnects in the battle, it counts as a 3 to 0 for the other Trainer.<br><br>
	
	<h3>Matchup Rules</h3>
	The Trainer who is called first in the Matchup Table has to set up the match and has to invite his opponent.<br>
	Both Trainers have to safe the Battlevideo and upload it to the public.<br>
	If you don't know how, here is a <a id="link" href="https://www.youtube.com/watch?v=rrMLxGJDnzQ">Tutorial</a>.<br>
	When your battle is over, report the score and your videocode by clicking on your match in the section underneather the current table.<br>
	The score depends on how many Pok&eacute;mon the winner had left.<br>
	For example: You played against Trainer1 -> You : Trainer1 -> You won and had 3 Pok&eacute;mon left -> that means you won 3:0.<br>
	Pay attention whether you are the one who is called first or second! You have to enter the score in the right order!<br><br>

	<h3>Placement Rules</h3>
	The trainer with the most wins gets 1st place.<br>
	If 2 trainers have an equal amount of wins, the trainer with the higher Difference gets the better place.<br>
	If 2tTrainers have an equal amount of wins and their Differences are equal aswell, they are tied.<br>
	When there are tied trainers on the 1st or 2nd place after all matches have been played, they have to battle again in a tie breaker match. The winner of the match gets the better place.<br><br>
	
	<h3>Prices</h3>
	The 1st and 2nd Place of each group gets a reward.<br>
	If a Player doesn't show up for a battle, he loses the right to recieve prices.<br>
	Losing on purpose has the same consequences.<br><br>
	
	<h3>Still Questions?</h3>
	Join the Prime Entertainment Discord Server:  <a href="https://discord.gg/FM54fz"> Click me</a>
	</div>
</div>
</div>
<div id="footer">
<a class="policy" href="privacy.html">Privacy Policy</a> <a class="policy" id="policy-mitte" href="cookie.html">Cookie Policy</a> <a class="policy" href="terms.html">Terms of Use</a><br><br>
<img src="images/Prime-Music-Logo-white-format.png" height="100" width="100"><br>

</div>
<script>
	
var font_rank = document.getElementById('rank').innerHTML;
var colors = new Array("#AB651E","#C0C0C0","#FFD700", "#8BBDF0", "#E11C1C");
var ranks = new Array("Rookie","Silver Elite","Gold Master","Platinum Grandmaster","Rhodium Prestige");
var check;
setTimeout(function() {
	for(var i = 0;i<=4; i++){
		if(ranks[i]== font_rank){
			check = colors[i];  
            document.getElementById('rank').style.color = check;
			document.getElementById('ranking').style.color = check;
            }
	}
}, 250);

var button = document.getElementById("sendButton");
var checkbox = document.getElementById("checkbox");
button.disabled = true;
    function CheckFunction(){
        if(checkbox.checked == true )
            button.disabled = false;            
        else
            button.disabled = true;
    };
</script>
</body>
</html>