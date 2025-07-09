<?php
session_start();
<<<<<<< HEAD
session_unset();
session_destroy();
setcookie('usuario_id', '', time() - 3600, "/"); // Borrar cookie
header('Location: login.php');
=======
session_destroy();
header("Location: login.php");
>>>>>>> main
exit;
