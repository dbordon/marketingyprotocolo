<section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Estadísticas con gráficos 
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=reportes_u_sinseguimiento"> Estadísticas </a></li>
      <li class="active"> Ver </li>
    </ol>
  </section>

   <!-- Main content -->
 <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form"  class="form-horizontal" method="POST" action="modules/reportes_u_sinseguimiento/printexcel.php" target="_blank">
            <div class="box-body">
            <h2>Lista de preinscriptos - Informe en excel</h2>
            <div class="form-group">
                                <label class="col-sm-2 control-label">Sede</label>
                                <div class="col-sm-4">
                                    <select class="chosen-select" name="id_sede" data-placeholder="-- Ingresa la sede --"
                                    autocomplete="off" required>
                                        <option value=""></option>
                                        <?php 
                                            $query_sede = mysqli_query($mysqli, "SELECT id_sede, descrip_sede
                                            FROM sedes 
                                            ORDER BY id_sede ASC") or die ('Error'.mysqli_error($mysqli));
                                            while ($data_sede = mysqli_fetch_assoc($query_sede)){
                                              $sede=utf8_encode($data_sede['descrip_sede']);
                                                echo "<option value=\"$data_sede[id_sede]\">$sede</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
            
                                            

              <div class="form-group">
                                <label class="col-sm-2 control-label">Estado</label>
                                <div class="col-sm-4">
                                    <select class="chosen-select" name="id_estado" data-placeholder="-- Ingresa el estado --"
                                    autocomplete="off" required>
                                        <option value="colegios">Sorteo de Becas</option>
                                        <option value="redessociales">Redes sociales, página web</option>
                                        <option value="VOLVERALLAMAR">Segundo Seguimiento</option>
                                        <option value="TERCERLLAMADO">Tercer Seguimiento</option>
                                        <option value="CONCLUIDO">Confirmado</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                            <label class="col-sm-2 control-label">Decargar</label>
                            <div class="col-sm-5">
                            <button type="submit" class="btn btn-success" style="width: 250px;">
    <i class="fa fa-file-excel-o icon-title"></i> Descargar informe General en Excel </button>  </div>
    </div>
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->

 <!-- Main content -->
 <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form" class="form-horizontal">
            <div class="box-body">
            <h2>Estadísticas por Usuario - Gráficos</h2>

              <div class="form-group">
                <label class="col-sm-2 control-label">Confirmados</label>
                <div class="col-sm-5">
                  <a href="modules/informes/informe_usuarios_concluido.php" target=»_blank class="btn btn-danger .btn-xs" role="button" aria-pressed="true">
                    Cantidad de confirmados, por usuario</a>                
                  </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Volver a llamar</label>
                <div class="col-sm-5">
                    <a href="modules/informes/informe_usuarios_volverallamar.php" target=»_blank class="btn btn-success .btn-flat" role="button" aria-pressed="true">
                    Cantidad de primer seguimiento, por usuario
                    </a>                
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Tercer llamado</label>
                <div class="col-sm-5">
                    <a href="modules/informes/informe_usuarios_tercerllamado.php" target=»_blank class="btn btn-success .btn-flat" role="button" aria-pressed="true">
                    Cantidad de 3° seguimiento, por usuario
                    </a>                
                </div>
              </div>

              
              <div class="form-group">
                <label class="col-sm-2 control-label">Interesados por sede</label>
                <div class="col-sm-5">
                  <a href="modules/informes/informe_por_sede.php" target=»_blank class="btn btn-primary .btn-flat" role="button" aria-pressed="true">
                  Cantidad Total de Interesados, por Sede
                  </a>                
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-2 control-label">Confirmados por sede</label>
                <div class="col-sm-5">
                  <a href="modules/informes/informe_conf_sede.php" target=»_blank class="btn btn-warning .btn-flat" role="button" aria-pressed="true">
                  Cantidad Total de Confirmados, por Sede
                  </a>                
                </div>
              </div>
  
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Estadísticas por usuario - PDF
    </h1>
  </section>
 <!-- Main content -->
 <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form"  class="form-horizontal" method="POST" action="modules/reportes_u_sinseguimiento/print.php" target="_blank">    
            <div class="box-body">

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Usuario</label>
                                <div class="col-sm-4">
                                    <select class="chosen-select" name="id_user" data-placeholder="-- Ingresa el nombre del Usuario --"
                                    autocomplete="off" required>
                                        <option value=""></option>
                                        <?php 
                                            $query_prov = mysqli_query($mysqli, "SELECT id_user, name_user
                                            FROM usuarios WHERE status='activo'
                                            ORDER BY id_user ASC") or die ('Error'.mysqli_error($mysqli));
                                            while ($data_prov = mysqli_fetch_assoc($query_prov)){
                                                echo "<option value=\"$data_prov[id_user]\">$data_prov[name_user]</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Seleccionar Estado</label>
                                <div class="col-sm-4">
                                    <select class="chosen-select" name="estado" data-placeholder="-- Ingresa el estado --"
                                    autocomplete="off" required>
                                        <option value=""></option>
                                        <option value="VOLVERALLAMAR">Volver a llamar</option>
                                        <option value="CONCLUIDO">Concluido</option>
                                        <option value="INACTIVO">Inactivo</option>
                                    </select>
                                </div>
                            </div>

              

            </div>
            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                
                        <button type="submit" class="btn btn-warning btn-social btn-submit" style="width: 200px;">
                    <i class="fa fa-file-text-o icon-title"></i> Imprimir informe
                </div>
                
              </div>
            </div><!-- /.box footer --> 
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Todos los usuarios
    </h1>
  </section>
 <!-- Main content -->
 <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form"  class="form-horizontal" method="POST" action="modules/reportes_u_sinseguimiento/print_todos.php" target="_blank">    
            <div class="box-body">

              </div>
            <div class="box-footer">
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                
                        <button type="submit" name="VOLVERALLAMAR" class="btn btn-info btn-social btn-submit" style="width: 320px;">
                    <i class="fa fa-file-text-o icon-title"></i> Imprimir informe VOLVERALLAMAR

                    <button type="submit" name="CONCLUIDO" class="btn btn-danger btn-social btn-submit" style="width: 300px;">
                    <i class="fa fa-file-text-o icon-title"></i> Imprimir informe CONFIRMADOS
                </div>
                
              </div>
            </div><!-- /.box footer --> 
          </form>
        </div><!-- /.box -->
      </div><!--/.col -->
    </div>   <!-- /.row -->
  </section><!-- /.content -->