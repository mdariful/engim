<!--
<html>
<form id="potenza" method="POST">
<input type="text" placeholder="numero1" name="numero1"><br>
<!--<input type="text" placeholder="numero2" name="numero2"><br>
<input type="submit" value="Submit">
</form>
</html> -->
<?php
//function modulo($mod){
//	if($mod<0){
//			$mod=($mod * -1);
//return $mod;}}

//if(isset($_POST['numero1'])){
	//	$n=$_POST['numero'];
		//if($n<0){
			//$mod=($n * -1);
//echo $mod;
//}
//else{
//	echo "nessun valore definito";
//	}}
//$n=$_POST['numero1'];
//$result=modulo($n);
//echo $result;




class Numero
{
	private $n;
	public function __construct($numero)
	{
		$this->n = $numero;
	}
	public function modulo()
	{
		if ($this->n <0){
			return - $this->n;
		}
		return $this->n;
	}
	
	public function somma($b)
	{
		$this->n +$b;
	}
	
}
//$num=$_POST['numero1'];
//$a = new Numero($num);
//	echo $a->modulo();
	$n=5;
	$a = new Numero($b);
	echo $a->somma();
?>
