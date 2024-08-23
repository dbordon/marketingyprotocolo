<section class="content-header">
  <h1>
    <i class="fa fa-folder-o icon-title"></i> Datos de Postulantes

    <a class="btn btn-primary btn-social pull-right" href="?module=form_postulantes&form=add" title="agregar" data-toggle="tooltip">
      <i class="fa fa-plus"></i> Agregar 
    </a>
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
             Nuevos datos de Postulantes ha sido  almacenado correctamente.
            </div>";
    }

    elseif ($_GET['alert'] == 2) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
             Datos del Postulante modificados correcamente.
            </div>";
    }

    elseif ($_GET['alert'] == 3) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
            Se eliminaron los datos del Postulante
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
      <th scope=col>Carrera</th>
			<th scope=col>Nombre</th>
			<th scope=col>Apellidos</th>
            <th scope=col>Celular</th>
            <th scope=col>FECHA</th>
      <th scope=col>Acción</th>
              </tr>
            </thead>
            <tbody>
            <?php  
            $no = 1;
            $query = mysqli_query($mysqli, "SELECT id_interesado, a.descrip_sede, c.descrip_carrera, nombres, apellidos, telefono,  fecha_carga 
            FROM interesados i, sedes a, carreras c 
            WHERE i.id_sede=a.id_sede AND estado='sinseguimiento' AND  c.id_carreras=i.id_carreras")
                                            or die('error: '.mysqli_error($mysqli));

            while ($data = mysqli_fetch_assoc($query)) { 
              //$precio_compra = format_rupiah($data['precio_compra']);
           //   $precio_venta = format_rupiah($data['precio_venta']);
           $sededescrip=utf8_encode($data['descrip_sede']);
           $carreradescrip= utf8_encode($data['descrip_carrera']);

           
              echo "<tr>
                      <td width='1' class='center'>$data[id_interesado]</td>
                      <td width='140' class='center'>$sededescrip</td>
                      <td width='80' class='center'>$carreradescrip</td>
                      <td width='50' class='center'>$data[nombres]</td>
                      <td width='80' class='center'>$data[apellidos]</td>
                      <td width='50' align='right'>$data[telefono]</td>
                      <td width='80' class='center'>$data[fecha_carga]</td>
                      <td class='center' width='80'>
		                <div>
		                  <a data-toggle='tooltip' data-placement='top' title='modificar datos del Postulante' style='margin-right:5px' class='btn btn-primary btn-sm' href='?module=form_postulantes&form=edit&id=$data[id_interesado]'>
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