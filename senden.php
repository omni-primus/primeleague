<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>Senden</title>
</head>
<body>
<?php
if(!isset($_SESSION['userid'])) {
	if($_POST['von']!="" and $_POST['mail']!="" and $_POST['gym']!="" and $_POST['stage']!="" and $_POST['code']!="")
	{
			send1();
	}
	else
	{
			echo "You forgot something, go back and fill all fields!.";
	}
}
else{
	if($_POST['gym']!="" and $_POST['stage']!="")
	{
			send();
	}
	else
	{
			echo "Gym-Leader or Stage Field was somehow empty(Congratz on doing that).";
	}
}

	function send(){
	$empf="doa2wsw@yahoo.de";
	$betreff= "Gym Battle";
	$from="From: ";
	$from .= $_SESSION['username'];
	$from .= " <";
	$from .= "\n";
	$text = "Neue Herrausforderung: ";
	$text .= $_SESSION['username'];
	$text .= " fordert die Arena ";
	$text .= $_POST['gym'];
	$text .= " ";
	$text .= $_POST['stage'];
	$text .= " herraus.\n";
	
	mail($empf, $betreff, $from, $text);
	echo "Challenge request was sent. Soon you'll receive an e-Mail with all information you need.";
	}
	
	function send1(){
	$empf="doa2wsw@yahoo.de";
	$betreff= "Gym Battle";
	$from="From: ";
	$from .= $_POST['von'];
	$from .= " <";
	$from .= $_POST['mail'];
	$from .= ">\n";
	$from .= "Reply-To: ";
	$from .= $_POST['mail'];
	$from .= "\n";
	$text = "Neue Herrausforderung: ";
	$text .= $_POST['von'];
	$text .= " fordert die Arena ";
	$text .= $_POST['gym'];
	$text .= " ";
	$text .= $_POST['stage'];
	$text .= " herraus\n Friend code: ";
	$text .= $_POST['code'];
	
	mail($empf, $betreff, $from, $text);
	echo "Challenge request was sent. Soon you'll receive an e-Mail with all information you need.";
	}
?>

</body>
</html>