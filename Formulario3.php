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

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
  <link  rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="css/estiloform2.css" rel="stylesheet" href="/css/master.css">
    
    <title>Inventario</title>
  </head>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <p class="navbar-brand text-center" href="">Feria<br>de Proyectos</p>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="consultar.php">Ver Proyectos <span class="sr-only">(current)</span></a>
      </li>
      </ul>
    <form class="form-inline my-2 my-lg-0">
    <a class="btn btn-outline-success" href="cerrar.php">Cerrar Sesión <span class="sr-only">(current)</span></a>
    </form>
  </div>
</nav>
    <div class="row text-center">
      <h2>Modificar un Proyecto</h2>
    </div>
    <form action="update.php" method=post>
    <?php
$mysqli = new mysqli ("localhost", "admin", "1234", "feria_Proyectos");
$id_Proyecto = $_GET["id"];
$id_integrante1 = $_GET["i1"];
$sql = "SELECT nombre, Registro from integrantes WHERE idIntegrante=$id_integrante1";
    $consulta=mysqli_query($mysqli,$sql);
    while($mostrar=mysqli_fetch_array($consulta)){
      $nombre1 = $mostrar['nombre'];
      $reg1 = $mostrar['Registro'];

  }
  if($_GET["i2"]!=""){
    $id_integrante2 = $_GET["i2"];
    $sql = "SELECT nombre, Registro from integrantes WHERE idIntegrante=$id_integrante2";
    $consulta=mysqli_query($mysqli,$sql);
    while($mostrar=mysqli_fetch_array($consulta)){
      if($mostrar['nombre']!=""){
        $nombre2=$mostrar['nombre'];
        $reg2=$mostrar['Registro'];
      }
    }
  }else{
    $nombre2="";
    $reg2="";
  }
  if($_GET["i3"]!=""){
    $id_integrante3 = $_GET["i3"];
    $sql = "SELECT nombre, Registro from integrantes WHERE idIntegrante=$id_integrante3";
    $consulta=mysqli_query($mysqli,$sql);
    while($mostrar=mysqli_fetch_array($consulta)){
      if($mostrar['nombre']!=""){
        $nombre3=$mostrar['nombre'];
        $reg3=$mostrar['Registro'];
      }
    }
  }else{
    $nombre3="";
    $reg3="";
  }
  if($_GET["i4"]!=""){
    $id_integrante4 = $_GET["i4"];
    $sql = "SELECT nombre, Registro from integrantes WHERE idIntegrante=$id_integrante4";
    $consulta=mysqli_query($mysqli,$sql);
    while($mostrar=mysqli_fetch_array($consulta)){
      if($mostrar['nombre']!=""){
        $nombre4=$mostrar['nombre'];
        $reg4=$mostrar['Registro'];
      }
    }
  }else{
    $nombre4="";
    $reg4="";
  }
  if($_GET["i5"]!=""){
    $id_integrante5 = $_GET["i5"];
    $sql = "SELECT nombre, Registro from integrantes WHERE idIntegrante=$id_integrante5";
    $consulta=mysqli_query($mysqli,$sql);
    while($mostrar=mysqli_fetch_array($consulta)){
      if($mostrar['nombre']!=""){
        $nombre5=$mostrar['nombre'];
        $reg5=$mostrar['Registro'];
      }
    }
  }else{
    $nombre5="";
    $reg5="";
  }
  if($_GET["i6"]!=""){
    $id_integrante6 = $_GET["i6"];
    $sql = "SELECT nombre, Registro from integrantes WHERE idIntegrante=$id_integrante6";
    $consulta=mysqli_query($mysqli,$sql);
    while($mostrar=mysqli_fetch_array($consulta)){
      if($mostrar['nombre']!=""){
        $nombre6=$mostrar['nombre'];
        $reg6=$mostrar['Registro'];
      }
    }
  }else{
    $nombre6="";
    $reg6="";
  }
  if($_GET["i7"]!=""){
    $id_integrante7 = $_GET["i7"];
    $sql = "SELECT nombre, Registro from integrantes WHERE idIntegrante=$id_integrante7";
    $consulta=mysqli_query($mysqli,$sql);
    while($mostrar=mysqli_fetch_array($consulta)){
      if($mostrar['nombre']!=""){
        $nombre7=$mostrar['nombre'];
        $reg7=$mostrar['Registro'];
      }
    }
  }else{
    $nombre7="";
    $reg7="";
  }
    if($_GET["i8"]!=""){
        $id_integrante8 = $_GET["i8"];
        $sql = "SELECT nombre, Registro from integrantes WHERE idIntegrante=$id_integrante8";
        $consulta=mysqli_query($mysqli,$sql);
        while($mostrar=mysqli_fetch_array($consulta)){
          if($mostrar['nombre']!=""){
            $nombre8=$mostrar['nombre'];
            $reg8=$mostrar['Registro'];
          }
        }
      }else{
        $nombre8="";
        $reg8="";
      }

?>

<br><br>
id del proyecto a editar: <input type=text name=id value="<?php echo $_GET["id"]?>" readonly="readonly">
<br>
<br>
<br>
      <div class="row">
        <div class="col-sm-6">
          <br><br>
          <p>Impacto del Proyecto:</p>
          <textarea cols=60 rows=5 required name=Impacto></textarea><br><br>
          <p>Objetivo del Proyecto:</p>
          <textarea cols=60 rows=5 required name=Objetivo></textarea><br><br>
        </div> 
        <div class="col-sm-2">
        <br><br>
          <p>Categoría</p>
                <select name="Cat" required>
                  <option value="Categoria1">Categoria1
                  <option value="Categoria2">Categoria2
                  <option value="Categoria3">Categoria3
                  <option value="Categoria4">Categoria4
                  <option value="Categoria5">Categoria5
                  <option value="Categoria6">Categoria6
                  <option value="Categoria7">Categoria7
                </select><br><br>
          <p>Patente</p>
                <select name="Pat" required>
                  <option value="true">Si
                  <option value="false">No
                </select><br><br>
          </div>
          <div class="col-sm-2">
          <br><br>
          <p>Grado</p>
              <select name="Grado" required>
                  <option value="1">1
                  <option value="2">2
                  <option value="3">3
                  <option value="4">4
                  <option value="5">5
                  <option value="6">6
                  <option value="7">7
                  <option value="8">8
                  <option value="9">9
                  <option value="10">10
                  <option value="11">11
               </select><br><br>
               <p>Grupo</p>
               <select name="Grupo" required>
                <option value="A">A
                <option value="B">B
                <option value="C">C
                <option value="D">D
                <option value="E">E
                <option value="F">F
            </select><br><br>
          </div>
        <div class="Row">
          <div class="col-sm-12">
          Nombre del Integrante 1: <input type=text name=nom1 required value="<?php echo $nombre1?>"> Registro:<input type=text name=reg1 required value="<?php echo $reg1?>"> Sexo: <select name="sex1" required><option value="M">Masculino<option value="F">Femenino</select><br>
Nombre del Integrante 2: <input type=text name=nom2 value="<?php echo $nombre2?>"> Registro:<input type=text name=reg2  value="<?php echo $reg2?>"> Sexo: <select name="sex2" required><option value="M">Masculino<option value="F">Femenino</select><br>
Nombre del Integrante 3: <input type=text name=nom3 value="<?php echo $nombre3?>"> Registro:<input type=text name=reg3  value="<?php echo $reg3?>"> Sexo: <select name="sex3" required><option value="M">Masculino<option value="F">Femenino</select><br>
Nombre del Integrante 4: <input type=text name=nom4 value="<?php echo $nombre4?>"> Registro:<input type=text name=reg4  value="<?php echo $reg4?>"> Sexo: <select name="sex4" required><option value="M">Masculino<option value="F">Femenino</select><br>
Nombre del Integrante 5: <input type=text name=nom5 value="<?php echo $nombre5?>"> Registro:<input type=text name=reg5  value="<?php echo $reg5?>"> Sexo: <select name="sex5" required><option value="M">Masculino<option value="F">Femenino</select><br>
Nombre del Integrante 6: <input type=text name=nom6 value="<?php echo $nombre6?>"> Registro:<input type=text name=reg6  value="<?php echo $reg6?>"> Sexo: <select name="sex6" required><option value="M">Masculino<option value="F">Femenino</select><br>
Nombre del Integrante 7: <input type=text name=nom7 value="<?php echo $nombre7?>"> Registro:<input type=text name=reg7  value="<?php echo $reg7?>"> Sexo: <select name="sex7" required><option value="M">Masculino<option value="F">Femenino</select><br>
Nombre del Integrante 8: <input type=text name=nom8 value="<?php echo $nombre8?>"> Registro:<input type=text name=reg8  value="<?php echo $reg8?>"> Sexo: <select name="sex8" required><option value="M">Masculino<option value="F">Femenino</select><br>
<br>
          </div>
        </div>
        <div class="Row text-center">
          <div class="col-sm-12">
          Nombre del Asesor del Poryecto (NO TUTOR DE GRUPO):<label id="nom_ase"></label> ID:<label id="id_ase"></label>
          <br><br>
          <input type=submit class="btn btn-outline-info"value="Modificar" name="Guardar" >
          <a class="btn btn-outline-danger" href="consultar.php">Cancelar<span class="sr-only">(current)</span></a>
          </div>
        </div>
      </div>
      </form>
  </div>
  
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>

<?php
}
?>