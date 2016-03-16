<html style="background-color:#c1bdba;">
<form method="POST" style="background-color:rgba(19,35,47,0.9);margin:0 auto; width:25%;padding:25px;  box-shadow: 0px 0px 8px rgba(0,0,0,0.4);border-radius:4px;">

<input style="width:100%;text-align:center;margin-bottom:10px;padding:10px;" type="text" name="nome" placeholder="nome">

<input style="width:100%;text-align:center;margin-bottom:10px;padding:10px;" type="text" name="cognome" placeholder="cognome">

<input style="width:100%;text-align:center;margin-bottom:10px;padding:10px;" type="text" name="indirizzo" placeholder="indirizzo">

<input  style="width:100%;text-align:center;margin-bottom:10px;padding:10px;" type="text" name="tel" placeholder="telefono">

<input style="width:100%;text-align:center;margin-bottom:10px;padding:10px;" type="text" name="cellulare" placeholder="cellulare">

<input type="submit" style="background-color: #00b22d;font-weight: 700; color: #fff !important;  border: 1px solid #028a25;  padding:10px; width:100%;text-align:center;">

</form>
</html>
<!--<html style="background-color:#c1bdba;">
<form method="POST" style="background-color:rgba(19,35,47,0.9);margin:0 auto; width:25%;padding:25px;  box-shadow: 0px 0px 8px rgba(0,0,0,0.4);border-radius:4px;">
<p style="text-align:center">Animaliario</p>
<input style="width:100%;text-align:center;margin-bottom:10px;padding:10px;" type="text" name="nome" placeholder="nome">

<input type="submit" style="background-color: #00b22d;font-weight: 700; color: #fff !important;  border: 1px solid #028a25;  padding:10px; width:100%;text-align:center;">

</form>
</html>-->
<?php
	include "libreria_classi.php";
	//if (isset($_POST["nome"]) && isset($_POST["cognome"]) && isset($_POST["indirizzo"]) && isset($_POST["tel"]) ){
		//	$indirizzo = new Indirizzo();//istanzia un oggetti
			//$indirizzo->nome=$_POST["nome"];//-> per accedere a una proprietà oppure richiamare un metodo se il nome ha le parentesi è un metodo
			//$indirizzo->cognome=$_POST["cognome"];
			//$indirizzo->indirizzo=$_POST["indirizzo"];
			//$indirizzo->tel=$_POST["tel"];
			//$indirizzo->cellulare=$_POST["cellulare"];
			//echo "<br /><center>".$indirizzo->nome;
			//echo "<br />".$indirizzo->cognome;
			//echo "<br />".$indirizzo->indirizzo;
			//echo "<br />".$indirizzo->tel ."</center>";
			//echo "<center>" . "nome:" .$indirizzo->nome."<br />";
			//echo "cognome:" . $indirizzo->cognome."<br />";
			//echo "nome cognome:" . $indirizzo->nomeCompleto()."<br />";
			//echo "indirizzo" . $indirizzo->tel."<br />". "</center>";
			//echo "<br />"."<center style='padding:20px;border:2px solid black;margin-top:20px;margin: auto;width:25%;'>" . $indirizzo->visualizza()."</center>";
			
	//}
	
	
	
	if (isset($_POST["nome"]) && isset($_POST["cognome"]) && isset($_POST["indirizzo"]) && isset($_POST["tel"]) && isset($_POST["cellulare"]) ){
			$indirizzo = new IndirizzoEsteso();//istanzia un oggetti
			$indirizzo->nome=$_POST["nome"];//-> per accedere a una proprietà oppure richiamare un metodo se il nome ha le parentesi è un metodo
			$indirizzo->cognome=$_POST["cognome"];
			$indirizzo->indirizzo=$_POST["indirizzo"];
			$indirizzo->tel=$_POST["tel"];
			$indirizzo->cellulare=$_POST["cellulare"];
			echo "<br /><center>".$indirizzo->nome;
			echo "<br />".$indirizzo->cognome;
			echo "<br />".$indirizzo->indirizzo;
			echo "<br />".$indirizzo->tel ."</center>";
			echo "<center>" . "nome:" .$indirizzo->nome."<br />";
			echo "cognome:" . $indirizzo->cognome."<br />";
			echo "nome cognome:" . $indirizzo->nomeCompleto()."<br />";
			echo "indirizzo" . $indirizzo->tel."<br />". "</center>";
			echo "<br />"."<center style='padding:20px;border:2px solid black;margin-top:20px;margin: auto;width:25%;'>" . $indirizzo->visualizza()."</center>";
			
	}

?>
