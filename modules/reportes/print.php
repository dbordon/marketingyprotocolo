<?php
session_start();
ob_start();


require_once "../../config/database.php";

include "../../config/fungsi_tanggal.php";

include "../../config/fungsi_rupiah.php";

$hari_ini = date("d-m-Y");

$no = 1;

                            



$query = mysqli_query($mysqli, "SELECT c.name_user AS Usuario, CONCAT(b.nombres, ' ', b.apellidos, '-',b.cedula) AS Postulante, s.descrip_sede AS Sede, a.estado
FROM usuario_interesado a, interesados b, usuarios c, sedes s
WHERE a.id_user=c.id_user AND a.id_interesado=b.id_interesado AND s.id_sede=b.id_sede AND a.estado='concluido' ORDER BY Usuario, Postulante, Sede")
                                or die('error: '.mysqli_error($mysqli));
$count  = mysqli_num_rows($query);


?>
<html xmlns="http://www.w3.org/1999/xhtml"> 
    <head>
        <meta charset="UTF-8" />
        <title>INFORME DE ALUMNOS INGRESADOS POR MARKETING</title>
        <title></title>
        <link rel="stylesheet" type="text/css" href="../../assets/css/laporan.css" />
    </head>
    <body>
        <div id="title">
        INFORME DE ALUMNOS INGRESADOS POR MARKETING
        </div>
        <div id="title" align='center' >
       Cantidad:
                <?php
                echo $count;
                ?>
                </div>
        
        <hr><br>

        <div id="isi">
            <table width="100%" border="0.3" cellpadding="0" cellspacing="0" align="center">
                <thead style="background:#e8ecee">
                    <tr class="tr-title">
                        <th height="50" align="center" valign="middle"><small>Usuario.</small></th>
                        <th height="50" align="center" valign="middle"><small>Postulante</small></th>
                        <th height="50" align="center" valign="middle"><small>Sede</small></th>
                        <th height="50" align="center" valign="middle"><small>Estado</small></th>
                        

                    </tr>
                </thead>
                <tbody>
        <?php
     mysqli_set_charset( $query, 'utf-8');

      while ($data = mysqli_fetch_assoc($query)) {
           $sededescrip=utf8_encode($data['Sede']);
            echo "  <tr>
            <td width='110' class='left'>$data[Usuario]</td>
            <td width='280' align='left'>$data[Postulante]</td>
            <td width='150' class='left'>$sededescrip</td>
            <td width='80'>$data[estado]</td>
                    </tr>";
            $no++;
        }
        ?>  
                </tbody>
            </table>

            
        </div>
    </body>
</html>
<?php
$filename="INFORMDE Inscriptos.pdf"; 
//==========================================================================================================
$content = ob_get_clean();
$content = '<page style="font-family: freeserif">'.($content).'</page>';

require_once('../../assets/plugins/html2pdf_v4.03/html2pdf.class.php');
try
{
    $html2pdf = new Html2Pdf('P', 'A4', 'Es', true, 'UTF-8', 3);
    $html2pdf->pdf->SetDisplayMode('fullpage');
    $html2pdf->writeHTML($content);
    $html2pdf->Output($filename);
}
catch(HTML2PDF_exception $e) { echo $e; }
?>