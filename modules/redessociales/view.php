<?php $id_sede = $_SESSION['id_sede']; ?>

<section class="content">
  <div class="row">
    <div class="col-md-12">

    <?php  

    if (empty($_GET['alert'])) {
      echo "";
    } 
  
   

    elseif ($_GET['alert'] == 2) {
      echo "<div class='alert alert-success alert-dismissable'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4>  <i class='icon fa fa-check-circle'></i> Exito!</h4>
             Datos del Postulante modificados correcamente.
            </div>";
    }

    ?>
      <h1>Seguimiento a preinscriptos vía Web</h1>
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
			<th scope=col>Estado</th>
      <th scope=col>Acción</th>
              </tr>
            </thead>
            <tbody>
            <?php  
            $no = 1;
            /*$query = mysqli_query($mysqli, "SELECT  id_interesado, a.descrip_sede, nombres, apellidos,  telefono,  fecha_carga, estado
            FROM interesados i, sedes a, carreras c WHERE i.id_sede=a.id_sede and estado='redessociales' and  c.id_carreras=i.id_carreras")
                                            or die('error: '.mysqli_error($mysqli));*/
                                            if(!empty($id_sede)){
                                              $query = mysqli_query($mysqli, "SELECT  id_interesado, a.descrip_sede, c.descrip_carrera, nombres, apellidos,  telefono,  fecha_carga, estado
                                              FROM interesados i, sedes a, carreras c 
                                              WHERE i.id_sede=a.id_sede AND estado IN('redessociales','expo') AND  c.id_carreras=i.id_carreras AND i.id_sede=$id_sede")
                                              or die('error: '.mysqli_error($mysqli));
                                            }else {
                                              $query = mysqli_query($mysqli, "SELECT  id_interesado, a.descrip_sede, c.descrip_carrera, nombres, apellidos,  telefono,  fecha_carga, estado
                                              FROM interesados i, sedes a, carreras c 
                                              WHERE i.id_sede=a.id_sede AND estado IN('redessociales','expo') AND  c.id_carreras=i.id_carreras")
                                              or die('error: '.mysqli_error($mysqli));
                                            }                                
                             
            while ($data = mysqli_fetch_assoc($query)) { 
              //$precio_compra = format_rupiah($data['precio_compra']);
           //   $precio_venta = format_rupiah($data['precio_venta']);
           $sededescrip= utf8_encode($data['descrip_sede']);
           $descripcarrera = utf8_encode($data['descrip_carrera']);
           
              echo "<tr>
              <td width='10' class='center'>$data[id_interesado]</td>
              <td width='20' class='center'>$sededescrip</td>
              <td width='20' class='center'>$descripcarrera</td>
              <td width='20' class='center'>$data[nombres]</td>
              <td width='20' class='center'>$data[apellidos]</td>
              <td width='15' align='right'>$data[telefono]</td>
              <td width='45' class='center'>$data[fecha_carga]</td>
              <td width='10' class='center' style='color:#298A08; font-size:20px' >$data[estado]</td>
                      <td class='center' width='1'>
		                <div>
		                  <a data-toggle='tooltip' data-placement='top' title='Realizar Seguimiento' style='margin-right:5px' class='btn btn-primary btn-sm' href='?module=form_redessociales&form=edit&id=$data[id_interesado]'>
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
