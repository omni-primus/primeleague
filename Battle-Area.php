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
<!DOCTYPE html lang="en">
<html>
<head>
<title>Gym Battles</title>
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, initinal-scale=1">
<link rel="icon" href="images/logo.png">
<link href="stylesheet.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Orbitron|Oswald" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
td:hover{
	background-color: grey;
}
th{
	border: 1px solid white;
}
a:link#jump {
	color: #13B5D2;
}

a:visited#jump{
	color: #13B5D2;
}

a:link#link {
color: #BA73D2;
}

a:visited#link{
	color:#BA73D2;
}

h4{
	font-size:30px;
	text-align:center;
}

h2{
	text-align: left;
	text-decoration: none;
}

th#matchups{
	border: none;
}

table#rec{
	display:inline-block;
}

table#rec2{
	float: right;
}

#body-content{
	text-align:center;
	height: auto;
}

select{
	width:184px;
	height:46px;
	padding: 12px 20px;
	border: 2px solid white
	border-radius: 4px;
	background-color: black;
	color: white;
	margin-bottom: 8px;
}

input[type=submit]{
	width:200px;
}

details[open]{
	height: auto;
}

.userpoke{
	height:264px;
}

.userpoke2{
	height:264px;
}

.types{
	float:left;
}

@media (max-width: 887px)
{
	.userpoke2{
	height:350px;
	}
}

@media (max-width: 599px)
{
	.userpoke{
	height:350px;
	}
}

@media (max-width: 455px)
{
	.userpoke2{
	height:32em;
	}
}
</style>
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

		<div id="body-content">
		<h1>Challenge a Gym</h1><br>
		<form method="post" action="senden.php">
			<select name="gym" id="gym">
				<option value="Brock">Brock</option>
				<option value="Misty">Misty</option>
				<option value="Lt.Surge">Lt. Surge</option>
				<option value="Erika">Erika</option>
				<option value="Koga">Koga</option>
				<option value="Sabrina">Sabrina</option>
				<option value="Blaine">Blaine</option>
				<option value="Giovanni">Giovanni</option>
			</select>

			<select name="stage" id="stage">
				<option value="1">1</option>
				<option value="2">2</option>
			</select>

			<input type="submit" value="Challange">
		</form>
		
		<div id="platzhalter2"></div>
		
		<h4><a href="rules.php" id="jump">Here you can find all the Rules for the Gym Battles.</a></h4>
		<!-- <div id="platzhalter2"></div> -->
		
		<div class="topnav">
		<ul class="gymnav">
			<li class="dropdown">
			<a href="javascript:void(0)" class="dropbttn" style="background-image:url(images/brock-head.png);height:110px; width: 110px;">
				<span class="head"><img src="images/felsorden-silver.png" alt="Felsorden" height="110" width="110"></span>
			</a>
			
			
			<div class="stage-content">
			<section class="stage">
				<button class="stage-detail">Stage 1</button>
				<button class="stage-detail">Stage 2</button>
			</section>
			</div>
			</li>
			
			<li class="dropdown">
			<a href="javascript:void(0)" class="dropbttn" style="background-image:url(images/misty-head.png);height:110px; width: 110px;">
				<span class="head"><img src="images/quellorden-silver.png" alt="Quellorden" height="110" width="110"></span>
			</a>
			
			<div class="stage-content">
			<section class="stage2">
				<button onclick="stage-detail()" class="stage-detail">Stage 1</button>
				<button onclick="stage-detail()" class="stage-detail">Stage 2</button>
			</section>
			</div>
			</li>
			<li class="dropdown">
			<a href="javascript:void(0)" class="dropbttn" style="background-image:url(images/lt_surge-head.png);height:110px; width: 110px;">
				<span class="head"><img src="images/donnerorden-silver.png" alt="Donnerorden" height="110" width="110"></span>
			</a>
			
			<div class="stage-content">
			<section class="stage3">
				<button onclick="stage-detail()" class="stage-detail">Stage 1</button>
				<button onclick="stage-detail()" class="stage-detail">Stage 2</button>
			</section>
			</div>
			</li>
			<li class="dropdown">
			<a href="javascript:void(0)" class="dropbttn" style="background-image:url(images/erika-head.png);height:110px; width: 110px;">
				<span class="head"><img src="images/farborden-silver.png" alt="Farborden" height="100" width="100"></span>
			</a>
			
			<div class="stage-content">
			<section class="stage4">
				<button onclick="stage-detail()" class="stage-detail">Stage 1</button>
				<button onclick="stage-detail()" class="stage-detail">Stage 2</button>
			</section>
			</div>
			</li>
			<li class="dropdown">
			<a href="javascript:void(0)" class="dropbttn" style="background-image:url(images/koga-head.png);height:110px; width: 110px;">
				<span class="head"><img src="images/seelenorden-silver.png" alt="Seelenorden" height="100" width="100"></span>
			</a>
			
			<div class="stage-content">
			<section class="stage5">
				<button onclick="stage-detail()" class="stage-detail">Stage 1</button>
				<button onclick="stage-detail()" class="stage-detail">Stage 2</button>				
			</section>
			</div>
			</li>
			<li class="dropdown">
			<a href="javascript:void(0)" class="dropbttn" style="background-image:url(images/sabrina-head.png);height:110px; width: 110px;">
				<span class="head"><img src="images/sumpforden-silver.png" alt="Sumpforden" height="100" width="100"></span>
			</a>
			
			<div class="stage-content">
			<section class="stage6">
				<button onclick="stage-detail()" class="stage-detail">Stage 1</button>
				<button onclick="stage-detail()" class="stage-detail">Stage 2</button>
			</section>
			</div>
			</li>
			<li class="dropdown">
			<a href="javascript:void(0)" class="dropbttn" style="background-image:url(images/blaine-head.png);height:110px; width: 110px;">
				<span class="head"><img src="images/vulkanorden-silver.png" alt="Vulkanorden" height="100" width="100"></span>
			</a>
			
			<div class="stage-content">
			<section class="stage7">
				<button onclick="stage-detail()" class="stage-detail">Stage 1</button>
				<button onclick="stage-detail()" class="stage-detail">Stage 2</button>
			</section>
			</div>
			</li>
			<li class="dropdown">
			<a href="javascript:void(0)" class="dropbttn" style="background-image:url(images/giovanni-head.png);height:110px; width: 110px;">
				<span class="head"><img src="images/erdorden-silver.png" alt="Erdorden" height="100" width="100"></span>
			</a>
			
			<div class="stage-content">
			<section class="stage8">
				<button class="stage-detail">Stage 1</button>
				<button class="stage-detail">Stage 2</button>
			</section>
			</div>
			</li>
		</ul>
		</div>
		
<script>
		
		// Reference the parent tag of <button>s
		var stage1 = document.querySelector('.stage');
		var stage2 = document.querySelector('.stage2');
		var stage3 = document.querySelector('.stage3');
		var stage4 = document.querySelector('.stage4');
		var stage5 = document.querySelector('.stage5');
		var stage6 = document.querySelector('.stage6');
		var stage7 = document.querySelector('.stage7');
		var stage8 = document.querySelector('.stage8');
		var brock = document.getElementsByTagName("details");

		// Register parent tag of <button>s to the click event
		stage1.addEventListener('click', toggleDetails);
		stage2.addEventListener('click', toggleDetails);
		stage3.addEventListener('click', toggleDetails);
		stage4.addEventListener('click', toggleDetails);
		stage5.addEventListener('click', toggleDetails);
		stage6.addEventListener('click', toggleDetails);
		stage7.addEventListener('click', toggleDetails);
		stage8.addEventListener('click', toggleDetails);

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
		  ...then reference the tag with the #id of "brock"+a number which
		  will end up to be a <details> tag.
		  if this <details> tag has an [open] attribute...
		  ...remove it...
		  otherwise...
		  ...add it and set it to true.
		  */
		  if (tgt !== e.currentTarget) {
			var dtl = document.getElementById('brock' + num);
			if (dtl.getAttribute('open')) {
			  dtl.removeAttribute('open');
			} else {
				for (let j = 0; j<brock.length; j++){
				brock[j].removeAttribute("open");
				}
			  dtl.setAttribute('open', true);
			}
		  }
		}
</script>

<details id="brock1">
	<summary></summary>
	<center>
	<h2>Gym&nbsp;&nbsp;: Brock</h2>
	<h2>Stage: 1</h2><br>
	<div class="userpoke">
		<table class="poke">
			<tbody><tr><td><img src="images/geodude.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/rock.png" width="46.6px" height="20px"><img src="images/types/ground.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/onix.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/rock.png" width="46.6px" height="20px"><img src="images/types/ground.png" width="46.6px" height="20px"><img src="images/types/mvp.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/rhyhorn.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/rock.png" width="46.6px" height="20px"><img src="images/types/ground.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/sudowoodo.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/rock.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
	</div>
	</center>
	<h2>Gym Winrate: 50% (2:2)</h2><br>
	<h2>Recommended Matchups:</h2><br>
	<center>
	<table class="types">
		<tbody><tr><th id="matchups">&nbsp;</th></tr>
		<tr><th id="matchups">Effectiveness:&nbsp;&nbsp;</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/grass.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">175%</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/water.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">175%</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/fight.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">100%</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/ground.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">100%</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/ice.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">87.5%</th></tr>
	</tbody></table>
		
	<table id="rec2">
		<tbody><tr>
		<td><img src="images/swampert.png" width="100px" height="85px"></td>
		<td><img src="images/kyogre.png" width="100px" height="70px"></td>
		</tr>
		<tr>
		<th id="matchups">WR: %</th>
		<th id="matchups">WR: %</th>
		</tr>
	</tbody></table>
	<br>
	</center></details>
<details id="brock2">
	<summary></summary>
	<center>
	<h2>Gym&nbsp;&nbsp;: Brock</h2>
	<h2>Stage: 2</h2><br>
	<div class="userpoke2">
		<table class="poke">
			<tbody><tr><td><img src="images/golem.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/rock.png" width="46.6px" height="20px"><img src="images/types/electric.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/mega-steelix.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/steel.png" width="46.6px" height="20px"><img src="images/types/ground.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/rhyperior.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/rock.png" width="46.6px" height="20px"><img src="images/types/ground.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/tyranitar.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/rock.png" width="46.6px" height="20px"><img src="images/types/dark.png" width="46.6px" height="20px"><img src="images/types/mvp.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/kabutops.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/rock.png" width="46.6px" height="20px"><img src="images/types/water.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/aerodactyl.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/rock.png" width="46.6px" height="20px"><img src="images/types/flying.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
	</div>
	</center>
	<h2>Gym Winrate: 83.3% (10:2)</h2><br>
	<h2>Recommended Matchups:</h2><br>
	<center>
	<table class="types">
		<tbody><tr><th id="matchups">&nbsp;</th></tr>
		<tr><th id="matchups">Effectiveness:&nbsp;&nbsp;</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/grass.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">116.6%</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/water.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">108.3%</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/fight.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">108.3%</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/ground.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">100%</th></tr>
	</tbody></table>

	<table id="rec2">
		<tbody><tr>
		<td><img src="images/ferrothorn.png" width="100px" height="90px"></td>
		<td><img src="images/mega-gyarados.png" width="100px" height="100px"></td>
		</tr>
		<tr>
		<th id="matchups">WR: %</th>
		<th id="matchups">WR: %</th>
		</tr>
	</tbody></table>
	</center>
</details>
<details id="brock3">
<summary></summary>
	<center>
	<h2>Gym&nbsp;&nbsp;: Misty</h2>
	<h2>Stage: 1</h2><br>
	<div class="userpoke">
		<table class="poke">
			<tbody><tr><td><img src="images/staryu.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/water.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/psyduck.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/water.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/goldeen.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/water.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/starmie.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/water.png" width="46.6px" height="20px"><img src="images/types/psychic.png" width="46.6px" height="20px"><img src="images/types/mvp.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
	</div>
	</center>
	
	<h2>Gym Winrate: 66.6% (4:2)</h2><br>
	<h2>Recommended Matchups:</h2><br>
	<center>
	<table class="types">
		<tbody><tr><th id="matchups">&nbsp;</th></tr>
		<tr><th id="matchups">Effectiveness:&nbsp;&nbsp;</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/grass.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">100%</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/electric.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">100%</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/dark.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">62.5%</th></tr>
	</tbody></table>
	
	<table id="rec2">
		<tbody><tr>
		<td><img src="images/ferrothorn.png" width="100px" height="90px"></td>
		<td><img src="images/vikavolt.png" width="100px" height="100px"></td>
		</tr>
		<tr>
		<th id="matchups">WR: %</th>
		<th id="matchups">WR: 50%</th>
		</tr>
	</tbody></table>
	</center>
</details>
	
<details id="brock4">
	<summary></summary>
	<center>
	<h2>Gym&nbsp;&nbsp;: Misty</h2>
	<h2>Stage: 2</h2><br>
	<div class="userpoke2">
		<table class="poke">
			<tbody><tr><td><img src="images/starmie.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/water.png" width="46.6px" height="20px"><img src="images/types/psychic.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/golduck.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/water.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/mega-gyarados.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/water.png" width="46.6px" height="20px"><img src="images/types/dark.png" width="46.6px" height="20px"><img src="images/types/mvp.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/seaking.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/water.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/politoed.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/water.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/tentacruel.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/water.png" width="46.6px" height="20px"><img src="images/types/poison.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
	</div>
	</center>
	
	<h2>Gym Winrate: 60% (3:2)</h2><br>
	<h2>Recommended Matchups:</h2><br>
	<center>
	<table class="types">
		<tbody><tr><th id="matchups">&nbsp;</th></tr>
		<tr><th id="matchups">Effectiveness:&nbsp;&nbsp;</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/electric.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">100%</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/grass.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">91.6%</th></tr>
	</tbody></table>
	
	<table id="rec2">
		<tbody><tr>
		<td><img src="images/ferrothorn.png" width="100px" height="90px"></td>
		<td><img src="images/tapu_koko.png" width="100px" height="100px"></td>
		</tr>
		<tr>
		<th id="matchups">WR: %</th>
		<th id="matchups">WR: %</th>
		</tr>
	</tbody></table>
	</center>
</details>
<details id="brock5">
<summary></summary>
	<center>
	<h2>Gym&nbsp;&nbsp;: Lt. Surge</h2>
	<h2>Stage: 1</h2><br>
	<div class="userpoke">
		<table class="poke">
			<tbody><tr><td><img src="images/pikachu.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/electric.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/voltorb.png" height="120px" width="120px" style="margin-bottom:10px;margin-top:10px;margin-left:10px;margin-right:10px;"></td></tr>
			<tr><td><center><img src="images/types/electric.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/magnemite.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/electric.png" width="46.6px" height="20px"><img src="images/types/steel.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/raichu.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/electric.png" width="46.6px" height="20px"><img src="images/types/mvp.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
	</div>
	</center>
	
	<h2>Gym Winrate: 33.3% (1:2)</h2><br>
	<h2>Recommended Matchups:</h2><br>
	<center>
	<table class="types">
		<tbody><tr><th id="matchups">&nbsp;</th></tr>
		<tr><th id="matchups">Effectiveness:&nbsp;&nbsp;</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/ground.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">116.6%</th></tr>
	</tbody></table>
	
	<table id="rec2">
		<tbody><tr>
		<td><img src="images/groudon.png" width="100px" height="80px"></td>
		<td><img src="images/garchomp.png" width="100px" height="100px"></td>
		</tr>
		<tr>
		<th id="matchups">WR: %</th>
		<th id="matchups">WR: %</th>
		</tr>
	</tbody></table>
	</center>
	</details>
	
<details id="brock6">
	<summary></summary>
	<center>
	<h2>Gym&nbsp;&nbsp;: Lt. Surge</h2>
	<h2>Stage: 2</h2><br>
	<div class="userpoke2">
		<table class="poke">
			<tbody><tr><td><img src="images/magnezone.png" height="120px" width="140px" style="margin-bottom:10px;margin-top:10px;"></td></tr>
			<tr><td><center><img src="images/types/electric.png" width="46.6px" height="20px"><img src="images/types/steel.png" width="46.6px" height="20px"><img src="images/types/mvp.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/electrode.png" height="120px" width="120px" style="margin-bottom:10px;margin-top:10px;margin-left:10px;margin-right:10px;"></td></tr>
			<tr><td><center><img src="images/types/electric.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/electivire.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/electric.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/raichu.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/electric.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/jolteon.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/electric.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/mega-ampharos.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/electric.png" width="46.6px" height="20px"><img src="images/types/dragon.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
	</div>
	</center>
	
	<h2>Gym Winrate: 66.6% (3:2)</h2><br>
	<h2>Recommended Matchups:</h2><br>
	<center>
	<table class="types">
		<tbody><tr><th id="matchups">&nbsp;</th></tr>
		<tr><th id="matchups">Effectiveness:&nbsp;&nbsp;</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/ground.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">125%</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/dragon.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">54.2%</th></tr>
	</tbody></table>

	<table id="rec2">
		<tbody><tr>
		<td><img src="images/groudon.png" width="100px" height="80px"></td>
		<td><img src="images/garchomp.png" width="100px" height="100px"></td>
		</tr>
		<tr>
		<th id="matchups">WR: %</th>
		<th id="matchups">WR: %</th>
		</tr>
	</tbody></table>
	</center>
</details>
<details id="brock7">
  <summary></summary>
	<center>
	<h2>Gym&nbsp;&nbsp;: Erika</h2>
	<h2>Stage: 1</h2><br>
	<div class="userpoke">
		<table class="poke">
			<tbody><tr><td><img src="images/bulbasaur.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/grass.png" width="46.6px" height="20px"><img src="images/types/poison.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/tangela-shiny.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/grass.png" width="46.6px" height="20px"><img src="images/shiny-stern.png" width="20px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/weepinbell.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/grass.png" width="46.6px" height="20px"><img src="images/types/poison.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/gloom.png" height="130px" width="140px" style="margin-bottom:5px;margin-top:5px;"></td></tr>
			<tr><td><center><img src="images/types/grass.png" width="46.6px" height="20px"><img src="images/types/poison.png" width="46.6px" height="20px"><img src="images/types/mvp.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
	</div>
	</center>
	
	<h2>Gym Winrate: 33.3% (1:2)</h2><br>
	<h2>Recommended Matchups:</h2><br>
	<center>
	<table class="types">
		<tbody><tr><th id="matchups">&nbsp;</th></tr>
		<tr><th id="matchups">Effectiveness:&nbsp;&nbsp;</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/fire.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">100%</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/flying.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">100%</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/ice.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">100%</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/psychic.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">87.5%</th></tr>
	</tbody></table>
	
	<table id="rec2">
		<tbody><tr>
		<td><img src="images/talonflame.png" width="100px" height="80px"></td>
		<td><img src="images/alakazam.png" width="100px" height="100px"></td>
		</tr>
		<tr>
		<th id="matchups">WR: %</th>
		<th id="matchups">WR: %</th>
		</tr>
	</tbody></table>
	</center>
	</details>
<details id="brock8">
	<summary></summary>
	<center>
	<h2>Gym&nbsp;&nbsp;: Erika</h2>
	<h2>Stage: 2</h2><br>
	<div class="userpoke2">
		<table class="poke">
			<tbody><tr><td><img src="images/vileplume-shiny.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/grass.png" width="46.6px" height="20px"><img src="images/types/poison.png" width="46.6px" height="20px"><img src="images/shiny-stern.png" width="20px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/victreebel.png" height="120px" width="140px" style="margin-bottom:10px;margin-top:10px;"></td></tr>
			<tr><td><center><img src="images/types/grass.png" width="46.6px" height="20px"><img src="images/types/poison.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/shiftry.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/grass.png" width="46.6px" height="20px"><img src="images/types/dark.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/tangrowth.png" height="140px" width="130px" style="margin-left:5px;margin-right:5px;"></td></tr>
			<tr><td><center><img src="images/types/grass.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/jumpluff.png" height="110px" width="100px" style="margin-bottom:15px;margin-top:15px;margin-left:20px;margin-right:20px;"></td></tr>
			<tr><td><center><img src="images/types/grass.png" width="46.6px" height="20px"><img src="images/types/flying.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/roserade.png" height="130px" width="120px" style="margin-bottom:5px;margin-top:5px;margin-left:10px;margin-right:10px;"></td></tr>
			<tr><td><center><img src="images/types/grass.png" width="46.6px" height="20px"><img src="images/types/poison.png" width="46.6px" height="20px"><img src="images/types/mvp.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
	</div>
	</center>
	
	<h2>Gym Winrate: 0% (0:2)</h2><br>
	<h2>Recommended Matchups:</h2><br>
	<center>
	<table class="types">
		<tbody><tr><th id="matchups">&nbsp;</th></tr>
		<tr><th id="matchups">Effectiveness:&nbsp;&nbsp;</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/fire.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">100%</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/flying.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">100%</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/ice.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">100%</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/bug.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">83.3%</th></tr>
	</tbody></table>
	
	<table id="rec2">
		<tbody><tr>
		<td><img src="images/talonflame.png" width="100px" height="80px"></td>
		<td><img src="images/volcarona.png" width="100px" height="100px"></td>
		</tr>
		<tr>
		<th id="matchups">WR: %</th>
		<th id="matchups">WR: %</th>
		</tr>
	</tbody></table>
	</center>
</details>
<details id="brock9">
  <summary></summary>
	<center>
	<h2>Gym&nbsp;&nbsp;: Koga</h2>
	<h2>Stage: 1</h2><br>
	<div class="userpoke">
		<table class="poke">
			<tbody><tr><td><img src="images/koffing.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/poison.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/grimer.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/poison.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/venonat.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/poison.png" width="46.6px" height="20px"><img src="images/types/bug.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/weezing.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/poison.png" width="46.6px" height="20px"><img src="images/types/mvp.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
	</div>
	</center>
	
	<h2>Gym Winrate: 0% (0:2)</h2><br>
	<h2>Recommended Matchups:</h2><br>
	<center>
	<table class="types">
		<tbody><tr><th id="matchups">&nbsp;</th></tr>
		<tr><th id="matchups">Effectiveness:&nbsp;&nbsp;</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/psychic.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">100%</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/ground.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">50%</th></tr>
	</tbody></table>

	<table id="rec2">
		<tbody><tr>
		<td><img src="images/alakazam.png" width="100px" height="100px"></td>
		<td><img src="images/swampert.png" width="100px" height="85px"></td>
		</tr>
		<tr>
		<th id="matchups">WR: %</th>
		<th id="matchups">WR: %</th>
		</tr>
	</tbody></table>
	</center>
	</details>
<details id="brock10">
<summary></summary>
	<center>
	
	
	<h2>Gym&nbsp;&nbsp;: Koga</h2>
	<h2>Stage: 2</h2><br>
	<div class="userpoke2">
		<table class="poke">
			<tbody><tr><td><img src="images/weezing.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/poison.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/venomoth.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/poison.png" width="46.6px" height="20px"><img src="images/types/bug.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/crobat.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/poison.png" width="46.6px" height="20px"><img src="images/types/flying.png" width="46.6px" height="20px"><img src="images/types/mvp.png" width="50px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/arbok.png" height="140px" width="130px" style="margin-left:5px;margin-right:5px;"></td></tr>
			<tr><td><center><img src="images/types/poison.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/nidoking.png" height="130px" width="140px" style="margin-bottom:5px;margin-top:5px;"></td></tr>
			<tr><td><center><img src="images/types/poison.png" width="46.6px" height="20px"><img src="images/types/ground.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/muk-alola.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/poison.png" width="46.6px" height="20px"><img src="images/types/dark.png" width="46.6px" height="20px"><img src="images/types/mvp.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
	</div>
	</center>
	
	<h2>Gym Winrate: 33.3% (1:2)</h2><br>
	<h2>Recommended Matchups:</h2><br>
	<center>
	<table class="types">
		<tbody><tr><th id="matchups">&nbsp;</th></tr>
		<tr><th id="matchups">Effectiveness:&nbsp;&nbsp;</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/psychic.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">80%</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/ice.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">66.6%</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/ground.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">58.3%</th></tr>
	</tbody></table>
	
	<table id="rec2">
		<tbody><tr>
		<td><img src="images/alakazam.png" width="100px" height="100px"></td>
		<td><img src="images/swampert.png" width="100px" height="85px"></td>
		</tr>
		<tr>
		<th id="matchups">WR: %</th>
		<th id="matchups">WR: %</th>
		</tr>
	</tbody></table>
	</center>
</details>

<details id="brock11">
  <summary></summary>
	<center>
	<h2>Gym&nbsp;&nbsp;: Sabrina</h2>
	<h2>Stage: 1</h2><br>
	<div class="userpoke">
		<table class="poke">
			<tbody><tr><td><img src="images/abra.png" height="120px" width="140px" style="padding-bottom:10px;padding-top:10px;"></td></tr>
			<tr><td><center><img src="images/types/psychic.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/drowzee.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/psychic.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/mr-mime.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/psychic.png" width="46.6px" height="20px"><img src="images/types/fairy.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/kadabra.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/psychic.png" width="46.6px" height="20px"><img src="images/types/mvp.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
	</div>
	</center>
	
	<h2>Gym Winrate: 81.81% (9:2)</h2><br>
	<h2>Recommended Matchups:</h2><br>
	<center>
	<table class="types">
		<tbody><tr><th id="matchups">&nbsp;</th></tr>
		<tr><th id="matchups">Effectiveness:&nbsp;&nbsp;</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/ghost.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">100%</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/dark.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">87.5%</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/bug.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">87.5%</th></tr>
	</tbody></table>
	
	<table id="rec2">
		<tbody><tr>
		<td><img src="images/decidueye.png" width="100px" height="100px"></td>
		<td><img src="images/lunala.png" width="100px" height="85px"></td>
		</tr>
		<tr>
		<th id="matchups">WR: %</th>
		<th id="matchups">WR: %</th>
		</tr>
	</tbody></table>
	</center>
</details>
	
<details id="brock12">
	<summary></summary>
	<center>
	
	<h2>Gym&nbsp;&nbsp;: Sabrina</h2>
	<h2>Stage: 2</h2><br>
	<div class="userpoke2">
		<table class="poke">
			<tbody><tr><td><img src="images/hypno.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/psychic.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/espeon.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/psychic.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/jynx.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/psychic.png" width="46.6px" height="20px"><img src="images/types/ice.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/slowking.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/psychic.png" width="46.6px" height="20px"><img src="images/types/water.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/mega-alakazam.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/psychic.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/gallade.png" height="140px" width="130px" style="padding-right:5px;padding-left:5px;"></td></tr>
			<tr><td><center><img src="images/types/psychic.png" width="46.6px" height="20px"><img src="images/types/fight.png" width="46.6px" height="20px"><img src="images/types/mvp.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
	</div>
	</center>
	
	<h2>Gym Winrate: 0% (0:2)</h2><br>
	<h2>Recommended Matchups:</h2><br>
	<center>
	<table class="types">
		<tbody><tr><th id="matchups">&nbsp;</th></tr>
		<tr><th id="matchups">Effectiveness:&nbsp;&nbsp;</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/ghost.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">100%</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/dark.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">91.6%</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/bug.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">91.6%</th></tr>
	</tbody></table>
	
	<table id="rec2">
		<tbody><tr>
		<td><img src="images/mega-sableye.png" width="100px" height="100px"></td>
		<td><img src="images/gengar.png" width="90px" height="85px"></td>
		</tr>
		<tr>
		<th id="matchups">WR: %</th>
		<th id="matchups">WR: %</th>
		</tr>
	</tbody></table>
	</center>
</details>
<details id="brock13">
  <summary></summary>
	<center>
	<h2>Gym&nbsp;&nbsp;: Blaine</h2>
	<h2>Stage: 1</h2><br>
	<div class="userpoke">
		<table class="poke">
			<tbody><tr><td><img src="images/growlithe.png" height="110px" width="100px" style="margin-bottom:15px;margin-left:20px;margin-right:20px;margin-top:15px;"></td></tr>
			<tr><td><center><img src="images/types/fire.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/ponyta.png" height="140px" width="130px" style="margin-left:5px;margin-right:5px;"></td></tr>
			<tr><td><center><img src="images/types/fire.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/vulpix.png" height="130px" width="130px" style="margin-left:5px;margin-right:5px;margin-top:5px;margin-bottom:5px;"></td></tr>
			<tr><td><center><img src="images/types/fire.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/magmar.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/fire.png" width="46.6px" height="20px"><img src="images/types/mvp.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
	</div>
	</center>
	
	<h2>Gym Winrate: 33.3% (1:2)</h2><br>
	<h2>Recommended Matchups:</h2><br>
	<center>
	<table class="types">
		<tbody><tr><th id="matchups">&nbsp;</th></tr>
		<tr><th id="matchups">Effectiveness:&nbsp;&nbsp;</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/water.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">100%</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/ground.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">100%</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/rock.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">100%</th></tr>
	</tbody></table>
	
	<table id="rec2">
		<tbody><tr>
		<td><img src="images/swampert.png" width="100px" height="80px"></td>
		<td><img src="images/rhyperior.png" width="100px" height="100px"></td>
		</tr>
		<tr>
		<th id="matchups">WR: %</th>
		<th id="matchups">WR: %</th>
		</tr>
	</tbody></table>
	</center>
	</details>
<details id="brock14">
	<summary></summary>
	<center>
	<h2>Gym&nbsp;&nbsp;: Blaine</h2>
	<h2>Stage: 2</h2><br>
	<div class="userpoke2">
		<table class="poke">
			<tbody><tr><td><img src="images/arcanine.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/fire.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/ninetales.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/fire.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/magmortar.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/fire.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/rapidash-shiny.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/fire.png" width="46.6px" height="20px"><img src="images/shiny-stern.png" width="20px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/mega-charizard-x.png" height="130px" width="140px" style="margin-bottom:5px;margin-top:5px;"></td></tr>
			<tr><td><center><img src="images/types/fire.png" width="46.6px" height="20px"><img src="images/types/dragon.png" width="46.6px" height="20px"><img src="images/types/mvp.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/flareon.png" height="140px" width="130px" style="padding-right:5px;padding-left:5px;"></td></tr>
			<tr><td><center><img src="images/types/fire.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
	</div>
	</center>
	
	<h2>Gym Winrate: 0% (0:1)</h2><br>
	<h2>Recommended Matchups:</h2><br>
	<center>
	<table class="types">
		<tbody><tr><th id="matchups">&nbsp;</th></tr>
		<tr><th id="matchups">Effectiveness:&nbsp;&nbsp;</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/ground.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">100%</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/rock.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">100%</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/water.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">91.6%</th></tr>
	</tbody></table>
	
	<table id="rec2">
		<tbody><tr>
		<td><img src="images/swampert.png" width="100px" height="80px"></td>
		<td><img src="images/rhyperior.png" width="100px" height="100px"></td>
		</tr>
		<tr>
		<th id="matchups">WR: %</th>
		<th id="matchups">WR: %</th>
		</tr>
	</tbody></table>
	</center>
</details>
<details id="brock15">
  <summary></summary>
	<center>
	<h2>Gym&nbsp;&nbsp;: Giovanni</h2>
	<h2>Stage: 1</h2><br>
	<div class="userpoke">
		<table class="poke">
			<tbody><tr><td><img src="images/rhyhorn.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/ground.png" width="46.6px" height="20px"><img src="images/types/rock.png" width="46.6px" height="20px"><img src="images/types/mvp.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/onix.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/ground.png" width="46.6px" height="20px"><img src="images/types/rock.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/persian.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/normal.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/kangaskhan.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/normal.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
	</div>
	</center>
	
	<h2>Gym Winrate: 33.3% (1:2)</h2><br>
	<h2>Recommended Matchups:</h2><br>
	<center>
	<table class="types">
		<tbody><tr><th id="matchups">&nbsp;</th></tr>
		<tr><th id="matchups">Effectiveness:&nbsp;&nbsp;</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/fight.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">100%</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/water.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">100%</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/grass.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">100%</th></tr>
	</tbody></table>
	
	<table id="rec2">
		<tbody><tr>
		<td><img src="images/terrakion.png" width="100px" height="80px"></td>
		<td><img src="images/hariyama.png" width="100px" height="100px"></td>
		</tr>
		<tr>
		<th id="matchups">WR: %</th>
		<th id="matchups">WR: %</th>
		</tr>
	</tbody></table>
	</center>
	</details>
	
<details id="brock16">
	<summary></summary>
	<center>
	<h2>Gym&nbsp;&nbsp;: Giovanni</h2>
	<h2>Stage 2</h2>
	<div class="userpoke2">
		<table class="poke">
			<tbody><tr><td><img src="images/nidoqueen.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/ground.png" width="46.6px" height="20px"><img src="images/types/poison.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/mega-kangaskhan.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/normal.png" width="46.6px" height="20px"><img src="images/types/mvp.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/alola-persian.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/dark.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/rhyperior.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/ground.png" width="46.6px" height="20px"><img src="images/types/rock.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/alola-dugtrio.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/ground.png" width="46.6px" height="20px"><img src="images/types/steel.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
		<table class="poke">
			<tbody><tr><td><img src="images/garchomp.png" height="140px" width="140px"></td></tr>
			<tr><td><center><img src="images/types/ground.png" width="46.6px" height="20px"><img src="images/types/dragon.png" width="46.6px" height="20px"></center></td></tr>
		</tbody></table>
	</div>
	</center>
	<h2>Gym Winrate: 0% (0:1)</h2><br>
	<h2>Recommended Matchups:</h2><br>
	<center>
	<table class="types">
		<tbody><tr><th id="matchups">&nbsp;</th></tr>
		<tr><th id="matchups">Effectiveness:&nbsp;&nbsp;</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/water.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">91.66%</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/fight.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">79.16%</th></tr>
	</tbody></table>
	<table class="types">
		<tbody><tr><th id="matchups"><img src="images/types/ground.png" width="50px" height="20px"></th></tr>
		<tr><th id="matchups">75%</th></tr>
	</tbody></table>
	
	<table id="rec2">
		<tbody><tr>
		<td><img src="images/kyogre.png" width="100px" height="70px"></td>
		<td><img src="images/terrakion.png" width="100px" height="80px"></td>
		</tr>
		<tr>
		<th id="matchups">WR: %</th>
		<th id="matchups">WR: %</th>
		</tr>
	</tbody></table>
	</center>
</details>
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