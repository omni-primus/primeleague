<?php
session_start();
if(!isset($_SESSION['userid'])) {
    die('You have to be logged in to access this area. Go to <a href="login.php">login</a>');
}

if(isset($_POST['checkbox'])){
	$pdo = new PDO('mysql:host=localhost;dbname=prime_users', 'prime_prime', 'l1e45ac37yt');
	$username = $_SESSION['username'];
	$PP = $_SESSION['PP'];
	
	$stmnt = $pdo->prepare("select username from pel where username = :username");	
	$result = $stmnt->execute(array('username' => $username));
	$user = $stmnt->fetch();
        
        if($user !== false) {
            echo 'You are allready registered for the PEL!<br>';
		}
        else{
			$statement = $pdo->prepare("INSERT INTO pel(teilnehmerid, platz, username, wins, loses, draws, difference, PP) values(DEFAULT, 1, :username, 0, 0, 0, 0, :PP)");
			$result = $statement->execute(array('username' => $username, 'PP' => $PP));
			
			echo "You successfully sign up for the PEL. Go back to the Page for more fun ;)";
		}
}

else{
	echo "You have to accept the rules first to participate!";
}

?>
<!DOCTYPE html>
<html>
<head><title>PEL Signup</title>
</head>
<body>
<?php
?>

</body>
</html>