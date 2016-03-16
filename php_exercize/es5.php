<html>
<form id="potenza" method="POST">
<input type="text" placeholder="var1" name="var1"><br>
<input type="text" placeholder="var2" name="var2"><br>
<input type="submit" value="Submit">
</form>
</html>
<?php
if(isset($_POST['var1']) && isset($_POST['var2'])){
	$a=$_POST['var1'];
	$b=$_POST['var2'];
	list($b, $a) = array($a, $b);
echo $a ."<br>". $b;
}
?>
