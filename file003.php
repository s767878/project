
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Result</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>

	
	<div class="bg-img">
		<h1>Result</h1>
		
	
<?php

	$arr=$_POST['string_arr'];
	$arr_string=implode(",", (array)$_POST['string_arr']);

	$arr_current_string=explode(',', $arr_string);
	
    $counter=0;
    
   
   for($i = 0; $i < count($arr_current_string)-1; $i++){
	$current_str = $arr_current_string[$i];
	$c_length = strlen($current_str);
	$next_str = $arr_current_string[$i+1];
	if ($current_str[$c_length-1] == $next_str[0]) {
		continue;
	} else {

		$counter++;
		
	}
}
echo $counter;
echo '<br>';
?>
</div>
	
</body>
</html>