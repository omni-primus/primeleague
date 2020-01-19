<?php 
$pdo = new PDO('mysql:host=localhost;dbname=prime_users', 'prime_prime', 'l1e45ac37yt');
 
function random_string() {
 if(function_exists('random_bytes')) {
 $bytes = random_bytes(16);
 $str = bin2hex($bytes); 
 } else if(function_exists('openssl_random_pseudo_bytes')) {
 $bytes = openssl_random_pseudo_bytes(16);
 $str = bin2hex($bytes); 
 } else if(function_exists('mcrypt_create_iv')) {
 $bytes = mcrypt_create_iv(16, MCRYPT_DEV_URANDOM);
 $str = bin2hex($bytes); 
 } else {
 $str = md5(uniqid('qIO92;{LS7[PA', true));
 } 
 return $str;
}

$showForm = true;
 
if(isset($_GET['send']) ) {
 if(!isset($_POST['email']) || empty($_POST['email'])) {
 $error = "<b>Please enter your e-mail.</b>";
 } else {
 $statement = $pdo->prepare("SELECT * FROM users WHERE email = :email");
 $result = $statement->execute(array('email' => $_POST['email']));
 $user = $statement->fetch(); 
 
 if($user === false) {
 $error = "<b>There's no user with that e-Mail.</b>";
 } else {
 //Überprüfe, ob der User schon einen Passwortcode hat oder ob dieser abgelaufen ist 
 $passwortcode = random_string();
 $statement = $pdo->prepare("UPDATE users SET passwortcode = :passwortcode, passwortcode_time = NOW() WHERE id = :userid");
 $result = $statement->execute(array('passwortcode' => sha1($passwortcode), 'userid' => $user['id']));
 
  $empfaenger = $user['email'];
 $betreff = "Forgot Passwort Prime Entertainment"; //Ersetzt hier den Domain-Namen
 $from = "Prime Entertainment <prime.square7.de>"; //Ersetzt hier euren Name und E-Mail-Adresse
 $url_passwortcode = 'http://prime.square7.de/passwordreset.php?userid='.$user['id'].'&code='.$passwortcode; //Setzt hier eure richtige Domain ein
 $text = 'Hey Trainer, '.$user['username'].',
we received a request to reset your password on prime.square7.de. To reset your password click on the following link: 
'.$url_passwortcode.'
 
If you do remember your password or if you didn t request to reset your password please ignore this e-Mail.
 
See you soon,
your Prime.';
 
 mail($empfaenger, $betreff, $text, $from);
 
 echo "Go check your mails (do also look in the spam folder), you'll receive a mail with a link to reset your password."; 
 $showForm = false;
 }
 }
}
 
if($showForm):
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
<h1>Forgot Password</h1>
<br><br>
Enter your e-Mail address to receive a new password.<br><br>
 
<?php
if(isset($error) && !empty($error)) {
 echo $error;
}
?>
 
<form action="?send=1" method="post">
e-Mail:<br>
<input id="email" type="email" name="email" onkeyup="CheckFunction()" value=""><br><br>
<input type="submit" value="Get a new password" id="sendButton">
</form>
</div>
 <script>
	var button = document.getElementById("sendButton");
	var feld = document.getElementById("email");
	button.disabled = true;
    function CheckFunction(){
        if(feld.value !='')
            button.disabled = false;            
        else
            button.disabled = true;
    };
</script>
<?php
endif; //Endif von if($showForm)
?>