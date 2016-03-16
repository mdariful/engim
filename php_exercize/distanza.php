<?php
include "distchil.php";

//trova le possibili città di partenza
$listapartenza=array_keys($distanze);
$listadestinazione=array();
//inizializzo partenza
$partenza="";
if(isset($_GET["partenza"])){
	if(isset($distanze[ $_GET["partenza"]])){
	$partenza=$_GET["partenza"];
	//trova le città destizione in base alla città di partenza specificata
	$listadestinazione=array_keys($distanze[$partenza]);
	}
}

$destinazione="";
if(isset($_GET["destinazione"])){
	if(isset($distanze [$partenza] [$_GET["destinazione"]])){
	$destinazione=$_GET["destinazione"];
	}
}
$distanza="sconosciuta";
if($partenza != "" && $destinazione != ""){
	//città di destinazione e di partenza sono valide allora:
	$distanza=$distanze[$partenza][$destinazione];
}
?>
<html>
<form method="GET">
	<?php if($partenza == "") : ?>
<select name="partenza">
	<?php foreach($listapartenza as $c) : ?>
	<option value="<?php echo $c; ?>"><?php echo $c; ?></option>
	<br />
	<?php endforeach; ?>
</select>
<?php else :?>
	Citta' di partenza: <?php echo $partenza; ?>
	<br />
	<input type="hidden" value="<?php echo $partenza; ?>" name="partenza"></input>
<?php endif; ?>

<br />

<?php if ($partenza != "" && $destinazione == "") : ?>
Selezione citta' di destinazione:
<select name="destinazione">:
	<?php foreach($listadestinazione as $c) : ?>
	<option value="<?php echo $c; ?>"><?php echo $c; ?></option>
	<br />
	<?php endforeach; ?>
</select>
<?php endif; ?>


<input name="calcola" type="submit" value="NEXT"></input>
</form>
<?php
if(isset($_GET["calcola"])){
	echo "La distanza tra ".$partenza." e ".$destinazione." e' ".$distanza."km";}
	?>
</html>
