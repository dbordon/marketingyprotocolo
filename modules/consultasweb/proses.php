
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
             
                 $respuesta= $_POST['respuesta'];
                 $estado = strtoupper($_POST['estado']);

            //    $updated_user = $_SESSION['id_user'];

                $query = mysqli_query($mysqli, "UPDATE consulta_web SET respuesta = '$respuesta',
                                                                       fecha_respuesta = CURDATE( ),
                                                                       id_user = $user,
                                                                       estado = '$estado'
                                                              WHERE id_consulta_web = $codigo")
                                                or die('error: '.mysqli_error($mysqli));

                                                             if ($query) {
                  
                    header("location: ../../main.php?module=consultasweb&alert=2");
                }         
            }
        }
    }

    
}       
?>
