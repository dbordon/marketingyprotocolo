<?php
if ($_GET['form'] == 'edit') {
    if (isset($_GET['id'])) {

        $query = mysqli_query($mysqli, "SELECT id_interesado, a.descrip_sede,c.descrip_carrera, nombres, apellidos, cedula, telefono, email, colegio, fecha_carga, anho, estado
FROM interesados i, sedes a, carreras c
WHERE i.id_sede=a.id_sede and estado='sinseguimiento' and  c.id_carreras=i.id_carreras and id_interesado='$_GET[id]'")
                or die('error: ' . mysqli_error($mysqli));
        $data = mysqli_fetch_assoc($query);
    }
    ?>

    <section class="content-header">
        <h1>
            <i class="fa fa-edit icon-title"></i> 1° Seguimiento
        </h1>
        <ol class="breadcrumb">
            <li><a href="?module=start"><i class="fa fa-home"></i> Inicio </a></li>
            <li><a href="?module=primer"> Postulantes </a></li>
            <li class="active"> Modificar </li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <!-- form start -->
                    <form role="form" class="form-horizontal" action="modules/primer/proses.php?act=update" method="POST">
                        <div class="box-body">
                            <input type="hidden" class="form-control" id="anho" name="anho" value="<?php echo $data['anho']; ?>" required>
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
                                    <input type="text" class="form-control" name="cedula" autocomplete="off"  onKeyPress="return goodchars(event, '0123456789', this)" value="<?php echo $data['cedula']; ?>" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Telefono</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="telefono" autocomplete="off"  onKeyPress="return goodchars(event, '0123456789', this)" value="<?php echo $data['telefono']; ?>" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-5">
                                    <input type="email" class="form-control" name="correo" autocomplete="off"  value="<?php echo $data['email']; ?>" >
                                </div>
                            </div>




                            <div class="form-group">
                                <label class="col-sm-2 control-label">Sede</label>
                                <div class="col-sm-5">
                                    <select name="seleccionado"  class="form-control" id="sede" onchange="conv()">
                                        <?php
                                        include '../../config/database.php';
                                        $query = mysqli_query($mysqli, "select *from sedes");
                                        while ($dato = mysqli_fetch_assoc($query)) {
                                            echo "<option value='" . $dato['id_sede'] . "'";
                                            if (isset($_POST['seleccionado']) == $dato['id_sede'])
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
                                <label class="col-sm-2 control-label" for="año">Estado</label>
                                <div class="col-sm-5">
                                    <select name="estado" id="estado" class="form-control" required onchange="conv()">
                                        <option style="color:#000000;">     </option>
                                        <option value="inactivo" style="color:#000000;font-size:20px">Rechazado</option>
                                        <option value="volverallamar" style="color:#DF3A01; font-size:20px">Volver a llamar</option>
                                        <option value="Concluido" style="color:#3ADF00; font-size:25px">Concluido</option>

                                    </select>  
                                </div>
                            </div><!-- /.box body -->
                            <div class="form-group">
                                <div class="col-lg-2 col-md-2 col-xs-2"></div>
                                <div class="col-lg-6 col-md-6 col-xs-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <h5 class="panel-title">Datos Convocatoria Siecorp</h5>
                                    </div><!-- /.box-header -->
                                    <div class="panel-body" id="div_view">

                                    </div>
                                </div>                                                                
                                </div>                                
                            </div>
                            <div class="box-footer">
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <input type="submit" class="btn btn-primary btn-submit" name="Guardar" value="Guardar">
                                        <a href="?module=primer" class="btn btn-default btn-reset">Cancelar</a>
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
<script>
    function conv() {
        if ($("#estado").val() == 'Concluido') {                      
                $.ajax({
                    type:"GET",
                    url:"../marketingyprotocolo/modules/primer/convocatoria.php/?ano="+$("#anho").val()+"&id_sede="+$("#sede").val(),
                    beforeSend: function(){
                        $("#div_view").html('<div class="rating-flash center_loader"><strong>Obteniendo carreras... Aguarde</strong><img src="/marketingyprotocolo/assets/img/loader.gif"></div>');
                    },
                    success:function(msg){
                        $("#div_view").html(msg);   
                        cursos();
                    }
                });
        }else{
            $("#div_view").html("")
        }

    };
    function cursos() {        
                $.ajax({
                    type:"GET",
                    url:"../marketingyprotocolo/modules/primer/curso.php/?ano="+$("#anho").val()+"&id_sede="+$("#sede").val()+"&id_carre="+$("#carre").val(),
                    beforeSend: function(){
                        $("#div_cursos").html('<div class="rating-flash center_loader"><strong>Obteniendo cursos... Aguarde</strong><img src="/marketingyprotocolo/assets/img/loader.gif"></div>');
                    },
                    success:function(msg){
                        $("#div_cursos").html(msg);
                        turnos();
                    }
                });

    }; 
    function turnos() {        
                $.ajax({
                    type:"GET",
                    url:"../marketingyprotocolo/modules/primer/turno.php/?ano="+$("#anho").val()+"&id_sede="+$("#sede").val()+"&id_carre="+$("#carre").val()+"&id_curso="+$("#curso").val(),
                    beforeSend: function(){
                        $("#div_turnos").html('<div class="rating-flash center_loader"><strong>Obteniendo turnos... Aguarde</strong><img src="/marketingyprotocolo/assets/img/loader.gif"></div>');
                    },
                    success:function(msg){
                        $("#div_turnos").html(msg);
                        modalidades();
                    }
                });

    };  
    function modalidades() {        
                $.ajax({
                    type:"GET",
                    url:"../marketingyprotocolo/modules/primer/modalidad.php/?ano="+$("#anho").val()+"&id_sede="+$("#sede").val()+"&id_carre="+$("#carre").val()+"&id_curso="+$("#curso").val()+"&id_turno="+$("#turno").val(),
                    beforeSend: function(){
                        $("#div_modalidades").html('<div class="rating-flash center_loader"><strong>Obteniendo modalidades... Aguarde</strong><img src="/marketingyprotocolo/assets/img/loader.gif"></div>');
                    },
                    success:function(msg){
                        $("#div_modalidades").html(msg);
                        convocatorias();
                    }
                });

    };    
    function convocatorias() {        
                $.ajax({
                    type:"GET",
                    url:"../marketingyprotocolo/modules/primer/convo_iden.php/?ano="+$("#anho").val()+"&id_sede="+$("#sede").val()+"&id_carre="+$("#carre").val()+"&id_curso="+$("#curso").val()+"&id_turno="+$("#turno").val()+"&id_tipocon="+$("#modalidad").val(),
                    beforeSend: function(){
                        $("#div_convocatorias").html('<div class="rating-flash center_loader"><strong>Obteniendo modalidades... Aguarde</strong><img src="/marketingyprotocolo/assets/img/loader.gif"></div>');
                    },
                    success:function(msg){
                        $("#div_convocatorias").html(msg);
                    }
                });

    };        
</script>