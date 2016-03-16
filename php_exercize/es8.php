<html>
<form method="POST">
		<input type="text" name="testo" placeholder="testo"/>
		<input type="text" name="cerca" placeholder="cerca"/>
		<input type="submit" value="Invia" />
	</form>
</html>
<?php

include "mylib.php";
	echo '<br />';
	if(isset($_POST["testo"])){
		$r = new Mystring($_POST["testo"]);
		
	//ribalta testo
	echo $r->ribalta().'<br />';
	
	//visualizza array
	echo '<br />';
	$rib=$r->ribarray();
	foreach($rib as $d){
	echo $d.' '.'<br />';
	}
	
	//elimina array cercato
	//if(isset($_POST["cerca"])){
	//	$ris=$r->dividi($_POST["cerca"]);
	//foreach($ris as $array)
	//{
	//	echo $array.' ';
	//}
	//echo '<br />';}



$stringadivisa = $r->dividi($_POST["cerca"]);	
	//evidenzia
	echo $stringadivisa [0];
	echo  $stringadivisa[1] ."</br>"."stringa evidenzia:".$_POST["cerca"]."</br>";
echo $r->evidenzia($_POST["cerca"]);
}

?>








































<?php
echo '<br /> Ti ho hackerato!!!!!!';
?>
