<?php 

	function count_vowels($kata){
		
	echo preg_match_all('/[aiueo]/i',$kata, $matches);
	
}
 

count_vowels('programmer');
echo "<br>";
count_vowels('hmm...');

