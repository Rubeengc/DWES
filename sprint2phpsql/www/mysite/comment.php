<?php
 $db = mysqli_connect('localhost','root','1234','mysitedb') or die('Fail');
?>
<html>
	<body>
		<?php
		  $peliculas_id = $_POST['peliculas_id'];
		  $comentario = $_POST['new_comment'];

	 	  $query = "INSERT INTO tComentarios (comentario,usuario_id,peliculas_id) VALUES ('".$comentario."',NULL,".$peliculas_id.")";
		  mysqli_query($db,$query) or die('Error');
		  echo "<p>Nuevo comentario ";
		  echo mysqli_insert_id($db);
		  echo " añadido</p>";
		  echo "<a href='/detail.php?peliculas_id=".$peliculas_id."'>Volver</a>";
		  mysqli_close($db);
		?>

</body>




</html>
