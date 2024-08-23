

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
      <h1>2° Seguimiento a preinscriptos - Programas de postgrado</h1>
      <div class="box box-primary">
        <div class="box-body">
    
          <table id="dataTables1" class="table table-bordered table-striped table-hover">
      
            <thead>
              <tr>
      <th scope=col>ID</th>
			<th scope=col>Sede</th>
      <th scope=col>Programa</th>
			<th scope=col>Nombre</th>
			<th scope=col>Apellidos</th>
      <th scope=col>Celular</th>
      
      <th scope=col>Fecha</th>
			<th scope=col>Estado</th>
      <th scope=col>Acción</th>
              </tr>
            </thead>
            <tbody>
            <?php  
            $no = 1;
            $query = mysqli_query($mysqli, "SELECT *FROM v_postgrado_vllamar;")
                                            or die('error: '.mysqli_error($mysqli));
                                            
            while ($data = mysqli_fetch_assoc($query)) { 
              //$precio_compra = format_rupiah($data['precio_compra']);
           //   $precio_venta = format_rupiah($data['precio_venta']);
           $sededescrip= utf8_encode($data['descrip_sede']);
           $carreradescrip= utf8_encode($data['descrip_postgrado']);
           $nombres= $data['nombres'];
           $apellidos= $data['apellidos'];
           
              echo "<tr>
              <td class='center'>$data[id_inter_postgrado]</td>
              <td class='center'>$sededescrip</td>
              <td class='center'>$carreradescrip</td>
              <td class='center'>$nombres</td>
              <td class='center'>$apellidos</td>
              <td align='center'>$data[telefono]</td>
             
              <td class='center'>$data[fecha_carga]</td>
              <td class='center' style='color:#298A08; font-size:15px' >$data[estado]</td>
                      <td class='center' width='1'>
		                <div>
		                  <a data-toggle='tooltip' data-placement='top' title='Realizar Seguimiento' style='margin-right:5px' class='btn btn-primary btn-sm' href='?module=form_segundopostgrado&form=edit&id=$data[id_inter_postgrado]'>
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
