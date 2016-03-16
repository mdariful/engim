<?php
//function addone($variabile){
//$variabile++;
//return $variabile;
//}
//echo addone(4);
//ribala stringa
function ribalta($nome){
	$r="";
	for($i=strlen($nome)-1; $i>=0; $i=$i-1){
	$r=$r.$nome[$i];	
	}
	return $r;
	}
?>
