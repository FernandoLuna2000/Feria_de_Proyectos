<?php
//Conexión a nuestra BD
$mysqli = new mysqli ("localhost", "admin", "1234", "feria_Proyectos");
if ($mysqli -> connect_errno)  {
  echo "fallo al conectar a MySQL: (".$mysqli ->connect_errno . ")" . $mysqli ->connect_errno;
}else{
    if (isset($_POST["id_proyecto"]))
    {
    //Se almacena en una variable el id del registro a eliminar
    $id_p = $_POST["id_proyecto"];
    $sql = "SELECT * from proyectos WHERE idProyecto=$id_p";
    $consulta=mysqli_query($mysqli,$sql);
    while($mostrar=mysqli_fetch_array($consulta)){
      $i1 = $mostrar['idIntegrante1'];
      $i2 = $mostrar['idIntegrante2'];
      $i3 = $mostrar['idIntegrante3'];
      $i4 = $mostrar['idIntegrante4'];
      $i5 = $mostrar['idIntegrante5'];
      $i6 = $mostrar['idIntegrante6'];
      $i7 = $mostrar['idIntegrante7'];
      $i8 = $mostrar['idIntegrante8'];

  }
    header("Location: ../IntegradoraII/Formulario3.php?id=$id_p&i1=$i1&i2=$i2&i3=$i3&i4=$i4&i5=$i5&i6=$i6&i7=$i7&i8=$i8");
    exit();
    
    }
    
}
//Validar que las variables existan y contengan un valor
 ?>