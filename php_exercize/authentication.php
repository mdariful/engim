
<?php
//funzione di autenticazione file authentication.php

function verifica($user, $pass){
	$utenti=array(
			array("andre","6e6bc4e49dd477ebc98ef4046c067b5f"),
			array("ciro","b5dfb5c8035df90c9a4006d8318354dc")
			);
			foreach($utenti as $u){
				if($user == $u[0] && $pass == $u[1]){
					return true;
					}
				}
	return false;
	}
	
function isLogged(){
	//session_start();
	if(isset($_SESSION['login_user']) && isset($_SESSION['login_passowrd'])){
		return true;
	}else{
		return false;
	}
}
	
?>
