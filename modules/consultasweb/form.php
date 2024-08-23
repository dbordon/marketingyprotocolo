<?php  
 

 if ($_GET['form']=='edit') { 
   if (isset($_GET['id'])) {
 
       $query = mysqli_query($mysqli, "SELECT *FROM v_consultas WHERE estado='PENDIENTE'and id_consulta_web='$_GET[id]'") 
                                       or die('error: '.mysqli_error($mysqli));
       $data  = mysqli_fetch_assoc($query);
     }
 ?>
 
   <section class="content-header">
     <h1>
       <i class="fa fa-edit icon-title"></i> Consultas en la Web
     </h1>
     <ol class="breadcrumb">
       <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
       <li><a href="?module=colegios"> Consultas en la Web </a></li>
       <li class="active"> Realizar seguimiento </li>
     </ol>
   </section>
 
   <!-- Main content -->
   <section class="content">
     <div class="row">
       <div class="col-md-12">
         <div class="box box-primary">
           <!-- form start -->
           <form role="form" class="form-horizontal" action="modules/consultasweb/proses.php?act=update" method="POST">
             <div class="box-body">           
 
                <div align="center" class="form-group">
                 <div class="col-sm-9">
                 <p><strong>Observaciones: </strong>Estos son mensajes que han enviado los internautas en la sección</p> 
                 <p>Contactos de la página web institucional</p>
                 </div>
               </div>
 
 
               <div class="form-group">
                 <label class="col-sm-2 control-label">Codigo</label>
                 <div class="col-sm-5">
                   <input type="text" class="form-control" name="codigo" value="<?php echo $data['id_consulta_web']; ?>" readonly required>
                 </div>
               </div>
 
               <div class="form-group">
                 <label class="col-sm-2 control-label">Persona</label>
                 <div class="col-sm-5">
                   <input type="text" class="form-control" name="person" autocomplete="off" value="<?php echo $data['persona']; ?>" readonly>
                 </div>
               </div>
 
 
 
               <div class="form-group">
                 <label class="col-sm-2 control-label">Teléfono</label>
                 <div class="col-sm-5">
                   <input type="text" class="form-control" name="celular" autocomplete="off"  onKeyPress="return goodchars(event,'0123456789',this)" value="<?php echo $data['celular']; ?>" readonly>
                 </div>
               </div>
 
               <div class="form-group">
                 <label class="col-sm-2 control-label">Email</label>
                 <div class="col-sm-5">
                   <input type="email" class="form-control" name="email" autocomplete="off"  value="<?php echo $data['email']; ?>" readonly>
                 </div>
               </div>
 
               <div class="form-group">
                 <label class="col-sm-2 control-label">Tema</label>
                 <div class="col-sm-5">
                   <input type="text" class="form-control" name="tema" autocomplete="off" value="<?php echo $data['tema']; ?>" readonly>
                 </div>
               </div>
            
               <div class="form-group">
                 <label class="col-sm-2 control-label">Mensaje recibido</label>
                 <div class="col-sm-5">
                 <textarea class="form-control" name="consulta" rows="5" readonly><?php echo $data['consulta']?></textarea>
                 </div>
               </div>
           
           
               <div class="form-group">
                 <label class="col-sm-2 control-label">Respuesta sobre la consulta</label>
                 <div class="col-sm-5">
                 <textarea class="form-control" name="respuesta" rows="5"></textarea>
                 </div>
               </div>
              
                       <div class="form-group ">
                         <label class="col-sm-2 control-label" for="año">Estado</label>
                         <div class="col-sm-5">
                             <select name="estado" id="estado" class="form-control" required>
                             <option style="color:#000000;">     </option>
                             <option value="procesado" style="color:#000000;font-size:20px">PROCESADO</option>
                             <option value="anulado" style="color:#DF3A01; font-size:20px">ANULADO</option>
                           </select>  
                       </div>
                 </div>
              <!-- /.box body -->                 
                             
             <div class="box-footer">
               <div class="form-group">
                 <div class="col-sm-offset-2 col-sm-10">
                   <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                   <a href="?module=consultasweb" class="btn btn-default btn-reset">Cancelar</a>
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
 