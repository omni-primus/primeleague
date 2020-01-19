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
<meta charset="utf-8">
<title>League Ranks</title>
<link rel="icon" href="images/logo.png">
<link href="stylesheet.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Orbitron|Oswald" rel="stylesheet">
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
		<h1 style="margin-top:50px">Introducing: Prime League Ranks and Prime Points </h1><br><br>
		<img src="images/banner-content2.png" style="width:920px; max-width:100%;"><br><br>
		
			<b>Greetings Trainers,</b><br>
		<p>
			The title is saying it allready, I introduce a rank system on the website.<br>
			<br>
			<h3>What Ranks can I achieve?</h3>
			There are 5 Ranks right now, Rookie, Silver Elite, Gold Master, Platinum Grandmaster and Rhodium Prestige.<br>
			You can climb a rank if you achieved enought Prime Points.<br><br>
		</p>
		<p>
			<h3>How do I earn the Ranks?</h3><br>
			<style>
				td:hover{
					background-color: #1C1C1C;
				}
				tr:nth-child(even) {background-color: #424242;}
				th{
					text-align:center;
				}
				#font-rank-name{
					margin-right:25px;
					margin-left:25px
				}
				
				@media (max-width: 487px)
				{
					#font-rank-name{
						margin-right:0px;
						margin-left:0px;
					}
				}
			</style>
			<table>
				<tr>
					<th>
						<font id="font-rank-name">Rank Name</font>
					</th>
					<th>
						Symbol
					</th>
					<th>
						Requirement
					</th>
				</tr>
				<tr>
					<td>
						<center>Rookie</center>
					</td>
					<td><img src="images/rank-rookie.png" width="100px" height="100px">
					</td>
					<td>
						Battle at least once in a Gym or in a Tournament.<br>
						0 - 399 PP
					</td>
				</tr>
				<tr>
					<td>
						<center>Silver Elite</center>
					</td>
					<td><img src="images/rank-silver.png" width="100px" height="100px">
					</td>
					<td>
						400 - 959 PP
					</td>
				</tr>
				<tr>
					<td>
						<center>Gold Master</center>
					</td>
					<td><img src="images/rank-gold.png" width="100px" height="100px">
					</td>
					<td>
						960 - 1359 PP
					</td>
				</tr>
				<tr>
					<td>
						<center>Platinum Grandmaster</center>
					</td>
					<td><img src="images/rank-platin.png" width="100px" height="100px">
					</td>
					<td>
						1360 - 2000 PP 
					</td>
				</tr>
				<tr>
					<td>
						<center>Rhodium Prestige</center>
					</td>
					<td><img src="images/rank-master.png" width="100px" height="100px">
					</td>
					<td>
						2000 PP+ 
					</td>
				</tr>
			</table>
		</p>
		<p><br>
			<h3>How do I get Prime Points?</h3>
			Here is a list how and how many PP you can achieve:<br><br>
			<table>
				<tr>
					<th>
						Section
					</th>
					<th>
						<font style="margin-right:25px;margin-left:25px">Describtion</font>
					</th>
					<th>
						Points
					</th>
				</tr>
				<tr>
					<td><center><img src="images/gym-sign.png" height="90" width="90" alt="Gym-Logo" title="Gym-Logo"></center></td>
					<td>
						<center><br>Earn a Stage 1 Gym Badge<br><br>Earn a Stage 2 Gym Badge</center>
					</td>
					<td style="padding-left:30px;"><br>+50 PP<br><br>+70PP</td>
				</tr>
				<tr>
					<td><img src="images/PEL-Logo.png" height="100" width="160" alt="PEL-Logo" title="PEL-Logo"></td>
					<td>
						<center><br>1 Win<br><br>1 Lose<br><br>1st Place<br><br>2nd Place</center>
					</td>
					<td style="padding-left:30px;padding-right:30px;"><br>+15PP<br><br>-7PP<br><br>50 PP<br><br>30 PP</td>
					</td>
				</tr>
			</table>
		</p>
		<p><br>
			<h3>Where can I see my Rank?</h3>
			You can see your Rank in the <a href="database.html">Database</a> by searching for your name.
		</p>
	</div>
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
</script>
<div id="footer">
<a class="policy" href="privacy.html">Privacy Policy</a> <a class="policy" id="policy-mitte" href="cookie.html">Cookie Policy</a> <a class="policy" href="terms.html">Terms of Use</a><br><br>
<img src="images/Prime-Music-Logo-white-format.png" height="100" width="100"><br>

</div>
</body>
</html>