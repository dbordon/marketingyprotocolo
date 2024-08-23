
<?php
session_start();


require_once "../../config/database.php";

if (empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}

else {
    if ($_GET['act']=='update') {
        if (isset($_POST['Guardar'])) {
            if (isset($_POST['codigo'])) {

                $user = $_SESSION['id_user'];
                
                $codigo  = $_POST['codigo'];
                $nombre = strtoupper($_POST['nombre']);
                $apellidos = strtoupper($_POST['apellido']);
                $cedula = $_POST['cedula'];
                $telefono = $_POST['telefono'];
                $correo = strtolower($_POST['correo']);
                $comentario = $_POST['comentario'];
                $estado = strtoupper($_POST['estado']);
                $sede = strtoupper($_POST['seleccionado']);
                $year =$_POST['anho'];
                $convo =0;
                if(isset($_POST['nro_convo'])){
                    $convo = $_POST['nro_convo'];
                }
                $sorteo = "colegios";

            //    $updated_user = $_SESSION['id_user'];

                $query = mysqli_query($mysqli, "UPDATE interesados SET nombres      = '$nombre',
                                                                    apellidos          = '$apellidos',
                                                                    cedula      = '$cedula',
                                                                    telefono      = '$telefono',
                                                                    email          = '$correo',
                                                                    obs          = '$comentario',
                                                                    anho      = '$year',
                                                                    fecha_modificacion =CURDATE( ),
                                                                    estado     =   '$estado',
                                                                    id_sede    = '$sede',
                                                                    id_convocatoria='$convo',
                                                                    id_user = '$user',
                                                                    sorteo = '$sorteo'
                                                              WHERE id_interesado = $codigo")
                                                or die('error: '.mysqli_error($mysqli)." Nro de cédula duplicado". "<META HTTP-EQUIV='REFRESH' CONTENT='3;URL=../../main.php?module=form_colegios&form=edit&id=$codigo'>");
                                                

                                                $inser_usuario="INSERT INTO usuario_interesado (id_user, id_interesado,  fecha_carga, estado, id_convocatoria) VALUES ('$user','$codigo',CURDATE( ),'$estado','$convo');";                               
                                                $actualizar=mysqli_query($mysqli, $inser_usuario);   
                if ($query) {
                  
                    header("location: ../../main.php?module=colegios&alert=2");
                }       
            }
        }
    }

    
}       
?>
