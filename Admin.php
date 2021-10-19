<?php
//abrimos la sesión
session_start();
 
//Si la variable sesión está vacía
if (!isset($_SESSION['administrador'])) 
{
   /* nos envía a la siguiente dirección en el caso de no poseer autorización */
   header("Location: ../IntegradoraII/Index.php"); 
}
else{
    include_once("paginaadmin.php");
}
?>