<?php
include "databaseprenotazioni.php";
?>
<html>
	<style>
	table{border:2px solid black;}
	td{width:20px;height:20px;border:solid black;}
	tr{border:solid black;}
	</style>
<body>
<table>

<tr>
	<td></td>
<?php for ($i=1;$i<=10; $i++) : ?>
<td><?php echo $i; ?></td>
<?php endfor; ?>
</tr>
<?php foreach($posti as $fila => $postioccupati) : ?>

<tr>
	<td><?php echo $fila; ?></td>
	<?php for ($i=1;$i<=10; $i++) : ?>
		<td>
			<?php
			if (isset($postioccupati[$i])){
				echo "X";
			}
			else{
				echo " .";
				}
			?>
		</td>
		<?php endfor; ?>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>
