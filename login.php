<?php 
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=prime_users', 'prime_prime', 'l1e45ac37yt');
 
if(isset($_GET['login'])) {
    $username = $_POST['username'];
    $passwort = $_POST['passwort'];
    
    $statement = $pdo->prepare("SELECT * FROM users WHERE username = :username");
	$statement2 = $pdo->prepare("SELECT * FROM users s JOIN werte w ON s.id = w.userid WHERE s.id = w.userid AND s.username = :username");
    $result = $statement->execute(array('username' => $username));
	$result = $statement2->execute(array(':username' => $username));
    $user = $statement->fetch();
	$rang = $statement2->fetch();
        
    //Überprüfung des Passworts
    if ($user !== false && password_verify($passwort, $user['passwort'])) {
        $_SESSION['userid'] = $user['id'];
		$_SESSION['username'] = $user['username'];
		$_SESSION['rank'] = $rang['rank'];
		$_SESSION['PP'] = $rang['PP'];
        die('Login successful. Continue <a href="index.php">here</a>');
    } else {
        $errorMessage = "Username or Passwort are wrong!<br>";
    }
    
}
?>
<!DOCTYPE html> 
<html> 
<head>
  <title>Login</title>
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

a{
	color:white;
	text-decoration: none;
}

a:hover {
  color: white;
  text-decoration: underline;
}
  </style> 
</head> 
<body>
 
<?php 
if(isset($errorMessage)) {
    echo $errorMessage;
}
?>
 <div id="formular">
 <h1>Sign In</h1><br>
<form action="?login=1" method="post">
Username:<br>
<input type="text" id="username" onkeyup="CheckFunction()" size="40" maxlength="14" name="username"><br><br>
 
Password:<br>
<input type="password" id="passwort" size="40" onkeyup="CheckFunction()" maxlength="19" name="passwort"><br><br><br>
 
<input type="submit" id="sendButton" value="Sign In">
</form>
<br><a href="passwortvergessen.php"><font size="2">Forgot Password?</font></a>
<br><a href="registrieren.php"><font size="2">Not registered yet?</font></a>
</div>
<script>
	var button = document.getElementById("sendButton");
	var feld = document.getElementById("username");
	var passwort = document.getElementById("passwort");
	button.disabled = true;
    function CheckFunction(){
        if(feld.value !='' && passwort.value !='')
            button.disabled = false;            
        else
            button.disabled = true;
    };
</script>
</body>
</html>