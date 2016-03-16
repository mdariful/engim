<?php
$posti=array(
	"fila1" => array(
		1 => 1,
		4 => 1,
		9 => 1
		),
	"fila2" => array(
		5 => 1,
		8 => 1,
		9 => 1
		),
	"fila3" => array(
		8 => 1,
		9 => 1,
		10 => 1
		),
	"fila4" => array(
		1 => 1,
		4 => 1,
		5 => 1,
		6 => 1,
		9 => 1,
		10 => 1
		),
);
?>
<?php
class Platea {
		private $posti;
		private $postiperfila;
		public function __construct($p, $n){
			$this->posti=$p;
			$this->postiperfila=$n;
			}
		//restituisce un array
		//con i nome delle file
		public function getFile(){
			return array_keys($this->posti);
			}
		//un metodo con ritorno dei numero delle file
		public function getPosti(){
			$n=array();
			for($i=1;$i <= $this->postiperfila;$i++){
					$n[]=$i;
				}
			return $n;
			}
		//Controlla se il posto specificato è prenotato
		//ritorna un intero: 1 se il posto prenotato 0 se è libero
		public function isPrenotato($f, $p){
			if(isset($this->posti[$f]) && $p>=1 && $p <= $this->postiperfila){
				//controlla se il posto è valido
				if(isset($this->posti[$f][$p])){
					return 1;
					}else{
						return 0;
						}
				}
				else{
						return -1;
						}
					
			}
		//prenota un posto con ritorna 1 se il posto viene prenotato con successo 0 se il posto è già prenotato -1 se non sono validi
		public function prenota($f, $p){
		$prenotato=$this->isPrenotato($f, $p);
		if ($prenotato==0){
			//prenota il posto
			$this->posti[$f][$p]=1;
			return 0;
			}else{
				return $prenotato;
				}
		}
		public function cancella($f, $p){
			if($prenotato==0){
			unset($this->posti[$f][$p]);
			return 0;
			}else{
				return $prenotato;
			}
		}
}
function queryCinema($n){
			$posti=array(
			"fila1" => array(
				1 => 1,
				4 => 1,
				9 => 1
				),
			"fila2" => array(
				5 => 1,
				8 => 1,
				9 => 1
				),
			"fila3" => array(
				8 => 1,
				9 => 1,
				10 => 1
				),
			"fila4" => array(
				1 => 1,
				4 => 1,
				5 => 1,
				6 => 1,
				9 => 1,
				10 => 1
				),
		);
	return new Platea($posti, $n);
	
}
?>
