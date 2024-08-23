<section class="content-header">
<ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li class="active"><a href="?module=desercion"> Registro de Deserción</a></li>   
    </ol><br><hr>
  <h1>
    <i class="fa fa-folder-o icon-title"></i> Datos de Deserción

    <a class="btn btn-primary btn-social pull-right" href="?module=form_desercion&form=add" title="agregar" data-toggle="tooltip">
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
            $query = mysqli_query($mysqli, "SELECT *FROM v_desercion where estado;")
                                            or die('error: '.mysqli_error($mysqli));

            while ($data = mysqli_fetch_assoc($query)) { 
              //$precio_compra = format_rupiah($data['precio_compra']);
           //   $precio_venta = format_rupiah($data['precio_venta']);
           $sededescrip=utf8_encode($data['descrip_sede']);
           $carreradescrip= utf8_encode($data['descrip_carrera']);
           $turno= utf8_encode($data['turno']);

           
              echo "<tr>
                      <td width='1' class='center'>$data[cod_desercion]</td>
                      <td width='30' class='center'>$sededescrip</td>
                      <td width='30' class='center'>$carreradescrip</td>
                      <td width='5' class='center'>$data[curso]</td>
                      <td width='5' class='center'>$turno</td>
                      <td width='50' align='right'>$data[cedula]</td>
                      <td width='50' class='center'>$data[nombres]</td>
                      <td width='50' class='center'>$data[apellidos]</td>
                      <td width='50' align='right'>$data[celular]</td>
                      <td width='60' class='center'>$data[fecha_carga]</td>
                      <td class='center' width='80'>
		                <div>
		                  <a data-toggle='tooltip' data-placement='top' title='modificar datos del desertor/ra' style='margin-right:5px' class='btn btn-primary btn-sm' href='?module=form_desercion&form=edit&id=$data[cod_desercion]'>
		                      <i style='color:#fff' class='glyphicon glyphicon-edit'></i>
		                  </a>";
                      ?>
                      <a data-toggle="tooltip" data-placement="top" title="Eliminar deserción" class="btn btn-danger btn-sm"  href="modules/desercion/proses.php?act=delete&cod_desercion=<?php echo $data['cod_desercion'];?>" onclick="return confirm('Estás seguro de eliminar <?php echo $data['nombres']; ?> ?');">
                                  <i style="color:#000" class="glyphicon glyphicon-trash"></i>
                              </a>          
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