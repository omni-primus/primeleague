<?php

//connect to database  
$user = "Prime";
$pass = "l1e45ac37yt";
$host = "localhost";
$dbname = "PrimeEntertainment";

$connect = mysqli_connect($host, $user, $pass, $dbname);
if(!$connect)
{
    trigger_error('Error connecting to database: '. mysqli_connect_error());
}

//get the code
$code = mysqli_real_escape_string($connect, $_POST['code']);  

//mysql query to select field code if it's equal to the code that we checked '  
$result = mysqli_query($connect, 'select Code from Codes where Code = "'. $code .'"');  
$record = mysqli_fetch_array($result);

//if number of rows fields is bigger then 0 that means the code in the database'  
if(mysqli_num_rows($result) > 0){  
    if($record['used'] == 0) {
        //and we send 0 to the ajax request  
        echo 0;
    } else{
        //and we send 1 to the ajax request  
        echo 1;  
    }
}else{  
    //else if it's not bigger then 0, then the code is not in the DB'  
    //and we send 2 to the ajax request  
    echo 2;  
}  
?>