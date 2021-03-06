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
<title>Prime Entertainment</title>
<link rel="icon" href="images/logo.png">
<link href="stylesheet.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Orbitron|Oswald" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
</script>
<style>
@media (max-width: 960px)
{
	h3{
	text-align:center;
	}
}
@media (max-width: 769px)
{
	#platzhalter{
		display:none;
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


<div class="slideshow-container">

	<div class="mySlides fade">
		<a href="Battle-Area.html"><img src="images/banner1n.png"></a>
	</div>
	
	<div class="mySlides fade">
		<a href="content3.php"><img src="images/banner2n.png"></a>
	</div>
	
	<div class="mySlides fade">
		<a href="content2.php"><img src="images/banner3n.png"></a>
	</div>
	
	<!-- Buttons vor und zurück -->
	<a class="prev" onClick="plusSlides(-1)">&#10094;</a>
	<a class="next" onClick="plusSlides(1)">&#10095;</a>
</div>

<!-- Kreise -->
<div class="kreise">
	<a id="btn-promo" href="#">Read More</a>
	<span class="dot" onClick="currentSlide(1)"></span>
	<span class="dot" onClick="currentSlide(2)"></span>
	<span class="dot" onClick="currentSlide(3)"></span>
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  var button = document.getElementById("btn-promo");
  var linker = ["Battle-Area.html", "content3.html", "content2.html"]
  
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  button.href = linker[slideIndex-1];
}
</script>

<div id="platzhalter"></div>

		<div id="body-content">
		<div class ="news">
			<div class="news-body">
				<a href="PEL.php">
					<img src="images/news-banner1.png">
				</a>
					<div class="news-text">
					<h3>Sign Up for the PEL!</h3>
					The PEL September is here, sign up and battle against Trainers to earn yourself the Shiny Pok&eacute;mon of September.<br>
					Click on the Banner to get to the Sign Up.<br>	

					</div>		
			</div>
			
			<div class="news-body">
				<a href="Battle-Area.php">
					<img src="images/news-banner-gym.png">
				</a>
					<div class="news-text">
					<h3>Full Stage 2 now available <br></h3>
					Finally they are released. Battle Blaine and Giovanni to earn the final badges of Stage 2.
					</div>
			</div>
			<div class="news-body">
				<a href="content3.php">
					<img src="images/news-banner3.png">
				</a>
					<div class="news-text">
					<h3>New Feature: GIFT POK&eacute;MON</h3>
					Win in Stage 2 Gyms and get yourself a Gym Pok&eacute;mon for your Collection. Click on the Banner to see which Pok&eacute; you can get.
					</div>
			</div>
		</div>
		</div>
		
		<div id="body-content">
			
		<h1 style="margin-top:50px">Welcome to Prime Entertainment</h1><br><br>
		<p>On this page you find Pok&eacute;mon Battles and you can look for Shiny Pok&eacute;mon.</p><br>

		<p>You are able to choose between four areas.</p><br>

		<p>The first area contains the Prime Entertainment League (PEL). Here you can battle monthly against other trainers to earn Shiny or competitive Pok&eacute;mon.</p><br>

		<p>The second area is a Gym Battle Area. Here you can battle various Gym Leaders to earn badges.
		The Teams of the Gym Leaders are related to the original Kanto Gym Leaders and their Pok&eacute;mon. 
		There are 2 Stages. In the first Stage you fight with four Pok&eacute;mon and in the second with 6 Pok&eacute;mon. 
		Stage 1 has many Pre-Evolved Pok&eacute;mon but in Stage 2 the Leaders will have fully evolved Pok&eacute;mon with one Mega-Pok&eacute;mon and some Z-Moves.
		The Winner obtains a badge for each Stage, which means there are 8 Badges for each Stage.</p>
<br>
		<p>The third area is the Prime League. Trainer, who obtained at least all Stage 1 Badges, are allowed to participate. </p>
<br>
		<p>And the last area is the Trainer Database. In this area all Trainers are registered who have participated in at least one Gym Battle.
		Every Pok&eacute;mon which was used gets registered here.</p>
<br>
		</div>
<!-- </div> -->

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