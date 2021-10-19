<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link href="css/estilo.css" rel="stylesheet" href="/css/master.css">
 
    <title>Ingreso</title>
  </head>
  <body>
    <main class="col-sm-12 text-center">
      <header>
        <h2>Ingreso</h2>
      </header>
      <div class="col-sm-12 row justify-content-center h-100">
        <div class=" col-sm-12 align-self-center text-center">
        <form  action="ingreso.php" method="post">
        <img src="img/undraw_authentication_fsn5.png"class="img img-fluid">
        <br>
        <br>        
        <input name="usuario" type="text" placeholder="Usuario" />
        <br>
        <br>
        <input name="password"  type="password" placeholder="Contraseña" />
        <br>
        <br>
        <input type="submit" value="Acceder" class="enviar">

        </form>
        </div>
      </div>
    </main>
      <script src="js/conductas.js" type="text/javascript"></script>
      <script src="../js/Jquery.js" type="text/javascript"></script>
      <script src="../js/bootstrap.min.js" type="text/javascript"></script>
  </body>
</html>