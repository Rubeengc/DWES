<?php
// Iniciar la sesión
session_start();
// Destruir la sesión
session_destroy();
header("Location: login.html");
exit();
?>