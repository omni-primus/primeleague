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
<title>Prime Database</title>
<meta name="viewport" content="width=device-width, initinal-scale=1">
<link rel="icon" href="images/logo.png">
<link href="stylesheet.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Orbitron|Oswald" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
</script>
<script src="js/script.js"></script>
<style>
details:not([open])
{
    height: 30px;
}

.userpoke{
	
}
.poke{
	float:left;
}

.taborden{
	float:left;
}

.userbadges{
	margin-top: 20px;
	float:left;
	margin-right: 30px;
	margin-left: 50px;
}

.userank{
	float:left;
	margin-right: 50px;
}

.usertokens{
	
}

details#dbase[open]
{
    height: 25em;
	
}

@media (max-width: 959px)
{
	.userpoke{
		height:264px;
	}
	details#dbase[open]{
		height: 30em;
	}
}

@media (max-width: 919px)
{
	.usertokens{
		float: none;
	}
	.userbadges{
		margin-top: 10px;
		float:none;
		height: 70px;
		width: 482px;
		max-width:100%;
	}
	.userank{
		float:none;
		margin-right: 20px;
	}
	details#dbase[open]{
		height: 35em;
	}
	.tester{
	}
}

@media (max-width: 543px)
{
	.userpoke{
		height:24.75em;
	}
	details#dbase[open]{
		height: 44em;
	}
	.userbadges{
		margin-top: 30px;
		margin-right: 0px;
		margin-left: 0px;
		font-size:0px;
	}
	.userank{
		
		margin-right: 0px;
	}
	.usertokens{
		
	}
}
@media (max-width: 459px)
{
	.userbadges{
		
	}
	details#dbase[open]{
		height: 46em;
	}
}

@media (max-width: 423px)
{
	.userbadges{
		height: 75px;
	}
}

@media (max-width: 405px)
{
	.userank{
		float:left;
		margin-right:20px;
	}
	.usertokens{
		float:left;
	}
	
}

@media (max-width: 337px)
{
	.userank{
		font-size:12px;
		margin-right:100px;
	}
	.HAAA{
		
		display: none;
	}
}

@media (max-width: 335px)
{
	.userpoke{
		height:41em;
	}
	
	details#dbase[open]{
		height: 66em;
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
	
	<div id="platzhalter2"></div>

		<div id="body-content">
		<h1>&nbsp;Trainer Database</h1><br><br>

	<details id="dbase">	<!-------------------------- Lovely -------------------------->
	<summary id="LovelyTheFirst"><center>&#9660;&nbsp;<font color="#8BBDF0">LovelyTheFirst</font>&nbsp;&#9660;</center></summary>
	<center>
	<div class="userpoke">
		<table class="poke">
			<tr><td><img src="images/tyranitar.png" width="100px" height="100px"></td></tr>
			<tr><td id="rockdark">Tyranitar</td></tr>
		</table>
		<table class="poke">
			<tr><td><img src="images/sylveon.png" width="100px" height="100px"></td></tr>
			<tr><td id="fairy">Sylveon</td></tr>
		</table>
		<table class="poke">
			<tr><td><img src="images/vikavolt.png" width="100px" height="100px"></td></tr>
			<tr><td id="elekbug">Vikavolt</td></tr>
		</table>
		<table class="poke">
			<tr><td style="padding-bottom:10px;"><img src="images/yveltal.png" width="100px" height="90px"></td></tr>
			<tr><td id="darkfly">Yveltal</td></tr>
		</table>
		<table class="poke">
			<tr><td><img src="images/charizard.png" width="100px" height="100px"></td></tr>
			<tr><td id="firefly">Charizard</td></tr>
		</table>
		<table class="poke">
			<tr><td><img src="images/vaporeon.png" width="100px" height="100px"></td></tr>
			<tr><td id="water">Vaporeon</td></tr>
		</table>
		<table class="poke">
			<tr><td><img src="images/blaziken.png" width="100px" height="100px"></td></tr>
			<tr><td id="firefight">Blaziken</td></tr>
		</table>
		<table class="poke">
			<tr><td><img src="images/garchomp.png" width="100px" height="100px"></td></tr>
			<tr><td id="dragonground">Garchomp</td></tr>
		</table>
		<table class="poke">
			<tr><td style="padding-bottom:20px;"><img src="images/metagross.png" width="100px" height="80px"></td></tr>
			<tr><td id="steelpsy">Metagross</td></tr>
		</table>
	</div>
	<div class="userbadges">
		Badges:
		<img src="images/felsorden-gold.png" width="50px" height="50px">
		<img src="images/quellorden-gold.png" width="50px" height="50px">
		<img src="images/donnerorden-gold.png" width="50px" height="50px">
		<img src="images/farborden-gold.png" width="50px" height="50px">
		<img src="images/seelenorden-gold.png" width="50px" height="50px">
		<img src="images/sumpforden-gold.png" width="50px" height="50px">
		<img src="images/vulkanorden-gold.png" width="50px" height="50px">
		<img src="images/erdorden-gold.png" width="50px" height="50px">
	</div>
	<div class="userank">
		<table>
		<tr>
		<td class="HAAA">Rank:</td>
		<td id="rank" alt="Platinum Grandmaster"><a href="content2.php"><img src="images/rank-platin.png"></a></td>
		<td>1364 PP	<br>	Friendcode: 3153-9624-0843</td>
		</tr>
		</table>
	</div>
	<div class="usertokens">
		<img src="images/PEL-Jan1.png" width="50px" height="50px" alt="PEL 01/19 1st Place" title="PEL 01/19 1st Place">
		<img src="images/PEL-Feb1.png" width="50px" height="50px" alt="PEL 02/19 1st Place" title="PEL 02/19 1st Place">
		<img src="images/PEL-Mar1.png" width="50px" height="50px" alt="PEL 03/19 1st Place" title="PEL 03/19 1st Place">
		<img src="images/PEL-Apr2.png" width="50px" height="50px" alt="PEL 04/19 2nd Place" title="PEL 04/19 2nd Place">
		<img src="images/PEL-May2.png" width="50px" height="50px" alt="PEL 05/19 2nd Place" title="PEL 05/19 2nd Place">
		<img src="images/PEL-June2.png" width="50px" height="50px" alt="PEL 06/19 2nd Place" title="PEL 06/19 2nd Place">
		<img src="images/PEL-Aug1.png" width="50px" height="50px" alt="PEL 08/19 1st Place" title="PEL 08/19 1st Place">
	</div>
	</center>
	</details>
	
	
	
	

	<details id="dbase">	<!-------------------------------- Kerberos ----------------------------------->
	<summary id="Kerberos"><center>&#9660;&nbsp;<font color="#AB651E">Kerberos</font>&nbsp;&#9660;</center></summary>
	<center>
	
	<div class="userpoke">
		<table class="poke">
			<tr><td><img src="images/alakazam.png" width="100px" height="100px"></td></tr>
			<tr><td id="psy">Alakazam</td></tr>
		</table>
		<table class="poke">
			<tr><td><img src="images/alola-marowak.png" width="80px" height="100px" style="margin-left:10px;margin-right:10px;"></td></tr>
			<tr><td id="ghostfire">Alola-Marowak</td></tr>
		</table>
		<table class="poke">
			<tr><td><img src="images/hariyama.png" width="100px" height="100px"></td></tr>
			<tr><td id="fight">Hariyama</td></tr>
		</table>
		<table class="poke">
			<tr><td style="padding-bottom:10px;"><img src="images/magby.png" width="80px" height="90px" style="margin-left:10px;margin-right:10px;"></td></tr>
			<tr><td id="fire">Magby</td></tr>
		</table>
		<table class="poke">
			<tr><td><img src="images/magneton.png" width="100px" height="100px"></td></tr>
			<tr><td id="eleksteel">Magneton</td></tr>
		</table>
		<table class="poke">
			<tr><td style="padding-bottom:10px;"><img src="images/swampert.png" width="100px" height="90px"></td></tr>
			<tr><td id="waterground">Swampert</td></tr>
		</table>
		<table class="poke">
			<tr><td style="padding-bottom:10px;"><img src="images/poliwhirl.png" width="100px" height="90px"></td></tr>
			<tr><td id="water">Poliwhirl</td></tr>
		</table>
		<table class="poke">
			<tr><td><img src="images/missingno.png" width="100px" height="100px"></td></tr>
			<tr><td id="dark">Missingno</td></tr>
		</table>
		<table class="poke">
			<tr><td><img src="images/missingno.png" width="100px" height="100px"></td></tr>
			<tr><td id="dark">Missingno</td></tr>
		</table>
	</div>
	<!-- <div class="userbadges">
		Badges:
	</div> -->
	<div class="userank">
		<table>
		<tr>
		<td class="HAAA">Rank:</td>
		<td id="rank" alt="Rookie"><a href="content2.php"><img src="images/rank-rookie.png"></a></td>
		<td>38 PP	<br>	Friendcode: 1994-3599-3051</td>
		</tr>
		</table>
	</div>
	<div class="usertokens">
		<img src="images/PEL-Feb2.png" width="50px" height="50px" alt="PEL 02/19 2nd Place" title="PEL 02/19 2nd Place">
	</div>
	</center>
	</details>
	
	
	
	<details id="dbase">	<!-------------------------------------- eviLDiabolus ----------------------------------------->
	<summary id="eviLDiabolus"><center>&#9660;&nbsp;<font color="gold">eviLDiabolus</font>&nbsp;&#9660;</center></summary>
	<!-- silber #A4A4A4 -->
	<center>
	
	<div class="userpoke">
		<table class="poke">
			<tr><td><img src="images/rhyperior.png" width="90px" height="100px" style="margin-left:5px;margin-right:5px;"></td></tr>
			<tr><td id="rockground">Rhyperior</td></tr>
		</table>
		<table class="poke">
			<tr><td><img src="images/silvally.png" width="100px" height="100px"></td></tr>
			<tr><td id="normal">Silvally</td></tr>
		</table>
		<table class="poke">
			<tr><td><img src="images/ferrothorn.png" width="100px" height="100px"></td></tr>
			<tr><td id="steelgrass">Ferrothorn</td></tr>
		</table>
		<table class="poke">
			<tr><td><img src="images/kommo-o.png" width="100px" height="100px"></td></tr>
			<tr><td id="dragonfight">Kommo-o</td></tr>
		</table>
		<table class="poke">
			<tr><td><img src="images/garchomp.png" width="100px" height="100px"></td></tr>
			<tr><td id="dragonground">Garchomp</td></tr>
		</table>
		<table class="poke">
			<tr><td><img src="images/ampharos.png" width="90px" height="100px" style="margin-left:5px;margin-right:5px;"></td></tr>
			<tr><td id="elek">Ampharos</td></tr>
		</table>
		<table class="poke">
			<tr><td style="padding-bottom:15px;"><img src="images/mamoswine.png" width="100px" height="85px"></td></tr>
			<tr><td id="iceground">Mamoswine</td></tr>
		</table>
		<table class="poke">
			<tr><td><img src="images/charizard.png" width="90px" height="100px" style="margin-left:5px;margin-right:5px;"></td></tr>
			<tr><td id="firefly">Charizard</td></tr>
		</table>
		<table class="poke">
			<tr><td><img src="images/toxapex.png" width="90px" height="100px" style="margin-left:5px;margin-right:5px;"></td></tr>
			<tr><td id="waterpoison">Toxapex</td></tr>
		</table>
	</div>
	<div class="userbadges">
		Badges:
		<img src="images/felsorden-gold.png" width="50px" height="50px">
		<img src="images/quellorden-gold.png" width="50px" height="50px">
		<img src="images/donnerorden-gold.png" width="50px" height="50px">
		<img src="images/farborden-gold.png" width="50px" height="50px">
		<img src="images/seelenorden-gold.png" width="50px" height="50px">
		<img src="images/sumpforden-gold.png" width="50px" height="50px">
		<img src="images/vulkanorden-silver.png" width="50px" height="50px">
		<img src="images/erdorden-silver.png" width="50px" height="50px">
	</div>
	<div class="userank">
		<table>
		<tr>
		<td class="HAAA">Rank:</td>
		<td id="rank" alt="Gold Master"><a href="content2.php"><img src="images/rank-gold.png"></a></td>
		<td>1106 PP	<br>	Friendcode: 4571-1353-3828</td>
		</tr>
		</table>
	</div>
	<div class="usertokens">
		<img src="images/PEL-Mar2.png" width="50px" height="50px" alt="PEL 03/19 2nd Place" title="PEL 03/19 2nd Place">
		<img src="images/PEL-Apr1.png" width="50px" height="50px" alt="PEL 04/19 1st Place" title="PEL 04/19 1st Place">
		<img src="images/PEL-May1.png" width="50px" height="50px" alt="PEL 05/19 1st Place" title="PEL 05/19 1st Place">
		<img src="images/PEL-June1.png" width="50px" height="50px" alt="PEL 06/19 1st Place" title="PEL 06/19 1st Place">
		<img src="images/PEL-Aug2.png" width="50px" height="50px" alt="PEL 08/19 2nd Place" title="PEL 08/19 2nd Place">
	</div>
	</center>
	</details>
	
	
	<details id="dbase">	<!------------------------------------- Ounaghi --------------------------------------------------->
	<summary id="Ounaghi"><center>&#9660;&nbsp;<font color="#AB651E">Ounaghi</font>&nbsp;&#9660;</center></summary>
	<center>
	
	<div class="userpoke">
		<table class="poke">
			<tr><td><img src="images/decidueye.png" width="100px" height="100px"></td></tr>
			<tr><td id="grassghost">Decidueye</td></tr>
		</table>
		<table class="poke">
			<tr><td style="padding-bottom:10px;"><img src="images/hawlucha.png" width="100px" height="90px"></td></tr>
			<tr><td id="flyfight">Hawlucha</td></tr>
		</table>
		<table class="poke">
			<tr><td><img src="images/charjabug.png" width="100px" height="100px"></td></tr>
			<tr><td id="bug">Charjabug</td></tr>
		</table>
		<table class="poke">
			<tr><td><img src="images/gengar.png" width="100px" height="100px"></td></tr>
			<tr><td id="ghostpoison">Gengar</td></tr>
		</table>
		<table class="poke">
			<tr><td><img src="images/ampharos.png" width="90px" height="100px" style="margin-left:5px;margin-right:5px;"></td></tr>
			<tr><td id="elek">Ampharos</td></tr>
		</table>
		<table class="poke">
			<tr><td style="padding-bottom:10px;"><img src="images/makuhita.png" width="90px" height="90px" style="margin-left:5px;margin-right:5px;"></td></tr>
			<tr><td id="fight">Makuhita</td></tr>
		</table>
		<table class="poke">
			<tr><td><img src="images/crabrawler.png" width="100px" height="100px"></td></tr>
			<tr><td id="fight">Crabrawler</td></tr>
		</table>
		<table class="poke">
			<tr><td><img src="images/slowpoke.png" width="100px" height="100px"></td></tr>
			<tr><td id="waterpsy">Slowpoke</td></tr>
		</table>
		<table class="poke">
			<tr><td><img src="images/gigalith.png" width="100px" height="100px"></td></tr>
			<tr><td id="rock">Gigalith</td></tr>
		</table>
	</div>
	<!-- <div class="userbadges">
		Badges:
	</div> -->
	<div class="userank">
		<table>
		<tr>
		<td class="HAAA">Rank:</td>
		<td id="rank" alt="Rookie"><a href="content2.php"><img src="images/rank-rookie.png"></a></td>
		<td>24 PP	<br>	Friendcode: 0233-1277-7512</td>
		</tr>
		</table>
	</div>
	<div class="usertokens">
		<img src="images/PEL-Jan2.png" width="50px" height="50px" alt="PEL 01/19 2nd Place" title="PEL 01/19 2nd Place">
	</div>
	</center>
	</details>


	
	
	<details id="dbase">	<!--------------------------------------- Killerdogge ------------------------------------------>
	<summary id="Killerdogge"><center>&#9660;&nbsp;<font color="#AB651E">Killerdogge</font>&nbsp;&#9660;</center></summary>
	<center>
	
	<div class="userpoke">
		<table class="poke">
			<tr><td><img src="images/decidueye.png" width="100px" height="100px"></td></tr>
			<tr><td id="grassghost">Decidueye</td></tr>
		</table>
		<table class="poke">
			<tr><td style="padding-bottom:10px;"><img src="images/kabutops.png" width="80px" height="90px" style="margin-left:10px;margin-right:10px;"></td></tr>
			<tr><td id="waterrock">Kabutops</td></tr>
		</table>
		<table class="poke">
			<tr><td><img src="images/magnemite.png" width="100px" height="100px"></td></tr>
			<tr><td id="eleksteel">Magnemite</td></tr>
		</table>
		<table class="poke">
			<tr><td><img src="images/zoroark.png" width="100px" height="100px"></td></tr>
			<tr><td id="dark">Zoroark</td></tr>
		</table>
		<table class="poke">
			<tr><td><img src="images/inkay.png" width="90px" height="100px" style="margin-left:5px;margin-right:5px;"></td></tr>
			<tr><td id="darkpsy">Inkay</td></tr>
		</table>
		<table class="poke">
			<tr><td style="padding-bottom:10px;"><img src="images/poliwhirl.png" width="90px" height="90px" style="margin-left:5px;margin-right:5px;"></td></tr>
			<tr><td id="water">Poliwhirl</td></tr>
		</table>
		<table class="poke">
			<tr><td style="padding-bottom:10px;"><img src="images/snorlax.png" width="90px" height="90px" style="margin-left:5px;margin-right:5px;"></td></tr>
			<tr><td id="normal">Snorlax</td></tr>
		</table>
		<table class="poke">
			<tr><td style="padding-bottom:10px;"><img src="images/alola-dugtrio.png" width="90px" height="90px" style="margin-left:5px;margin-right:5px;"></td></tr>
			<tr><td id="steelground">Alola-Dugtrio</td></tr>
		</table>
		<table class="poke">
			<tr><td style="padding-bottom:10px;"><img src="images/alola-raichu.png" width="90px" height="90px" style="margin-left:5px;margin-right:5px;"></td></tr>
			<tr><td id="elekpsy">Alola-Raichu</td></tr>
		</table>
	</div>
	<!-- <div class="userbadges">
		Badges:
	</div> -->
	<div class="userank">
		<table>
		<tr>
		<td class="HAAA">Rank:</td>
		<td id="rank" alt="Rookie"><a href="content2.php"><img src="images/rank-rookie.png"></a></td>
		<td>0 PP	<br>	Friendcode: 3136-6627-8352</td>
		</tr>
		</table>
	</div>
	<!--<div class="usertokens">
		<img src="images/PEL-Jan2.png" width="50px" height="50px" alt="PEL 01/19 2nd Place" title="PEL 01/19 2nd Place">
		</div>-->
	</center>
	</details>
	
	
	
	<details id="dbase">	<!-------------------------- Prof. Eich ------------------------------------>
	<summary id="Ounaghi"><center>&#9660;&nbsp;<font color="#AB651E">Prof. Eich</font>&nbsp;&#9660;</center></summary>
	<center>
	
	<div class="userpoke">
		<table class="poke">
			<tr><td style="padding-bottom:10px;">><img src="images/salamence.png" width="100px" height="90px"></td></tr>
			<tr><td id="dragonfly">Salamence</td></tr>
		</table>
		<table class="poke">
			<tr><td style="padding-bottom:10px;"><img src="images/swampert.png" width="100px" height="90px"></td></tr>
			<tr><td id="waterground">Swampert</td></tr>
		</table>
		<table class="poke">
			<tr><td><img src="images/virizion.png" width="100px" height="100px"></td></tr>
			<tr><td id="grassfight">Virizion</td></tr>
		</table>
		<table class="poke">
			<tr><td><img src="images/blacephalon.png" width="100px" height="100px"></td></tr>
			<tr><td id="ghostfire">Blacephalon</td></tr>
		</table>
		<table class="poke">
			<tr><td><img src="images/gallade.png" width="90px" height="100px" style="margin-left:5px;margin-right:5px;"></td></tr>
			<tr><td id="psyfight">Gallade</td></tr>
		</table>
		<table class="poke">
			<tr><td style="padding-bottom:20px;"><img src="images/magnezone.png" width="100px" height="80px"></td></tr>
			<tr><td id="eleksteel">Magnezone</td></tr>
		</table>
		<table class="poke">
			<tr><td style="padding-bottom:10px;"><img src="images/nidoking.png" width="100px" height="90px"></td></tr>
			<tr><td id="poisonground">Nidoking</td></tr>
		</table>
		<table class="poke">
			<tr><td><img src="images/incineroar.png" width="80px" height="100px" style="margin-left:10px;margin-right:10px;"></td></tr>
			<tr><td id="firedark">Incineroar</td></tr>
		</table>
		<table class="poke">
			<tr><td><img src="images/tapu_koko.png" width="100px" height="100px"></td></tr>
			<tr><td id="elekfairy">Tapu Koko</td></tr>
		</table>
	</div>
	<!-- <div class="userbadges">
		Badges:
	</div> -->
	<div class="userank">
		<table>
		<tr>
		<td class="HAAA">Rank:</td>
		<td id="rank" alt="Rookie"><a href="content2.php"><img src="images/rank-rookie.png"></a></td>
		<td>0 PP	<br>	Friendcode: 1350-0050-3756</td>
		</tr>
		</table>
	</div>
	<!--<div class="usertokens">
		<img src="images/PEL-Jan2.png" width="50px" height="50px" alt="PEL 01/19 2nd Place" title="PEL 01/19 2nd Place">
		</div>-->
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