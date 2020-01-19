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
table#group {
    border-collapse: collapse;
	border: 1px solid white;
    width: 215px;
}

table#match {
    border-collapse: collapse;
	border: none;
}

td {
    text-align: center;
    padding: 8px;
	color:lightred;
	border-bottom: 1px solid white;
	font-weight: normal;
}

td#match {
    text-align: center;
    padding: 8px;
	border:none;
	font-weight: normal;
	padding-bottom:0px;
}

th#match {
	text-align: center;
    padding-left: 10px;
	padding-right: 10px;
	padding-top:0px;
	padding-bottom:0px;
	border-bottom: 1px solid white;
	border-left: 1px solid white;
	border-top: 1px solid white;
	border-right: 1px solid white;
}

th#score {
	text-align: center;
    padding-left: 8px;
	padding-right: 8px;
	padding-top:0px;
	padding-bottom:0px;
	border-bottom: 1px solid white;
	border-left: 1px solid white;
	border-top: 1px solid white;
	border-right: 1px solid white;
}

th span{
	display: block;
	margin-right:20px;
}

th {
    text-align: center;
    padding: 0px;
	border-bottom: 1px solid white;
	font-weight: normal;
}

th#head {
	text-align: center;
    padding: 8px;
	border-bottom: 1px solid white;
	font-weight: bold;
}

th#head2 {
	text-align: center;
    padding: 8px;
	border-bottom: 1px solid white;
	color:lightgreen;
}
tr#group:hover {background-color: grey;}
th#match:hover {background-color: #0052cc;}
th#score:hover {background-color: #656565;}

h1{
text-align:center;
}

h2{
text-align:left;
}

#platzhalter2{
	margin-top:200px;
}

</style>
	
		<div id="body-content">
		<h1>Prime League (xx/xx/xxxx - xx/xx/xxxx)</h1><br>
		<h2>Group Stage</h2><br>
		Group A &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		Group B &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<br>
		<table id="group" align="left">
		<tr id="group">
		<th id="head">Trainer</th>
		<th id="head">W</th>
		<th id="head">L</th>
		<th id="head">D</th>
		<th id="head">Diff</th>
		<th id="head">Points</th>
		</tr>
		<tr id="group">
		<th id="head2">Huren</th>
		<th id="head2">0</th>
		<th id="head2">0</th>
		<th id="head2">0</th>
		<th id="head2">+0</th>
		<th id="head2">0</th>
		</tr>
		<tr id="group">
		<th id="head2">Nutten</th>
		<th id="head2">0</th>
		<th id="head2">0</th>
		<th id="head2">0</th>
		<th id="head2">+0</th>
		<th id="head2">0</th>
		</tr>
		<tr id="group">
		<td>Feed</td>
		<td>0</td>
		<td>0</td>
		<td>0</td>
		<td>+0</td>
		<td>0</td>
		</tr>
		<tr id="group">
		<td>Trainer4</td>
		<td>0</td>
		<td>0</td>
		<td>0</td>
		<td>+0</td>
		<td>0</td>
		</tr>
		</table>
		<table id="group" align="left">
		<tr id="group">
		<th id="head">Trainer</th>
		<th id="head">W</th>
		<th id="head">L</th>
		<th id="head">D</th>
		<th id="head">Diff</th>
		<th id="head">Points</th>
		</tr>
		<tr id="group">
		<th id="head2">Trainer1</th>
		<th id="head2">0</th>
		<th id="head2">0</th>
		<th id="head2">0</th>
		<th id="head2">+0</th>
		<th id="head2">0</th>
		</tr>
		<tr id="group">
		<th id="head2">Trainer2</th>
		<th id="head2">0</th>
		<th id="head2">0</th>
		<th id="head2">0</th>
		<th id="head2">+0</th>
		<th id="head2">0</th>
		</tr>
		<tr id="group">
		<td>Trainer3</td>
		<td>0</td>
		<td>0</td>
		<td>0</td>
		<td>+0</td>
		<td>0</td>
		</tr>
		<tr id="group">
		<td>Trainer4</td>
		<td>0</td>
		<td>0</td>
		<td>0</td>
		<td>+0</td>
		<td>0</td>
		</tr>
		</table>
		<div id="platzhalter2"></div>
		Group C &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
		Group D<br>
		<table id="group" align="left">
		<tr id="group">
		<th id="head">Trainer</th>
		<th id="head">W</th>
		<th id="head">L</th>
		<th id="head">D</th>
		<th id="head">Diff</th>
		<th id="head">Points</th>
		</tr>
		<tr id="group">
		<th id="head2">Trainer1</th>
		<th id="head2">0</th>
		<th id="head2">0</th>
		<th id="head2">0</th>
		<th id="head2">+0</th>
		<th id="head2">0</th>
		</tr>
		<tr id="group">
		<th id="head2">Trainer2</th>
		<th id="head2">0</th>
		<th id="head2">0</th>
		<th id="head2">0</th>
		<th id="head2">+0</th>
		<th id="head2">0</th>
		</tr>
		<tr id="group">
		<td>Trainer3</td>
		<td>0</td>
		<td>0</td>
		<td>0</td>
		<td>+0</td>
		<td>0</td>
		</tr>
		<tr id="group">
		<td>Trainer4</td>
		<td>0</td>
		<td>0</td>
		<td>0</td>
		<td>+0</td>
		<td>0</td>
		</tr>
		</table>
		<table id="group" align="">
		<tr id="group">
		<th id="head">Trainer</th>
		<th id="head">W</th>
		<th id="head">L</th>
		<th id="head">D</th>
		<th id="head">Diff</th>
		<th id="head">Points</th>
		</tr>
		<tr id="group">
		<th id="head2">Trainer1</th>
		<th id="head2">0</th>
		<th id="head2">0</th>
		<th id="head2">0</th>
		<th id="head2">+0</th>
		<th id="head2">0</th>
		</tr>
		<tr id="group">
		<th id="head2">Trainer2</th>
		<th id="head2">0</th>
		<th id="head2">0</th>
		<th id="head2">0</th>
		<th id="head2">+0</th>
		<th id="head2">0</th>
		</tr>
		<tr id="group">
		<td>Trainer3</td>
		<td>0</td>
		<td>0</td>
		<td>0</td>
		<td>+0</td>
		<td>0</td>
		</tr>
		<tr id="group">
		<td>Trainer4</td>
		<td>0</td>
		<td>0</td>
		<td>0</td>
		<td>+0</td>
		<td>0</td>
		</tr>
		</table>
		<div id="platzhalter"></div>
		
		
		<center>
		<table id="match">
		<tr>
		<td id ="match">Quarterfinal</td>
		<td id ="match"></td>
		<td id ="match"></td>
		<td id ="match"></td>
		<td id ="match">Semifinal</td>
		<td id ="match"></td>
		<td id ="match"></td>
		<td id ="match"></td>
		<td id ="match">Final</td>
		<td id ="match"></td>
		<td id ="match"></td>
		<td id ="match">Prime Battle</td>
		</tr>
			<tr>
			<td id ="match"></td>	<!-- Platzhalter-->
			</tr>
		<tr>
		<th id="match">1st Group A</th>	<!-- Match 1 -->
		<th id="score">0</th>
		</tr>
		<tr>
		<th id="match">2nd Group B</th>
		<th id="score">0</th>
		</tr>
		<tr>
		<td id ="match"></td>			<!-- Semifinal 1 -->
		<td id="match"></td>
		<td id="match"></td>
		<td id ="match"></td>
		<th id="match">Winner Q 1</th>	
		<th id="score">0</th>
		<td id ="match"></td>
		<td id ="match"></td>
		</tr>
		<tr>
		<td id ="match"></td>			<!-- Semifinal 1 -->
		<td id="match"></td>
		<td id="match"></td>
		<td id ="match"></td>
		<th id="match">Winner Q 2</th>	
		<th id="score">0</th>
		<td id ="match"></td>
		<td id ="match"></td>
		</tr>
		<tr>
		<th id="match">1st Group C</th>	<!-- Match 2 -->
		<th id="score">0</th>
		</tr>
		<tr>
		<th id="match">2nd Group D</th>
		<th id="score">0</th>
		</tr>
		<tr>
		<td id ="match"></td>
		<td id ="match"></td>
		<td id ="match"></td>			<!-- Final -->
		<td id="match"></td>
		<td id ="match"></td>
		<td id ="match"></td>
		<td id="match"></td>
		<td id="match"></td>
		<th id="match">Winner S 1</th>	
		<th id="score">0</th>
		<td id ="match"></td>
		<th id="match">King</th>
		<th id="score">0</th>
		</tr>
		<tr>
		<td id ="match"></td>
		<td id ="match"></td>
		<td id ="match"></td>			<!-- Final -->
		<td id="match"></td>
		<td id ="match"></td>
		<td id ="match"></td>
		<td id="match"></td>
		<td id="match"></td>
		<th id="match">Winner S 2</th>	
		<th id="score">0</th>
		<td id ="match"></td>
		<th id="match">Prime</th>	
		<th id="score">0</th>
		</tr>
		<tr>
		<th id="match">1st Group B</th>	<!-- Match 3 -->
		<th id="score">0</th>
		</tr>
		<tr>
		<th id="match">2nd Group A</th>
		<th id="score">0</th>
		</tr>
		<tr>
		<td id ="match"></td>			<!-- Semifinal 2 -->
		<td id="match"></td>
		<td id="match"></td>
		<td id ="match"></td>
		<th id="match">Winner Q 3</th>	
		<th id="score">0</th>
		<td id ="match"></td>
		</tr>
		<tr>
		<td id ="match"></td>			<!-- Semifinal 2 -->
		<td id="match"></td>
		<td id="match"></td>
		<td id ="match"></td>
		<th id="match">Winner Q 4</th>	
		<th id="score">0</th>
		<td id ="match"></td>
		</tr>
		<tr>
		<th id="match">1st Group D</th>	<!-- Match 4 -->
		<th id="score">0</th>
		</tr>
		<tr>
		<th id="match">2nd Group C</th>
		<th id="score">0</th>
		</tr>
		</table>
		</center>
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