<html>
<form id="potenza" method="POST">
<input type="text" placeholder="Price" name="p"><br>
<input type="text" placeholder="Tax" name="t"><br>
<input type="submit" value="Submit">
</form>
</html>
<?php
if(isset($_POST['p']) && isset($_POST['t'])){
	$p=$_POST['p'];
	$t=$_POST['t'];
	$r=$p+$p*$t/100;
	echo "tax: $r";
}
?>
