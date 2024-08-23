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
      <h1>Confirmados</h1>
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
              </tr>
            </thead>
            <tbody>
            <?php  
            $no = 1;
            if(!empty($id_sede)){
            $query = mysqli_query($mysqli, "SELECT  id_interesado, a.descrip_sede, c.descrip_carrera, nombres, apellidos,  telefono,  fecha_modificacion, estado
            FROM interesados i, sedes a, carreras c WHERE i.id_sede=a.id_sede and estado='CONCLUIDO' and  c.id_carreras=i.id_carreras and a.id_sede=$id_sede")
                                            or die('error: '.mysqli_error($mysqli));}
            else{
              $query = mysqli_query($mysqli, "SELECT  id_interesado, a.descrip_sede, c.descrip_carrera,  nombres, apellidos,  telefono,  fecha_modificacion, estado
              FROM interesados i, sedes a, carreras c WHERE i.id_sede=a.id_sede and estado='CONCLUIDO' and  c.id_carreras=i.id_carreras")
                                              or die('error: '.mysqli_error($mysqli));
                                            }
                                            
            while ($data = mysqli_fetch_assoc($query)) { 
            $sededescrip= utf8_encode($data['descrip_sede']);
            $carreradescrip= utf8_encode($data['descrip_carrera']);
           
              echo "<tr>
              <td width='10' class='center'>$data[id_interesado]</td>
              <td width='20' class='center'>$sededescrip</td>
              <td width='20' class='center'>$carreradescrip</td>
              <td width='20' class='center'>$data[nombres]</td>
              <td width='20' class='center'>$data[apellidos]</td>
              <td width='15' align='right'>$data[telefono]</td>
              <td width='45' class='center'>$data[fecha_modificacion]</td>
              <td width='10' class='center' style='color:#298A08; font-size:20px' >$data[estado]</td>
                     
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
