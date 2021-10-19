
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
      <h2>Agregar un Nuevo Proyecto</h2>
    </div>
    <form action="captura.php" method=post>
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
            Nombre del Integrante 1: <input type=text size="50" name=nom1 required> Registro:<input type=text name=reg1 required > Sexo: <select name="sex1" required><option value="M">Masculino<option value="F">Femenino</select><br>
            Nombre del Integrante 2: <input type=text size="50" name=nom2 > Registro:<input type=text name=reg2  > Sexo: <select name="sex2" required><option value="M">Masculino<option value="F">Femenino</select><br>
            Nombre del Integrante 3: <input type=text size="50" name=nom3 > Registro:<input type=text name=reg3  > Sexo: <select name="sex3" required><option value="M">Masculino<option value="F">Femenino</select><br>
            Nombre del Integrante 4: <input type=text size="50" name=nom4 > Registro:<input type=text name=reg4  > Sexo: <select name="sex4" required><option value="M">Masculino<option value="F">Femenino</select><br>
            Nombre del Integrante 5: <input type=text size="50" name=nom5 > Registro:<input type=text name=reg5  > Sexo: <select name="sex5" required><option value="M">Masculino<option value="F">Femenino</select><br>
            Nombre del Integrante 6: <input type=text size="50" name=nom6 > Registro:<input type=text name=reg6  > Sexo: <select name="sex6" required><option value="M">Masculino<option value="F">Femenino</select><br>
            Nombre del Integrante 7: <input type=text size="50" name=nom7 > Registro:<input type=text name=reg7  > Sexo: <select name="sex7" required><option value="M">Masculino<option value="F">Femenino</select><br>
            Nombre del Integrante 8: <input type=text size="50" name=nom8 > Registro:<input type=text name=reg8  > Sexo: <select name="sex8" required><option value="M">Masculino<option value="F">Femenino</select><br><br>
          </div>
        </div>
        <div class="Row text-center">
          <div class="col-sm-12">
          Nombre del Asesor del Poryecto (NO TUTOR DE GRUPO):<label id="nom_ase"></label> ID:<label id="id_ase"></label>
          <br><br>
          <input type=submit class="btn btn-light"value="enviar" name="Guardar" >
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
