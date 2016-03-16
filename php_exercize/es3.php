<html>
<form id="potenza" method="POST">
<input type="text" placeholder="Valore di A" name="a"><br>
<input type="text" placeholder="Valore di B" name="b"><br>
<input type="submit" value="Submit">
</form>
</html>
<?php
if(isset($_POST['a']) && isset($_POST['b'])){
		$a=$_POST['a'];
		$b=$_POST['b'];

		if($a==0){
echo "equazione impossibile";
}
else{
	if(($a==0) && ($b==0)){
		echo "equzione indeterminata";
	}else
	{
		$x=(-$b)/$a;
		echo $x;
}
}
}
?>
