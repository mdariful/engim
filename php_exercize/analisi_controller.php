<?php
	$testo="";
	if(isset($_POST["testo"])){
	        $testo=$_POST["testo"];
	}
	$spazio=" ";
	$mytext=explode($spazio , $testo);
	echo "numero parole=" . count($mytext)."<br />";
	
	echo "$testo <br />";

	foreach($mytext as $parola){
	if(isset($frequenzaparola[$parola])){
		$frequenzaparola[$parola]++;	
				}
	else{
		$frequenzaparola[$parola]=1;		
		}
	}	
	
	
	arsort($frequenzaparola);
	foreach( $frequenzaparola as $p => $conteggio )
         {
            echo $p. "=" .$conteggio . "<br />";
         }



	$i=0;
	foreach( $frequenzaparola as $p => $conteggio ){
	if (++$i>3) break;
	echo $conteggio . "=" . $p;}
?>

