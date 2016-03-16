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
//form di login
//file login.php
include "authentication.php";
session_start();
$errore=false;
if (isset($_POST["user"]) && isset($_POST["password"]) && $_POST["user"] !="" && $_POST["password"]!=""){
	if(verifica($_POST["user"],$_POST["password"])){
	$_SESSION['login_user']=$_POST["user"];
	}else{
		$errore=true;
	}
}
?>
<html>
<body>
	<?php if(isLogged()) :?>
	Buongiorno
	<?php else : ?>
<form method="post">
<input name="user" type="text"></input>
<input name="password" type="password"></input>
<input type="submit" value="login"></input>
</form>
<?php if($errore) : ?>
	username e password non corrispondono
<?php endif; ?>

<?php endif; ?>
</body>
</html>
