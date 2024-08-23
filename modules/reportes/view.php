

<section class="content-header">
  <h1>
    <i class="fa fa-file-text-o icon-title"></i> Lista de confirmados:
    <?php
         $query = mysqli_query($mysqli, "SELECT COUNT(*) AS Cantidad FROM interesados WHERE estado='concluido'")
                                             or die('error: '.mysqli_error($mysqli));
                 
                                             while ($data = mysqli_fetch_assoc($query)) 
                                             { 
                                                echo "<tr>
                                             
                                                <td width='200' align='right'>  $data[Cantidad]</td>

                                                      </tr>";                                                                                   
                                             }                                   
 
       ?> 

    <a class="btn btn-primary btn-social pull-right" href="modules/reportes/print.php" target="_blank">
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
	        		<th scope=col>Estado</th>
              </tr>
            </thead>
          
            <tbody>
            <?php  
            $no = 1;
          
            $query = mysqli_query($mysqli, "SELECT c.name_user AS Usuario, CONCAT(b.nombres, ' ', b.apellidos, '-',b.cedula) AS Postulante, s.descrip_sede AS Sede, a.estado
            FROM usuario_interesado a, interesados b, usuarios c, sedes s
            WHERE a.id_user=c.id_user AND a.id_interesado=b.id_interesado AND s.id_sede=b.id_sede AND a.estado='concluido' ORDER BY Usuario, Postulante, Sede")
                                            or die('error: '.mysqli_error($mysqli));

            while ($data = mysqli_fetch_assoc($query)) { 
              $sededescrip= utf8_encode($data['Sede']);

           
              echo "<tr>
                      <td width='50' class='center'>$data[Usuario]</td>
                      <td width='200' align='right'>$data[Postulante]</td>
                      <td width='80' class='center'>$sededescrip</td>
                      <td width='80'>$data[estado]</td>
                      <td class='center' width='80'>
		                <div>
		                  ";
		    ?>
                          
            <?php
              echo "    </div>
                      </td>
                    </tr>";
              $no++;
            }
            ?>
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!--/.col -->
  </div>   <!-- /.row -->
</section><!-- /.content