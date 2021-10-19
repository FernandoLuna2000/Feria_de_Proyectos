<?php
//abrimos la sesión
session_start();
 
//Si la variable sesión está vacía
if (!isset($_SESSION['profesor'])) 
{
   /* nos envía a la siguiente dirección en el caso de no poseer autorización */
   header("Location: ../IntegradoraII/Index.php"); 
}
else{
    include_once("Formulario2.php");
}
?>