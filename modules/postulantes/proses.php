
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
            $medio = $_POST['medio'];
     
          //  $codigo  = mysqli_real_escape_string($mysqli, trim($_POST['codigo']));
          $sede = strtoupper($_POST['seleccionado']);
          $carrera = strtoupper($_POST['carrera']);
          $nombre = strtoupper($_POST['nombre']);
          $apellidos = strtoupper($_POST['apellido']);
          $cedula = $_POST['ci'];
          $telefono = $_POST['telefono'];
          $correo = strtolower($_POST['correo']);
          $colegio = strtoupper($_POST['colegio']);
         $year=$_POST['año'];
         $estado='sinseguimiento';


         //   $created_user = $_SESSION['id_user'];

  
            $query = mysqli_query($mysqli, "INSERT INTO interesados (id_sede, id_carreras,nombres, apellidos, cedula, telefono, email, colegio, fecha_carga, anho,estado, id_medio) 
            VALUES ('$sede','$carrera','$nombre', '$apellidos', '$cedula', '$telefono', '$correo', '$colegio',CURDATE( ),'$year','$estado','$medio')")
                                            or die('error '.mysqli_error($mysqli));    
                                            $inser_usuario="INSERT INTO usuario_interesado (id_user, id_interesado,  fecha_carga, estado) VALUES ('$user','$codigo',CURDATE( ),'$estado')";                               
                                            $actualizar=mysqli_query($mysqli, $inser_usuario);

        
            if ($query) {
         
                header("location: ../../main.php?module=postulantes&alert=1");
            }   
        }   
    }
    
    elseif ($_GET['act']=='update') {
        if (isset($_POST['Guardar'])) {
            if (isset($_POST['codigo'])) {
                $user = $_SESSION['id_user'];
                $codigo  = $_POST['codigo'];
                $estado='sinseguimiento';

                $nombre = strtoupper($_POST['nombre']);
                $apellidos = strtoupper($_POST['apellido']);
                $cedula = $_POST['cedula'];
                $telefono = $_POST['telefono'];
                $correo = $_POST['correo'];
                $colegio = strtoupper($_POST['colegio']);
               

            //    $updated_user = $_SESSION['id_user'];

                $query = mysqli_query($mysqli, "UPDATE interesados SET nombres      = '$nombre',
                                                                    apellidos          = '$apellidos',
                                                                    cedula      = '$cedula',
                                                                    telefono      = '$telefono',
                                                                    email          = '$correo',
                                                                    colegio    = '$colegio',
                                                                    fecha_modificacion      = CURDATE( )
                                                              WHERE id_interesado = $codigo")
                                                or die('error: '.mysqli_error($mysqli));

                                                $inser_usuario="INSERT INTO usuario_interesado (id_user, id_interesado,  fecha_carga, estado) VALUES ('$user','$codigo',CURDATE( ),'$estado');";                               
                                                $actualizar=mysqli_query($mysqli, $inser_usuario);

    
                if ($query) {
                  
                    header("location: ../../main.php?module=postulantes&alert=2");
                }
                else{
                    echo "no se pudo registrar";
                }         
            }
        }
    }

    elseif ($_GET['act']=='delete') {
        if (isset($_GET['id'])) {
            $codigo = $_GET['id'];
      
            $query = mysqli_query($mysqli, "DELETE FROM interesados WHERE id_interesado='$codigo'")
                                            or die('error '.mysqli_error($mysqli));


            if ($query) {
     
                header("location: ../../main.php?module=postulantes&alert=3");
            }
        }
    }       
}       
?>