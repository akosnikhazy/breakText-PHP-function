<?php
function breakText($t,$n)
{
    $words = explode(' ',$t);
	
	$count 	= 0;
	$r 		= '';
	
	foreach($words as $word)
	{
		$count += ($count)?strlen(' ' . $word):strlen($word);
		
		if($count < $n)
			$r .= ($count == strlen($word))?$word:' ' . $word;
		else
			break;
		
	}
	
    return $r;
}
?>
