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
<title>Prime League</title>
<meta name="viewport" content="width=device-width, initinal-scale=1">
<link rel="icon" href="images/logo.png">
<link href="stylesheet.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Orbitron|Oswald" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
</script>
<script src="js/script.js"></script> 
</head>
<body>
<style>

</style>
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
	
	<div id="platzhalter2"></div>
	<style>
h1{
text-align:center;
}

h2{
text-align:left;
}

h3{
text-decoration: underline;
}

td{
border: 1px solid white;
text-align:center;
}

table#price{
border-collapse: collapse;
}

a:link#link {
color: #BA73D2;
}

a:visited#link{
	color:#BA73D2;
}

a:link#jump {
color:#13B5D2;

}

a:visited#jump{
	color:#13B5D2;
}

.position::before{
	display:block;
	content: "";
	height:70px;
	margin-top: -70px;
	visibility: hidden;
}

</style>
	
		<div id="body-content">
		<h1>Next Prime League (xx/xx/xxxx - xx/xx/xxxx)</h1><br>
		<img src="images/prime-league-banner.png" style="width:920px; max-width:100%;">
		<br><br>
		
		<center>
		<a href="#part" id ="jump">Participation</a> &nbsp;&nbsp;&nbsp;&nbsp; <a href="#progress" id="jump">Tournament Progress</a> &nbsp;&nbsp;&nbsp;&nbsp;
		<a href="#groups" id ="jump">Group Stage</a>  &nbsp;&nbsp;&nbsp;&nbsp;<a href="#knockout" id ="jump">Knockout Stage</a>&nbsp;&nbsp;&nbsp;&nbsp; 
		<a href="#primus" id ="jump">Prime Battle</a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="#prices" id ="jump">Prices</a>
		</center><br><br><br>
		<h2 id="part" class="position">Participation</h2><br>
		To participate in the Prime League you need minimum all Stage 1 Badges from the <a href="Battle-Area.php" id="link">Gym Battle Section</a>.<br>
		You need at least 6 Pok&eacute;mon that are able to battle.<br>
		The tournaments will be played in the latest 7th Generation Pok&eacute;mon Games (Ultrasun and -moon), so you require one of these.<br><br>
		<h2 id="progress" class="position">Tournament Progress</h2><br>
		The Prime League will be devided into two Stages: the Group Stage and the Knockout Stage.<br><br>
		
		<h3 id="groups" class="position">Group Stage</h3>
		The amount of people who are interested in the tournament will decide the number and size of the groups.<br><br>
		In the group every Trainer will battle once against each Trainer. A win gives 2 Points, a draw is 1 Point and a lose leaves you without Points.<br><br>
		If two Trainers are tied in Points after the Group Stage the upper place will be decided this way: <br>1. Better Killscore Difference<br> 2. Most Kills <br> 3. Winner of the Battle between the two Trainers.<br>
		In case the two Trainers are still tied, they will have to do a Tiebreaker Match.<br><br>
		The Battles will be Single Battles which follow the usual rules.<br>
		For every Battle your are allowed to take 6 Pok&eacute;mon with you. You are not stuck with the one Team, you are allowed to have a pool of 10 Pok&eacute;mon.<br>
		In the Match however you are only allowed to use 4 Pok&eacute;mon.<br>
		Only Pok&eacute;mon which are not on the <a href="rules.php#banlist" id="jump">Ban List</a> are allowed.<br>
		A player's team cannot contain two Pok&eacute;mon with the same <a href="https://bulbapedia.bulbagarden.net/wiki/List_of_Pok%C3%A9mon_by_National_Pok%C3%A9dex_number" id="link">National Pok&eacute;dex number.</a><br>
		No two Pok&eacute;mon of the same team may hold the same item.<br>
		All Pok&eacute;mon will be auto-leveled to Lv. 50 <br>
		Per Team you are only allowed to take 1 Legendary or Mythical (which is not on the Ban List) and 1 Ultra Beast with you. <br>
		Hidden Abilities, Z-Moves, Mega Evolution are allowed.<br>
		NO HACKED POK&eacute;MONs!<br><br>
		The two best of each group will advance to the Kockout Stage.<br><br>
		
		<h3 id="knockout" class="position">Knockout Stage</h3>
		In the Knockout Stage the Trainers will play in the Best of 3 mode (first Trainer to win 2 Matches).<br><br>
				
		The Rules from the Group Stage stay nearly the same.<br>
		The only exceptions being:<br> 1. You are now allowed to use a full party in the battle<br> 2. Every Trainer can substitute 1 Pok&eacute;mon per Series between the Matches.<br><br>
		The Winner of the Final gets the Titel "KING" and has the possibility to Battle me (Prime) in a final Showdown.<br><br>
		
		<h3 id="primus" class="position">Prime Battle</h3>
		The Prime Battle is completely optinal and is just a fun addition to the tournament.<br><br>
		The Rules are the same as in the Knockout Stage.<br>
		If you can manage to defeat me, you get the Titel "PRIME KING"<br><br><br>
		
		
		<h2 id="prices" class="position">Prices:</h2><br>
		<table id="price">
			<tr>
					<td><font color="#BB03F8">PRIME KING </font><br>(replaces the KING Prices)</td>
					<td><img src="images/shiny-eevee.gif"><br>min. 4 max IV</td>
					<td><img src="images/psc-20.png" width="132px" height="132px"></td>
					<td>Wildcard for the next<br>Prime League Knockout Stage </td>
			</tr>
			<tr>
					<td> <font color="gold">KING</font></td>
					<td><img src="images/shiny-eevee.gif"><br>min. 4 max IV</td>
					<td><img src="images/psc-15.png" width="132px" height="132px"></td>
			</tr>
			<tr>
					<td><font color="silver">2nd Place</font></td>
					<td><img src="images/psc-10.png" width="132px" height="132px"></td>
			</tr>
			<tr>
					<td><font color="#A9521F">3rd Place</font></td>
					<td><img src="images/psc-5.png" width="132px" height="132px"></td>
			</tr>
		</table>
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