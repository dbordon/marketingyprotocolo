<section class="content-header">
  <h1>
    <section class="content-header">
    <h1>
    <i class="fa fa-folder-o icon-title"></i> Datos de negociación rechazada
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li class="active"><a href="?module=desercionrechazados"> Datos de negociación rechazada </a></li>   
    </ol>
  </section>
 
  </h1>

</section>


<section class="content">
  <div class="row">
    <div class="col-md-12">

    <?php  

    if (empty($_GET['alert'])) {
      echo "";
    } 
  
    elseif ($_GET['alert'] == 1) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
             *****Nuevos datos de deserciones han sido almacenados correctamente.
            </div>";
    }

    elseif ($_GET['alert'] == 2) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
             Datos del deserciones modificados correcamente.
            </div>";
    }

    elseif ($_GET['alert'] == 3) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
            Se eliminaron los datos de deserción
            </div>";
    }
    ?>

      <div class="box box-primary">
        <div class="box-body">
    
          <table id="dataTables1" class="table table-bordered table-striped table-hover">
      
            <thead>
              <tr>
              <th scope=col>Sede</th>
              <th scope=col>Carrera</th>
              <th scope=col>Curso</th>
              <th scope=col>Nombres</th>
			        <th scope=col>Apellidos</th>
			        <th scope=col>Celular</th>
              <th scope=col>Motivo</th>
              <th scope=col>Negociación</th>
              <th scope=col>Respuesta</th>
              <th scope=col>Fecha</th>       
              <th scope=col>Usuario</th>
              </tr>
            </thead>
            <tbody>
            <?php  
            $no = 1;
            $query = mysqli_query($mysqli, "SELECT *FROM v_seg_desercion_rechazar;")
                                            or die('error: '.mysqli_error($mysqli));

            while ($data = mysqli_fetch_assoc($query)) { 
              //$precio_compra = format_rupiah($data['precio_compra']);
           //   $precio_venta = format_rupiah($data['precio_venta']);
                $sededescrip=utf8_encode($data['descrip_sede']);
                $carreradescrip= utf8_encode($data['descrip_carrera']);
                $curso= utf8_encode($data['curso']);

           
              echo "<tr>
                      <td width='50' align='right'> $sededescrip</td>
                      <td width='50' align='right'> $carreradescrip</td>
                      <td width='50' align='right'> $curso</td>
                      <td width='80' class='center'>$data[nombres]</td>
                      <td width='80' class='center'>$data[apellidos]</td>
                      <td width='50' align='right'>$data[celular]</td>
                      <td width='80' class='center'><p style='color:#FF0000'>$data[motivo]<p></td>
                      <td width='80' class='center'><p style='color:#04B404'>$data[negociacion]</p></td>
                      <td width='80' class='center'><p style='color:#013ADF'>$data[respuesta_desercion]</p></td>
                      <td width='80' class='center'>$data[fecha_seg]</td>
                      <td width='80' class='center'>$data[name_user]</td>
		                <div>";
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