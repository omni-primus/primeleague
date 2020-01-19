<?php
$pdo = new PDO('mysql:host=localhost;dbname=prime_users', 'prime_prime', 'l1e45ac37yt');
 
if(!isset($_GET['userid']) || !isset($_GET['code'])) {
 die("Link is invalid. Links to reset passwords only last for 24 hours and can only be used once.");
}
 
$userid = $_GET['userid'];
$code = $_GET['code'];
 
//Abfrage des Nutzers
$statement = $pdo->prepare("SELECT * FROM users WHERE id = :userid");
$result = $statement->execute(array('userid' => $userid));
$user = $statement->fetch();
 
//Überprüfe dass ein Nutzer gefunden wurde und dieser auch ein Passwortcode hat
if($user === null || $user['passwortcode'] === null) {
 die("No User found.");
}
 
if($user['passwortcode_time'] === null || strtotime($user['passwortcode_time']) < (time()-24*3600) ) {
 die("Your Code has expired. Request a new link.");
}
 
 
//Überprüfe den Passwortcode
if(sha1($code) != $user['passwortcode']) {
 die("Your link is invalid. Please check if you entered the right URL.");
}
 
//Der Code war korrekt, der Nutzer darf ein neues Passwort eingeben
 
if(isset($_GET['send'])) {
 $passwort = $_POST['passwort'];
 $passwort2 = $_POST['passwort2'];
 
 if($passwort != $passwort2) {
 echo "The passwords have to match!";
 } else { //Speichere neues Passwort und lösche den Code
 $passworthash = password_hash($passwort, PASSWORD_DEFAULT);
 $statement = $pdo->prepare("UPDATE users SET passwort = :passworthash, passwortcode = NULL, passwortcode_time = NULL WHERE id = :userid");
 $result = $statement->execute(array('passworthash' => $passworthash, 'userid'=> $userid ));
 
 if($result) {
 die("Your password was successfully changed. You can now log in again.");
 }
 }
}
?>
<!DOCTYPE html> 
<html> 
<head>
  <title>Forgot Password</title>
  <link href="stylesheet.css" rel="stylesheet">
  <style>
  input[type=text], input[type=email], input[type=password], input[type=color]{
    border: 1px solid white;
    border-radius: 4px;
	background-color: black;
    color: white;
	padding:12px 20px;
	-webkit-transition: 0.5s;
	transition: 0.5s;
	outline: none;
	margin-bottom:5px;
	width:100%;
	height:36px;
}

input[type=color]{
	background-color:black;
}
input[type=submit]{
    border: 2px solid transparent;
	border-image: linear-gradient(to top right, #33ccff 0%, #66ffff 100%);
	border-image-slice: 1;
    border-radius: 4px;
	background-color: black;
    color: white;
	font-size:20px;
	font-family: arial;
	font-weight: bold;
	padding: 0px;
	-webkit-transition: 0.5s;
	transition: 0.5s;
	outline: none;
	margin-bottom:5px;
	width:100%;
	height:50px;
}

input[type=submit]:disabled{
    border: 2px solid grey;
	border-image: none;
	border-image-slice: 1;
    border-radius: 4px;
	background-color: black;
    color: grey;
	padding: 0px;
	-webkit-transition: 0.5s;
	transition: 0.5s;
	outline: none;
	margin-bottom:5px;
	width:100%;
}

input[type=text]:focus, input[type=email]:focus, input[type=password]:focus {
  border: 2px solid #27e5e8;
}
h1{
	text-align:left;
	
}

#formular{
	background-color:#101010;
	width:600px;
	text-align:left;
	margin: 0 auto;
	padding: 30px 20px;
	border:1px solid white;
	border-radius:10px;
}
  </style> 
</head>
<div id="formular">
<h1>Reset Password</h1><br><br>
<form action="?send=1&amp;userid=<?php echo htmlentities($userid); ?>&amp;code=<?php echo htmlentities($code); ?>" method="post">
Please enter a new password:<br>
<input id="password" type="password" name="passwort" onkeyup="CheckFunction()"><br><br>
 
Confirm password:<br>
<input id="password2" type="password" name="passwort2" onkeyup="CheckFunction()"><br><br><br>
 
<input id="sendButton" type="submit" value="Reset Password">
</form>
</div>
 <script>
	var button = document.getElementById("sendButton");
	var feld = document.getElementById("password");
	var feld2 = document.getElementById("password2");
	button.disabled = true;
    function CheckFunction(){
        if(feld.value !='' && feld2.value !='')
            button.disabled = false;            
        else
            button.disabled = true;
    };
</script>
</body>