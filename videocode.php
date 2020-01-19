<?php
session_start();
if(!isset($_SESSION['userid'])) {
    die('You have to be logged in to access this area. Go to <a href="login.php">login</a>');
}
 
//Abfrage der Nutzer ID vom Login
?>
<!DOCTYPE html>
<html>
<head><title>Submit Score</title>
</head>
<body>
<?php

$p1 = $_POST['p1'];
$p2 = $_POST['p2'];
$video = $_POST['video'];
$matchid = $_POST['matchid'];
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];

if($p1!="" AND $p2!="" AND $video!="")
{
	$pdo = new PDO('mysql:host=localhost;dbname=prime_users', 'prime_prime', 'l1e45ac37yt');
	//check if user allready reported a score
	$sql2 = $pdo->prepare("SELECT * from results WHERE userid = :userid AND matchid = :matchid AND p1 is null");
	$sql2->execute(array('userid' => $userid, 'matchid'=> $matchid));
	if ($sql2->rowCount() > 0) {
		//enter score in results table
		$sql = $pdo->prepare("UPDATE results SET p1 = :p1, p2 = :p2, video = :video WHERE userid = :userid AND matchid = :matchid");
		$result = $sql->execute(array('p1'=> $p1, 'p2'=> $p2, 'video'=> $video, 'userid' => $userid, 'matchid'=> $matchid));
		if($result === TRUE){
			//check if both users entered the score
			$sql3 = $pdo->prepare("SELECT * from results WHERE matchid = :matchid AND p1 is null");
			$sql3->execute(array('matchid'=> $matchid));
			if ($sql3->rowCount() == 0) {
				//check if both users entered the same score
				$sql4 = $pdo->prepare("SELECT p1, COUNT(p1), p2, COUNT(p2) FROM results where matchid = :matchid GROUP BY p1, p2 having (count(p1) > 1) AND (count(p2) > 1)");
				$sql4->execute(array('matchid'=> $matchid));
				$count = $sql4->fetchColumn(1);
				if($count == 2){
					//insert final result in final table
					echo("<font color='green'>Your Score matches the score of your opponent! </font>");
					$sql5 = $pdo->prepare("UPDATE final b set b.p1 = (SELECT a.p1 FROM results a where  matchid = :matchid AND userid = :userid), p2 = (SELECT a.p2 FROM results a where  matchid = :matchid AND userid = :userid), VC = (SELECT a.video FROM results a where  matchid = :matchid AND userid = :userid) where matchid = :matchid");
					$sql5->execute(array('matchid'=> $matchid, 'userid'=> $userid));

					//get the 2nd userid
					$sql7 = $pdo->prepare("SELECT userid FROM results WHERE matchid = :matchid AND userid != :userid");
					$sql7->execute(array('matchid'=> $matchid, 'userid'=> $userid));
					$userid2 = $sql7->fetchColumn();
					
					//get 2nd username
					$sql13 = $pdo->prepare("SELECT username FROM users WHERE id = :userid2");
					$sql13->execute(array('userid2'=> $userid2));
					$username2 = $sql13->fetchColumn();
					
					//get resultid to find out who is p1 and who is p2 and store player scores
					$sql8 = $pdo->prepare("SELECT resultid, p1, p2 FROM results WHERE matchid = :matchid AND userid = :userid");
					$sql8->execute(array('matchid'=> $matchid, 'userid'=> $userid));
					$row = $sql8->fetch(PDO::FETCH_ASSOC);
					$resultid = $row["resultid"];
					$p1 = $row["p1"];
					$p2 = $row["p2"];

					$sql9 = $pdo->prepare("SELECT resultid FROM results WHERE matchid = :matchid AND userid = :userid2");
					$sql9->execute(array('matchid'=> $matchid, 'userid2'=> $userid2));
					$resultid2 = $sql9->fetchColumn();
					
					//Get all the PEL table values
					$sql10 = $pdo->prepare("SELECT wins, loses, draws, difference, PP FROM pel WHERE username = :username");
					$sql10->execute(array('username'=> $username));
					$row2 = $sql10->fetch(PDO::FETCH_ASSOC);
					$w = $row2["wins"];
					$l = $row2["loses"];
					$d = $row2["draws"];
					$differenceo = $row2["difference"];
					$ppoints = $row2["PP"];

					$sql11 = $pdo->prepare("SELECT wins, loses, draws, difference, PP FROM pel WHERE username = :username2");
					$sql11->execute(array('username2'=> $username2));
					$row3 = $sql11->fetch(PDO::FETCH_ASSOC);
					$w2 = $row3["wins"];
					$l2 = $row3["loses"];
					$d2 = $row3["draws"];
					$differenceo2 = $row3["difference"];
					$ppoints2 = $row3["PP"];

					if($resultid < $resultid2){ //user is p1
						//calculate score difference
						$difference = $p1 - $p2;
						$difference2 = $p2 - $p1;

						$differenceo = $differenceo+$difference;
						$differenceo2 = $differenceo2+$difference2;
						//check if user won or lost
						if($difference > 0){
							$w = $w+1;	//user1 won
							$l2 = $l2+1;
							$ppoints = $ppoints+15;
							$ppoints2 = $ppoints2-7; 
						}elseif($difference < 0){
							$w2 = $w2+1; //user2 won
							$l = $l+1;
							$ppoints = $ppoints-7;
							$ppoints2 = $ppoints2+15;
						}elseif($difference == 0){
							$d = $d+1; //draw
							$d2 = $d2+1;
							$ppoints = $ppoints+5;
							$ppoints2 = $ppoints2+5;
						}
					}elseif($resultid2 < $resultid) { //user2 is p1
						//calculate score difference
						$difference = $p1 - $p2;
						$difference2 = $p2 - $p1;

						$differenceo2 = $differenceo2+$difference;
						$differenceo = $differenceo+$difference2;
						//check if user won or lost
						if($difference > 0){ 
							$w2 = $w2+1;	//user2 won
							$l = $l+1;
							$ppoints2 = $ppoints2+15;
							$ppoints = $ppoints-7; 
						}elseif($difference < 0){
							$w = $w+1; //user1 won
							$l2 = $l2+1;
							$ppoints2 = $ppoints2-7;
							$ppoints = $ppoints+15;
						}elseif($difference == 0){
							$d = $d+1; //draw
							$d2 = $d2+1;
							$ppoints = $ppoints+5;
							$ppoints2 = $ppoints2+5;
						}
					}
					//update pel table data user
					$sql12 = $pdo->prepare("UPDATE pel SET wins = :w, loses = :l, draws = :d, difference = :differenceo, PP = :ppoints WHERE username = :username");
					$sql12->execute(array('w'=> $w, 'l' => $l, 'd' => $d, 'differenceo' => $differenceo, 'ppoints' => $ppoints, 'username' => $username));
					//update pel table data user2
					$sql14 = $pdo->prepare("UPDATE pel SET wins = :w2, loses = :l2, draws = :d2, difference = :differenceo2, PP = :ppoints2 WHERE username = :username2");
					$sql14->execute(array('w2'=> $w2, 'l2' => $l2, 'd2' => $d2, 'differenceo2' => $differenceo2, 'ppoints2' => $ppoints2, 'username2' => $username2));

				}else{
					//Place an error message in error table
					echo("<font color='red'>Your Score doesnt match the score of your opponent! </font>");
					$sql6 = $pdo->prepare("INSERT INTO errors (matchid, error) VALUES(?, 'Results dont match!')");
					$sql6->execute([$matchid]);
				}
			}
			else{
				echo("Es wurde nur ein Score eingeben!");
			}

			echo "Good Job, your score was entered. It's getting checked now. Return to the Page before!";
		}else{
			echo "Oops.. Seems to be an error with the website. Try again or contact the admin.";
		}
	}else{
		echo"You allready did enter the score.";
	}
}else{
	echo "Uups.. Looks like you've missed something.";
}
?>

</body>
</html>