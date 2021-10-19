<?php 


    class Funciones{
        public function un_Alumno($impacto,$objetivo,$categoria, $patente, $grado, $grupo, $nombre1, $registro1, $sexo1, $mysqli ){
            
            $Guardar = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre1','$registro1','$sexo1')");

            $sql="SELECT idIntegrante from integrantes WHERE nombre = '$nombre1'";
            $consulta=mysqli_query($mysqli,$sql);
            if($consulta){
              $mostrar=mysqli_fetch_array($consulta);
              $id =$mostrar['idIntegrante'];
              
              if($id){
                $Agregar = !$mysqli -> query("INSERT INTO proyectos (Impacto, Objetivo, Categoria, Patente, Grado, Grupo, idIntegrante1) VALUES
                ('$impacto','$objetivo','$categoria', '$patente', '$grado', '$grupo', '$id')");
                if(!$Agregar){
                  echo "<script> 
                  alert('Agregado Exitosamente'); 
                  window.location.href='../integradoraii/Tablas.php'; 
                  </script>"; 
                                 
                  }
                else{
                  echo "<script> 
                  alert('Error de proyecto'); 
                  window.location.href='admin/ahm/panel'; 
                  </script>"; 
                }
              }else {
                echo "<script> 
                alert('Error de ID'); 
                window.location.href='admin/ahm/panel'; 
                </script>"; 
              }

            }else{
              echo "<script> 
              alert('Error de Consulta'); 
              window.location.href='admin/ahm/panel'; 
              </script>"; ;
            }

            
        }

        public function dos_Alumnos($impacto,$objetivo,$categoria, $patente, $grado, $grupo, $nombre1, $registro1, $sexo1, $nombre2, $registro2, $sexo2, $mysqli ){
            
            $Guardar = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre1','$registro1','$sexo1')");

            $sql="SELECT idIntegrante from integrantes WHERE nombre = '$nombre1'";
            $consulta=mysqli_query($mysqli,$sql);

            $Guardar2 = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre2','$registro2','$sexo2')");

            $sql2="SELECT idIntegrante from integrantes WHERE nombre = '$nombre2'";
            $consulta2=mysqli_query($mysqli,$sql2);
            if($consulta and $consulta2){
              $mostrar=mysqli_fetch_array($consulta);
              $id =$mostrar['idIntegrante'];
              
              $mostrar2=mysqli_fetch_array($consulta2);
              $id2 =$mostrar2['idIntegrante'];
              
              
              if($id and $id2){
                $Agregar = !$mysqli -> query("INSERT INTO proyectos (Impacto, Objetivo, Categoria, Patente, Grado, Grupo, idIntegrante1,idIntegrante2) VALUES
                ('$impacto','$objetivo','$categoria', '$patente', '$grado', '$grupo', '$id', '$id2')");
                if(!$Agregar){
                  echo "<script> 
                  alert('Agregado Exitosamente'); 
                  window.location.href='../integradoraii/Tablas.php'; 
                  </script>"; 
                                 
                  }
                else{
                  echo "<script> 
                  alert('Error de proyecto'); 
                  window.location.href='admin/ahm/panel'; 
                  </script>"; 
                }
              }else {
                echo "<script> 
                alert('Error de ID'); 
                window.location.href='admin/ahm/panel'; 
                </script>"; 
              }

            }else{
              echo "<script> 
              alert('Error de Consulta'); 
              window.location.href='admin/ahm/panel'; 
              </script>"; ;
            }
            
        }

        public function tres_Alumnos($impacto,$objetivo,$categoria, $patente, $grado, $grupo, $nombre1, $registro1, $sexo1, $nombre2, $registro2, $sexo2, $nombre3, $registro3, $sexo3, $mysqli ){
            
            $Guardar = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre1','$registro1','$sexo1')");

            $sql="SELECT idIntegrante from integrantes WHERE nombre = '$nombre1'";
            $consulta=mysqli_query($mysqli,$sql);

            $Guardar2 = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre2','$registro2','$sexo2')");

            $sql2="SELECT idIntegrante from integrantes WHERE nombre = '$nombre2'";
            $consulta2=mysqli_query($mysqli,$sql2);

            $Guardar3 = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre3','$registro3','$sexo3')");

            $sql3="SELECT idIntegrante from integrantes WHERE nombre = '$nombre2'";
            $consulta3=mysqli_query($mysqli,$sql3);
            if($consulta and $consulta2 and $consulta3){
              $mostrar=mysqli_fetch_array($consulta);
              $id =$mostrar['idIntegrante'];
              
              $mostrar2=mysqli_fetch_array($consulta2);
              $id2 =$mostrar2['idIntegrante'];
              
              $mostrar3=mysqli_fetch_array($consulta3);
              $id3 =$mostrar3['idIntegrante'];
              
              if($id and $id2 and $id3){
                $Agregar = !$mysqli -> query("INSERT INTO proyectos (Impacto, Objetivo, Categoria, Patente, Grado, Grupo, idIntegrante1,idIntegrante2,idIntegrante3) VALUES
                ('$impacto','$objetivo','$categoria', '$patente', '$grado', '$grupo', '$id', '$id2', '$id3')");
                if(!$Agregar){
                  echo "<script> 
                  alert('Agregado Exitosamente'); 
                  window.location.href='../integradoraii/Tablas.php'; 
                  </script>"; 
                                 
                  }
                else{
                  echo "<script> 
                  alert('Error de proyecto'); 
                  window.location.href='admin/ahm/panel'; 
                  </script>"; 
                }
              }else {
                echo "<script> 
                alert('Error de ID'); 
                window.location.href='admin/ahm/panel'; 
                </script>"; 
              }

            }else{
              echo "<script> 
              alert('Error de Consulta'); 
              window.location.href='admin/ahm/panel'; 
              </script>"; ;
            }
            
        }

        public function cuatro_Alumnos($impacto,$objetivo,$categoria, $patente, $grado, $grupo, $nombre1, $registro1, $sexo1, $nombre2, $registro2, $sexo2, $nombre3, $registro3, $sexo3, $nombre4, $registro4, $sexo4, $mysqli ){
            
            $Guardar = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre1','$registro1','$sexo1')");
            $sql="SELECT idIntegrante from integrantes WHERE nombre = '$nombre1'";
            $consulta=mysqli_query($mysqli,$sql);

            $Guardar2 = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre2','$registro2','$sexo2')");
            $sql2="SELECT idIntegrante from integrantes WHERE nombre = '$nombre2'";
            $consulta2=mysqli_query($mysqli,$sql2);

            $Guardar3 = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre3','$registro3','$sexo3')");
            $sql3="SELECT idIntegrante from integrantes WHERE nombre = '$nombre3'";
            $consulta3=mysqli_query($mysqli,$sql3);

            $Guardar4 = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre4','$registro4','$sexo4')");
            $sql4="SELECT idIntegrante from integrantes WHERE nombre = '$nombre4'";
            $consulta4=mysqli_query($mysqli,$sql4);

            if($consulta and $consulta2 and $consulta3 and $consulta4){
              
              $mostrar=mysqli_fetch_array($consulta);
              $id =$mostrar['idIntegrante'];
              
              $mostrar2=mysqli_fetch_array($consulta2);
              $id2 =$mostrar2['idIntegrante'];
              
              $mostrar3=mysqli_fetch_array($consulta3);
              $id3 =$mostrar3['idIntegrante'];
              
              $mostrar4=mysqli_fetch_array($consulta4);
              $id4 =$mostrar4['idIntegrante'];

              if($id and $id2 and $id3 and $id4){
                $Agregar = !$mysqli -> query("INSERT INTO proyectos (Impacto, Objetivo, Categoria, Patente, Grado, Grupo, idIntegrante1,idIntegrante2,idIntegrante3,idIntegrante4) VALUES
                ('$impacto','$objetivo','$categoria', '$patente', '$grado', '$grupo', '$id', '$id2', '$id3', '$id4')");
                if(!$Agregar){
                  echo "<script> 
                  alert('Agregado Exitosamente'); 
                  window.location.href='../integradoraii/Tablas.php'; 
                  </script>"; 
                                 
                  }
                else{
                  echo "<script> 
                  alert('Error de proyecto'); 
                  window.location.href='admin/ahm/panel'; 
                  </script>"; 
                }
              }else {
                echo "<script> 
                alert('Error de ID'); 
                window.location.href='admin/ahm/panel'; 
                </script>"; 
              }

            }else{
              echo "<script> 
              alert('Error de Consulta'); 
              window.location.href='admin/ahm/panel'; 
              </script>"; ;
            }
            
        }

        public function cinco_Alumnos($impacto,$objetivo,$categoria, $patente, $grado, $grupo, $nombre1, $registro1, $sexo1, $nombre2, $registro2, $sexo2, $nombre3, $registro3, $sexo3, $nombre4, $registro4, $sexo4, $nombre5, $registro5, $sexo5, $mysqli ){
            
            $Guardar = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre1','$registro1','$sexo1')");
            $sql="SELECT idIntegrante from integrantes WHERE nombre = '$nombre1'";
            $consulta=mysqli_query($mysqli,$sql);

            $Guardar2 = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre2','$registro2','$sexo2')");
            $sql2="SELECT idIntegrante from integrantes WHERE nombre = '$nombre2'";
            $consulta2=mysqli_query($mysqli,$sql2);

            $Guardar3 = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre3','$registro3','$sexo3')");
            $sql3="SELECT idIntegrante from integrantes WHERE nombre = '$nombre3'";
            $consulta3=mysqli_query($mysqli,$sql3);

            $Guardar4 = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre4','$registro4','$sexo4')");
            $sql4="SELECT idIntegrante from integrantes WHERE nombre = '$nombre4'";
            $consulta4=mysqli_query($mysqli,$sql4);

            $Guardar5 = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre5','$registro5','$sexo5')");
            $sql5="SELECT idIntegrante from integrantes WHERE nombre = '$nombre5'";
            $consulta5=mysqli_query($mysqli,$sql5);

            if($consulta and $consulta2 and $consulta3 and $consulta4 and $consulta5){
              
              $mostrar=mysqli_fetch_array($consulta);
              $id =$mostrar['idIntegrante'];
              
              $mostrar2=mysqli_fetch_array($consulta2);
              $id2 =$mostrar2['idIntegrante'];
              
              $mostrar3=mysqli_fetch_array($consulta3);
              $id3 =$mostrar3['idIntegrante'];
              
              $mostrar4=mysqli_fetch_array($consulta4);
              $id4 =$mostrar4['idIntegrante'];

              $mostrar5=mysqli_fetch_array($consulta5);
              $id5 =$mostrar5['idIntegrante'];

              if($id and $id2 and $id3 and $id4 and $id5){
                $Agregar = !$mysqli -> query("INSERT INTO proyectos (Impacto, Objetivo, Categoria, Patente, Grado, Grupo, idIntegrante1,idIntegrante2,idIntegrante3,idIntegrante4,idIntegrante5) VALUES
                ('$impacto','$objetivo','$categoria', '$patente', '$grado', '$grupo', '$id', '$id2', '$id3', '$id4', '$id5')");
                if(!$Agregar){
                  echo "<script> 
                  alert('Agregado Exitosamente'); 
                  window.location.href='../integradoraii/Tablas.php'; 
                  </script>"; 
                                 
                  }
                else{
                  echo "<script> 
                  alert('Error de proyecto'); 
                  window.location.href='admin/ahm/panel'; 
                  </script>"; 
                }
              }else {
                echo "<script> 
                alert('Error de ID'); 
                window.location.href='admin/ahm/panel'; 
                </script>"; 
              }

            }else{
              echo "<script> 
              alert('Error de Consulta'); 
              window.location.href='admin/ahm/panel'; 
              </script>"; ;
            }
            
        }

        public function seis_Alumnos($impacto,$objetivo,$categoria, $patente, $grado, $grupo, $nombre1, $registro1, $sexo1, $nombre2, $registro2, $sexo2, $nombre3, $registro3, $sexo3, $nombre4, $registro4, $sexo4, $nombre5, $registro5, $sexo5, $nombre6, $registro6, $sexo6, $mysqli ){
            
            $Guardar = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre1','$registro1','$sexo1')");
            $sql="SELECT idIntegrante from integrantes WHERE nombre = '$nombre1'";
            $consulta=mysqli_query($mysqli,$sql);

            $Guardar2 = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre2','$registro2','$sexo2')");
            $sql2="SELECT idIntegrante from integrantes WHERE nombre = '$nombre2'";
            $consulta2=mysqli_query($mysqli,$sql2);

            $Guardar3 = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre3','$registro3','$sexo3')");
            $sql3="SELECT idIntegrante from integrantes WHERE nombre = '$nombre3'";
            $consulta3=mysqli_query($mysqli,$sql3);

            $Guardar4 = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre4','$registro4','$sexo4')");
            $sql4="SELECT idIntegrante from integrantes WHERE nombre = '$nombre4'";
            $consulta4=mysqli_query($mysqli,$sql4);

            $Guardar5 = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre5','$registro5','$sexo5')");
            $sql5="SELECT idIntegrante from integrantes WHERE nombre = '$nombre5'";
            $consulta5=mysqli_query($mysqli,$sql5);

            $Guardar6 = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre6','$registro6','$sexo6')");
            $sql6="SELECT idIntegrante from integrantes WHERE nombre = '$nombre6'";
            $consulta6=mysqli_query($mysqli,$sql6);

            if($consulta and $consulta2 and $consulta3 and $consulta4 and $consulta5 and $consulta6){
              
              $mostrar=mysqli_fetch_array($consulta);
              $id =$mostrar['idIntegrante'];
              
              $mostrar2=mysqli_fetch_array($consulta2);
              $id2 =$mostrar2['idIntegrante'];
              
              $mostrar3=mysqli_fetch_array($consulta3);
              $id3 =$mostrar3['idIntegrante'];
              
              $mostrar4=mysqli_fetch_array($consulta4);
              $id4 =$mostrar4['idIntegrante'];

              $mostrar5=mysqli_fetch_array($consulta5);
              $id5 =$mostrar5['idIntegrante'];

              $mostrar6=mysqli_fetch_array($consulta6);
              $id6 =$mostrar6['idIntegrante'];

              if($id and $id2 and $id3 and $id4 and $id5 and $id6){
                $Agregar = !$mysqli -> query("INSERT INTO proyectos (Impacto, Objetivo, Categoria, Patente, Grado, Grupo, idIntegrante1,idIntegrante2,idIntegrante3,idIntegrante4,idIntegrante5,idIntegrante6) VALUES
                ('$impacto','$objetivo','$categoria', '$patente', '$grado', '$grupo', '$id', '$id2', '$id3', '$id4', '$id5', '$id6')");
                if(!$Agregar){
                  echo "<script> 
                  alert('Agregado Exitosamente'); 
                  window.location.href='../integradoraii/Tablas.php'; 
                  </script>"; 
                                 
                  }
                else{
                  echo "<script> 
                  alert('Error de proyecto'); 
                  window.location.href='admin/ahm/panel'; 
                  </script>"; 
                }
              }else {
                echo "<script> 
                alert('Error de ID'); 
                window.location.href='admin/ahm/panel'; 
                </script>"; 
              }

            }else{
              echo "<script> 
              alert('Error de Consulta'); 
              window.location.href='admin/ahm/panel'; 
              </script>"; ;
            }
            
        }

        public function siete_Alumnos($impacto,$objetivo,$categoria, $patente, $grado, $grupo, $nombre1, $registro1, $sexo1, $nombre2, $registro2, $sexo2, $nombre3, $registro3, $sexo3, $nombre4, $registro4, $sexo4, $nombre5, $registro5, $sexo5, $nombre6, $registro6, $sexo6, $nombre7, $registro7, $sexo7, $mysqli ){
            
            $Guardar = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre1','$registro1','$sexo1')");
            $sql="SELECT idIntegrante from integrantes WHERE nombre = '$nombre1'";
            $consulta=mysqli_query($mysqli,$sql);

            $Guardar2 = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre2','$registro2','$sexo2')");
            $sql2="SELECT idIntegrante from integrantes WHERE nombre = '$nombre2'";
            $consulta2=mysqli_query($mysqli,$sql2);

            $Guardar3 = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre3','$registro3','$sexo3')");
            $sql3="SELECT idIntegrante from integrantes WHERE nombre = '$nombre3'";
            $consulta3=mysqli_query($mysqli,$sql3);

            $Guardar4 = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre4','$registro4','$sexo4')");
            $sql4="SELECT idIntegrante from integrantes WHERE nombre = '$nombre4'";
            $consulta4=mysqli_query($mysqli,$sql4);

            $Guardar5 = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre5','$registro5','$sexo5')");
            $sql5="SELECT idIntegrante from integrantes WHERE nombre = '$nombre5'";
            $consulta5=mysqli_query($mysqli,$sql5);

            $Guardar6 = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre6','$registro6','$sexo6')");
            $sql6="SELECT idIntegrante from integrantes WHERE nombre = '$nombre6'";
            $consulta6=mysqli_query($mysqli,$sql6);

            $Guardar7 = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre7','$registro7','$sexo7')");
            $sql7="SELECT idIntegrante from integrantes WHERE nombre = '$nombre7'";
            $consulta7=mysqli_query($mysqli,$sql7);

            if($consulta and $consulta2 and $consulta3 and $consulta4 and $consulta5 and $consulta6 and $consulta7){
              
              $mostrar=mysqli_fetch_array($consulta);
              $id =$mostrar['idIntegrante'];
              
              $mostrar2=mysqli_fetch_array($consulta2);
              $id2 =$mostrar2['idIntegrante'];
              
              $mostrar3=mysqli_fetch_array($consulta3);
              $id3 =$mostrar3['idIntegrante'];
              
              $mostrar4=mysqli_fetch_array($consulta4);
              $id4 =$mostrar4['idIntegrante'];

              $mostrar5=mysqli_fetch_array($consulta5);
              $id5 =$mostrar5['idIntegrante'];

              $mostrar6=mysqli_fetch_array($consulta6);
              $id6 =$mostrar6['idIntegrante'];

              $mostrar7=mysqli_fetch_array($consulta7);
              $id7 =$mostrar7['idIntegrante'];

              if($id and $id2 and $id3 and $id4 and $id5 and $id6 and $id7){
                $Agregar = !$mysqli -> query("INSERT INTO proyectos (Impacto, Objetivo, Categoria, Patente, Grado, Grupo, idIntegrante1,idIntegrante2,idIntegrante3,idIntegrante4,idIntegrante5,idIntegrante6,idIntegrante7) VALUES
                ('$impacto','$objetivo','$categoria', '$patente', '$grado', '$grupo', '$id', '$id2', '$id3', '$id4', '$id5', '$id6', '$id7')");
                if(!$Agregar){
                  echo "<script> 
                  alert('Agregado Exitosamente'); 
                  window.location.href='../integradoraii/Tablas.php'; 
                  </script>"; 
                                 
                  }
                else{
                  echo "<script> 
                  alert('Error de proyecto'); 
                  window.location.href='admin/ahm/panel'; 
                  </script>"; 
                }
              }else {
                echo "<script> 
                alert('Error de ID'); 
                window.location.href='admin/ahm/panel'; 
                </script>"; 
              }

            }else{
              echo "<script> 
              alert('Error de Consulta'); 
              window.location.href='admin/ahm/panel'; 
              </script>"; ;
            }
            
        }

        public function ocho_Alumnos($impacto,$objetivo,$categoria, $patente, $grado, $grupo, $nombre1, $registro1, $sexo1, $nombre2, $registro2, $sexo2, $nombre3, $registro3, $sexo3, $nombre4, $registro4, $sexo4, $nombre5, $registro5, $sexo5, $nombre6, $registro6, $sexo6, $nombre7, $registro7, $sexo7, $nombre8, $registro8, $sexo8, $mysqli ){
            
            $Guardar = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre1','$registro1','$sexo1')");
            $sql="SELECT idIntegrante from integrantes WHERE nombre = '$nombre1'";
            $consulta=mysqli_query($mysqli,$sql);

            $Guardar2 = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre2','$registro2','$sexo2')");
            $sql2="SELECT idIntegrante from integrantes WHERE nombre = '$nombre2'";
            $consulta2=mysqli_query($mysqli,$sql2);

            $Guardar3 = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre3','$registro3','$sexo3')");
            $sql3="SELECT idIntegrante from integrantes WHERE nombre = '$nombre3'";
            $consulta3=mysqli_query($mysqli,$sql3);

            $Guardar4 = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre4','$registro4','$sexo4')");
            $sql4="SELECT idIntegrante from integrantes WHERE nombre = '$nombre4'";
            $consulta4=mysqli_query($mysqli,$sql4);

            $Guardar5 = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre5','$registro5','$sexo5')");
            $sql5="SELECT idIntegrante from integrantes WHERE nombre = '$nombre5'";
            $consulta5=mysqli_query($mysqli,$sql5);

            $Guardar6 = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre6','$registro6','$sexo6')");
            $sql6="SELECT idIntegrante from integrantes WHERE nombre = '$nombre6'";
            $consulta6=mysqli_query($mysqli,$sql6);

            $Guardar7 = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre7','$registro7','$sexo7')");
            $sql7="SELECT idIntegrante from integrantes WHERE nombre = '$nombre7'";
            $consulta7=mysqli_query($mysqli,$sql7);

            $Guardar8 = !$mysqli -> query("INSERT INTO integrantes (nombre, Registro, Sexo) VALUES
            ('$nombre8','$registro8','$sexo8')");
            $sql8="SELECT idIntegrante from integrantes WHERE nombre = '$nombre8'";
            $consulta8=mysqli_query($mysqli,$sql8);

            if($consulta and $consulta2 and $consulta3 and $consulta4 and $consulta5 and $consulta6 and $consulta7 and $consulta8){
              
              $mostrar=mysqli_fetch_array($consulta);
              $id =$mostrar['idIntegrante'];
              
              $mostrar2=mysqli_fetch_array($consulta2);
              $id2 =$mostrar2['idIntegrante'];
              
              $mostrar3=mysqli_fetch_array($consulta3);
              $id3 =$mostrar3['idIntegrante'];
              
              $mostrar4=mysqli_fetch_array($consulta4);
              $id4 =$mostrar4['idIntegrante'];

              $mostrar5=mysqli_fetch_array($consulta5);
              $id5 =$mostrar5['idIntegrante'];

              $mostrar6=mysqli_fetch_array($consulta6);
              $id6 =$mostrar6['idIntegrante'];

              $mostrar7=mysqli_fetch_array($consulta7);
              $id7 =$mostrar7['idIntegrante'];

              $mostrar8=mysqli_fetch_array($consulta8);
              $id8 =$mostrar8['idIntegrante'];

              if($id and $id2 and $id3 and $id4 and $id5 and $id6 and $id7 and $id8){
                $Agregar = !$mysqli -> query("INSERT INTO proyectos (Impacto, Objetivo, Categoria, Patente, Grado, Grupo, idIntegrante1,idIntegrante2,idIntegrante3,idIntegrante4,idIntegrante5,idIntegrante6,idIntegrante7,idIntegrante8) VALUES
                ('$impacto','$objetivo','$categoria', '$patente', '$grado', '$grupo', '$id', '$id2', '$id3', '$id4', '$id5', '$id6', '$id7', '$id8')");
                if(!$Agregar){
                  echo "<script> 
                  alert('Agregado Exitosamente'); 
                  window.location.href='../integradoraii/Tablas.php'; 
                  </script>"; 
                                 
                  }
                else{
                  echo "<script> 
                  alert('Error de proyecto'); 
                  window.location.href='admin/ahm/panel'; 
                  </script>"; 
                }
              }else {
                echo "<script> 
                alert('Error de ID'); 
                window.location.href='admin/ahm/panel'; 
                </script>"; 
              }

            }else{
              echo "<script> 
              alert('Error de Consulta'); 
              window.location.href='admin/ahm/panel'; 
              </script>"; ;
            }
            
        }

        //funciones de Update
        public function un_Alumno_update($idp,$impacto,$objetivo,$categoria, $patente, $grado, $grupo, $nombre1, $registro1, $sexo1, $mysqli ){
            
          $actualizar = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre1', Registro = '$registro1', Sexo = '$sexo1' WHERE integrantes.nombre = '$nombre1'");

          $sql="SELECT idIntegrante from integrantes WHERE nombre = '$nombre1'";
          $consulta=mysqli_query($mysqli,$sql);
          if($consulta){
            $mostrar=mysqli_fetch_array($consulta);
            $id =$mostrar['idIntegrante'];
            
            if($id){
              $Actualizarp = !$mysqli -> query("UPDATE proyectos SET Impacto = '$impacto', Objetivo = '$objetivo', Categoria = '$categoria', Patente = '$patente', Grado = '$grado', Grupo = '$grupo', idIntegrante1 = '$id' WHERE proyectos.idProyecto = '$idp'");
              if(!$Actualizarp){
                echo "<script> 
                alert('Agregado Exitosamente'); 
                window.location.href='../integradoraii/Tablas.php'; 
                </script>"; 
                               
                }
              else{
                echo "<script> 
                alert('Error de proyecto'); 
                </script>"; 
              }
            }else {
              echo "<script> 
              alert('Error de ID'); 
              </script>"; 
            }

          }else{
            echo "<script> 
            alert('Error de Consulta'); 
            </script>"; ;
          }

          
      }

      public function dos_Alumnos_update($idp,$impacto,$objetivo,$categoria, $patente, $grado, $grupo, $nombre1, $registro1, $sexo1, $nombre2, $registro2, $sexo2, $mysqli ){
            
        $actualizar = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre1', Registro = '$registro1', Sexo = '$sexo1' WHERE integrantes.nombre = '$nombre1'");
        $sql="SELECT idIntegrante from integrantes WHERE nombre = '$nombre1'";
        $consulta=mysqli_query($mysqli,$sql);

        $actualizar2 = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre2', Registro = '$registro2', Sexo = '$sexo2' WHERE integrantes.nombre = '$nombre2'");
        $sql2="SELECT idIntegrante from integrantes WHERE nombre = '$nombre2'";;
        $consulta2=mysqli_query($mysqli,$sql2);
        if($consulta and $consulta2){
          $mostrar=mysqli_fetch_array($consulta);
          $id =$mostrar['idIntegrante'];
          
          $mostrar2=mysqli_fetch_array($consulta2);
          $id2 =$mostrar2['idIntegrante'];
          
          
          if($id and $id2){
            $Actualizarp = !$mysqli -> query("UPDATE proyectos SET Impacto = '$impacto', Objetivo = '$objetivo', Categoria = '$categoria', Patente = '$patente', Grado = '$grado', Grupo = '$grupo', idIntegrante1 = '$id', idIntegrante2 = '$id2' WHERE proyectos.idProyecto = '$idp'");
            if(!$Actualizarp){
              echo "<script> 
              alert('Agregado Exitosamente'); 
              window.location.href='../integradoraii/Tablas.php'; 
              </script>"; 
                             
              }
            else{
              echo "<script> 
              alert('Error de proyecto'); 
              </script>"; 
            }
          }else {
            echo "<script> 
            alert('Error de ID'); 
            </script>"; 
          }

        }else{
          echo "<script> 
          alert('Error de Consulta'); 
          </script>"; ;
        }
        
    }

  public function tres_Alumnos_update($idp,$impacto,$objetivo,$categoria, $patente, $grado, $grupo, $nombre1, $registro1, $sexo1, $nombre2, $registro2, $sexo2, $nombre3, $registro3, $sexo3, $mysqli ){
        
    $actualizar = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre1', Registro = '$registro1', Sexo = '$sexo1' WHERE integrantes.nombre = '$nombre1'");
    $sql="SELECT idIntegrante from integrantes WHERE nombre = '$nombre1'";
    $consulta=mysqli_query($mysqli,$sql);

    $actualizar2 = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre2', Registro = '$registro2', Sexo = '$sexo2' WHERE integrantes.nombre = '$nombre2'");
    $sql2="SELECT idIntegrante from integrantes WHERE nombre = '$nombre2'";;
    $consulta2=mysqli_query($mysqli,$sql2);

    $actualizar3 = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre3', Registro = '$registro3', Sexo = '$sexo3' WHERE integrantes.nombre = '$nombre3'");
    $sql3="SELECT idIntegrante from integrantes WHERE nombre = '$nombre3'";;
    $consulta3=mysqli_query($mysqli,$sql3);
    if($consulta and $consulta2 and $consulta3){
      $mostrar=mysqli_fetch_array($consulta);
      $id =$mostrar['idIntegrante'];
      
      $mostrar2=mysqli_fetch_array($consulta2);
      $id2 =$mostrar2['idIntegrante'];

      $mostrar3=mysqli_fetch_array($consulta3);
      $id3 =$mostrar3['idIntegrante'];
      
      
      if($id and $id2 and $id3){
        $Actualizarp = !$mysqli -> query("UPDATE proyectos SET Impacto = '$impacto', Objetivo = '$objetivo', Categoria = '$categoria', Patente = '$patente', Grado = '$grado', Grupo = '$grupo', idIntegrante1 = '$id', idIntegrante2 = '$id2', idIntegrante3 = '$id3' WHERE proyectos.idProyecto = '$idp'");
        if(!$Actualizarp){
          echo "<script> 
          alert('Agregado Exitosamente'); 
          window.location.href='../integradoraii/Tablas.php'; 
          </script>"; 
                         
          }
        else{
          echo "<script> 
          alert('Error de proyecto'); 
          </script>"; 
        }
      }else {
        echo "<script> 
        alert('Error de ID'); 
        </script>"; 
      }

    }else{
      echo "<script> 
      alert('Error de Consulta'); 
      </script>"; ;
    }
    
}

  public function cuatro_Alumnos_update($idp,$impacto,$objetivo,$categoria, $patente, $grado, $grupo, $nombre1, $registro1, $sexo1, $nombre2, $registro2, $sexo2, $nombre3, $registro3, $sexo3, $nombre4, $registro4, $sexo4, $mysqli ){
        
    $actualizar = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre1', Registro = '$registro1', Sexo = '$sexo1' WHERE integrantes.nombre = '$nombre1'");
    $sql="SELECT idIntegrante from integrantes WHERE nombre = '$nombre1'";
    $consulta=mysqli_query($mysqli,$sql);

    $actualizar2 = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre2', Registro = '$registro2', Sexo = '$sexo2' WHERE integrantes.nombre = '$nombre2'");
    $sql2="SELECT idIntegrante from integrantes WHERE nombre = '$nombre2'";;
    $consulta2=mysqli_query($mysqli,$sql2);

    $actualizar3 = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre3', Registro = '$registro3', Sexo = '$sexo3' WHERE integrantes.nombre = '$nombre3'");
    $sql3="SELECT idIntegrante from integrantes WHERE nombre = '$nombre3'";;
    $consulta3=mysqli_query($mysqli,$sql3);

    $actualizar4 = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre4', Registro = '$registro4', Sexo = '$sexo4' WHERE integrantes.nombre = '$nombre4'");
    $sql4="SELECT idIntegrante from integrantes WHERE nombre = '$nombre4'";;
    $consulta4=mysqli_query($mysqli,$sql4);
    if($consulta and $consulta2 and $consulta3 and $consulta4){
      $mostrar=mysqli_fetch_array($consulta);
      $id =$mostrar['idIntegrante'];
      
      $mostrar2=mysqli_fetch_array($consulta2);
      $id2 =$mostrar2['idIntegrante'];

      $mostrar3=mysqli_fetch_array($consulta3);
      $id3 =$mostrar3['idIntegrante'];
      
      $mostrar4=mysqli_fetch_array($consulta4);
      $id4 =$mostrar4['idIntegrante'];
      
      if($id and $id2 and $id3 and $id4){
        $Actualizarp = !$mysqli -> query("UPDATE proyectos SET Impacto = '$impacto', Objetivo = '$objetivo', Categoria = '$categoria', Patente = '$patente', Grado = '$grado', Grupo = '$grupo', idIntegrante1 = '$id', idIntegrante2 = '$id2', idIntegrante3 = '$id3', idIntegrante4 = '$id4' WHERE proyectos.idProyecto = '$idp'");
        if(!$Actualizarp){
          echo "<script> 
          alert('Agregado Exitosamente'); 
          window.location.href='../integradoraii/Tablas.php'; 
          </script>"; 
                         
          }
        else{
          echo "<script> 
          alert('Error de proyecto'); 
          </script>"; 
        }
      }else {
        echo "<script> 
        alert('Error de ID'); 
        </script>"; 
      }

    }else{
      echo "<script> 
      alert('Error de Consulta'); 
      </script>"; ;
    }
    
}

public function cinco_Alumnos_update($idp,$impacto,$objetivo,$categoria, $patente, $grado, $grupo, $nombre1, $registro1, $sexo1, $nombre2, $registro2, $sexo2, $nombre3, $registro3, $sexo3, $nombre4, $registro4, $sexo4, $nombre5, $registro5, $sexo5, $mysqli ){
        
  $actualizar = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre1', Registro = '$registro1', Sexo = '$sexo1' WHERE integrantes.nombre = '$nombre1'");
  $sql="SELECT idIntegrante from integrantes WHERE nombre = '$nombre1'";
  $consulta=mysqli_query($mysqli,$sql);

  $actualizar2 = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre2', Registro = '$registro2', Sexo = '$sexo2' WHERE integrantes.nombre = '$nombre2'");
  $sql2="SELECT idIntegrante from integrantes WHERE nombre = '$nombre2'";;
  $consulta2=mysqli_query($mysqli,$sql2);

  $actualizar3 = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre3', Registro = '$registro3', Sexo = '$sexo3' WHERE integrantes.nombre = '$nombre3'");
  $sql3="SELECT idIntegrante from integrantes WHERE nombre = '$nombre3'";;
  $consulta3=mysqli_query($mysqli,$sql3);

  $actualizar4 = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre4', Registro = '$registro4', Sexo = '$sexo4' WHERE integrantes.nombre = '$nombre4'");
  $sql4="SELECT idIntegrante from integrantes WHERE nombre = '$nombre4'";;
  $consulta4=mysqli_query($mysqli,$sql4);

  $actualizar5 = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre5', Registro = '$registro5', Sexo = '$sexo5' WHERE integrantes.nombre = '$nombre5'");
  $sql5="SELECT idIntegrante from integrantes WHERE nombre = '$nombre5'";;
  $consulta5=mysqli_query($mysqli,$sql5);
  if($consulta and $consulta2 and $consulta3 and $consulta4 and $consulta5){
    $mostrar=mysqli_fetch_array($consulta);
    $id =$mostrar['idIntegrante'];
    
    $mostrar2=mysqli_fetch_array($consulta2);
    $id2 =$mostrar2['idIntegrante'];

    $mostrar3=mysqli_fetch_array($consulta3);
    $id3 =$mostrar3['idIntegrante'];
    
    $mostrar4=mysqli_fetch_array($consulta4);
    $id4 =$mostrar4['idIntegrante'];

    $mostrar5=mysqli_fetch_array($consulta5);
    $id5 =$mostrar5['idIntegrante'];
    
    if($id and $id2 and $id3 and $id4 and $id5){
      $Actualizarp = !$mysqli -> query("UPDATE proyectos SET Impacto = '$impacto', Objetivo = '$objetivo', Categoria = '$categoria', Patente = '$patente', Grado = '$grado', Grupo = '$grupo', idIntegrante1 = '$id', idIntegrante2 = '$id2', idIntegrante3 = '$id3', idIntegrante4 = '$id4', idIntegrante5 = '$id5' WHERE proyectos.idProyecto = '$idp'");
      if(!$Actualizarp){
        echo "<script> 
        alert('Agregado Exitosamente'); 
        window.location.href='../integradoraii/Tablas.php'; 
        </script>"; 
                       
        }
      else{
        echo "<script> 
        alert('Error de proyecto'); 
        </script>"; 
      }
    }else {
      echo "<script> 
      alert('Error de ID'); 
      </script>"; 
    }

  }else{
    echo "<script> 
    alert('Error de Consulta'); 
    </script>"; ;
  }
  
}


public function seis_Alumnos_update($idp,$impacto,$objetivo,$categoria, $patente, $grado, $grupo, $nombre1, $registro1, $sexo1, $nombre2, $registro2, $sexo2, $nombre3, $registro3, $sexo3, $nombre4, $registro4, $sexo4, $nombre5, $registro5, $sexo5, $nombre6, $registro6, $sexo6, $mysqli ){
        
  $actualizar = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre1', Registro = '$registro1', Sexo = '$sexo1' WHERE integrantes.nombre = '$nombre1'");
  $sql="SELECT idIntegrante from integrantes WHERE nombre = '$nombre1'";
  $consulta=mysqli_query($mysqli,$sql);

  $actualizar2 = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre2', Registro = '$registro2', Sexo = '$sexo2' WHERE integrantes.nombre = '$nombre2'");
  $sql2="SELECT idIntegrante from integrantes WHERE nombre = '$nombre2'";;
  $consulta2=mysqli_query($mysqli,$sql2);

  $actualizar3 = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre3', Registro = '$registro3', Sexo = '$sexo3' WHERE integrantes.nombre = '$nombre3'");
  $sql3="SELECT idIntegrante from integrantes WHERE nombre = '$nombre3'";;
  $consulta3=mysqli_query($mysqli,$sql3);

  $actualizar4 = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre4', Registro = '$registro4', Sexo = '$sexo4' WHERE integrantes.nombre = '$nombre4'");
  $sql4="SELECT idIntegrante from integrantes WHERE nombre = '$nombre4'";;
  $consulta4=mysqli_query($mysqli,$sql4);

  $actualizar5 = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre5', Registro = '$registro5', Sexo = '$sexo5' WHERE integrantes.nombre = '$nombre5'");
  $sql5="SELECT idIntegrante from integrantes WHERE nombre = '$nombre5'";;
  $consulta5=mysqli_query($mysqli,$sql5);

  $actualizar6 = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre6', Registro = '$registro6', Sexo = '$sexo6' WHERE integrantes.nombre = '$nombre6'");
  $sql6="SELECT idIntegrante from integrantes WHERE nombre = '$nombre6'";;
  $consulta6=mysqli_query($mysqli,$sql6);
  if($consulta and $consulta2 and $consulta3 and $consulta4 and $consulta5 and $consulta6){
    $mostrar=mysqli_fetch_array($consulta);
    $id =$mostrar['idIntegrante'];
    
    $mostrar2=mysqli_fetch_array($consulta2);
    $id2 =$mostrar2['idIntegrante'];

    $mostrar3=mysqli_fetch_array($consulta3);
    $id3 =$mostrar3['idIntegrante'];
    
    $mostrar4=mysqli_fetch_array($consulta4);
    $id4 =$mostrar4['idIntegrante'];

    $mostrar5=mysqli_fetch_array($consulta5);
    $id5 =$mostrar5['idIntegrante'];

    $mostrar6=mysqli_fetch_array($consulta6);
    $id6 =$mostrar6['idIntegrante'];
    
    if($id and $id2 and $id3 and $id4 and $id5 and $id6){
      $Actualizarp = !$mysqli -> query("UPDATE proyectos SET Impacto = '$impacto', Objetivo = '$objetivo', Categoria = '$categoria', Patente = '$patente', Grado = '$grado', Grupo = '$grupo', idIntegrante1 = '$id', idIntegrante2 = '$id2', idIntegrante3 = '$id3', idIntegrante4 = '$id4', idIntegrante5 = '$id5', idIntegrante6 = '$id6' WHERE proyectos.idProyecto = '$idp'");
      if(!$Actualizarp){
        echo "<script> 
        alert('Agregado Exitosamente'); 
        window.location.href='../integradoraii/Tablas.php'; 
        </script>"; 
                       
        }
      else{
        echo "<script> 
        alert('Error de proyecto'); 
        </script>"; 
      }
    }else {
      echo "<script> 
      alert('Error de ID'); 
      </script>"; 
    }

  }else{
    echo "<script> 
    alert('Error de Consulta'); 
    </script>"; ;
  }
  
}

public function siete_Alumnos_update($idp,$impacto,$objetivo,$categoria, $patente, $grado, $grupo, $nombre1, $registro1, $sexo1, $nombre2, $registro2, $sexo2, $nombre3, $registro3, $sexo3, $nombre4, $registro4, $sexo4, $nombre5, $registro5, $sexo5, $nombre6, $registro6, $sexo6, $nombre7, $registro7, $sexo7, $mysqli ){
        
  $actualizar = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre1', Registro = '$registro1', Sexo = '$sexo1' WHERE integrantes.nombre = '$nombre1'");
  $sql="SELECT idIntegrante from integrantes WHERE nombre = '$nombre1'";
  $consulta=mysqli_query($mysqli,$sql);

  $actualizar2 = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre2', Registro = '$registro2', Sexo = '$sexo2' WHERE integrantes.nombre = '$nombre2'");
  $sql2="SELECT idIntegrante from integrantes WHERE nombre = '$nombre2'";;
  $consulta2=mysqli_query($mysqli,$sql2);

  $actualizar3 = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre3', Registro = '$registro3', Sexo = '$sexo3' WHERE integrantes.nombre = '$nombre3'");
  $sql3="SELECT idIntegrante from integrantes WHERE nombre = '$nombre3'";;
  $consulta3=mysqli_query($mysqli,$sql3);

  $actualizar4 = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre4', Registro = '$registro4', Sexo = '$sexo4' WHERE integrantes.nombre = '$nombre4'");
  $sql4="SELECT idIntegrante from integrantes WHERE nombre = '$nombre4'";;
  $consulta4=mysqli_query($mysqli,$sql4);

  $actualizar5 = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre5', Registro = '$registro5', Sexo = '$sexo5' WHERE integrantes.nombre = '$nombre5'");
  $sql5="SELECT idIntegrante from integrantes WHERE nombre = '$nombre5'";;
  $consulta5=mysqli_query($mysqli,$sql5);

  $actualizar6 = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre6', Registro = '$registro6', Sexo = '$sexo6' WHERE integrantes.nombre = '$nombre6'");
  $sql6="SELECT idIntegrante from integrantes WHERE nombre = '$nombre6'";;
  $consulta6=mysqli_query($mysqli,$sql6);

  $actualizar7 = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre7', Registro = '$registro7', Sexo = '$sexo7' WHERE integrantes.nombre = '$nombre7'");
  $sql7="SELECT idIntegrante from integrantes WHERE nombre = '$nombre7'";;
  $consulta7=mysqli_query($mysqli,$sql7);
  if($consulta and $consulta2 and $consulta3 and $consulta4 and $consulta5 and $consulta6 and $consulta7){
    $mostrar=mysqli_fetch_array($consulta);
    $id =$mostrar['idIntegrante'];
    
    $mostrar2=mysqli_fetch_array($consulta2);
    $id2 =$mostrar2['idIntegrante'];

    $mostrar3=mysqli_fetch_array($consulta3);
    $id3 =$mostrar3['idIntegrante'];
    
    $mostrar4=mysqli_fetch_array($consulta4);
    $id4 =$mostrar4['idIntegrante'];

    $mostrar5=mysqli_fetch_array($consulta5);
    $id5 =$mostrar5['idIntegrante'];

    $mostrar6=mysqli_fetch_array($consulta6);
    $id6 =$mostrar6['idIntegrante'];

    $mostrar7=mysqli_fetch_array($consulta7);
    $id7 =$mostrar7['idIntegrante'];
    
    if($id and $id2 and $id3 and $id4 and $id5 and $id6 and $id7){
      $Actualizarp = !$mysqli -> query("UPDATE proyectos SET Impacto = '$impacto', Objetivo = '$objetivo', Categoria = '$categoria', Patente = '$patente', Grado = '$grado', Grupo = '$grupo', idIntegrante1 = '$id', idIntegrante2 = '$id2', idIntegrante3 = '$id3', idIntegrante4 = '$id4', idIntegrante5 = '$id5', idIntegrante6 = '$id6', idIntegrante7 = '$id7' WHERE proyectos.idProyecto = '$idp'");
      if(!$Actualizarp){
        echo "<script> 
        alert('Agregado Exitosamente'); 
        window.location.href='../integradoraii/Tablas.php'; 
        </script>"; 
                       
        }
      else{
        echo "<script> 
        alert('Error de proyecto'); 
        </script>"; 
      }
    }else {
      echo "<script> 
      alert('Error de ID'); 
      </script>"; 
    }

  }else{
    echo "<script> 
    alert('Error de Consulta'); 
    </script>"; ;
  }
  
}


public function ocho_Alumnos_update($idp,$impacto,$objetivo,$categoria, $patente, $grado, $grupo, $nombre1, $registro1, $sexo1, $nombre2, $registro2, $sexo2, $nombre3, $registro3, $sexo3, $nombre4, $registro4, $sexo4, $nombre5, $registro5, $sexo5, $nombre6, $registro6, $sexo6, $nombre7, $registro7, $sexo7, $nombre8, $registro8, $sexo8, $mysqli ){
        
  $actualizar = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre1', Registro = '$registro1', Sexo = '$sexo1' WHERE integrantes.nombre = '$nombre1'");
  $sql="SELECT idIntegrante from integrantes WHERE nombre = '$nombre1'";
  $consulta=mysqli_query($mysqli,$sql);

  $actualizar2 = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre2', Registro = '$registro2', Sexo = '$sexo2' WHERE integrantes.nombre = '$nombre2'");
  $sql2="SELECT idIntegrante from integrantes WHERE nombre = '$nombre2'";;
  $consulta2=mysqli_query($mysqli,$sql2);

  $actualizar3 = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre3', Registro = '$registro3', Sexo = '$sexo3' WHERE integrantes.nombre = '$nombre3'");
  $sql3="SELECT idIntegrante from integrantes WHERE nombre = '$nombre3'";;
  $consulta3=mysqli_query($mysqli,$sql3);

  $actualizar4 = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre4', Registro = '$registro4', Sexo = '$sexo4' WHERE integrantes.nombre = '$nombre4'");
  $sql4="SELECT idIntegrante from integrantes WHERE nombre = '$nombre4'";;
  $consulta4=mysqli_query($mysqli,$sql4);

  $actualizar5 = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre5', Registro = '$registro5', Sexo = '$sexo5' WHERE integrantes.nombre = '$nombre5'");
  $sql5="SELECT idIntegrante from integrantes WHERE nombre = '$nombre5'";;
  $consulta5=mysqli_query($mysqli,$sql5);

  $actualizar6 = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre6', Registro = '$registro6', Sexo = '$sexo6' WHERE integrantes.nombre = '$nombre6'");
  $sql6="SELECT idIntegrante from integrantes WHERE nombre = '$nombre6'";;
  $consulta6=mysqli_query($mysqli,$sql6);

  $actualizar7 = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre7', Registro = '$registro7', Sexo = '$sexo7' WHERE integrantes.nombre = '$nombre7'");
  $sql7="SELECT idIntegrante from integrantes WHERE nombre = '$nombre7'";;
  $consulta7=mysqli_query($mysqli,$sql7);

  $actualizar8 = !$mysqli -> query("UPDATE integrantes SET nombre = '$nombre8', Registro = '$registro8', Sexo = '$sexo8' WHERE integrantes.nombre = '$nombre8'");
  $sql8="SELECT idIntegrante from integrantes WHERE nombre = '$nombre8'";;
  $consulta8=mysqli_query($mysqli,$sql8);
  if($consulta and $consulta2 and $consulta3 and $consulta4 and $consulta5 and $consulta6 and $consulta7 and $consulta8){
    $mostrar=mysqli_fetch_array($consulta);
    $id =$mostrar['idIntegrante'];
    
    $mostrar2=mysqli_fetch_array($consulta2);
    $id2 =$mostrar2['idIntegrante'];

    $mostrar3=mysqli_fetch_array($consulta3);
    $id3 =$mostrar3['idIntegrante'];
    
    $mostrar4=mysqli_fetch_array($consulta4);
    $id4 =$mostrar4['idIntegrante'];

    $mostrar5=mysqli_fetch_array($consulta5);
    $id5 =$mostrar5['idIntegrante'];

    $mostrar6=mysqli_fetch_array($consulta6);
    $id6 =$mostrar6['idIntegrante'];

    $mostrar7=mysqli_fetch_array($consulta7);
    $id7 =$mostrar7['idIntegrante'];

    $mostrar8=mysqli_fetch_array($consulta8);
    $id8 =$mostrar8['idIntegrante'];
    
    if($id and $id2 and $id3 and $id4 and $id5 and $id6 and $id7 and $id8){
      $Actualizarp = !$mysqli -> query("UPDATE proyectos SET Impacto = '$impacto', Objetivo = '$objetivo', Categoria = '$categoria', Patente = '$patente', Grado = '$grado', Grupo = '$grupo', idIntegrante1 = '$id', idIntegrante2 = '$id2', idIntegrante3 = '$id3', idIntegrante4 = '$id4', idIntegrante5 = '$id5', idIntegrante6 = '$id6', idIntegrante7 = '$id7', idIntegrante8 = '$id8' WHERE proyectos.idProyecto = '$idp'");
      if(!$Actualizarp){
        echo "<script> 
        alert('Agregado Exitosamente'); 
        window.location.href='../integradoraii/Tablas.php'; 
        </script>"; 
                       
        }
      else{
        echo "<script> 
        alert('Error de proyecto'); 
        </script>"; 
      }
    }else {
      echo "<script> 
      alert('Error de ID'); 
      </script>"; 
    }

  }else{
    echo "<script> 
    alert('Error de Consulta'); 
    </script>"; ;
  }
  
}

    }
    ?>