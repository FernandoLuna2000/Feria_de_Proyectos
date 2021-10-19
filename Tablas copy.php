<?php
$mysqli = new mysqli ("localhost", "admin", "1234", "feria_Proyectos");
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s\n", mysqli_connect_error());
    exit();
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
  <link  rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <!-- <link href="css/estiloform2.css" rel="stylesheet" href="/css/master.css"> -->
<title>Inventario</title>
  </head>
  <body>
    <div class="Container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <p class="navbar-brand text-center" href="">Feria<br>de Proyectos</p>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="agregar.php">Volver <span class="sr-only">(current)</span></a>
      </li>
      </ul>
    <form class="form-inline my-2 my-lg-0">
    <a class="btn btn-outline-success" href="cerrar.php">Cerrar Sesión <span class="sr-only">(current)</span></a>
    </form>
  </div>
</nav>
    <div class="col-sm-12 text-center">
      <header>
        <h2>Proyectos</h2>
        <br>
        <br>
        <!-- <a type="button" class="btn btn-secondary"  name="button" href="../Integradoraii/agregar.php">Regresar</a> -->
      </header>
      <div class="col-sm-12 row justify-content-center h-100">
        <div class=" col-sm-12 align-self-center text-center">
          <table class="table table-responsive-sm table-striped table-primary" >
        		<tr>
        			<th>ID Proyecto</th>
        			<th>Impacto del Proyecto</th>
        			<th>Objetivo del Proyecto</th>
        			<th>Categoría</th>
              <th>Patente</th>
              <th>Grado</th>
              <th>Grupo</th>
        			<th>Integrante 1</th>
              <th>Integrante 2</th>
              <th>Integrante 3</th>
              <th>Integrante 4</th>
              <th>Integrante 5</th>
              <th>Integrante 6</th>
              <th>Integrante 7</th>
              <th>Integrante 8</th>
              <th>Borrar</th>
              <th>Modificar</th>
        		</tr>
        		<?php
            $sql="SELECT * from proyectos";
        		$result=mysqli_query($mysqli,$sql);
        		while($mostrar=mysqli_fetch_array($result)){
              $id = $mostrar['idProyecto'];
        		 ?>
        		<tr>
        			<td><?php echo $mostrar['idProyecto'] ?></td>
        			<td><?php echo $mostrar['Impacto'] ?></td>
        			<td><?php echo $mostrar['Objetivo'] ?></td>
        			<td><?php echo $mostrar['Categoria'] ?></td>
              <td><?php echo $mostrar['Patente'] ?></td>
              <td><?php echo $mostrar['Grado'] ?></td>
              <td><?php echo $mostrar['Grupo'] ?></td>
        			<td><?php echo $mostrar['idIntegrante1'] ?></td>
              <td><?php echo $mostrar['idIntegrante2'] ?></td>
              <td><?php echo $mostrar['idIntegrante3'] ?></td>
              <td><?php echo $mostrar['idIntegrante4'] ?></td>
              <td><?php echo $mostrar['idIntegrante5'] ?></td>
              <td><?php echo $mostrar['idIntegrante6'] ?></td>
              <td><?php echo $mostrar['idIntegrante7'] ?></td>
              <td><?php echo $mostrar['idIntegrante8'] ?></td>
              <td>
<a class="dltBtn" data-id="<?php echo $idCliente; ?>" href="javascript:void(0)">
<i class="fa fa-trash-o" aria-hidden="true"></i>
</a>
</td>
        </td>
        <td><form method='post' action='modificar.php'>
      <input type='hidden' name='id_proyecto' value='<?php echo $mostrar['idProyecto'];?>'>
      <input  type='submit' class="btn btn-outline-info"value='Modificar'>
      </form></td>
        </td>
        		</tr>
        	<?php
        	}
        	 ?>
        	</table>
        </div>

      </div>
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