<html>
<form id="potenza" method="POST">
<input type="text" placeholder="anni" name="anni"><br>
<input type="text" placeholder="optional" name="opt"><br>
<input type="submit" value="Submit">
</form>
</html>
<?php
$price=100;
$op=40;
$use=20;
if(isset($_POST['anni']) && isset($_POST['opt'])){
	$a=$_POST['anni'];
	$o=$_POST['opt'];
	$usati=((($a*360)/30));
	$maxprice=($price+($o*$op))-($use*$usati);
	echo $maxprice;

}
?>
