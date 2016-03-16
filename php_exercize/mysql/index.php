<?php
//connhesisone al db
$link = mysql_connect("a22docente","softuser","_s0ft*");
mysql_select_db("fanqook");

//esecuzione query
//$query = mysql_query("SELECT login, password from utente");

//echo "<TABLE border=1>\n";

//while($record = mysql_fetch_assoc($query)){
	
	//echo "<tr>";
	//echo "<td>".$record['login']."</td>";
	//echo "<td>".$record['password']."</td>";
	//echo "</tr>\n";
//}
//echo "</table>\n";

//Menù con login e value=id

//controlla se l'utente ha inviato la form
if (isset($_REQUEST["azione"])){
	if($_REQUEST["azione"]=="Invia"){
	mysql_query("INSERT INTO post(utente,titolo,testo) VALUES(".$_REQUEST["id_utente"].","."'".$_REQUEST["titolo"]."',".
	"'".$_REQUEST["post"]."'".")");
	echo mysql_error();
	}
	
}
echo "<form method='post'>\n";

echo "<select name='id_utente'>\n";
	$query = mysql_query("SELECT id, login from utente");
	while($record = mysql_fetch_assoc($query)){
	echo "<option value='".$record["id"]."'>";
	echo $record["login"];
	echo "</option>\n";

	}
echo "</select>	";

echo "<br /><input type='text' name='titolo' maxlegth='100' placeholder='Titolo'><br /><br />";
echo "<textarea type='text' name='post' cols=80 ROWS=20 placeholder='Post'></textarea><br /><br />";
echo "<input type='submit' value='Invia' name='azione'>\n";
echo "</form>\n";
?>
