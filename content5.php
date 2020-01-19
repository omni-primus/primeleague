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

#platzhalter3{
	margin-bottom:600px;
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
			
		<h1 style="">Kanto Event: Shiny Giveaway</h1><br>
		<img src="images/kanto-event-banner.png"><br><br>
		<script>
	$(document).ready(function() {  

        //the min chars for promo-code
        var min_chars = 6; 
		document.getElementById("knopf").style.visibility = "hidden"; 
		document.getElementById("coded").style.visibility = "hidden";
		document.getElementById("usname").style.visibility = "hidden";
		document.getElementById("shinys").style.visibility = "hidden";

        //result texts  
        var checking_html = 'Checking...';  

        //when keyup  
        $('#code').keyup(function(event){ 
            //run the character number check  
            if($('#code').val().length == min_chars){  

                //show the checking_text and run the function to check  
                $('#promo_code_status').html(checking_html);  
                check_code();
            }  
        });  

    });  

    //function to check the promo code  
    function check_code(){  

        //get code  
        var code = $('#code').val(); 
		var uname = $('#uname').val();
		var shiny = $('#shiny').val();

        //use ajax to run the check  
        $.post("check_code2.php", { code: code },  
            function(result){  

            //if the result is 0  
            if(result == 0){  
                //show that the code is correct  
                $('#promo_code_status').html(code + ' is correct.');
				document.getElementById("knopf").style.visibility = "visible";
				document.forms.kloppe.coded.value = code;
				document.forms.kloppe.usname.value = uname;
				document.forms.kloppe.shinys.value = shiny;
            }
			else if(result == 1){  
                //show that the code is correct, but already has been used 
                $('#promo_code_status').html(code + ' has allready been used.');   
            }
			else if(result == 2){  
                //show that the code is correct, but already has been used 
                $('#promo_code_status').html(code + ' is not correct.');   
            }
        });  
    } 
</script>

<center><h1>Enter Promo Code</h1>
	<form method="post" action="check_code2.php">		
		<div class="tooltip"><img src="images/help.png" height="20px" width="20px">
		<span class="tooltiptext">Enter your Username.</span></div>
		&nbsp;Username:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" id="uname" name="uname"/><br>
		<div class="tooltip"><img src="images/help.png" height="20px" width="20px">
		<span class="tooltiptext">Choose which Shiny you want to get.</span></div>
		&nbsp;Shiny:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<select id="shiny" name="shiny"/>
			<option>Venusaur</option>
			<option>Charizard</option>
			<option>Blastoise</option>
		</select><br>
		<div class="tooltip"><img src="images/help.png" height="20px" width="20px">
		<span class="tooltiptext">You get the code by earning at least one gym badge.</span></div>
		&nbsp;Promo-Code:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<input type="text" id="code" name="code" maxlength="6" />
		<div id="promo_code_status"></div>
		<br>
	</form>
	<form method="post" action="send.php" id="kloppe">
		<input type="submit" id="knopf" value="Get the Shiny"/><br>
		<input type="text" id="coded" name="coded"/><br>
		<input type="text" id="usname" name="usname"/><br>
		<input type="text" id="shinys" name="shinys"/><br>
		</center>
		
	</form>

		</div>
		
	</div>
</div>
<div id="platzhalter3"></div>
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