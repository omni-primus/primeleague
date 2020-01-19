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
<title>Rules and Ban List</title>
<meta name="viewport" content="width=device-width, initinal-scale=1">
<link rel="icon" href="images/logo.png">
<link href="stylesheet.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Orbitron|Oswald" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
</script>
<script src="js/script.js"></script>
</head>
<style>

table{
	font-size:16px;
}

td:hover{
	background-color: grey;
}
th{
	border: 1px solid white;
}

.position::before{
	display:block;
	content: "";
	height:70px;
	margin-top: -70px;
	visibility: hidden;
}

h2{
text-align: left;

}

#body-content{
	font-size:26px;
}
</style>
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
	
<div id="platzhalter2"></div>
		<div id="body-content">
		<h1>Rules for Gym Battles</h1><br>
		In Gym Battles you fight against a Gym Leader Team created by me, Prime, in a Single Battle.<br>
		I created the Teams after the original Kanto Gym Leader with some additons of course.<br>
		You need one of the latest main Pok&eacute;mon series game (Ultrasun, -moon) and a 3DS to participate. <br><br>
		To challenge a Gym go to <a href="Battle-Area.php">Gym Battles</a>, right at the top you'll find a section where you have to choose a Username, enter your e-Mail, choose a Gym and Stage and leave your Friend Code so we can connect.<br>
		You can register me allready, here is my Friend Code: 4141-7837-9887.<br>
		<br>After you pressed "Challenge" wait for me to contact you on your e-Mail. I'll sent you time and date when your Battle is going to happen.<br>
		
		<br><h2>Stage 1</h2>
		In Stage 1 you can take 6 Pok&eacute;mon with you but you are only allowed to use 4.<br>
		You are not allowed to use Pok&eacute;mon which are on the <a href="#banlist">Ban List.</a><br>
		The Battle Rules are equal to the Standart Pok&eacute;mon Rules.<br>
		Mega's are not allowed in Stage 1 but you are free to use Z-Moves.<br>
		Draws allways result in a win for the Gym Leader.<br><br>
		By winning against a Stage 1 Leader you earn a Silver Badge.<br><br>
		<h2>Stage 2</h2>
		Participating in Stage 2 requires the Silver Badge of the Arena.<br>
		In Stage 2 you can use your full party without restrictions except for the <a href="#banlist">Ban List</a> of course.
		<br>The Gym Leaders will also have Megas and Z-Moves.<br>
		Draws result in a win for the Gym Leader.<br><br>
		By winning against a Stage 2 Leader you earn a Gold Badge.<br>
		Furthermore you get for each Gym Leader a <a href="content3.php">Gift Pok&eacute;mon</a>.<br><br>
		<h1 id="banlist" class="position">Ban List</h1><br>
		<center>
		<table>
		<tr>
		<td><img src="images/mewtu.png" height="150px" width="140px"></td>
		<td><img src="images/raikou.png" height="130px" width="150px"></td>
		<td><img src="images/suicune.png" height="150px" width="150px"></td>
		<td><img src="images/lugia.png" height="150px" width="150px"></td>
		<td><img src="images/latias.png" height="150px" width="150px"></td>
		</tr>
		<tr>
		<th>Mewtu</th>
		<th>Raikou</th>
		<th>Suicune</th>
		<th>Lugia</th>
		<th>Latias</th>
		</tr>
		<tr>
		<td><img src="images/primal-kyogre.png" height="150px" width="150px"></td>
		<td><img src="images/primal-groudon.png" height="110px" width="150px"></td>
		<td><img src="images/rayquaza.png" height="150px" width="150px"></td>
		<td><img src="images/deoxys.png" height="150px" width="150px"></td>
		<td><img src="images/dialga.png" height="150px" width="150px"></td>
		</tr>
		<tr>
		<th>Primal Kyogre</th>
		<th>Primal Groudon</th>
		<th>Rayquaza</th>
		<th>Deoxys (All Forms)</th>
		<th>Dialga</th>
		</tr>
		<tr>
		<td><img src="images/palkia.png" height="150px" width="150px"></td>
		<td><img src="images/giratina.png" height="140px" width="150px"></td>
		<td><center><img src="images/shaymin-sky.png" height="130px" width="130px"></center></td>
		<td><img src="images/dakrai.png" height="150px" width="150px"></td>
		<td><img src="images/arceus.png" height="150px" width="150px"></td>
		</tr>
		<tr>
		<th>Palkia</th>
		<th>Giratina (Both Forms)</th>
		<th>Shaymin (Sky Form)</th>
		<th>Dakrai</th>
		<th>Arceus</th>
		</tr>
		<tr>
		<tr>
		<td><img src="images/reshiram.png" height="150px" width="150px"></td>
		<td><img src="images/zekrom.png" height="140px" width="150px"></td>
		<td><center><img src="images/landorus.png" height="140px" width="140px"></center></td>
		<td><img src="images/kyurem.png" height="150px" width="150px"></td>
		<td><center><img src="images/genesect.png" height="140px" width="140px"></center></td>
		</tr>
		<tr>
		<th>Reshiram</th>
		<th>Zekrom</th>
		<th>Landorus (Both Forms)</th>
		<th>Kyurem (All Forms)</th>
		<th>Genesect</th>
		</tr>
		<tr>
		<td><img src="images/xerneas.png" height="150px" width="150px"></td>
		<td><img src="images/zygarde-complete.png" height="150px" width="150px"></td>
		<td><center><img src="images/hoopa.png" height="140px" width="140px"></center></td>
		<td><img src="images/necrozma-dawn.png" height="150px" width="150px"></td>
		<td><img src="images/necrozma-dusk.png" height="150px" width="150px"></td>
		</tr>
		<tr>
		<th>Xerneas</th>
		<th>Zygarde (Complete Form)</th>
		<th>Hoopa (Both Forms)</th>
		<th>Necrozma Dawn Wing</th>
		<th>Necrozma Dusk Mane</th>
		</tr>
		</center>
		</table>
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