

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
      <h1>Respuestas a consultas realizadas en Web UTIC</h1>
      <div class="box box-primary">
        <div class="box-body">
    
          <table id="dataTables1" class="table table-bordered table-striped table-hover">
      
            <thead>
              <tr>
			<th scope=col>Persona</th>
      <th scope=col>Celular</th>
      <th scope=col>Tema</th>
			<th scope=col>Consulta</th>
      <th scope=col>Respuesta</th>
			<th scope=col>Fech. Cons</th>
      <th scope=col>Fech. Resp</th>
      <th scope=col>Usuario</th>
			<th scope=col>Estado</th>
              </tr>
            </thead>
            <tbody>
            <?php  
            $no = 1;
            $query = mysqli_query($mysqli, "SELECT *FROM v_consul_resp WHERE estado='PROCESADO';")
                                            or die('error: '.mysqli_error($mysqli));
                                            
            while ($data = mysqli_fetch_assoc($query)) { 
              //$precio_compra = format_rupiah($data['precio_compra']);
           //   $precio_venta = format_rupiah($data['precio_venta']);
           $id_consulta_web= $data['id_consulta_web'];
           $persona= $data['persona'];
            $celular= $data['celular'];         
            $tema= $data['tema'];
            $consulta= $data['consulta'];
            $respuesta= $data['respuesta'];
            $fecha= $data['fecha_consulta'];
            $fecha_respuesta= $data['fecha_respuesta'];
            $estado='PENDIENTE'; 
            $usuario= $data['username'];
          
           
              echo "<tr>
              <td width='15' class='center'>$persona</td>
              <td width='5' class='center'>$celular</td>
              <td width='15' class='center'>$tema</td>
              <td width='20' class='center'>$consulta</td>
              <td width='20' class='center'>$respuesta</td>
              <td width='5' class='center'>$fecha</td>
              <td width='5' class='center'>$fecha_respuesta</td>
              <td width='5' class='center'>$usuario</td>
              <td width='5' class='center' style='color:#298A08; font-size:15px'>$data[estado]</td>";?>
                          
            <?php
              echo " </tr>";
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
