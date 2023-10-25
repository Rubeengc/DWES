<?php
 $db = mysqli_connect('localhost','root','1234','mysitedb') or die('Fail');
?>
<html>
 <body>
   <?php
	if (!isset($_GET['peliculas_id'])){
		die('No se ha especificado una pelicula');
		}
	$pelicula_id = $_GET['peliculas_id'];
	$query ='SELECT * FROM tPeliculas where id='.$pelicula_id;
	$result = mysqli_query($db,$query) or die ('Query error');
	$only_row = mysqli_fetch_array($result);
	echo '<h1>'.$only_row['nombre'].'</h1>';
	echo '<h2>'.$only_row['duracion'].'</h2>';
	echo '<img src="'.$only_row['url_imagen'].'"width=600 height=600 ></img>';
    ?>
    <h3>Comentarios:</h3>
	<ul>
	  <?php
		$query2 = 'SELECT * FROM tComentarios WHERE peliculas_id='.$pelicula_id;
		$result2 = mysqli_query($db,$query2) or die ('Query error');
		while ($row = mysqli_fetch_array($result2)){
		 echo '<li>'.$row['comentario'].'</li>';
		echo '<h3>'.$row['fecha'].'</h3>';
		

		}
		mysqli_close($db);
	   ?>
  </ul>
<p>Deja un comentario nuevo:</p>
<form action="/comment.php" method="post">
	<textarea rows="4" cols="50" name="new_comment"></textarea><br>
	<input type="hidden" name="peliculas_id" value=" <?php echo $pelicula_id; ?>" >
	<input type="submit" value="Comentar">
</form>
 </body>
</html>
