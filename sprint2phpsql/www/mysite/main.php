  <?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
?>
<html>
	<body>
		<h1>Conexion establecida</h1>
		<?php
		$query = 'SELECT * FROM tPeliculas';
		$result=mysqli_query($db,$query) or die ('Query error');
		while ($row = mysqli_fetch_array ($result)){
		echo $row['nombre'];
		echo '<br>';
		echo '<img src ='. $row[2].'></img>';
		echo '<br>';
		echo $row[3];
		echo '<br>';
		echo $row[4];
 		echo '<hr>';
		}
		?>
		mysqli_close($db);
	</body>
</html>
