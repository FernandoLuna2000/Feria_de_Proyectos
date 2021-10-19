<?php
//Conexión a nuestra BD
$mysqli = new mysqli ("localhost", "admin", "1234", "feria_Proyectos");
if ($mysqli -> connect_errno)  {
  echo "fallo al conectar a MySQL: (".$mysqli ->connect_errno . ")" . $mysqli ->connect_errno;
}else{
  if (isset($_POST["Impacto"], $_POST["Objetivo"], $_POST["Cat"], $_POST["Pat"], $_POST["nom1"],$_POST["reg1"],$_POST["sex1"], $_POST["Grado"], $_POST["Grupo"])and $_POST["Impacto"]!="" and $_POST["Objetivo"]!="" and $_POST["Cat"]!="" and $_POST["Pat"]!="" and $_POST["nom1"]!="" and $_POST["reg1"]!="" and $_POST["sex1"]!=""and $_POST["Grado"]!=""and $_POST["Grupo"]!=""){
    //Declaración de variables locales
    $impacto = $_POST["Impacto"];
    $objetivo = $_POST["Objetivo"];
    $categoria = $_POST["Cat"];
    $patente = $_POST["Pat"];
    $nombre1 = $_POST["nom1"];
    $registro1 = $_POST["reg1"];
    $sexo1 = $_POST["sex1"];
    $grado = $_POST["Grado"];
    $grupo = $_POST["Grupo"];
    //variables no requeridas

    if($_POST["nom2"]==""){
      $nombre2 = "";
    }
    else{
      $nombre2 = $_POST["nom2"];
      $registro2 = $_POST["reg2"];
      $sexo2 = $_POST["sex2"];
    }
    if($_POST["nom3"]==""){
      $nombre3 = "";
    }
    else{
      $nombre3 = $_POST["nom3"];
      $registro3 = $_POST["reg3"];
      $sexo3 = $_POST["sex3"];
    }
    if($_POST["nom4"]==""){
      $nombre4 = "";
    }
    else{
      $nombre4 = $_POST["nom4"];
      $registro4 = $_POST["reg4"];
      $sexo4 = $_POST["sex4"];
    }
    if($_POST["nom5"]==""){
      $nombre5 = "";
    }
    else{
      $nombre5 = $_POST["nom5"];
      $registro5 = $_POST["reg5"];
      $sexo5 = $_POST["sex5"];
    }
    if($_POST["nom6"]==""){
      $nombre6 = "";
    }
    else{
      $nombre6 = $_POST["nom6"];
      $registro6 = $_POST["reg6"];
      $sexo6 = $_POST["sex6"];
    }
    if($_POST["nom7"]==""){
      $nombre7 = "";
    }
    else{
      $nombre7 = $_POST["nom7"];
      $registro7 = $_POST["reg7"];
      $sexo7 = $_POST["sex7"];
    }
    if($_POST["nom8"]==""){
      $nombre8 = "";
    }
    else{
      $nombre8 = $_POST["nom8"];
      $registro8 = $_POST["reg8"];
      $sexo8 = $_POST["sex8"];
    }
    require_once "Funciones.php";
    $misFunciones=new Funciones();
    if(isset($_POST["Guardar"])){
            //Variable para almacenar la inserción
          if($nombre8!=""){
            $misFunciones->ocho_Alumnos($impacto,$objetivo,$categoria, $patente, $grado, $grupo, $nombre1, $registro1, $sexo1, $nombre2, $registro2, $sexo2, $nombre3, $registro3, $sexo3, $nombre4, $registro4, $sexo4, $nombre5, $registro5, $sexo5, $nombre6, $registro6, $sexo6, $nombre7, $registro7, $sexo7, $nombre8, $registro8, $sexo8, $mysqli );
          }
          elseif($nombre7!=""){
            $misFunciones->siete_Alumnos($impacto,$objetivo,$categoria, $patente, $grado, $grupo, $nombre1, $registro1, $sexo1, $nombre2, $registro2, $sexo2, $nombre3, $registro3, $sexo3, $nombre4, $registro4, $sexo4, $nombre5, $registro5, $sexo5, $nombre6, $registro6, $sexo6, $nombre7, $registro7, $sexo7, $mysqli );
          }
          elseif($nombre6!=""){
            $misFunciones->seis_Alumnos($impacto,$objetivo,$categoria, $patente, $grado, $grupo, $nombre1, $registro1, $sexo1, $nombre2, $registro2, $sexo2, $nombre3, $registro3, $sexo3, $nombre4, $registro4, $sexo4, $nombre5, $registro5, $sexo5, $nombre6, $registro6, $sexo6, $mysqli );
          }
          elseif($nombre5!=""){
            $misFunciones->cinco_Alumnos($impacto,$objetivo,$categoria, $patente, $grado, $grupo, $nombre1, $registro1, $sexo1, $nombre2, $registro2, $sexo2, $nombre3, $registro3, $sexo3, $nombre4, $registro4, $sexo4, $nombre5, $registro5, $sexo5, $mysqli );
          }
          elseif($nombre4!=""){
            $misFunciones->cuatro_Alumnos($impacto,$objetivo,$categoria, $patente, $grado, $grupo, $nombre1, $registro1, $sexo1, $nombre2, $registro2, $sexo2, $nombre3, $registro3, $sexo3, $nombre4, $registro4, $sexo4, $mysqli );
          }
          elseif($nombre3!=""){
            $misFunciones->tres_Alumnos($impacto,$objetivo,$categoria, $patente, $grado, $grupo, $nombre1, $registro1, $sexo1, $nombre2, $registro2, $sexo2, $nombre3, $registro3, $sexo3, $mysqli );
          }
          elseif($nombre2!=""){
            $misFunciones->dos_Alumnos($impacto,$objetivo,$categoria, $patente, $grado, $grupo, $nombre1, $registro1, $sexo1, $nombre2, $registro2, $sexo2, $mysqli );
          }          
          else{
            $misFunciones->un_Alumno($impacto,$objetivo,$categoria, $patente, $grado, $grupo, $nombre1, $registro1, $sexo1, $mysqli );
          }
        }else{
            echo "Rellene todos los campos";
        }
    }
    else {
    print '<p>conectado pero sin datos';
    }
}
//Validar que las variables existan y contengan un valor
 ?>