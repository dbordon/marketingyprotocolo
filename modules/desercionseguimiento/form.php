 <?php  
 
if ($_GET['form']=='add') { 
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
      <i class="fa fa-edit icon-title"></i> Realizar seguimiento de deserción
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=desercionseguimiento">Realizar seguimiento de Dersiones </a></li>
      <li class="active"> Agregar </li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal" action="modules/desercionseguimiento/proses.php?act=add" method="POST">
            <div class="box-body">
              
            <?php  
              $query_id = mysqli_query($mysqli, "SELECT MAX(cod_seg_desercion) AS ids FROM seg_desercion")
                                                or die('error '.mysqli_error($mysqli));
              $count = mysqli_num_rows($query_id);

              if ($count <> 0) {
                  $data_id = mysqli_fetch_assoc($query_id);
                  $codigo    = $data_id['ids']+1;
              } else {
                  $codigo = 1;
              }      
              ?>


              <div class="form-group">
                <label class="col-sm-2 control-label">Codigo</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="codigo_seg_deser" value="<?php echo $codigo ?>" readonly required>
                  <input  type="hidden" class="form-control" name="codigo_desercion" value="<?php echo $_GET['id']; ?>" readonly required>
                </div>
              </div>



              <div class="form-group">
                <label class="col-sm-2 control-label">Nombre</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="nombres" autocomplete="off" value="<?php echo $data['nombres'];?>" readonly required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Apellidos</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="apellidos" autocomplete="off" value="<?php echo $data['apellidos'];?>" readonly required>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Cédula</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="cedula" autocomplete="off"  onKeyPress="return goodchars(event,'0123456789',this)" value="<?php echo $data['cedula'];?>" readonly required >
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Nro de Contacto</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" name="celular" autocomplete="off"  onKeyPress="return goodchars(event,'0123456789',this)" value="<?php echo $data['celular'];?>" readonly required >
                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-2 control-label" for="sadministrativa"><strong>Situación administrativa (Cuotas pendientes)</strong></label>
                <div class="col-sm-5">
                <textarea class="form-control" name="sadministrativa" autocomplete="off" readonly><?php echo $data['sadministrativa'];?></textarea>
                </div>
              </div>


              <div class="form-group">
              <label class="col-sm-2 control-label" for="sacademica"><strong>Situación académica (Materias pendientes)</strong></label>
                <div class="col-sm-5">
                <textarea class="form-control" name="sacademica" autocomplete="off" readonly><?php echo $data['sacademica'];?></textarea>
                </div>
              </div>

              <div class="form-group">
                                <label class="col-sm-2 control-label" for="motivo"><strong>Motivo</strong></label>
                                <div class="col-sm-5">
                                    <select name="motivo" id="motivo" class="form-control"  >
                                        <option style="color:#000000;">     </option>
                                        <option value="ECONOMICO" style="color:#000;font-size:25px">ECONÓMICO</option>
                                        <option value="SISTEMA DE ENSENANZA VIRTUAL" style="color:#000; font-size:25px">SISTEMA DE ENSEÑANZA VIRTUAL</option>
                                        <option value="NO LE GUSTA LA CARRERA" style="color:#000;font-size:25px">NO LE GUSTA LA CARRERA</option>
                                        <option value="TRASLADO A OTRA SEDE" style="color:#000; font-size:25px">TRASLADO A OTRA SEDE</option>
                                        <option value="OTROS MOTIVOS" style="color:#000; font-size:25px">OTROS MOTIVOS</option>
                                    </select>  
                                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-2 control-label" for="obs_motivo"><strong>Observaciones del motivo</strong></label>
                <div class="col-sm-5">
                <textarea class="form-control" name="obs_motivo" autocomplete="off"></textarea>
                </div>
              </div>

              <div class="form-group">
                                <label class="col-sm-2 control-label" for="negociacion"><strong>Negociación</strong></label>
                                <div class="col-sm-5">
                                    <select name="negociacion" id="negociacion" class="form-control" >
                                        <option style="color:#000000;">     </option>
                                        <option value="15%" style="color:#000;font-size:25px">15% de descuento</option>
                                        <option value="20%" style="color:#000; font-size:25px">20% de descuento</option>
                                        <option value="25%" style="color:#000;font-size:25px">25% de descuento</option>
                                        <option value="30%" style="color:#000; font-size:25px">30% de descuento</option>
                                        <option value="OTROS MOTIVOS" style="color:#000; font-size:25px">OTRAS NEGOCIACIONES</option>
                                    </select>  
                                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-2 control-label" for="obs_negociacion"><strong>Observaciones de negociación</strong></label>
                <div class="col-sm-5">
                <textarea class="form-control" name="obs_negociacion" autocomplete="off"></textarea>
                </div>
              </div>

              <div class="form-group">
              <label class="col-sm-2 control-label" for="respuesta"><strong>Respuesta obtenida</strong></label>
                <div class="col-sm-5">
                <textarea class="form-control" name="respuesta" autocomplete="off"></textarea>
                </div>
              </div>
              

              <div class="form-group">
                                <label class="col-sm-2 control-label" for="estado">Estado</label>
                                <div class="col-sm-5">
                                    <select name="estado" id="estado" class="form-control" required >
                                        <option style="color:#000000;">     </option>
                                        <option value="reincorporar" style="color:#3ADF00;font-size:25px">Reincorporar</option>
                                        <option value="2doseguimiento" style="color:#3ADF00;font-size:25px">2° seguimiento</option>
                                        <option value="noincorporado" style="color:#FE2E2E; font-size:25px">No Reincorporar</option>

                                    </select>  
                                </div>
              </div>
 
            </div><!-- /.box body -->

            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                  <a href="?module=desercionseguimiento" class="btn btn-default btn-reset">Cancelar</a>
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