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
	$arr=["abc", "cde", "fgh"];
	$arr_string=implode(',', $arr);

	$arr_single=str_split($arr_string);

	echo "<pre>";
	var_dump($arr_string);
	echo "</pre>";
	echo "<br>";

	$arr_current_string=explode(',', $arr_string);

	echo "<pre>";
	var_dump($arr_current_string);
	echo "</pre>";
	echo "<br>";



	$char_first=0;
	
	$every_char=str_split($arr_current_string[0]);
	echo "<pre>";
	var_dump($every_char);
	echo "</pre>";
	echo "<br>";

	$count_every=count($arr_current_string);
	$count_char=count($every_char);
	$counter=0;
	$str_replace=0;
	
	

	foreach ($arr_current_string as $key => $value) {
		for ($i=0; $i <$count_every ; $i++) { 
			if ($arr_current_string[$i][$count_char-1]==$arr_current_string[$i+1]) {
                continue;
				
			}

			else(){
				$str_replace=
				$counter++;
			}
		}
	}

	echo $counter;

  

	?>
</body>
</html>