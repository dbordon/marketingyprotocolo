
<?php
session_start();


require_once "../../config/database.php";

if (empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}

else {
    if ($_GET['act']=='add') {
        
     if (isset($_POST['Guardar'])) {
          
           

            $user = $_SESSION['id_user'];
            $codigo_seg_deser  = $_POST['codigo_seg_deser'];
            $codigo_desercion  = $_POST['codigo_desercion'];
     
            $motivo = strtoupper($_POST['motivo']);
            $obsmotivo = strtoupper($_POST['obs_motivo']);
            $negociacion = strtoupper($_POST['negociacion']);
            $obsnegociacion = strtoupper($_POST['obs_negociacion']);
            $respuesta = strtoupper($_POST['respuesta']);
          
            $estado= $_POST['estado'];

            $query = mysqli_query($mysqli, "INSERT INTO  seg_desercion (cod_seg_desercion, cod_desercion, motivo, obs_motivo, negociacion, obs_negociacion, respuesta_desercion, fecha_seg, id_user, estado) 
            VALUES ( '$codigo_seg_deser','$codigo_desercion','$motivo', '$obsmotivo','$negociacion','$obsnegociacion','$respuesta',CURDATE( ),'$user','$estado')")
                                            or die('error '.mysqli_error($mysqli));
                                            
                                                $actualizar_desercion="UPDATE desercion set estado='inactivo' WHERE cod_desercion=$codigo_desercion";                               
                                                $actualizar_ejecutar=mysqli_query($mysqli, $actualizar_desercion);  
                                       
        
            if ($query) {
                header("location: ../../main.php?module=desercionsegseguimiento&alert=1");   

            }
        }  
    }
    
    elseif ($_GET['act']=='update') {
       /* if (isset($_POST['Guardar'])) {
            if (isset($_POST['codigo'])) {
                $user = $_SESSION['id_user'];
                $codigo  = $_POST['codigo'];
         
              //  $codigo  = mysqli_real_escape_string($mysqli, trim($_POST['codigo']));
              $sede = strtoupper($_POST['seleccionado']);
              $carrera = strtoupper($_POST['carrera']);
              $curso = $_POST['curso'];
              $turno = strtoupper($_POST['turno']);
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
                                                                       cedula      = '$cedula',
                                                                       nombres     = '$nombre',
                                                                       apellidos   = '$apellidos',                                                                    
                                                                       celular      = '$celular',
                                                                       id_user      = '$user',
                                                                       fecha_modificacion   = CURDATE( )
                                                              WHERE cod_desercion = $codigo")
                                                or die('error: '.mysqli_error($mysqli));

                                            
    
                if ($query) {
                  
                    header("location: ../../main.php?module=desercionseguimiento&alert=2");
                }
                else{
                    echo "no se pudo registrar";
                }         
            }
        }*/
    }

    elseif ($_GET['act']=='delete') {
        if (isset($_GET['cod_desercion'])) {
            $codigo = $_GET['cod_desercion'];
            $usuario=$_SESSION['id_user'];                
            $estado='inactivo'; 



           $query = mysqli_query($mysqli, "UPDATE  desercion SET estado    = '$estado',
                                                               id_user      = $usuario
                                                         WHERE cod_desercion  = $codigo")
                                           or die('error: '.mysqli_error($mysqli));

                                 
     
                header("location: ../../main.php?module=desercionsegseguimiento&alert=3");
            }
        }
    }       
     
?>