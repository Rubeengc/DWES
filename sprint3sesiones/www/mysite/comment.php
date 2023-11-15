<?php
$db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
session_start(); 
// Verificar si el usuario está logueado
$user_id_a_insertar = 'NULL';
if (!empty($_SESSION['user_id'])) {
$user_id_a_insertar = $_SESSION['user_id'];
} else {
    // Si no está logueado, redirigir a la página de inicio de sesión
    header("Location: login.html");
    exit();
}
$peliculas_id = $_POST['peliculas_id'];
$comentario = $_POST['new_comment'];
$now = new DateTime("now");
$now = $now->format('ymd');
$query = "INSERT INTO tComentarios (comentario, usuario_id, peliculas_id, fecha) VALUES (".$comentario.", ".$user_id_a_insertar.", ".$peliculas_id.", ".$now.")";
$result = mysqli_query($db, $query);
if ($result) {
    echo "<p>Nuevo comentario añadido</p>";
} else {
    echo "<p>Error al añadir el comentario</p>";
}
echo "<a href='/detail.php?peliculas_id=".$peliculas_id."'>Volver</a>";
mysqli_close($db);
?>