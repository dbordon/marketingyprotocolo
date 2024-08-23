

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
      <h1>Consultas realizadas en la sección contactos de la página Web</h1>
      <div class="box box-primary">
        <div class="box-body">
    
          <table id="dataTables1" class="table table-bordered table-striped table-hover">
      
            <thead>
              <tr>
      <th scope=col>Id</th>
			<th scope=col>Persona</th>
      <th scope=col>Celular</th>
      <th scope=col>Email</th>
      <th scope=col>Tema</th>
			<th scope=col>Fecha</th>
			<th scope=col>Estado</th>
      <th scope=col>Acción</th>
              </tr>
            </thead>
            <tbody>
            <?php  
            $no = 1;
            $query = mysqli_query($mysqli, "SELECT *FROM v_consultas WHERE estado='PENDIENTE';")
                                            or die('error: '.mysqli_error($mysqli));
                                            
            while ($data = mysqli_fetch_assoc($query)) { 
              //$precio_compra = format_rupiah($data['precio_compra']);
           //   $precio_venta = format_rupiah($data['precio_venta']);
           $id_consulta_web= $data['id_consulta_web'];
           $persona= $data['persona'];
            $celular= $data['celular'];         
            $email= $data['email'];
            $tema= $data['tema'];
            $consulta= $data['consulta'];
            $fecha= $data['fecha_consulta'];
            $estado='PENDIENTE'; 

           
              echo "<tr>
              <td width='10' class='center'>$id_consulta_web</td>
              <td width='10' class='center'>$persona</td>
              <td width='20' class='center'>$celular</td>
              <td width='20' class='center'>$email</td>
              <td width='20' class='center'>$tema</td>
              <td width='20' class='center'>$fecha</td>
              <td width='10' class='center' style='color:#298A08; font-size:20px'>$data[estado]</td>
                      <td class='center' width='1'>
		                <div>
		                  <a data-toggle='tooltip' data-placement='top' title='Realizar Seguimiento' style='margin-right:5px' class='btn btn-primary btn-sm' href='?module=form_consultasweb&form=edit&id=$data[id_consulta_web]'>
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
