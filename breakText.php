<?php
function breakText($t,$n)
{
    $words = explode(' ',$t);
	
	$count 	= 0;
	$r 		= '';
	
	foreach($words as $word)
	{
		$count += strlen(' ' . $word);
		
		if($count < $n)
			$r .= ' ' . $word;
		else
			break;
		
	}
	
    return $r;
}
?>
