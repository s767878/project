<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	//Получавате масив от стрингове и вашата задача е да намерите най-малкия брой промени в знаците, необходими за всеки първи знак на стринг да бъде еднакъв с последния знак от предхождащия го стринг. 
	//разделяме масива на стрингове
	//всеки стринг го разделяме на чарове
	//сравняваме последния чар на стринга с първия чар на следващия
	//
	$arr=["abc", "a", "b","c","def" ,"g","ghi"];
	$arr_string=implode(',', $arr);

	$arr_single=str_split($arr_string);

	// echo "<pre>";
	// var_dump($arr_string);
	// echo "</pre>";
	// echo "<br>";

	$arr_current_string=explode(',', $arr_string);
    $counter=0;
   //var_dump($arr_current_string);
   for($i = 0; $i < count($arr_current_string)-1; $i++){
	$current_str = $arr_current_string[$i];
	$c_length = strlen($current_str);
	//echo $current_str[$c_length-1];
	$next_str = $arr_current_string[$i+1];
	//echo "-";
	//echo $next_str[0];
	if ($current_str[$c_length-1] == $next_str[0]) {
		continue;
	} else {
		$counter++;
	}

	//echo $counter;


}
echo $counter;



	$char_first=0;
	
	$every_char=str_split($arr_current_string[0]);
	// echo "<pre>";
	// var_dump($every_char);
	// echo "</pre>";
	// echo "<br>";

	$count_every=count($arr_current_string);
	$count_char=count($every_char);
	$counter=0;
	$str_replace=0;
	
	

	// foreach ($arr_current_string as $key => $value) {
	// 	for ($i=0; $i <$count_every ; $i++) { 
	// 		if ($arr_current_string[$i][$count_char-1]==$arr_current_string[$i+1]) {
 //                continue;
				
	// 		}else{
	// 			$str_replace=
	// 			$counter++;
	// 		}
	// 	}
	// }

	// echo $counter;

  

	?>
</body>
</html>