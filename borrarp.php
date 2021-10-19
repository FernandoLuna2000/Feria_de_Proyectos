<?php
// Comprueba si esta establecido el submit `submitBorrar`
if ( isset( $_POST[ 'submitBorrar' ] ) ) {

    $mysqli = new mysqli ("localhost", "admin", "1234", "feria_Proyectos");
    if ($mysqli -> connect_errno)  {
      echo "fallo al conectar a MySQL: (".$mysqli ->connect_errno . ")" . $mysqli ->connect_errno;
    }else{
        if (isset($_POST["id_proyecto"]))
        {
        //Se almacena en una variable el id del registro a eliminar
        $id_p = $_POST["id_proyecto"];
        
        //Preparar la consulta
        $sql="DELETE FROM proyectos WHERE proyectos.idProyecto = $id_p";
        $result=mysqli_query($mysqli,$sql);
        if($result){
            echo "<script> 
            alert('Eliminado Exitosamente'); 
            window.location.href='../integradoraii/Tablas.php'; 
            </script>";  
        }
        else{
            echo "<script> 
            alert('Error al Borrar'); 
            window.location.href='../integradoraii/Tablas.php'; 
            </script>"; 
        }
    
        }
    }
}
else {

  $txt = 'No entra en el if';
}

//echo $txt;
?>