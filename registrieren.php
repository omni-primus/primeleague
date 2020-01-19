<?php 
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=prime_users', 'prime_prime', 'l1e45ac37yt');
?>
<!DOCTYPE html> 
<html> 
<head>
  <title>Sign Up</title>
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
<body>
 
<?php
$showFormular = true; //Variable ob das Registrierungsformular anezeigt werden soll
 
if(isset($_GET['register'])) {
    $error = false;
	$username = $_POST['uname'];
	$color = $_POST['color'];
    $email = $_POST['email'];
    $passwort = $_POST['passwort'];
    $passwort2 = $_POST['passwort2'];
  
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Enter a valid eMail!<br>';
        $error = true;
    }     
    if(strlen($passwort) == 0) {
        echo 'Please enter a password!<br>';
        $error = true;
    }
    if($passwort != $passwort2) {
        echo 'The passwords don´t match!<br>';
        $error = true;
    }
	if(strlen($username) == 0) {
        echo 'Please enter a Username!<br>';
        $error = true;
    }
    
    //Überprüfe, dass die E-Mail-Adresse noch nicht registriert wurde
    if(!$error) { 
        $statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        $result = $statement->execute(array('email' => $email));
        $user = $statement->fetch();
        
        if($user !== false) {
            echo 'eMail is allready registered!<br>';
            $error = true;
        }    
    }
    
    //Keine Fehler, wir können den Nutzer registrieren
    if(!$error) {    
        $passwort_hash = password_hash($passwort, PASSWORD_DEFAULT);
        
        $statement = $pdo->prepare("INSERT INTO users (email, passwort, username, color) VALUES (:email, :passwort, :username, :color)");
		$statement2 = $pdo->prepare("INSERT INTO werte (id, rank, PP, userid) VALUES (DEFAULT, DEFAULT, DEFAULT, (select id from users where username = :username))");
        $result = $statement->execute(array('email' => $email, 'passwort' => $passwort_hash, 'username' => $username, 'color' => $color));
		$result = $statement2->execute(array('username' => $username));
        
        if($result) {        
            echo 'You signed up successfully. <a href="login.php">To the Login</a>';
            $showFormular = false;
        } else {
            echo 'There was an error by safing!<br>';
        }
    } 
}
 
if($showFormular) {
?>
 
<div id="formular">
	<h1>Sign Up</h1><br>
	<form action="?register=1" method="post">
		Username:<br>
		<input id="username" onkeyup="CheckFunction()" type="text" size="40" maxlength="14" name="uname"><br><br>

	E-Mail:<br>
	<input id="emaila" onkeyup="CheckFunction()" type="email" size="40" maxlength="30" name="email"><br><br>
	
	Color:<br>
	<input id="farbe" onchange="CheckColor()" value="#ffffff" type="color" name="color"><br><br>
	 
	Your Password:<br>
	<input id="pw1" onkeyup="CheckFunction()" type="password" size="40"  maxlength="19" name="passwort"><br>
	 
	Confirm Password:<br>
	<input id="pw2" onkeyup="CheckFunction()" type="password" size="40" maxlength="19" name="passwort2"><br><br><br>
	 
	<input type="submit" id="sendButton" value="Sign Up">
	</form>
</div>
<script>
	var button = document.getElementById("sendButton");
	var feld = document.getElementById("username");
	var email = document.getElementById("emaila");
	var pw1 = document.getElementById("pw1");
	var pw2 = document.getElementById("pw2");
	var farbe = document.getElementById("farbe");
	button.disabled = true;
    function CheckFunction(){
        if(feld.value !='' && email.value !='' && pw1.value !='' && pw2.value !='')
            button.disabled = false;            
        else
            button.disabled = true;
    }
	
	function CheckColor(){
        var farbe = document.getElementById("farbe").value;
		var element = document.getElementById("farbe");
		
		element.style.backgroundColor = farbe;
    };
</script>
<?php
} //Ende von if($showFormular)
?>
 
</body>
</html>