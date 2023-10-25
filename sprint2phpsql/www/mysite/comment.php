<?php
 $db = mysqli_connect('localhost','root','1234','mysitedb') or die('Fail');
?>
<html>
	<body>
		<?php
		  $peliculas_id = $_POST['peliculas_id'];
		  $comentario = $_POST['new_comment'];
		  $now = new DateTime("now");
		  $now = $now -> format('ymd');
	 	  $query = "INSERT INTO tComentarios (comentario,usuario_id,peliculas_id,fecha) VALUES ('".$comentario."',NULL,".$peliculas_id.",'".$now."')";
		  mysqli_query($db,$query) or die('Error');
		  echo "<p>Nuevo comentario ";
		  echo mysqli_insert_id($db);
		  echo " añadido</p>";
		  echo "<a href='/detail.php?peliculas_id=".$peliculas_id."'>Volver</a>";
		  mysqli_close($db);
		?>

</body>




</html>
