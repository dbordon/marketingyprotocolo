 <?php  
 
if ($_GET['form']=='add') { ?> 

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Agregar Desertor/ra
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=desercion"> Deserción </a></li>
      <li class="active"> Más </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/desercion/proses.php?act=insert" method="POST">
            <div class="box-body">
              <?php  

              
        
              $query_id = mysqli_query($mysqli, "SELECT MAX(cod_desercion) AS id FROM desercion")
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
                <div class="col-sm-5">
                  <input type="hidden" class="form-control" name="codigo" value="<?php echo $codigo; ?>" readonly required>
                </div>
              </div>

          <!-- Hasta aqui el codigo -->

          <div class="form-group">
                <label class="col-sm-2 control-label">N° Cédula</label>
                <div class="col-sm-5">
                    <input type="numeric" placeholder="cédula" class="form-control" id="cedula" name="cedula" autocomplete="off" onKeyPress="return goodchars(event,'0123456789',this)" >               
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Nombre/s</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nombres" placeholder="Nombre/s" autocomplete="off" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Apellido/s</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" placeholder="Apellido/s" name="apellidos" autocomplete="off" required>
                </div>
              </div>


              <div class="form-group">
                <label class="col-sm-2 control-label">Celular</label>
                <div class="col-sm-5">
                    <input type="numeric" placeholder="Celular" class="form-control"  name="celular" autocomplete="off" onKeyPress="return goodchars(event,'0123456789',this)" required>               
                </div>
              </div>        

             
        <div class="form-group">
                <label class="col-sm-2 control-label" for="sede">Sede</label>
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
            echo utf8_encode($dato['descrip_sede']);
            echo "</option>";            
            }
        ?>
        </select>
        </div>
        </div>


        <div class="form-group">
          <label class="col-sm-2 control-label" for="carrera">Carrera</label>
        <div class="col-sm-5">
        <select name="carrera"  class="form-control" charset="utf-8">
        <?php
          include '../../config/database.php';

            $query=mysqli_query($mysqli, "select *from carreras");             
            while($dato= mysqli_fetch_assoc($query))
            {                 
                echo "<option value='".$dato['id_carreras']."'";
                    if($_POST['carrera']==$dato['id_carreras'])
                echo "SELECTED";
                echo ">";
                echo utf8_encode($dato['descrip_carrera']);
                echo "</option>";            
            }
        ?>
        </select>
         </div>
         </div>

               <div class="form-group ">
                        <label class="col-sm-2 control-label" for="curso">Curso</label>
                        <div class="col-sm-5">
                        <select name="curso" id="curso" class="form-control">
                        <option value="1">1°</option>
                        <option value="2">2°</option>
                        <option value="3">3°</option>
                        <option value="4">4°</option>
                        <option value="5">5°</option>  
                        <option value="6">6°</option>
                        </select>  
                      </div>
                </div>

                <div class="form-group ">
                        <label class="col-sm-2 control-label" for="turno">Turno</label>
                        <div class="col-sm-5">
                        <select name="turno" id="turno" class="form-control">
                        <option value="M">Mañana</option>
                        <option value="T">Tarde</option>
                        <option value="N">Noche</option>          
                        </select>  
                      </div>
                </div>
        

              <div class="form-group">
              <label class="col-sm-2 control-label" for="sadministrativa"><strong>Situación administrativa (Cuotas pendientes)</strong></label>
                <div class="col-sm-5">
                <textarea class="form-control" name="sadministrativa" autocomplete="off"></textarea>
                </div>
              </div>


              <div class="form-group">
              <label class="col-sm-2 control-label" for="sacademica"><strong>Situación académica (Materias pendientes)</strong></label>
                <div class="col-sm-5">
                <textarea class="form-control" name="sacademica" autocomplete="off"></textarea>
                </div>
              </div>
          

             


            

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?module=desercion" class="btn btn-default btn-reset">Cancelar</a>
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

      $query = mysqli_query($mysqli, "SELECT *FROM v_desercion where cod_desercion='$_GET[id]'") 
                                      or die('error: '.mysqli_error($mysqli));
      $data  = mysqli_fetch_assoc($query);
    }
?>

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Modificar Deserción
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=desercion"> Dersiones </a></li>
      <li class="active"> Modificar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/desercion/proses.php?act=update" method="POST">
            <div class="box-body">
              
              <div class="form-group">
                <label class="col-sm-2 control-label">Codigo</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="codigo" value="<?php echo $data['cod_desercion']; ?>" readonly required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nombres" autocomplete="off" value="<?php echo $data['nombres'];?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Apellidos</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="apellidos" autocomplete="off" value="<?php echo $data['apellidos'];?>" required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Cédula</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="cedula" autocomplete="off"  onKeyPress="return goodchars(event,'0123456789',this)" value="<?php echo $data['cedula'];?>" >
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Celular</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="celular" autocomplete="off"  onKeyPress="return goodchars(event,'0123456789',this)" value="<?php echo $data['celular'];?>" required>
                </div>
              </div>
 
            </div><!-- /.box body -->

              <div class="form-group">
                <label class="col-sm-2 control-label" for="sede">Sede</label>
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
            echo utf8_encode($dato['descrip_sede']);
            echo "</option>";            
            }
        ?>
        </select>
        </div>
        </div>


        <div class="form-group">
          <label class="col-sm-2 control-label" for="carrera">Carrera</label>
        <div class="col-sm-5">
        <select name="carrera"  class="form-control" charset="utf-8">
        <?php
          include '../../config/database.php';

            $query=mysqli_query($mysqli, "select *from carreras");             
            while($dato= mysqli_fetch_assoc($query))
            {                 
                echo "<option value='".$dato['id_carreras']."'";
                    if($_POST['carrera']==$dato['id_carreras'])
                echo "SELECTED";
                echo ">";
                echo utf8_encode($dato['descrip_carrera']);
                echo "</option>";            
            }
        ?>
        </select>
         </div>
         </div>

               <div class="form-group ">
                        <label class="col-sm-2 control-label" for="curso">Curso</label>
                        <div class="col-sm-5">
                        <select name="curso" id="curso" class="form-control">
                        <option value="1">1°</option>
                        <option value="2">2°</option>
                        <option value="3">3°</option>
                        <option value="4">4°</option>
                        <option value="5">5°</option>  
                        <option value="6">6°</option>
                        </select>  
                      </div>
                </div>

                <div class="form-group ">
                        <label class="col-sm-2 control-label" for="turno">Turno</label>
                        <div class="col-sm-5">
                        <select name="turno" id="turno" class="form-control">
                        <option value="M">Mañana</option>
                        <option value="T">Tarde</option>
                        <option value="N">Noche</option>          
                        </select>  
                      </div>
                </div>
        
                <div class="form-group">
              <label class="col-sm-2 control-label" for="sadministrativa"><strong>Situación administrativa (Cuotas pendientes)</strong></label>
                <div class="col-sm-5">
                <textarea class="form-control" name="sadministrativa" autocomplete="off"><?php echo $data['sadministrativa'];?></textarea>
                </div>
              </div>


              <div class="form-group">
              <label class="col-sm-2 control-label" for="sacademica"><strong>Situación académica (Materias pendientes)</strong></label>
                <div class="col-sm-5">
                <textarea class="form-control" name="sacademica" autocomplete="off"><?php echo $data['sacademica'];?></textarea>
                </div>
              </div>

             

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?module=desercion" class="btn btn-default btn-reset">Cancelar</a>
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