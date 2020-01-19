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
th#bild{
	height:150px;
	width:150px;
	border:1px solid white;
	border-radius:10px;
}

td#text{
	
	height:20px;
	border:1px solid white;
	border-radius:10px;
	text-align:left;
}

td#lead{
	
	height:20px;
	border:1px solid white;
	border-radius:10px;
	text-align:center;
	background-color:#878787;
}

td#lit{
	
	height:20px;
	border:1px solid white;
	border-radius:10px;
	text-align:center;
	background-color:;
	width:25%;
}

.moves{
	color:white;
	text-decoration:none;
	padding-left:5px;
}

.moves:hover{
	text-decoration:underline;
}

.moves a:visited{
	color:red;
}

table{
	white-space: nowrap;
	margin-left:auto;
	margin-right:auto;
	text-align:center;
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
			
		<h1 style="">Christmas Giveaway: Shiny Competitive Pok&eacute;mon</h1><br>
		<img src="images/banner1.png"><br><br>
			<b>Greetings Pok&eacute;trainers,</b><br>
			
			Christmas is there, here you can find what Shiny Pok&eacute;mon were given away.<br>
		</p>
		<br>
		<div class="pokemon">
		<table id="pokemon">
		<tr>
		<td id="lead" colspan="2">
		Swampert
		</td>
		</tr>
		
		<tr>
			<th id="bild">
				<img src="images/swampert-shiny.png" width="150" height="115">
			</th>
			<td style="width:100%;" id="moves">
			
				<table style="width:100%">
				<tr>
					<td id="lead">Attacks</td>
				</tr>
				<tr>
					<td id="text"><a class="moves" href="https://bulbapedia.bulbagarden.net/wiki/Waterfall_(move)">Waterfall</a></td>
				</tr>
				<tr>
					<td id="text"><a class="moves" href="https://bulbapedia.bulbagarden.net/wiki/Earthquake_(move)">Earthquake</a></td>
				</tr>
				<tr>
					<td id="text"><a class="moves" href="https://bulbapedia.bulbagarden.net/wiki/Ice_Punch_(move)">Ice Punch</a></td>
				</tr>
				<tr>
					<td id="text"><a class="moves" href="https://bulbapedia.bulbagarden.net/wiki/Superpower_(move)">Superpower</a></td>
				</tr>
				</table>
			
			</td>
		</tr>
		</table>
		<table style="width:100%">
			<tr>
				<td id="lead">
				Nature
				</td>
				<td id="lead">
				Ability
				</td>
				<td id="lead">
				Item
				</td>
				<td id="lead">
				Trainer
				</td>
			</tr>
			<tr>
				<td id="lit">
				Adamant
				</td>
				<td id="lit">
				<a class="moves" href="https://bulbapedia.bulbagarden.net/wiki/Torrent_(Ability)">Torrent</a>
				</td>
				<td id="lit">
				<a class="moves" href="https://bulbapedia.bulbagarden.net/wiki/Swampertite">Swampertite</a>
				</td>
				<td id="lit">
				<a class="moves" href="database.html">Kerberos</a>
				</td>
			</tr>
		</table>
		</div>
	
	<div id="platzhalter2"></div>
		
	<div class="pokemon">
		<table id="pokemon">
		<tr>
		<td id="lead" colspan="2">
		Metagross
		</td>
		</tr>
		
		<tr>
			<th id="bild">
				<img src="images/metagross-shiny.png" width="150" height="105">
			</th>
			<td style="width:100%;" id="moves">
			
				<table style="width:100%">
				<tr>
					<td id="lead">Attacks</td>
				</tr>
				<tr>
					<td id="text"><a class="moves" href="https://bulbapedia.bulbagarden.net/wiki/Meteor_Mash_(move)">Meteor Mash</a></td>
				</tr>
				<tr>
					<td id="text"><a class="moves" href="https://bulbapedia.bulbagarden.net/wiki/Bullet_Punch_(move)">Bullet Punch</a></td>
				</tr>
				<tr>
					<td id="text"><a class="moves" href="https://bulbapedia.bulbagarden.net/wiki/Zen_Headbutt_(move)">Zen Headbutt</a></td>
				</tr>
				<tr>
					<td id="text"><a class="moves" href="https://bulbapedia.bulbagarden.net/wiki/Ice_Punch_(move)">Ice Punch</a></td>
				</tr>
				</table>
			
			</td>
		</tr>
		</table>
		<table style="width:100%">
			<tr>
				<td id="lead">
				Nature
				</td>
				<td id="lead">
				Ability
				</td>
				<td id="lead">
				Item
				</td>
				<td id="lead">
				Trainer
				</td>
			</tr>
			<tr>
				<td id="lit">
				Adamant
				</td>
				<td id="lit">
				<a class="moves" href="https://bulbapedia.bulbagarden.net/wiki/Light_Metal_(Ability)">Light Metal</a>
				</td>
				<td id="lit">
				<a class="moves" href="https://bulbapedia.bulbagarden.net/wiki/Metagrossite">Metagrossite</a>
				</td>
				<td id="lit">
				<a class="moves" href="database.html">LovelyTheFirst</a>
				</td>
			</tr>
		</table>
		</div>
		
		<div id="platzhalter2"></div>
		
	<div class="pokemon">
		<table id="pokemon">
		<tr>
		<td id="lead" colspan="2">
		Hawlucha
		</td>
		</tr>
		
		<tr>
			<th id="bild">
				<img src="images/hawlucha-shiny.png" width="150" height="105">
			</th>
			<td style="width:100%;" id="moves">
			
				<table style="width:100%">
				<tr>
					<td id="lead">Attacks</td>
				</tr>
				<tr>
					<td id="text"><a class="moves" href="https://bulbapedia.bulbagarden.net/wiki/Acrobatics_(move)">Acrobatics</a></td>
				</tr>
				<tr>
					<td id="text"><a class="moves" href="https://bulbapedia.bulbagarden.net/wiki/Swords_Dance_(move)">Swords Dance</a></td>
				</tr>
				<tr>
					<td id="text"><a class="moves" href="https://bulbapedia.bulbagarden.net/wiki/Flying_Press_(move)">Flying Press</a></td>
				</tr>
				<tr>
					<td id="text"><a class="moves" href="https://bulbapedia.bulbagarden.net/wiki/Roost_(move)">Roost</a></td>
				</tr>
				</table>
			
			</td>
		</tr>
		</table>
		<table style="width:100%">
			<tr>
				<td id="lead">
				Nature
				</td>
				<td id="lead">
				Ability
				</td>
				<td id="lead">
				Item
				</td>
				<td id="lead">
				Trainer
				</td>
			</tr>
			<tr>
				<td id="lit">
				Naughty
				</td>
				<td id="lit">
				<a class="moves" href="https://bulbapedia.bulbagarden.net/wiki/Limber_(Ability)">Limber</a>
				</td>
				<td id="lit">
				<a class="moves" href="https://bulbapedia.bulbagarden.net/wiki/Electric_Seed">Electric Seed</a>
				</td>
				<td id="lit">
				<a class="moves" href="database.html">Ounaghi</a>
				</td>
			</tr>
		</table>
		</div>
		
		
		<div id="platzhalter2"></div>
		
	<div class="pokemon">
		<table id="pokemon">
		<tr>
		<td id="lead" colspan="2">
		Guardevoir
		</td>
		</tr>
		
		<tr>
			<th id="bild">
				<img src="images/guardevoir-shiny.png" width="110" height="105" style="margin-left:20px;margin-right:20px;">
			</th>
			<td style="width:100%;" id="moves">
			
				<table style="width:100%">
				<tr>
					<td id="lead">Attacks</td>
				</tr>
				<tr>
					<td id="text"><a class="moves" href="https://bulbapedia.bulbagarden.net/wiki/Hyper_Voice_(move)">Hyper Voice</a></td>
				</tr>
				<tr>
					<td id="text"><a class="moves" href="https://bulbapedia.bulbagarden.net/wiki/Psyshock_(move)">Psyshock</a></td>
				</tr>
				<tr>
					<td id="text"><a class="moves" href="https://bulbapedia.bulbagarden.net/wiki/Calm_Mind_(move)">Calm Mind</a></td>
				</tr>
				<tr>
					<td id="text"><a class="moves" href="https://bulbapedia.bulbagarden.net/wiki/Focus_Blast_(move)">Focus Blast</a></td>
				</tr>
				</table>
			
			</td>
		</tr>
		</table>
		<table style="width:100%">
			<tr>
				<td id="lead">
				Nature
				</td>
				<td id="lead">
				Ability
				</td>
				<td id="lead">
				Item
				</td>
				<td id="lead">
				Trainer
				</td>
			</tr>
			<tr>
				<td id="lit">
				Timid
				</td>
				<td id="lit">
				<a class="moves" href="https://bulbapedia.bulbagarden.net/wiki/Synchronize_(Ability)">Synchronize</a>
				</td>
				<td id="lit">
				<a class="moves" href="https://bulbapedia.bulbagarden.net/wiki/Guardevoirite">Guardevoirite</a>
				</td>
				<td id="lit">
				<a class="moves" href="database.html">---</a>
				</td>
			</tr>
		</table>
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