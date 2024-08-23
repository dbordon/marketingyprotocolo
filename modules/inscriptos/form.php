 <?php  
 
if ($_GET['form']=='add') { ?> 

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Agregar Postulantes
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=inscriptos"> Postulantes </a></li>
      <li class="active"> Más </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/inscriptos/proses.php?act=insert" method="POST">
            <div class="box-body">
              <?php  

              
        
              $query_id = mysqli_query($mysqli, "SELECT MAX(id_interesado) AS id FROM interesados")
                                                or die('error '.mysqli_error($mysqli));

              $count = mysqli_num_rows($query_id);

              if ($count <> 0) {
            
                  $data_id = mysqli_fetch_assoc($query_id);
                  $codigo    = $data_id['id']+1;
              } else {
                  $codigo = 1;
              }


             /* $buat_id   = str_pad($codigo, 6, "0", STR_PAD_LEFT);
              $codigo = "$buat_id";*/
              ?>

              <div class="form-group">
                <label class="col-sm-2 control-label">Codigo</label>
                <div class="col-sm-5">
                  <input type="numeric" class="form-control" name="codigo" value="<?php echo $codigo; ?>" readonly required>
                </div>
              </div>

          <!-- Hasta aqui el codigo -->


              <div class="form-group col-md-12">

<label for="sede">Sede</label>
<select name="seleccionado"  class="form-control">
<?php

include '../../config/database.php';
$query=mysqli_query($mysqli, "select *from sedes");             
while($dato= mysqli_fetch_assoc($query))
{                 
echo "<option value='".$dato['id_sede']."'";
if($_POST['seleccionado']==$dato['id_sede'])
echo "SELECTED";
echo ">";
echo $dato['descrip_sede'];
echo "</option>";            
}
?>
</select> 
</div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Nombre/s</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nombre" placeholder="Nombre/s" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Apellido/s</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" placeholder="Apellido/s" name="apellido" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">N° Cédula</label>
                <div class="col-sm-5">
                    <input type="numeric" placeholder="ci" class="form-control" id="ci" name="ci" autocomplete="off" onKeyPress="return goodchars(event,'0123456789',this)" >               
                </div>
              </div>


              <div class="form-group">
                <label class="col-sm-2 control-label">Telefono</label>
                <div class="col-sm-5">
                    <input type="numeric" placeholder="Telefono" class="form-control"  name="telefono" autocomplete="off" onKeyPress="return goodchars(event,'0123456789',this)" required>               
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Correo</label>
                <div class="col-sm-5">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="correo"   name="correo" autocomplete="off">
                  </div>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Colegio</label>
                <div class="col-sm-5">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Colegio"   name="colegio" autocomplete="on">
                  </div>
                </div>
              </div>

              <div class="form-group ">
                        <label class="col-sm-2 control-label" for="año">Convocatorio</label>
                        <div class="col-sm-5">
                        <select name="año" id="año" class="form-control">
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                          </select>  
                      </div>
                      </div>

                      <div class="form-group">
                            <label class="col-sm-2 control-label" for="sede">Carrera</label>
                            <div class="col-sm-5">
                            <select name="carrera"  class="form-control">
        <?php
          include '../../config/database.php';

            $query=mysqli_query($mysqli, "select *from carreras");             
            while($dato= mysqli_fetch_assoc($query))
            {                 
                echo "<option value='".$dato['id_carreras']."'";
                    if($_POST['carrera']==$dato['id_carreras'])
                echo "SELECTED";
                echo ">";
                echo $dato['descrip_carrera'];
                echo "</option>";            
            }
        ?>
        </select>
                      </div>
                      </div>
              
            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?module=segundo" class="btn btn-default btn-reset">Cancelar</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php
}
elseif ($_GET['form']=='edit') { 
  if (isset($_GET['id'])) {

      $query = mysqli_query($mysqli, "SELECT id_interesado, a.descrip_sede,c.descrip_carrera, nombres, apellidos, cedula, telefono, email, colegio, fecha_carga, anho, estado
FROM interesados i, sedes a, carreras c
WHERE i.id_sede=a.id_sede and estado='CONCLUIDO' and  c.id_carreras=i.id_carreras and id_interesado='$_GET[id]'") 
                                      or die('error: '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query);
    }
?>

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i>Registrar Preinscripto
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=inscriptos"> Preinscriptos </a></li>
      <li class="active"> Registrar Preinscripto </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/inscriptos/proses.php?act=update" method="POST">
            <div class="box-body">
              
              <div class="form-group">
                <label class="col-sm-2 control-label">Codigo</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="codigo" value="<?php echo $data['id_interesado']; ?>" readonly required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nombre" autocomplete="off" value="<?php echo $data['nombres']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Apellidos</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="apellido" autocomplete="off" value="<?php echo $data['apellidos']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Cedula</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="cedula" autocomplete="off"  onKeyPress="return goodchars(event,'0123456789',this)" value=" <?php echo $data['cedula']; ?>" >
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Telefono</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="telefono" autocomplete="off"  onKeyPress="return goodchars(event,'0123456789',this)" value=" <?php echo $data['telefono']; ?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-5">
                  <input type="email" class="form-control" name="correo" autocomplete="off"  value=" <?php echo $data['email']; ?>" >
                </div>
              </div>


              

              <div class="form-group">
                <label class="col-sm-2 control-label">Sede</label>
                <div class="col-sm-5">
<select name="seleccionado"  class="form-control">
<?php

include '../../config/database.php';
$query=mysqli_query($mysqli, "select *from sedes");             
while($dato= mysqli_fetch_assoc($query))
{                 
echo "<option value='".$dato['id_sede']."'";
if($_POST['seleccionado']==$dato['id_sede'])
echo "SELECTED";
echo ">";
echo $dato['descrip_sede'];
echo "</option>";            
}
?>
</select> 
</div>
              </div>

            
              <div class="form-group ">
                        <label class="col-sm-2 control-label" for="año">Año Lectivo</label>
                        <div class="col-sm-5">
                        <select name="año" id="año" class="form-control">
                        <option value="2020">2020</option>
                        <option value="2021">2021</option>
                          </select>  
                      </div>
                      </div>

                      <div class="form-group ">
                        <label class="col-sm-2 control-label" for="carrera">Carrera</label>
                        <div class="col-sm-5">
                        <select name="carrera" id="carrera" class="form-control">
                        
                          </select>  
                      </div>
                      </div>

                      <div class="form-group ">
                        <label class="col-sm-2 control-label" for="carrera">Turno</label>
                        <div class="col-sm-5">
                        <select name="turno" id="turno" class="form-control">
                        
                          </select>  
                      </div>
                      </div>

                      <div class="form-group ">
                        <label class="col-sm-2 control-label" for="carrera">Curso</label>
                        <div class="col-sm-5">
                        <select name="carrera" id="carrera" class="form-control">
                        
                          </select>  
                      </div>
                      </div>

                      <div class="form-group ">
                        <label class="col-sm-2 control-label" for="carrera">Modalidad</label>
                        <div class="col-sm-5">
                        <select name="modalidad" id="modadidad  " class="form-control">
                        
                          </select>  
                      </div>
                      </div>
                      <div class="form-group ">
                        <label class="col-sm-2 control-label" for="año">Estado</label>
                        <div class="col-sm-5">
                            <select name="estado" id="estado" class="form-control" required>
                            <option style="color:#000000;">     </option>
                            <option value="confirmado" style="color:#3ADF00; font-size:25px">Confirmado</option>

                          </select>  
                      </div>

            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?module=inscriptos" class="btn btn-default btn-reset">Cancelar</a>
                </div>
              </div>
            </div><!-- /.box footer -->
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->
<?php
}
?>
