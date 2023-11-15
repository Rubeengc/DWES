  <?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
?>
<html>
<head>
<style>
	h1{
	text-align: center ;

	};	
	img{
	text-align: center ;
	display: block ;
	};
body{
background-color: #FFF4E1;
}



</style>
</head>
	<body>
		<h1>Conexion establecida</h1>
		<?php
		$query = 'SELECT * FROM tPeliculas';
		$result= mysqli_query($db,$query) or die ('Query error');
		while ($row = mysqli_fetch_array ($result)){
		echo '<h1>'.$row['nombre'].'</h1>';
		echo '<br>';
		echo '<img src="' .$row[2]. '" width="500" height="500">';
		echo '<br>';
		echo $row[3];
		echo '<br>';
		echo $row[4];
		echo '<br>';
		echo '<a href ="/detail.php?peliculas_id='.$row['id'].'">Detalles</a><br>';
 	
		echo '<hr>';
		}
		echo '<a href="/logout.php">Logout</a>';
		mysqli_close($db);
		?>
		
	</body>
</html>
