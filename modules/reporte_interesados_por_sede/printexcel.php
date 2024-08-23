<?php

header('Content-type:application/xls');
header('Content-Disposition: attachment; filename=preinscriptos.xls');

require_once "../../config/database.php";

$hari_ini = date("d-m-Y");
$no = 1;

$sede = $_POST['id_sede'];
$estado = $_POST['id_estado'];

$query = mysqli_query($mysqli, "SELECT s.id_sede, s.descrip_sede as sede, ca.id_carreras, ca.descrip_carrera as carrrera, nombres, apellidos, cedula, telefono, estado
FROM interesados i
JOIN sedes s,  carreras ca 
WHERE i.id_sede=s.id_sede
AND i.id_carreras=ca.id_carreras 
AND estado = '$estado'
AND i.id_sede = $sede")
                                or die('error: '.mysqli_error($mysqli));
$count  = mysqli_num_rows($query);

if($estado=='colegios'){
    $mostarestado='Sorteo de Becas';
}
elseif($estado=='redessociales'){
    $mostarestado='Redes Sociales';
}
elseif($estado=='VOLVERALLAMAR'){
    $mostarestado='Segundo Seguimiento';
}
elseif($estado=='CONCLUIDO'){
    $mostarestado='Confirmados';
}
?>

<html> 
    <head>
        <meta charset="UTF-8" />
        <title>Inscriptos al Webinars</title>   
        <title></title>
    </head>
    <body>
        <div align='center' > <h2> Informe de preinscriptos </h2></div>
        <div  align='center'> <h3> Estado :<?=$mostarestado?> Cantidad :<?=$count?> </h3></div>
        <hr>
            <table width="100%" border="0.3" cellpadding="0" cellspacing="0" align="center">
                <thead style="background:#e8ecee">
                    <tr class="tr-title">
                        <th><small>Sede</small></th>
                        <th><small>Carrera</small></th>
                        <th><small>Nombres</small></th>
                        <th><small>Apellidos</small></th>
                        <th><small>C.I.</small></th>
                        <th><small>Teléfono</small></th>
                    </tr>
                </thead>
                <tbody>
        <?php

             
             while ($data = mysqli_fetch_assoc($query)) {
                 $descripsede=utf8_encode($data['sede']);
                 $carrera=utf8_encode($data['carrrera']);

            echo "  <tr>
                        <td>$descripsede</td>
                        <td>$carrera</td>
                        <td>$data[nombres]</td>
                        <td>$data[apellidos]</td>
                        <td>$data[cedula]</td>
                        <td>$data[telefono]</td>
                    </tr>";
                    $no++;
        
        }
        ?>  
                </tbody>
            </table>
       
 
    </body>
</html>
