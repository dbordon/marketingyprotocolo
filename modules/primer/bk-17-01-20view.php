<!--<section class="content-header">
  <h1>
    <i class="fa fa-folder-o icon-title"></i> Datos de Medicamentos

    <a class="btn btn-primary btn-social pull-right" href="?module=form_primer&form=add" title="agregar" data-toggle="tooltip">
      <i class="fa fa-plus"></i> Agregar
    </a>
  </h1>

</section>-->


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
            <th scope=col>Ci</th>
            <th scope=col>Celular</th>
            <th scope=col>Correo</th>
            <th scope=col>Colegio</th>
            <th scope=col>FECHA</th>
			<th scope=col>Convocatori</th>
			<th scope=col>Estado</th>

                <th></th>
              </tr>
            </thead>
            <tbody>
            <?php  
            $no = 1;
            $query = mysqli_query($mysqli, "SELECT id_interesado, a.descrip_sede,c.descrip_carrera, nombres, apellidos, cedula, telefono, email, colegio, fecha_carga, anho, estado 
            FROM interesados i, sedes a, carreras c WHERE i.id_sede=a.id_sede and estado='sinseguimiento' and  c.id_carreras=i.id_carreras")
                                            or die('error: '.mysqli_error($mysqli));

            while ($data = mysqli_fetch_assoc($query)) { 
              //$precio_compra = format_rupiah($data['precio_compra']);
           //   $precio_venta = format_rupiah($data['precio_venta']);
           
              echo "<tr>
                      <td width='30' class='center'>$data[id_interesado]</td>
                      <td width='80' class='center'>$data[descrip_sede]</td>
                      <td width='180'>$data[descrip_carrera]</td>
                      <td width='30' class='center'>$data[nombres]</td>
                      <td width='80' class='center'>$data[apellidos]</td>
                      <td width='60'>$data[cedula]</td>
                      <td width='80' align='right'>$data[telefono]</td>
                      <td width='80' class='center'>$data[email]</td>
                      <td width='80' align='right'>$data[colegio]</td>
                      <td width='80' class='center'>$data[fecha_carga]</td>
                      <td width='80' align='right'>$data[anho]</td>
                      <td width='80' class='center'>$data[estado]</td>
                      <td class='center' width='80'>
		                <div>
		                  <a data-toggle='tooltip' data-placement='top' title='modificar' style='margin-right:5px' class='btn btn-primary btn-sm' href='?module=form_primer&form=edit&id=$data[id_interesado]'>
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
