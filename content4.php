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
<title>Shiny Giveaway</title>
<link rel="icon" href="images/logo.png">
<link href="stylesheet.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Orbitron|Oswald" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
h1
{
	font-size:47px;
}

#body-content
{
	font-size:26px;
}

h3{
	font-size:26px;
}

a:link#link {
color: #BA73D2;
}

a:visited#link{
	color:#BA73D2;
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
			
		<h1 style="">Kanto Event: Shinys, Battles and more</h1><br>
		<img src="images/kanto-event-banner.png"><br><br>
			<b>Greetings Pok&eacute;trainers,</b><br>
			
			A new Event is heading your way which will be all around the Kanto Region and it's Pok&eacute;mon.<br>
			The Event contains a Shiny Giveaway, the PEL and the release of Sabrina's Stage 2 Gym.<br><br>
			
			<h3>SPECIAL Prime Entertainment League</h3>
			<p>
				First of all the Price Pok&eacute;mon will be the semi-legendary  Dragonite. The 1st place will get the shiny and the 2nd place the normal version.<br><br>
				Furthermore in this PEL only the original 151 Pok&eacute;mon and it's pre- and evolutions are allowed. If you're not sure which Pok&eacute;mons are allowed you can look up
				<a id="link" href="https://bulbapedia.bulbagarden.net/wiki/List_of_Pok%C3%A9mon_by_National_Pok%C3%A9dex_number">here</a>. <br><br>Allowed are the Pok&eacute;mons with a National Dex Number from 001 to 151 + Pichu, Cleffa, Igglypuff, Bellossom, Politoed, Steelix, Slowking, Scizor, Kingdra, Porogon2, Tyrogue, Hitmontop, Elekid, Magby, Blissey, Mime Jr., Happiny, Munchlax, Magnezone, Lickilicky, Rhyperior, Tangrowth, Electivire, Magmortar, Porygon-Z and all Eeveelutions.<br><br>
				The <a id="link" href="rules.html#banlist">Banlist</a> is irrelevant for this PEL, which means you can use every Pok&eacute;mon that is available. 
				
				
			</p>
			<br>
			<h3>SHINY GIVEAWAY</h3>
			<p>
				All Trainers that own at least one badge will have the chance to choose between the evolutions of the three starters of Kanto. That means you have to decide between Venusaur, Blastoise and Charizard.<br>
				If you own a gym badge, you'll get a Promo Code. You'll then have to enter the code on <a id="link" href="content5.html">this page</a> and choose which Shiny you want.<br>
				I'll give out the Shiny's on the 20th of April which means you've got time until the 19th to fulfill the requirements.
			</p>
			<br>
			<h3>Sabrina Stage 2 available</h3>
			<p>
				From the 1st of April the Stage 2 of Sabrina's Gym will be available for battles.
			</p>
		</div>
		
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