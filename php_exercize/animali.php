<?php
	include "libreria_classi.php";
	
	function presenta ($animale){
		$r="Sono " . $animale->nome;
		$r.="<br /> ho " . $animale::NZAMPE ." zampe";
		$r.="<br />e faccio il verso di " . $animale->verso();
		return $r;
	}
	//crea un array di animali
	$animali=array();
	$a=new Cane();
	$a->nome="Fido";
	$animali[]=$a;
	

	$a=new Cane();
	$a->nome="Wolf";
	$animali[]=$a;
	

	$a=new Papero();
	$a->nome="Paperinio";
	$animali[]=$a;
	

	$a=new Papero();
	$a->nome="Paperinia";
	$animali[]=$a;
	

	$a=new Pesce();
	$a->nome="Nemo";
	$animali[]=$a;


	$a=new Pesce();
	$a->nome="Pesce pagliaccio";
	$animali[]=$a;
	
	foreach ($animali as $a){
		echo presenta($a);
		echo "<br /> <br />";
		}
?>
