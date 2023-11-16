<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db = mysqli_connect('localhost', 'root', '1234', 'mysitedb') or die('Fail');
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];
    // Verificar que la nueva contraseña y la confirmación coincidan
    if ($new_password != $confirm_password) {
        echo "Las contraseñas no coinciden.";
    } else {
        // Verificar si la contraseña actual es correcta 
        $user_id = $_SESSION['user_id'];
        $get_user_query = "SELECT contraseña FROM tUsuarios WHERE id = $user_id";
        $result = mysqli_query($db, $get_user_query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashed_current_password = $row['contraseña'];

            // Verificar la contraseña actual usando password_verify
            if (password_verify($current_password, $hashed_current_password)) {
                $hashed_new_password = password_hash($new_password, PASSWORD_DEFAULT);
                $update_query = "UPDATE tUsuarios SET contraseña = '$hashed_new_password' WHERE id = $user_id";
                mysqli_query($db, $update_query);
                echo "Contraseña cambiada exitosamente.";
            } else {
                echo "Contraseña actual incorrecta.";
            }
        } else {
            echo "Error al obtener la información del usuario.";
        }
    }
    mysqli_close($db);
}
?>