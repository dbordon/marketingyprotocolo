<section class="content-header">
    <h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
      <li><a href="?module=reporte_interesados_por_sede"> Interesados por sede </a></li>
      
    </ol>
  </section>



  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Estadísticas Interesados en CARRERAS DE LA UTIC por sede por año
    </h1>
  </section>
 <!-- Main content -->
 <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form"  class="form-horizontal" method="POST" action="modules/reporte_interesados_por_sede/informe_por_sede.php" target="_blank">    
            <div class="box-body">

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Sede</label>
                                <div class="col-sm-4">
                                    <select class="chosen-select" name="id_sede" data-placeholder="-- Ingresa la sede --"
                                    autocomplete="off" required>
                                        <option value=""></option>
                                        <?php 
                                            $query_prov = mysqli_query($mysqli, "SELECT id_sede, descrip_sede
                                            FROM sedes 
                                            ORDER BY id_sede ASC") or die ('Error'.mysqli_error($mysqli));
                                            
                                            while ($data_prov = mysqli_fetch_assoc($query_prov)){
                                              $sede=utf8_encode($data_prov['descrip_sede']);
                                                echo "<option value=\"$data_prov[id_sede]\">$sede</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Seleccionar Año</label>
                                <div class="col-sm-4">
                                    <select class="chosen-select" name="anho" data-placeholder="-- Ingresa el año --"
                                    autocomplete="off" required>
                                        <option value=""></option>
                                      
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
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
      <i class="fa fa-edit icon-title"></i> Estadísticas Interesados en CARRERAS QUE NO EXISTEN EN LA UTIC por sede por año
    </h1>
  </section>
 <!-- Main content -->
 <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form"  class="form-horizontal" method="POST" action="modules/reporte_interesados_por_sede/informe_por_sede_otras_carreras.php" target="_blank">    
            <div class="box-body">

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Sede</label>
                                <div class="col-sm-4">
                                    <select class="chosen-select" name="id_sede" data-placeholder="-- Ingresa la sede --"
                                    autocomplete="off" required>
                                        <option value=""></option>
                                        <?php 
                                            $query_prov = mysqli_query($mysqli, "SELECT id_sede, descrip_sede
                                            FROM sedes 
                                            ORDER BY id_sede ASC") or die ('Error'.mysqli_error($mysqli));
                                            
                                            while ($data_prov = mysqli_fetch_assoc($query_prov)){
                                              $sede=utf8_encode($data_prov['descrip_sede']);
                                                echo "<option value=\"$data_prov[id_sede]\">$sede</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Seleccionar Año</label>
                                <div class="col-sm-4">
                                    <select class="chosen-select" name="anho" data-placeholder="-- Ingresa el año --"
                                    autocomplete="off" required>
                                        <option value=""></option>
                                      
                                 
                                        <option value="2023">2023</option>
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





 <!-- Main content -->

  <section class="content-header">
    <h1>
      <i class="fa fa-edit icon-title"></i> Estadísticas Visita a colegios - Carreras de la UTIC
    </h1>
  </section>
 <!-- Main content -->
 <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form"  class="form-horizontal" method="POST" action="modules/reporte_interesados_por_sede/informe_visitacolegios.php" target="_blank">    
            <div class="box-body">

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Sede</label>
                                <div class="col-sm-4">
                                    <select class="chosen-select" name="id_sede" data-placeholder="-- Ingresa la sede --"
                                    autocomplete="off" required>
                                        <option value=""></option>
                                        <?php 
                                            $query_prov = mysqli_query($mysqli, "SELECT id_sede, descrip_sede
                                            FROM sedes 
                                            ORDER BY id_sede ASC") or die ('Error'.mysqli_error($mysqli));
                                            
                                            while ($data_prov = mysqli_fetch_assoc($query_prov)){
                                              $sede=utf8_encode($data_prov['descrip_sede']);
                                                echo "<option value=\"$data_prov[id_sede]\">$sede</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Seleccionar Año</label>
                                <div class="col-sm-4">
                                    <select class="chosen-select" name="anho" data-placeholder="-- Ingresa el año --"
                                    autocomplete="off" required>
                                        <option value=""></option>
                                      
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
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
      <i class="fa fa-edit icon-title"></i> Estadísticas Visita a colegios - CARRERAS QUE NO EXISTEN EN LA UTIC 
    </h1>
  </section>
 <!-- Main content -->
 <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-primary">
          <!-- form start -->
          <form role="form"  class="form-horizontal" method="POST" action="modules/reporte_interesados_por_sede/informe_visitacolegioscarrersnoutic.php" target="_blank">    
            <div class="box-body">

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Sede</label>
                                <div class="col-sm-4">
                                    <select class="chosen-select" name="id_sede" data-placeholder="-- Ingresa la sede --"
                                    autocomplete="off" required>
                                        <option value=""></option>
                                        <?php 
                                            $query_prov = mysqli_query($mysqli, "SELECT id_sede, descrip_sede
                                            FROM sedes 
                                            ORDER BY id_sede ASC") or die ('Error'.mysqli_error($mysqli));
                                            
                                            while ($data_prov = mysqli_fetch_assoc($query_prov)){
                                              $sede=utf8_encode($data_prov['descrip_sede']);
                                                echo "<option value=\"$data_prov[id_sede]\">$sede</option>";
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Seleccionar Año</label>
                                <div class="col-sm-4">
                                    <select class="chosen-select" name="anho" data-placeholder="-- Ingresa el año --"
                                    autocomplete="off" required>
                                        <option value=""></option>
                                      
                                 
                                        <option value="2023">2023</option>
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