<?php
        session_start();
        ob_start();
        $usuario_ingreso = $_SESSION['id_user']; 
?>
<section class="content-header">
  <h1>
    <i class="fa fa-file-text-o icon-title"></i> Lista de confirmados:
    <?php
         $query = mysqli_query($mysqli, "SELECT COUNT(*) AS Cantidad FROM interesados WHERE estado='concluido' and id_user=$usuario_ingreso")
                                             or die('error: '.mysqli_error($mysqli));
                 
                                             while ($data = mysqli_fetch_assoc($query)){ 
                                                echo "<tr> <td width='200' align='right'>  $data[Cantidad],</td>
                                                      </tr>"." año actual";                                            }                                  
       ?> 

    <a class="btn btn-primary btn-social pull-right" href="modules/reportetodos/print.php" target="_blank">
      <i class="fa fa-print"></i> Imprimir
     </a>
    <br>    

  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-body">
        
          <table id="dataTables1" class="table table-bordered table-striped table-hover">
          
            <thead>
              <tr>
              <th scope=col>Usuario</th>
              <th scope=col>Postulante</th>
        			<th scope=col>Sede</th>
              <th scope=col>Año</th>
	        		<th scope=col>Estado</th>
              </tr>
            </thead>          
            <tbody>
            <?php 
          
              $query = mysqli_query($mysqli, "SELECT c.name_user AS Usuario, c.username AS Unombre,
              CONCAT(b.nombres, ' ', b.apellidos, '-',b.cedula) AS Postulante, 
              s.descrip_sede AS Sede, a.estado, anho 
              FROM usuario_interesado a, interesados b, usuarios c, sedes s
              WHERE a.id_user=c.id_user 
              AND c.id_user=$usuario_ingreso  
              AND a.id_interesado=b.id_interesado 
              AND s.id_sede=b.id_sede 
              AND a.estado='concluido' 
              ORDER BY  anho desc, Sede")
                                or die('error: '.mysqli_error($mysqli));

            while ($data = mysqli_fetch_assoc($query)) { 
              $sede=utf8_encode($data[Sede]);
              $Unombre=$data[Unombre];

           
              echo "<tr>
                      <td width='50' class='center'>$data[Usuario]</td>
                      <td width='200' align='right'>$data[Postulante]</td>
                      <td width='80' class='center'>$sede</td>
                      <td width='80'>$data[estado]</td>
                      <td width='80'>$data[anho]</td>
                      <td class='center' width='80'>
		                <div>";
                    ?>
                          
            <?php
              echo "</div>
                      </td>
                    </tr>";

            }
            ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!--/.col -->
  </div>   <!-- /.row -->
</section><!-- /.content