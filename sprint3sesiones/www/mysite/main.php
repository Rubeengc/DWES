  <?php
	$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
?>
<html>
<head>
<link href="https://fonts.googleapis.com/css2?family=Pixelify+Sans:wght@500&family=Raleway:ital,wght@0,400;1,100&family=Russo+One&display=swap" rel="stylesheet">

<style>
	h1{
		font-family: 'Russo One', sans-serif;
	}
	img {
	
	text-align:center;
	opacity: 0; /* Inicialmente, establecer la opacidad a 0 para la animación */
	transition: opacity 0.5s ease; /* Definir la transición de la opacidad */
	
        }

	img:hover {
		opacity: 1; /* Cambiar la opacidad a 1 al hacer hover */
	}

        body {
            background-color: lightblue;
            text-align: center;
        }

        hr {
            width: 50%;
            margin: auto;
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
