<?php 
session_start();
 
/* comprobamos que un usuario registrado es el que accede al archivo, 
sino no tendría sentido que pasara por este archivo */
if (!isset($_SESSION['profesor'])) 
{
    header("Location: ../IntegradoraII/Index.php");
}
 
/* usamos la función session_unset() para liberar la variable 
de sesión que se encuentra registrada */
session_unset();
 
// Destruye la información de la sesión
session_destroy();
 
//volvemos a la página principal
header("Location: ../IntegradoraII/Index.php");
 ?>