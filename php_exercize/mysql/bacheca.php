<?php
//connhesisone al db
$link = mysql_connect("a22docente","softuser","_s0ft*");
mysql_select_db("fanqook");

//esecuzione query
$query = mysql_query("SELECT post.id, date_format(dataora,'%e/%m/%Y %T') as dataora, utente.login, titolo, testo FROM post JOIN utente ON post.utente=utente.id ORDER BY post.dataora DESC LIMIT 10");



while($record = mysql_fetch_assoc($query)){
	echo "<TABLE border=1 style='width:50%; margin:10px auto;'>\n";
	echo "<tr><th>Data e Ora</th><th>Utente</th><th>Titolo</th></tr>\n";
	echo "<tr>";
	echo "<td>".$record['dataora']."</td>";
	echo "<td>".$record['login']."</td>";
	echo "<td>".$record['titolo']."</td>";
	
	echo "</tr>\n";
	echo "<td colspan='100%'>".$record['testo']."</td>";
	//echo "<td><a href='?post=".$record["id"]."'>".$record['titolo']."</a></td>";
	echo "</table>\n";
}


//Menù con login e value=id

//controlla se l'utente ha inviato la form
