<?php
//Conexión a nuestra BD
$mysqli = new mysqli ("localhost", "admin", "1234", "feria_Proyectos");
if ($mysqli -> connect_errno)  {
  echo "fallo al conectar a MySQL: (".$mysqli ->connect_errno . ")" . $mysqli ->connect_errno;
}else{
    if (isset($_POST["usuario"], $_POST["password"])and $_POST["usuario"]!="" and $_POST["password"]!=""){
        $usr=$_POST["usuario"];
        $pass=$_POST["password"];

        // $profesor = mysqli_query("SELECT * FROM usuarios where Nombre = '$usr' AND pass = '$pass'");
        // $administrador = mysqli_query("SELECT * FROM usuarios where Nombre = '$usr' AND pass = '$pass'");
        $sql = "SELECT Rol FROM usuarios where Nombre = '$usr' AND pass = '$pass'";
        $consulta=mysqli_query($mysqli,$sql);
        while($mostrar=mysqli_fetch_array($consulta)){
            $rol = $mostrar['Rol'];
        }
        if($rol == "Profesor"){
            session_start();

            $_SESSION['profesor']="$usr";

            header("Location: ../IntegradoraII/Agregar.php");
            exit();
        }
        elseif($rol == "Administrador"){
            session_start();

            $_SESSION['administrador']="$usr";

            header("Location: ../IntegradoraII/admin.php");
            exit();
        }else{
            echo "<script> 
                  alert('Usuario y/o Contraseña no válido'); 
                  window.location.href='../integradoraii/Index.php'; 
                  </script>";
        }      
         
    }else{
        echo "<script> 
              alert('Rellene el Formulario profavor'); 
              window.location.href='../integradoraii/Index.php'; 
              </script>";
    }      

}
//Validar que las variables existan y contengan un valor
 ?>