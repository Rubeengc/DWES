<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $db = mysqli_connect('localhost','root','1234','mysitedb') or die('Fail');
    
  
    if ($db->connect_error) {
        die("Error de conexión: " . $db->connect_error);
    }

    // Obtener datos del formulario
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Consultar la base de datos para obtener la contraseña hasheada
    $get_password_query = "SELECT contraseña FROM tUsuarios WHERE email='$email'";
    $result = $db->query($get_password_query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $hashed_password = $row["contraseña"];

        // Verificar la contraseña usando password_verify
        if (password_verify($password, $hashed_password)) {
            echo "Inicio de sesión exitoso. Redirigiendo a la página principal...";
            header("Location: main.php");
            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Correo electrónico no encontrado.";
    }

    mysqli_close($db);
}
?>
