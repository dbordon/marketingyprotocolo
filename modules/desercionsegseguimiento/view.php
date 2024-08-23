<section class="content-header">
  <h1>
    <section class="content-header">
    <h1>
    <i class="fa fa-folder-o icon-title"></i> 2° Seguimiento de estudiantes con estado de Deserción
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li class="active"><a href="?module=desercionseguimiento"> 2° Seguimiento Deserción </a></li>
   
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
            Nuevos datos de deserciones han sido almacenados correctamente.
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
              <th scope=col>ID</th>
              <th scope=col>Sede</th>
              <th scope=col>Carrrera</th>
              <th scope=col>Curso</th>
              <th scope=col>Turno</th>
              <th scope=col><strong  style='color:#008f39;'> Situación Administrativa</strong></th>
              <th scope=col><strong style='color:#fc2200;'> Situación Académica</strong></th>
			        <th scope=col>Cédula</th>
              <th scope=col>Nombres</th>
			        <th scope=col>Apellidos</th>
			        <th scope=col>Celular</th>
              <th scope=col>Fecha de carga</th>       
              <th scope=col>Acción</th>
              </tr>
            </thead>
            <tbody>
            <?php  
            $no = 1;
            $query = mysqli_query($mysqli, "SELECT *FROM v_desercion_segundo;")
                                            or die('error: '.mysqli_error($mysqli));

            while ($data = mysqli_fetch_assoc($query)) { 
              //$precio_compra = format_rupiah($data['precio_compra']);
           //   $precio_venta = format_rupiah($data['precio_venta']);
           $sededescrip=utf8_encode($data['descrip_sede']);
           $carreradescrip= utf8_encode($data['descrip_carrera']);
           $turno= utf8_encode($data['turno']);
           $sadministrativa = $data['sadministrativa'];
           $sacademica = $data['sacademica'];

           
              echo "<tr>
                      <td width='1' class='center'>$data[cod_desercion]</td>
                      <td width='25' class='center'>$sededescrip</td>
                      <td width='30' class='center'>$carreradescrip</td>
                      <td width='5' class='center'>$data[curso]</td>
                      <td width='5' class='center'>$turno</td>
                      <td width='20' class='center'><strong style='color:#008f39;'>$sadministrativa</strong></td>
                      <td width='20' class='center'><strong style='color:#fc2200;'>$sacademica</strong></td>
                      <td width='15' align='right'>$data[cedula]</td>
                      <td width='15' class='center'>$data[nombres]</td>
                      <td width='15' class='center'>$data[apellidos]</td>
                      <td width='15' align='right'><strong>$data[celular]</strong></td>
                      <td width='80' class='center'>$data[fecha_carga]</td>
                      <td class='center' width='80'>
		                <div>
		                  <a data-toggle='tooltip' data-placement='top' title='Realizar Seguimiento' style='margin-right:5px' class='btn btn-primary btn-sm' href='?module=form_desercionsegseguimiento&form=edit&id=$data[cod_desercion]'>
		                      <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
		                  </a>";
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