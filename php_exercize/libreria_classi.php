<?php
	//classe solo con proprietà
	//senza metodi
	class Indirizzo {
					public $nome;
					public $cognome;
					public $indirizzo;
					public $tel;
		
			public function nomeCompleto() {
				$n=$this->nome . " " . $this->cognome;//rappresenta l'oggetto stesso quando richiamato. 
				return $n;
			}
			public function visualizza() {
			$n=$this->nomeCompleto();
			$n=$n."<br />";
			$n=$n. $this->indirizzo;
			$n=$n."<br />";
			//$n=$n. $this->"Cellulare: ".cellulare."<br />";
			$n=$n. $this->tel."<br />";//$this all'interno di un metodo, serve ad accedere alle proprietà e ai metodi dell'oggetto su cui il metodo è stato chiamato
		
			return $n;
			}
	
	}
//new class
	// prendi la classe indirizzo ed estendilo a questa classe
	class IndirizzoEsteso extends Indirizzo{
			public $cellulare;
			
			public function visualizza() {
			$n=parent::visualizza();//parent:: per richiamare un metodo della classe padre
			$n=$n. $this->cellulare;
		
			return $n;
			}
			
			
			
	}
//tipi di metodi
//instance method metodo che si può chiamare solo sull'istanza della calsse
//static method metodo che si può chimare solo sulla classe stessa
//classe animale
//i nome delle classi inizia con maiuscolo
//le costanti tutto maiuscolo
class Animali{
			CONST NZAMPE=0;
			public $nome;
			public function verso(){
				return "non so...";
				}
			
}	
class Cane extends animali{
			CONST NZAMPE=4;
			public function verso(){
				return "bau bau";
				}
	}
class Papero extends animali{
			CONST NZAMPE=2;
			public function verso(){
				return "quak quak";
				}
	}
class Pesce extends animali{
			CONST NZAMPE=0;
			public function verso(){
				return ".........";
				}
	}


	
?>
