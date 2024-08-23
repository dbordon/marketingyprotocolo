<?php
session_start();
ob_start();


require_once "../../config/database.php";

include "../../config/fungsi_tanggal.php";

include "../../config/fungsi_rupiah.php";

$hari_ini = date("d-m-Y");


$tgl1     = $_GET['tgl_awal']; 
$explode  = explode('-',$tgl1);
$tgl_awal = $explode[2]."-".$explode[1]."-".$explode[0]; 

$tgl2      = $_GET['tgl_akhir'];
$explode   = explode('-',$tgl2);
$tgl_akhir = $explode[2]."-".$explode[1]."-".$explode[0];

if (isset($_GET['tgl_awal'])) {
    $no    = 1;
    
    $query = mysqli_query($mysqli, "SELECT a.descrip_sede,c.descrip_carrera, apellidos, nombres, cedula, telefono, email, colegio, fecha_modificacion, anho, estado 
		FROM interesados i, sedes a, carreras c
		WHERE i.id_sede=a.id_sede and estado='concluido' and  c.id_carreras=i.id_carreras and fecha_modificacion BETWEEN '$tgl_awal' AND '$tgl_akhir' ORDER BY a.descrip_sede, fecha_modificacion, apellidos desc") 
                                    or die('error '.mysqli_error($mysqli));
    $count  = mysqli_num_rows($query);
}
?>
<html xmlns="http://www.w3.org/1999/xhtml"> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>        INFORME DE ALUMNOS INGRESADOS POR MARKETING</title>
        <link rel="stylesheet" type="text/css" href="../../assets/css/laporan.css" />
    </head>
    <body>
        <div id="title">
                  INFORME DE ALUMNOS INGRESADOS POR MARKETING 

        </div>
    <?php  
    if ($tgl_awal==$tgl_akhir) { ?>
        <div id="title-tanggal">
            Fecha <?php echo tgl_eng_to_ind($tgl1); ?>
        </div>
    <?php
    } else { ?>
        <div id="title-tanggal">
            Desde <?php echo tgl_eng_to_ind($tgl1); ?> Hasta <?php echo tgl_eng_to_ind($tgl2); ?>
        </div>
    <?php
    }
    ?>
        
        <hr><br>
        <div id="isi">
            <table width="100%" border="0.3" cellpadding="0" cellspacing="0" align="center">
                <thead style="background:#e8ecee">
                    <tr class="tr-title">
                        <th height="20" align="center" valign="middle"><small>Convocatoria</small></th>
                        <th height="20" align="center" valign="middle"><small>Sede</small></th>
                        <th height="20" align="center" valign="middle"><small>Carrera</small></th>
                        <th height="20" align="center" valign="middle"><small>Apellidos</small></th>
                        <th height="20" align="center" valign="middle"><small>Nombres</small></th>
                        <th height="20" align="center" valign="middle"><small>Ci</small></th>
                        <th height="20" align="center" valign="middle"><small>Telefono</small></th>
                        <th height="20" align="center" valign="middle"><small>Fecha</small></th>
                        <th height="10" align="center" valign="middle"><small>Estado</small></th>
                    </tr>
                </thead>
                <tbody>
<?php
    
    if($count == 0) {
        echo "  <tr>
                    <td width='120' height='13' align='center' valign='middle'></td>
                    <td width='80' height='13' align='center' valign='middle'></td>
                    <td width='80' height='13' align='center' valign='middle'></td>
                    <td style='padding-left:5px;' width='155' height='13' valign='middle'></td>
					<td style='padding-left:5px;' width='50' height='13' valign='middle'></td>
                    <td style='padding-right:10px;' width='50' height='13' align='right' valign='middle'></td>
                    <td width='80' height='13' align='center' valign='middle'></td>
                </tr>";
    }

    else {
   
        while ($data = mysqli_fetch_assoc($query)) {
            $tanggal       = $data['fecha'];
            $exp           = explode('-',$tanggal);
            $fecha = $exp[2]."-".$exp[1]."-".$exp[0];
            $sededescrip=utf8_encode($data['descrip_sede']);


            echo "  <tr>
                        <td style='padding-left:5px;' width='40' height='13' valign='middle'>$data[anho]</td>
                        <td width='100' height='13' align='center' valign='middle'>$sededescrip</td>
                        <td style='padding-left:5px;' width='80' height='13' valign='middle'>$data[descrip_carrera]</td>
                        <td style='padding-left:5px;' width='80' height='13' valign='middle'>$data[apellidos]</td>
                        <td style='padding-right:10px;' width='80' height='13' align='left' valign='middle'>$data[nombres]</td>
                        <td width='50' height='13' align='center' valign='middle'>$data[cedula]</td>
                        <td width='70' height='13' align='center' valign='middle'>$data[telefono]</td>
                        <td style='padding-left:5px;' width='65' height='13' valign='middle'>$data[fecha_modificacion]</td>
                        <td style='padding-right:35px;' width='5' height='13' align='right' valign='middle'>$data[estado]</td>
                    </tr>";
            $no++;
        }
    }
?>	
                </tbody>
            </table>

        </div>
    </body>
</html>
<?php
$filename="datos de registro de medicamentos.pdf"; 
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
