<?php
//primo programma in php
//$msg="Hello world!\n";

//$msg=strtoupper($msg);
//echo $msg . "<br />";
//variabili in php
//$elem1 = "8";
//$elem2 = 2;
//echo $elem1+$elem2 . "<br />";
//variabili in php anche se una variabile è una stringa php fa un "cast" e viene calcolato comunque
//$elem1 = "8.2" . "<br />";
//$elem2 = 2;
//echo $elem1+$elem2 . "<br />";
//concatenazione
//$elem1 = "ciao" . "<br />";
//$elem2 = 2;
//echo $elem1.$elem2 . "<br />";
//array = un contenitore con all'interno delle caselle che può contenere delle variabili
//$lista = array();
//con php5 in poi
$lista = [];
array_push($lista,"ciao");
array_push($lista,"42");
//gli array sono multipizzati
//echo "questo e push" . "<br />";
array_unshift($lista,"hello");
//echo $lista[0] . "<p>0</p><br />";
//echo $lista[1] . "<p>1</p><br />";
//echo $lista[2] . "<p>2</p><br />";
//echo "questo e unshift". "<br />";
array_unshift($lista,"cammello");
//echo $lista[0] . "<p>0</p><br />";
//echo $lista[1] . "<p>1</p><br />";
//echo $lista[2] . "<p>2</p><br />";
//prende l'ultimo elemento dell'array lo cancella e lo restituisce
//echo array_pop($lista);
//toglie il primo elemento e sposta tutti gli elementi sotto
//echo array_shift($lista) . "<br />";
//echo $lista[0] . "<p>2</p><br />";
//come scorrere tutto l'array
//aggiunge nel contenitore
$lista[0]="casa";
$lista[8]="bici";
foreach($lista AS $el)
	{
	echo $el;
	echo "<br />";
	}
//stampa il numero del contenitore
foreach($lista AS $i=>$el)
        {
        echo $i."-".$el;
        echo "<br />";
        }
//
echo "l'array contiene " .count($lista)." elementi";

?>
