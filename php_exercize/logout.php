<?php
//Sessioni
//Cookie
// - è una struttura dati simile a un dizionario/arraty associativo, generato dal server che lo invia client
//session_start() invia un cookie al client con i dati della sessione
//session_destroy() invalida la sessione
//Dobbiamo realizzare

//-pagina con form di login
//-pagina con form di logout
//-funzione che verifichi user e password
//-pagina privata (visibile solo dopo il login)
//form di logout
//file logout.php
include "authentication.php";
session_start();
$nomeutente="non hai una sessione attiva";
if (isset($_SESSION['login_user']) && $_SESSION['login_user']!=""){
		$nomeutente=$_SESSION['login_user'];
	}
	
	if(isset($_POST["logout"])){
		session_destroy();
	}
?>
<html>
<body>

	Buongiorno <?php echo $nomeutente; ?>

	
	<br />
<form method="post">
<input type="submit" value="logout" name="logout"></input>
</form>

</body>
</html>
