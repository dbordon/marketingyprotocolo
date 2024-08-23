
<?php
session_start();


require_once "../../config/database.php";

if (empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}

else {
    if ($_GET['act']=='insert') {
        if (isset($_POST['Guardar'])) {

            $user = $_SESSION['id_user'];
            $codigo  = $_POST['codigo'];
     
          //  $codigo  = mysqli_real_escape_string($mysqli, trim($_POST['codigo']));
          $sede = strtoupper($_POST['seleccionado']);
          $carrera = strtoupper($_POST['carrera']);
          $curso = $_POST['curso'];
          $turno = strtoupper($_POST['turno']);
          $sadministrativa = strtoupper($_POST['sadministrativa']);
          $sacademica = strtoupper($_POST['sacademica']);
          $cedula = $_POST['cedula'];
          $nombre = strtoupper($_POST['nombres']);
          $apellidos = strtoupper($_POST['apellidos']);
          $celular = $_POST['celular'];
          
          $estado='activo';


         //   $created_user = $_SESSION['id_user'];

  
            $query = mysqli_query($mysqli, "INSERT INTO desercion (id_sede, id_carreras, curso, turno, sadministrativa, sacademica, cedula, nombres, apellidos, celular, fecha_carga, estado,id_user) 
            VALUES ('$sede','$carrera','$curso', '$turno', '$sadministrativa','$sacademica', '$cedula', '$nombre', '$apellidos', '$celular',CURDATE( ),'$estado','$user')")
                                            or die('error '.mysqli_error($mysqli));    
                                            /*$inser_usuario="INSERT INTO usuario_interesado (id_user, id_interesado,  fecha_carga, estado) VALUES ('$user','$codigo',CURDATE( ),'$estado')";                               
                                            $actualizar=mysqli_query($mysqli, $inser_usuario);*/

        
            if ($query) {
         
                header("location: ../../main.php?module=desercion&alert=1");
            }   
        }   
    }
    
    elseif ($_GET['act']=='update') {
        if (isset($_POST['Guardar'])) {
            if (isset($_POST['codigo'])) {
                $user = $_SESSION['id_user'];
                $codigo  = $_POST['codigo'];
         
              //  $codigo  = mysqli_real_escape_string($mysqli, trim($_POST['codigo']));
              $sede = strtoupper($_POST['seleccionado']);
              $carrera = strtoupper($_POST['carrera']);
              $curso = $_POST['curso'];
              $turno = strtoupper($_POST['turno']);
              $sadministrativa = $_POST['sadministrativa'];
              $sacademica = $_POST['sacademica'];
              $cedula = $_POST['cedula'];
              $nombre = strtoupper($_POST['nombres']);
              $apellidos = strtoupper($_POST['apellidos']);
              $celular = $_POST['celular'];
              
              $estado='activo';
               

            //    $updated_user = $_SESSION['id_user'];

                $query = mysqli_query($mysqli, "UPDATE desercion SET   id_sede      = '$sede',
                                                                       id_carreras  = '$carrera',
                                                                       curso        = '$curso',
                                                                       turno        = '$turno',
                                                                       sadministrativa= '$sadministrativa',
                                                                       sacademica= '$sacademica',
                                                                       cedula      = '$cedula',
                                                                       nombres     = '$nombre',
                                                                       apellidos   = '$apellidos',                                                                    
                                                                       celular      = '$celular',
                                                                       id_user      = '$user',
                                                                       fecha_modificacion   = CURDATE( )
                                                              WHERE cod_desercion = $codigo")
                                                or die('error: '.mysqli_error($mysqli));

                                            
    
                if ($query) {
                  
                    header("location: ../../main.php?module=desercion&alert=2");
                }
                else{
                    echo "no se pudo registrar";
                }         
            }
        }
    }

    elseif ($_GET['act']=='delete') {
        if (isset($_GET['cod_desercion'])) {
            $codigo = $_GET['cod_desercion'];
            $usuario=$_SESSION['id_user'];                
            $estado='borrado'; 



           $query = mysqli_query($mysqli, "UPDATE  desercion SET estado    = '$estado',
                                                               id_user      = $usuario
                                                         WHERE cod_desercion  = $codigo")
                                           or die('error: '.mysqli_error($mysqli));

                                 
     
                header("location: ../../main.php?module=desercion&alert=3");
            }
        }
    }       
     
?>