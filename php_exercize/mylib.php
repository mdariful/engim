<?php
class Mystring{
	private $stringa;
	public function __construct($stringa){
			$this->stringa=$stringa;
	}
	
	public function ribalta()
	{
		$string=$this->stringa;
    return strrev($string);
	}
	
	public function ribarray()
	{
		$string=$this->stringa;
		return array_reverse(explode(' ',$string));
		
	}
	
	//public	function dividi($elem){
		//$string=$this->stringa;
		//$array=explode($elem,$string);
		//return $array;
		
	//	}
	public function dividi($s){
			$string=strpos($this->stringa,$s);
			if( $string > -1) {
				
				
				$prima=substr($this->stringa, 0, $string);
				$terza=substr($this->stringa, $string + strlen($s));
				return array($prima, $terza);
			}
}
	public function evidenzia($s){
		
		$a=$this->dividi($s);
		
		return $a[0] . "<b>" . $s . "</b>" . $a [1];
	}
	
}
?>
