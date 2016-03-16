<html>

<form method="get">
	<input type="text" name="cibo"/>
	<input type="submit" value="cerca"/>

</form>
</html>
<?php
	//include "database.php";


	//if(isset($_GET["cibo"])){
//	$cibo=$_GET["cibo"];
	//$cibo= ucfirst(strtolower($cibo));
	//if (isset($cibieingredienti[$cibo])) {
	//	echo $cibieingredienti [$cibo];
	//} else {
	//	echo "<br />";		
	//	echo $cibo . "non esistente";
	//} 

//}
//if isset serve per il controllo del programma.
//doppio apice interpreta la variabile all'interno.
//apice singolo non interpreta la variabile. 
include "database.php";
if(isset($_GET["cibo"])){
	foreach($cibieingredienti as $cibo=>$ingr){

		$pos = strpos($ingr, $_GET["cibo"]);
		if ($pos !== false) {
			echo "Ho trovato con ingrediente '$ingr' il seguente cibo: '$cibo'"."<br />";
		}
		
	}
}
?>

