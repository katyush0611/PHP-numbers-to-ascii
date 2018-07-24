<?php 

$numbers = json_decode($_POST['numbers'], true);

file_put_contents('words.txt', convert_to_ascii($numbers) . "\n", FILE_APPEND);

echo '<p style="white-space: pre;"> ' . file_get_contents('words.txt') . '</p>';

function convert_to_ascii ($numbers) {
	$word = '';
	for ($i=0; $i < count($numbers); $i++) { 
		$word .= chr($numbers[$i]);
	}
	// var_dump(array_map('chr', $numbers));
	// $word = join('', array_map('chr', $numbers));	

	return $word;
}