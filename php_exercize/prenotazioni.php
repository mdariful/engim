<?php
include "databaseprenotazioni.php";
$cinema=queryCinema(16);

$nfila="";
$nposto="";
$risultato="";

if (isset($_POST["nfila"]) && isset($_POST["nposto"])){
		$nfila=$_POST["nfila"];
		$nposto=$_POST["nposto"];
		$risultato=$cinema->prenota($nfila, $nposto);
		
	}

?>
<html>
<style>
table{border:1px solid black;margin:0 auto;background:yellow;}
td{border:1px solid white;}
form {
  margin: 0 auto;
  width: 100px;
  margin-top: 50px;
  clear:both;
}
form input{ float:left;margin-top:20px;}
span{text-align:center;}
</style>
<table>
<?php foreach($cinema->getFile() as $fila) : ?>
	<tr>
	<?php foreach($cinema->getPosti() as $posto) : ?>
	<td>
	<?php if($cinema->isPrenotato($fila, $posto)==0) : ?>
	<li style="color:green;width:100%;text-align:center;"></li>
	<?php else : ?>
	<li style="color:red;width:100%;text-align:center;"></li>
	<?php endif; ?>
	</td>
	<?php endforeach; ?>
	</tr>
<?php endforeach; ?>
</table>
<form method="POST">
	<select name="nfila">
	<?php foreach($cinema->getFile() as $f) : ?>
	<option value="<?php echo $f ; ?>"> <?php echo $f ; ?> </option>
	<? endforeach; ?>
	</select>
	<select name="nposto">
	<?php foreach($cinema->getPosti() as $f) : ?>
	<option value="<?php echo $f ; ?>"> <?php echo $f ; ?> </option>
	<? endforeach; ?>
	</select>
	
	<input type="submit" value="prenota"></input>
	<input type="submit" value="cancella"></input>
</form>
<?php if($risultato === 0) : ?>
	<center style="color:green;text-align:center;margin-top:50px;">Il posto <?php echo $nfila; ?> e Posto <?php echo $nposto; ?> e' stato prenotato con successo</center>
<?php endif; ?>
<?php if($risultato === 1) : ?>
	<center style="color:yellow;text-align:center;margin-top:50px;">Il posto <?php echo $nfila; ?> e Post <?php echo $nposto; ?> e' gia' stato prenotato.</center>
<?php endif; ?>
<?php if($risultato === -1) : ?>
	<span style="color:red;text-align:center;margin-top:50px;">Errore</span>
<?php endif; ?>
</html>
