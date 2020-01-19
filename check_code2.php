<?php

//get the code
$code = $_POST['code'];  

if ($code === '89ZH44'){
	echo 1;
}
elseif($code === '56HV71'){
	echo 1;
}
elseif($code === '99PA21'){
	echo 0;
}
elseif($code === '46LO91'){
	echo 0;
}
elseif($code === '17TG32'){
	echo 0;
}
elseif($code === '10ZU82'){
	echo 0;
}
else{
	echo 2;
}
?>