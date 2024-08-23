<?php
session_start();
ob_start();


require_once "../../config/database.php";

include "../../config/fungsi_tanggal.php";

include "../../config/fungsi_rupiah.php";



if(isset($_POST['VOLVERALLAMAR'])){
    $estado="VOLVERALLAMAR";
}
elseif(isset($_POST['CONCLUIDO'])){
    $estado="CONCLUIDO";
}


$query = mysqli_query($mysqli, "SELECT name_user AS Funcionario, COUNT(*)  AS cantididad, i.estado AS Estado
FROM interesados i, usuarios u 
WHERE i.id_user=u.id_user
AND i.anho=2022
AND i.estado ='$estado'
GROUP BY u.name_user")
                                or die('error: '.mysqli_error($mysqli));
$count  = mysqli_num_rows($query);

?>
<html xmlns="http://www.w3.org/1999/xhtml"> 
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>INFORME DE ACTIVIDAD DE USUARIOS</title>
        <title></title>
        <link rel="shortcut icon" href="http://www.utic.edu.py/marketingyprotocolo/assets/img/favicon.ico" />

        <link rel="stylesheet" type="text/css" href="../../assets/css/laporan.css" />
    </head>
    <body>
        <div id="title">
        INFORME ACTIVIDAD DE USUARIOS
        </div>
        
        <hr><br>

        <div id="isi">
            <table align="center" width="100%" border="0.3" cellpadding="10" cellspacing="2">
                <thead style="background:#e8ecee">
                    <tr class="tr-title">
                        <th height="20" align="center" valign="middle"><small>Funcionario</small></th>
                        <th height="20" align="center" valign="middle"><small>Catidad</small></th>
                        <th height="20" align="center" valign="middle"><small>Estado</small></th>              
                    </tr>
                </thead>
                <tbody>
        <?php
       if($count==0){
           echo "No existe actividad de este usuario";
          
        }   

      
       
      while ($data = mysqli_fetch_assoc($query)) {
            $funcionario=utf8_decode($data['Funcionario']);
          
            echo "  <tr>
                        <td width='100' height='20' align='center' valign='middle'>$funcionario</td>
                        <td style='padding-left:5px;' width='30' height='13' valign='middle'>$data[cantididad]</td>

                        <td style='padding-right:40px;' width='25' height='13' align='right' valign='middle'>$data[Estado]</td>
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
$filename="informe_de_usuario.pdf"; 
//==========================================================================================================
$content = ob_get_clean();
$content = '<page style="font-family: freeserif">'.($content).'</page>';

require_once('../../assets/plugins/html2pdf_v4.03/html2pdf.class.php');
try
{
    $html2pdf = new HTML2PDF('P','A4','es', false, 'ISO-8859-15',array(10, 10, 10, 10));
    $html2pdf->setDefaultFont('Arial');
    $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
    $html2pdf->Output($filename);
}
catch(HTML2PDF_exception $e) { echo $e; }
?>