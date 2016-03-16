<html>
<form id="potenza" method="POST">
<input type="text" name="num"><br>
<input type="submit" value="Submit">
</form>
</html>
<?php
if (isset($_POST['num'])){
$quad=$_POST['num']*$_POST['num'];
echo $quad;
}
else{
	echo "nessun valore definito";
	}
?>
