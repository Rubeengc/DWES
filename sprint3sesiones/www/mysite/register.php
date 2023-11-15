<?php
// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $db = mysqli_connect('localhost','root','1234','mysitedb') or die('Fail');

    // Obtener datos del formulario
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Verificar si las contraseñas coinciden
    if ($password != $confirm_password) {
        echo "Las contraseñas no coinciden.";
    } else {
        // Verificar si el correo ya existe en la base de datos
        $check_email_query = "SELECT * FROM tUsuarios WHERE email='$email'";
        $result = $db->query($check_email_query);

        if ($result->num_rows > 0) {
            echo "El correo electrónico ya está registrado.";
        } else {
            // Hash de la contraseña
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);

            // Insertar nuevo usuario en la base de datos
            $insert_user_query = "INSERT INTO tUsuarios (nombre, apellidos, email, contraseña) VALUES ('$nombre', '$apellidos', '$email', '$hashed_password')";

            if ($db->query($insert_user_query) === TRUE) {
                echo "Registro exitoso. Redirigiendo a la página principal...";
                // Redirigir al usuario a la página principal
                header("Location: main.php");
                exit();
            } else {
                echo "Error al registrar el usuario: " . $db->error;
            }
        }
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($db);
}
?>
