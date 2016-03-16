<?php
//connessioneal DB
$link = mysql_connect("a22docente","softuser","_s0ft*");
mysql_select_db("fanqook");
//esequzsione query
$query = mysql_query("SELECT login, password FROM utente");
//interazioen sui risultati
echo "<TABLE border=1\n";
while ($record = mysql_fetch_assoc($query)){
	echo "<TR>";
	echo "<td>".$record['login']."</td>";
	echo "<td>".$record['password']."</td>";
	echo "<TR>\n";
	
	
	}
echo "</TABLE>";
?>
