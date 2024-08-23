






 <h2 align="center">
    <i class="fa fa-file-text-o icon-title"></i> Estadísticas
  </h2>

<br>
<div class="col-md-12" align="center">
<a href="modules/informes/informe_usuarios.php" target=»_blank class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">
 Cantidad de confirmados por usuario</a>
</div>
<hr>
<br>
<div class="col-md-12" align="center">
<a href="modules/informes/informe_por_sede.php" target=»_blank class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">
 Postulantes ingresados por Sede</a>
</div>
<br>
<div class="col-md-12" align="center">
<h1>Actividades Generales de Usuarios</h2>

<section class="content-header" >
  <h1>
  <div class="form-group col-md-4" align="center">
  <form role="form"  class="form-horizontal" method="POST" action="modules/reportes_u_sinseguimiento/print.php" target="_blank">
<div class="col-md-12" align="center">
<label for="funcionario"><strong>Seleccionar Funcionario</strong></label>
<select name="seleccionado"  class="form-control" >
<?php

include '../../config/database.php';
$query=mysqli_query($mysqli, "select *from usuarios");             
while($dato= mysqli_fetch_assoc($query))
{                 
echo "<option value='".$dato['id_user']."'";
if($_POST['seleccionado']==$dato['id_user'])
echo "SELECTED";
echo ">";
echo $dato['name_user'];
echo "</option>";            
}
?>
</select> 
</div>
<br>
<div class="col-md-12" align="center">



<label for="funcionario">Seleccionar Estado</label>
<select name="estado"  class="content-header">
                        <option value="sinseguimiento">sinseguimiento</option>
                        <option value="Concluido">CONCLUIDO</option>
                        <option value="VOLVERALLAMAR">Volver a llamar</option>
                        <option value="inactivo">Inactivo</option>

                          </select> 
</div>
</div>
<br>
<div class="col-md-12" align="center">
<button type="submit" class="btn btn-primary btn-social btn-submit" style="width: 200px;">


    <i class="fa fa-file-text-o icon-title"></i> Imprimir informe
</div>
     </h1>

</section>

</form>
</div>
<!-- Main content -->
