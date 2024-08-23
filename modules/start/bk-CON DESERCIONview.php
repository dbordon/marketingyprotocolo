
  <?php

if ($_SESSION['permisos_acceso']=='Super Admin') { ?>

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-home icon-title"></i> Inicio
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio</a></li>
    </ol>
  </section>
  
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-lg-12 col-xs-12">
        <div class="alert alert-info alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <p style="font-size:15px">
            <i class="icon fa fa-user"></i> Bienvenido <strong><?php echo $_SESSION['name_user']; ?></strong> a la aplicación de Marketing Intitucional.
          </p>        
        </div>
      </div>  
    </div>

    
   
    <!-- Small boxes (Stat box) -->
    <h3><strong>Preinscripción y seguimiento de interesados</strong></h3>
    <div class="row">
      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div style="background-color:#00c0ef;color:#fff" class="small-box">
          <div class="inner">
            <?php  
          
            $query = mysqli_query($mysqli, "SELECT COUNT(id_interesado) as numero FROM interesados")
                                            or die('Error '.mysqli_error($mysqli));

           
            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['numero']; ?></h3>
            <p>Registro de Postulantes</p>
          </div>
          <div class="icon">
            <i class="fa fa-folder"></i>
          </div>
          <?php  
          if ($_SESSION['permisos_acceso']!='gerente') { ?>
            <a href="?module=form_postulantes&form=add" class="small-box-footer" title="Registrar postulante" data-toggle="tooltip"><i class="fa fa-plus"></i></a>
          <?php
          } else { ?>
            <a class="small-box-footer"><i class="fa"></i></a>
          <?php
          }
          ?>
        </div>
      </div><!-- ./col -->

       

<!--2 redes sociales -->
<div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div style="background-color:#8f70d5;color:#fff" class="small-box">
          <div class="inner">
            <?php   
   
            $query = mysqli_query($mysqli, "SELECT COUNT(id_interesado) as numero FROM interesados where estado='redessociales'")
                                            or die('Error '.mysqli_error($mysqli));


            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['numero']; ?></h3>
            <p> Contacto vía Web</p>
          </div>
          <div class="icon">
            <i class="fa fa-sign-in"></i>
          </div>
          <?php  
          if ($_SESSION['permisos_acceso']!='Academico') { ?>
            <a href="?module=redessociales" class="small-box-footer" title="Realizar 1° seguimiento" data-toggle="tooltip"><i class="fa fa-plus"></i></a>
          <?php
          } else { ?>
            <a class="small-box-footer"><i class="fa"></i></a>
          <?php
          }
          ?>
        </div>
      </div>


<!--2 -->
<div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div style="background-color:#0B4C5F;color:#fff" class="small-box">
          <div class="inner">
            <?php   
   
            $query = mysqli_query($mysqli, "SELECT COUNT(id_interesado) as numero FROM interesados where estado='pendientepostgrado'")
                                            or die('Error '.mysqli_error($mysqli));


            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['numero']; ?></h3>
            <p>Contactos pendientes - Programas de Postgrado</p>
          </div>
          <div class="icon">
            <i class="fa fa-sign-in"></i>
          </div>
          <?php  
          if ($_SESSION['permisos_acceso']!='Academico') { ?>
            <a href="?module=postgrado" class="small-box-footer" title="Realizar 1° seguimiento" data-toggle="tooltip"><i class="fa fa-plus"></i></a>
          <?php
          } else { ?>
            <a class="small-box-footer"><i class="fa"></i></a>
          <?php
          }
          ?>
        </div>
      </div>




      <div class="col-lg-4 col-xs-6">
        <div style="background-color:#0B4C5F;color:#fff" class="small-box">
          <div class="inner">
            <?php 
   
            $query = mysqli_query($mysqli, "SELECT COUNT(id_interesado) as numero FROM interesados where estado='sinseguimiento'")
                                            or die('Error '.mysqli_error($mysqli));


            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['numero']; ?></h3>
            <p> 1° Seguimieto</p>
          </div>
          <div class="icon">
            <i class="fa fa-sign-in"></i>
          </div>
          <?php  
          if ($_SESSION['permisos_acceso']!='Academico') { ?>
            <a href="?module=primer" class="small-box-footer" title="Realizar 1° seguimiento" data-toggle="tooltip"><i class="fa fa-plus"></i></a>
          <?php
          } else { ?>
            <a class="small-box-footer"><i class="fa"></i></a>
          <?php
          }
          ?>
        </div>
      </div>



      <div class="col-lg-4 col-xs-6">
        <div style="background-color:#21610B;color:#fff" class="small-box">
          <div class="inner">
            <?php   
   
            $query = mysqli_query($mysqli, "SELECT COUNT(id_interesado) as numero FROM interesados where estado='VOLVERALLAMAR'")
                                            or die('Error '.mysqli_error($mysqli));


            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['numero']; ?></h3>
            <p> 2° Seguimieto</p>
          </div>
          <div class="icon">
            <i class="fa fa-sign-in"></i>
          </div>
          <?php  
          if ($_SESSION['permisos_acceso']!='Academico') { ?>
            <a href="?module=segundo" class="small-box-footer" title="Realizar 2° seguimiento " data-toggle="tooltip"><i class="fa fa-plus"></i></a>
          <?php
          } else { ?>
            <a class="small-box-footer"><i class="fa"></i></a>
          <?php
          }
          ?>
        </div>
      </div>



      
<!--6 Reporte de confirmados -->

      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div style="background-color:#f39c12;color:#fff" class="small-box">
          <div class="inner">
            <?php  
  
            $query = mysqli_query($mysqli, "SELECT COUNT(id_interesado) as numero FROM interesados where estado='concluido'")
                                            or die('Error'.mysqli_error($mysqli));

            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['numero']; ?></h3>
            <p>Postulantes Confirmados</p>
          </div>
          <div class="icon">
            <i class="fa fa-file-text-o"></i>
            
          </div>
          <a href="http://www.utic.edu.py/postulantes/main.php?module=reportes" class="small-box-footer" title="Clic para ver " data-toggle="tooltip"><i class="fa fa-plus"></i></a>
        </div>

        
      </div>


      <h3><strong> &nbsp &nbsp Resultados de preinscripción</strong></h3>

<div class="col-lg-6 col-xs-6">
        <!-- small box -->
        <div style="background-color:#000;color:#fff" class="small-box">
          <div class="inner">
            <?php   
   
           
         $query = mysqli_query($mysqli, "SELECT COUNT(id_interesado) as numero FROM interesados where estado='INSCRIPTO'")
     or die('Error'.mysqli_error($mysqli));

            $data = mysqli_fetch_assoc($query);
            ?>
                  <h3><?php echo $data['numero']; ?></h3>

            <p> Matriculados</p>
          </div>
          <div class="icon">
            <i class="fa fa-sign-in"></i>
          </div>
          <?php  
          if ($_SESSION['permisos_acceso']!='Academico') { ?>
            <a href="?module=inscripto" class="small-box-footer" title="Matriculados " data-toggle="tooltip"><i class="fa fa-plus"></i></a>
          <?php
          } else { ?>
            <a class="small-box-footer"><i class="fa"></i></a>
          <?php
          }
          ?>
        </div>
      </div>
      
<div class="col-lg-6 col-xs-6">
        <!-- small box -->
        <div style="background-color:#ff0000;color:#fff" class="small-box">
          <div class="inner">
            <?php   
   
   $query = mysqli_query($mysqli, "SELECT COUNT(id_interesado) as numero FROM interesados where estado='inactivo'")
   or die('Error '.mysqli_error($mysqli));


            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['numero']; ?></h3>
            <p> Rechazados</p>
          </div>
          <div class="icon">
            <i class="fa fa-sign-in"></i>
          </div>
          <?php  
          if ($_SESSION['permisos_acceso']!='Academico') { ?>
             <a href="#" class="small-box-footer" title="Rechazados! :(" data-toggle="tooltip"><i class=""> <strong>:'(</strong></i></a>

          <?php
          } else { ?>
            <a class="small-box-footer"><i class="fa"></i></a>
          <?php
          }
          ?>
        </div>
        <hr>

      </div>


  
      <h3><strong> &nbsp &nbsp Deserciones de Estudiantes</strong></h3>
    <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div style="background-color:#01DFD7;color:#fff" class="small-box">
          <div class="inner">
            <?php   

$query = mysqli_query($mysqli, "SELECT COUNT(cod_desercion) as numero FROM desercion WHERE estado!='borrado';")
or die('Error '.mysqli_error($mysqli));


            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['numero']; ?></h3>
            <p><strong>Registrar Deserción de estudiante</strong></p>
           
          </div>
          <div class="icon">
            <i class="fa fa-sign-in"></i>
          </div>
          <?php  
          if ($_SESSION['permisos_acceso']!='Academico') { ?>
             <a href="?module=desercion" class="small-box-footer" title="Deserción" data-toggle="tooltip"><i class=""> <strong>Deserción</strong></i></a>

          <?php
          } else { ?>
            <a class="small-box-footer"><i class="fa"></i></a>
          <?php
          }
          ?>
        </div>
      </div>  


      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div style="background-color:#2E64FE;color:#fff" class="small-box">
          <div class="inner">
            <?php   
   
   $query = mysqli_query($mysqli, "SELECT COUNT(cod_desercion) as numero FROM v_desercion")
   or die('Error '.mysqli_error($mysqli));


            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['numero']; ?></h3>
            <p><strong>Realizar Seguimiento de Deserción</strong></p>
           
          </div>
          <div class="icon">
            <i class="fa fa-sign-in"></i>
          </div>
          <?php  
          if ($_SESSION['permisos_acceso']!='Academico') { ?>
             <a href="?module=desercionseguimiento" class="small-box-footer" title="Seguimiento de Deserción" data-toggle="tooltip"><i class=""> <strong>Seguimiento de Deserción</strong></i></a>

          <?php
          } else { ?>
            <a class="small-box-footer"><i class="fa"></i></a>
          <?php
          }
          ?>
        </div>
      </div>  


      
      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div style="background-color:#DF3A01;color:#fff" class="small-box">
          <div class="inner">
            <?php   
   
   $query = mysqli_query($mysqli, "SELECT COUNT(cod_desercion) as numero FROM v_desercion_segundo")
   or die('Error '.mysqli_error($mysqli));


            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['numero']; ?></h3>
            <p><strong>Realizar 2° Seguimiento</strong></p>
            
          </div>
          <div class="icon">
            <i class="fa fa-sign-in"></i>
          </div>
          <?php  
          if ($_SESSION['permisos_acceso']!='Academico') { ?>
             <a href="?module=desercionsegseguimiento" class="small-box-footer" title="2° Seguimiento" data-toggle="tooltip"><i class=""> <strong>2° Seguimiento</strong></i></a>

          <?php
          } else { ?>
            <a class="small-box-footer"><i class="fa"></i></a>
          <?php
          }
          ?>
        </div>
      </div>  


    <h3><strong> &nbsp &nbsp Resultados del seguimiento de las deserciones de Estudiantes</strong></h3>
    <div class="col-lg-6 col-xs-6">
        <!-- small box -->
        <div style="background-color:#04B404;color:#fff" class="small-box">
          <div class="inner">
            <?php   
   
   $query = mysqli_query($mysqli, "SELECT COUNT(cod_seg_desercion) as numero FROM v_seg_desercion_reincorporado")
   or die('Error '.mysqli_error($mysqli));


            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['numero']; ?></h3>
            <p><strong>Estudiantes Reincorporados</strong></p>
          </div>
          <div class="icon">
            <i class="fa fa-sign-in"></i>
          </div>
          <?php  
          if ($_SESSION['permisos_acceso']!='Academico') { ?>
             <a href="?module=desercionreincorporados" class="small-box-footer" title="Reincorporados" data-toggle="tooltip"><i class=""> <strong>Reincorporados</strong></i></a>

          <?php
          } else { ?>
            <a class="small-box-footer"><i class="fa"></i></a>
          <?php
          }
          ?>
        </div>
      </div>  


      <div class="col-lg-6 col-xs-6">
        <!-- small box -->
        <div style="background-color:#2E2E2E;color:#fff" class="small-box">
          <div class="inner">
            <?php   
   
   $query = mysqli_query($mysqli, "SELECT COUNT(cod_desercion) as numero FROM v_seg_desercion_rechazar")
   or die('Error '.mysqli_error($mysqli));


            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['numero']; ?></h3>
            <p><strong>Estudiantes que rechazaron la negociación</strong></p>
          </div>
          <div class="icon">
            <i class="fa fa-sign-in"></i>
          </div>
          <?php  
          if ($_SESSION['permisos_acceso']!='Academico') { ?>
             <a href="?module=desercionrechazados" class="small-box-footer" title="Rechazo de negociación" data-toggle="tooltip"><i class=""> <strong>Rechazo de negociación</strong></i></a>

          <?php
          } else { ?>
            <a class="small-box-footer"><i class="fa"></i></a>
          <?php
          }
          ?>
        </div>
      </div>  


    <div class="row">
      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        
        </div>

        </div>
        
              <!-- Pie Chart -->
              <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
               <!--   <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>-->
                    </div>
                  </div>
                </div>


      </div><!-- ./col -->
    </div><!-- /.row -->

  </section><!-- /.content -->

<?php } ?>



<!-- Perfil Marketing--->
<?php
if ($_SESSION['permisos_acceso']=='Bienestar') { ?>

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-home icon-title"></i> Inicio
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio</a></li>
    </ol>
  </section>
  
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-lg-12 col-xs-12">
        <div class="alert alert-info alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <p style="font-size:15px">
            <i class="icon fa fa-user"></i> Bienvenido <strong><?php echo $_SESSION['name_user']; ?></strong> a la aplicación de Marketing Intitucional.
          </p>        
        </div>
      </div>  
    </div>

    
   
  <h3><strong> &nbsp &nbsp Deserciones de Estudiantes</strong></h3>
    <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div style="background-color:#01DFD7;color:#fff" class="small-box">
          <div class="inner">
            <?php   

$query = mysqli_query($mysqli, "SELECT COUNT(cod_desercion) as numero FROM desercion WHERE estado!='borrado';")
or die('Error '.mysqli_error($mysqli));


            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['numero']; ?></h3>
            <p><strong>Registrar Deserción de estudiante</strong></p>
           
          </div>
          <div class="icon">
            <i class="fa fa-sign-in"></i>
          </div>
          <?php  
          if ($_SESSION['permisos_acceso']!='Academico') { ?>
             <a href="?module=desercion" class="small-box-footer" title="Deserción" data-toggle="tooltip"><i class=""> <strong>Deserción</strong></i></a>

          <?php
          } else { ?>
            <a class="small-box-footer"><i class="fa"></i></a>
          <?php
          }
          ?>
        </div>
      </div>  


      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div style="background-color:#2E64FE;color:#fff" class="small-box">
          <div class="inner">
            <?php   
   
   $query = mysqli_query($mysqli, "SELECT COUNT(cod_desercion) as numero FROM v_desercion")
   or die('Error '.mysqli_error($mysqli));


            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['numero']; ?></h3>
            <p><strong>Realizar Seguimiento de Deserción</strong></p>
           
          </div>
          <div class="icon">
            <i class="fa fa-sign-in"></i>
          </div>
          <?php  
          if ($_SESSION['permisos_acceso']!='Academico') { ?>
             <a href="?module=desercionseguimiento" class="small-box-footer" title="Seguimiento de Deserción" data-toggle="tooltip"><i class=""> <strong>Seguimiento de Deserción</strong></i></a>

          <?php
          } else { ?>
            <a class="small-box-footer"><i class="fa"></i></a>
          <?php
          }
          ?>
        </div>
      </div>  


      
      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div style="background-color:#DF3A01;color:#fff" class="small-box">
          <div class="inner">
            <?php   
   
   $query = mysqli_query($mysqli, "SELECT COUNT(cod_desercion) as numero FROM v_desercion_segundo")
   or die('Error '.mysqli_error($mysqli));


            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['numero']; ?></h3>
            <p><strong>Realizar 2° Seguimiento</strong></p>
            
          </div>
          <div class="icon">
            <i class="fa fa-sign-in"></i>
          </div>
          <?php  
          if ($_SESSION['permisos_acceso']!='Academico') { ?>
             <a href="?module=desercionsegseguimiento" class="small-box-footer" title="2° Seguimiento" data-toggle="tooltip"><i class=""> <strong>2° Seguimiento</strong></i></a>

          <?php
          } else { ?>
            <a class="small-box-footer"><i class="fa"></i></a>
          <?php
          }
          ?>
        </div>
      </div>  


    <h3><strong> &nbsp &nbsp Resultados del seguimiento de las deserciones de Estudiantes</strong></h3>
    <div class="col-lg-6 col-xs-6">
        <!-- small box -->
        <div style="background-color:#04B404;color:#fff" class="small-box">
          <div class="inner">
            <?php   
   
   $query = mysqli_query($mysqli, "SELECT COUNT(cod_seg_desercion) as numero FROM v_seg_desercion_reincorporado")
   or die('Error '.mysqli_error($mysqli));


            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['numero']; ?></h3>
            <p><strong>Estudiantes Reincorporados</strong></p>
          </div>
          <div class="icon">
            <i class="fa fa-sign-in"></i>
          </div>
          <?php  
          if ($_SESSION['permisos_acceso']!='Academico') { ?>
             <a href="?module=desercionreincorporados" class="small-box-footer" title="Reincorporados" data-toggle="tooltip"><i class=""> <strong>Reincorporados</strong></i></a>

          <?php
          } else { ?>
            <a class="small-box-footer"><i class="fa"></i></a>
          <?php
          }
          ?>
        </div>
      </div>  


      <div class="col-lg-6 col-xs-6">
        <!-- small box -->
        <div style="background-color:#2E2E2E;color:#fff" class="small-box">
          <div class="inner">
            <?php   
   
   $query = mysqli_query($mysqli, "SELECT COUNT(cod_desercion) as numero FROM v_seg_desercion_rechazar")
   or die('Error '.mysqli_error($mysqli));


            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['numero']; ?></h3>
            <p><strong>Estudiantes que rechazaron la negociación</strong></p>
          </div>
          <div class="icon">
            <i class="fa fa-sign-in"></i>
          </div>
          <?php  
          if ($_SESSION['permisos_acceso']!='Academico') { ?>
             <a href="?module=desercionrechazados" class="small-box-footer" title="Rechazo de negociación" data-toggle="tooltip"><i class=""> <strong>Rechazo de negociación</strong></i></a>

          <?php
          } else { ?>
            <a class="small-box-footer"><i class="fa"></i></a>
          <?php
          }
          ?>
        </div>
      </div>  

    <div class="row">
      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        
        </div>

        </div>
        
              <!-- Pie Chart -->
              <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
               <!--   <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>-->
                    </div>
                  </div>
                </div>


      </div><!-- ./col -->
    </div><!-- /.row -->

  </section><!-- /.content -->

<?php } ?>


<!-- Perfíl académico-->

<?php
if ($_SESSION['permisos_acceso']=='Academico') { ?>

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-home icon-title"></i> Inicio
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio</a></li>
    </ol>
  </section>
  
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-lg-12 col-xs-12">
        <div class="alert alert-info alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <p style="font-size:15px">
            <i class="icon fa fa-user"></i> Bienvenido <strong><?php echo $_SESSION['name_user']; ?></strong> a la aplicación de Marketing Intitucional.
          </p>        
        </div>
      </div>  
    </div>

    
   
    <!-- Small boxes (Stat box) -->
    <h3><strong>Preinscripción de interesados</strong></h3>
    <div class="row">
      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div style="background-color:#00c0ef;color:#fff" class="small-box">
          <div class="inner">
            <?php  
          
            $query = mysqli_query($mysqli, "SELECT COUNT(id_interesado) as numero FROM interesados")
                                            or die('Error '.mysqli_error($mysqli));

           
            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['numero']; ?></h3>
            <p>Registro de Postulantes</p>
          </div>
          <div class="icon">
            <i class="fa fa-folder"></i>
          </div>
          <?php  
          if ($_SESSION['permisos_acceso']!='gerente') { ?>
            <a href="?module=postulantes" class="small-box-footer" title="Registrar postulante" data-toggle="tooltip"><i class="fa fa-plus"></i></a>
          <?php
          } else { ?>
            <a class="small-box-footer"><i class="fa"></i></a>
          <?php
          }
          ?>
        </div>
      </div><!-- ./col -->

       
    <div class="row">
      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        
        </div>

        </div>
        
              <!-- Pie Chart -->
              <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
               <!--   <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>-->
                    </div>
                  </div>
                </div>


      </div><!-- ./col -->
    </div><!-- /.row -->

  </section><!-- /.content -->

<?php } ?>




<?php

if ($_SESSION['permisos_acceso']=='Marketing') { ?>

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-home icon-title"></i> Inicio
    </h1>
    <ol class="breadcrumb">
      <li><a href="?module=start"><i class="fa fa-home"></i> Inicio</a></li>
    </ol>
  </section>
  
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-lg-12 col-xs-12">
        <div class="alert alert-info alert-dismissable">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <p style="font-size:15px">
            <i class="icon fa fa-user"></i> Bienvenido <strong><?php echo $_SESSION['name_user']; ?></strong> a la aplicación de Marketing Intitucional.
          </p>        
        </div>
      </div>  
    </div>

    
   
    <!-- Small boxes (Stat box) -->
    <h3><strong>Preinscripción y seguimiento de interesados</strong></h3>
    <div class="row">
      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div style="background-color:#00c0ef;color:#fff" class="small-box">
          <div class="inner">
            <?php  
          
            $query = mysqli_query($mysqli, "SELECT COUNT(id_interesado) as numero FROM interesados")
                                            or die('Error '.mysqli_error($mysqli));

           
            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['numero']; ?></h3>
            <p>Registro de Postulantes</p>
          </div>
          <div class="icon">
            <i class="fa fa-folder"></i>
          </div>
          <?php  
          if ($_SESSION['permisos_acceso']!='gerente') { ?>
            <a href="?module=form_postulantes&form=add" class="small-box-footer" title="Registrar postulante" data-toggle="tooltip"><i class="fa fa-plus"></i></a>
          <?php
          } else { ?>
            <a class="small-box-footer"><i class="fa"></i></a>
          <?php
          }
          ?>
        </div>
      </div><!-- ./col -->

       

<!--2 redes sociales -->
<div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div style="background-color:#8f70d5;color:#fff" class="small-box">
          <div class="inner">
            <?php   
   
            $query = mysqli_query($mysqli, "SELECT COUNT(id_interesado) as numero FROM interesados where estado='redessociales'")
                                            or die('Error '.mysqli_error($mysqli));


            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['numero']; ?></h3>
            <p> Contacto vía Web</p>
          </div>
          <div class="icon">
            <i class="fa fa-sign-in"></i>
          </div>
          <?php  
          if ($_SESSION['permisos_acceso']!='Academico') { ?>
            <a href="?module=redessociales" class="small-box-footer" title="Realizar 1° seguimiento" data-toggle="tooltip"><i class="fa fa-plus"></i></a>
          <?php
          } else { ?>
            <a class="small-box-footer"><i class="fa"></i></a>
          <?php
          }
          ?>
        </div>
      </div>


<!--2 -->
<div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div style="background-color:#0B4C5F;color:#fff" class="small-box">
          <div class="inner">
            <?php   
   
            $query = mysqli_query($mysqli, "SELECT COUNT(id_interesado) as numero FROM interesados where estado='pendientepostgrado'")
                                            or die('Error '.mysqli_error($mysqli));


            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['numero']; ?></h3>
            <p>Contactos pendientes - Programas de Postgrado</p>
          </div>
          <div class="icon">
            <i class="fa fa-sign-in"></i>
          </div>
          <?php  
          if ($_SESSION['permisos_acceso']!='Academico') { ?>
            <a href="?module=postgrado" class="small-box-footer" title="Realizar 1° seguimiento" data-toggle="tooltip"><i class="fa fa-plus"></i></a>
          <?php
          } else { ?>
            <a class="small-box-footer"><i class="fa"></i></a>
          <?php
          }
          ?>
        </div>
      </div>




      <div class="col-lg-4 col-xs-6">
        <div style="background-color:#0B4C5F;color:#fff" class="small-box">
          <div class="inner">
            <?php 
   
            $query = mysqli_query($mysqli, "SELECT COUNT(id_interesado) as numero FROM interesados where estado='sinseguimiento'")
                                            or die('Error '.mysqli_error($mysqli));


            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['numero']; ?></h3>
            <p> 1° Seguimieto</p>
          </div>
          <div class="icon">
            <i class="fa fa-sign-in"></i>
          </div>
          <?php  
          if ($_SESSION['permisos_acceso']!='Academico') { ?>
            <a href="?module=primer" class="small-box-footer" title="Realizar 1° seguimiento" data-toggle="tooltip"><i class="fa fa-plus"></i></a>
          <?php
          } else { ?>
            <a class="small-box-footer"><i class="fa"></i></a>
          <?php
          }
          ?>
        </div>
      </div>



      <div class="col-lg-4 col-xs-6">
        <div style="background-color:#21610B;color:#fff" class="small-box">
          <div class="inner">
            <?php   
   
            $query = mysqli_query($mysqli, "SELECT COUNT(id_interesado) as numero FROM interesados where estado='VOLVERALLAMAR'")
                                            or die('Error '.mysqli_error($mysqli));


            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['numero']; ?></h3>
            <p> 2° Seguimieto</p>
          </div>
          <div class="icon">
            <i class="fa fa-sign-in"></i>
          </div>
          <?php  
          if ($_SESSION['permisos_acceso']!='Academico') { ?>
            <a href="?module=segundo" class="small-box-footer" title="Realizar 2° seguimiento " data-toggle="tooltip"><i class="fa fa-plus"></i></a>
          <?php
          } else { ?>
            <a class="small-box-footer"><i class="fa"></i></a>
          <?php
          }
          ?>
        </div>
      </div>



      
<!--6 Reporte de confirmados -->

      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div style="background-color:#f39c12;color:#fff" class="small-box">
          <div class="inner">
            <?php  
  
            $query = mysqli_query($mysqli, "SELECT COUNT(id_interesado) as numero FROM interesados where estado='concluido'")
                                            or die('Error'.mysqli_error($mysqli));

            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['numero']; ?></h3>
            <p>Postulantes Confirmados</p>
          </div>
          <div class="icon">
            <i class="fa fa-file-text-o"></i>
            
          </div>
          <a href="#" class="small-box-footer" title="Para ver la lista ir al menú lateral Reportes --> Lista de confirmados" data-toggle="tooltip"><i class="fa fa-plus"></i></a>
        </div>

        
      </div>


      <h3><strong> &nbsp &nbsp Resultados de preinscripción</strong></h3>

<div class="col-lg-6 col-xs-6">
        <!-- small box -->
        <div style="background-color:#000;color:#fff" class="small-box">
          <div class="inner">
            <?php   
   
           
         $query = mysqli_query($mysqli, "SELECT COUNT(id_interesado) as numero FROM interesados where estado='INSCRIPTO'")
     or die('Error'.mysqli_error($mysqli));

            $data = mysqli_fetch_assoc($query);
            ?>
                  <h3><?php echo $data['numero']; ?></h3>

            <p> Matriculados</p>
          </div>
          <div class="icon">
            <i class="fa fa-sign-in"></i>
          </div>
          <?php  
          if ($_SESSION['permisos_acceso']!='Academico') { ?>
            <a href="?module=inscripto" class="small-box-footer" title="Matriculados " data-toggle="tooltip"><i class="fa fa-plus"></i></a>
          <?php
          } else { ?>
            <a class="small-box-footer"><i class="fa"></i></a>
          <?php
          }
          ?>
        </div>
      </div>
      
<div class="col-lg-6 col-xs-6">
        <!-- small box -->
        <div style="background-color:#ff0000;color:#fff" class="small-box">
          <div class="inner">
            <?php   
   
   $query = mysqli_query($mysqli, "SELECT COUNT(id_interesado) as numero FROM interesados where estado='inactivo'")
   or die('Error '.mysqli_error($mysqli));


            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['numero']; ?></h3>
            <p> Rechazados</p>
          </div>
          <div class="icon">
            <i class="fa fa-sign-in"></i>
          </div>
          <?php  
          if ($_SESSION['permisos_acceso']!='Academico') { ?>
             <a href="#" class="small-box-footer" title="Rechazados! :(" data-toggle="tooltip"><i class=""> <strong>:'(</strong></i></a>

          <?php
          } else { ?>
            <a class="small-box-footer"><i class="fa"></i></a>
          <?php
          }
          ?>
        </div>
      </div>


  
      <h3><strong> &nbsp &nbsp Deserciones de Estudiantes</strong></h3>
    <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div style="background-color:#01DFD7;color:#fff" class="small-box">
          <div class="inner">
            <?php   

$query = mysqli_query($mysqli, "SELECT COUNT(cod_desercion) as numero FROM desercion WHERE estado!='borrado';")
or die('Error '.mysqli_error($mysqli));


            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['numero']; ?></h3>
            <p><strong>Registrar Deserción de estudiante</strong></p>
           
          </div>
          <div class="icon">
            <i class="fa fa-sign-in"></i>
          </div>
          <?php  
          if ($_SESSION['permisos_acceso']!='Academico') { ?>
             <a href="?module=desercion" class="small-box-footer" title="Deserción" data-toggle="tooltip"><i class=""> <strong>Deserción</strong></i></a>

          <?php
          } else { ?>
            <a class="small-box-footer"><i class="fa"></i></a>
          <?php
          }
          ?>
        </div>
      </div>  


      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div style="background-color:#2E64FE;color:#fff" class="small-box">
          <div class="inner">
            <?php   
   
   $query = mysqli_query($mysqli, "SELECT COUNT(cod_desercion) as numero FROM v_desercion")
   or die('Error '.mysqli_error($mysqli));


            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['numero']; ?></h3>
            <p><strong>Realizar Seguimiento de Deserción</strong></p>
           
          </div>
          <div class="icon">
            <i class="fa fa-sign-in"></i>
          </div>
          <?php  
          if ($_SESSION['permisos_acceso']!='Academico') { ?>
             <a href="?module=desercionseguimiento" class="small-box-footer" title="Seguimiento de Deserción" data-toggle="tooltip"><i class=""> <strong>Seguimiento de Deserción</strong></i></a>

          <?php
          } else { ?>
            <a class="small-box-footer"><i class="fa"></i></a>
          <?php
          }
          ?>
        </div>
      </div>  


      
      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div style="background-color:#DF3A01;color:#fff" class="small-box">
          <div class="inner">
            <?php   
   
   $query = mysqli_query($mysqli, "SELECT COUNT(cod_desercion) as numero FROM v_desercion_segundo")
   or die('Error '.mysqli_error($mysqli));


            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['numero']; ?></h3>
            <p><strong>Realizar 2° Seguimiento</strong></p>
            
          </div>
          <div class="icon">
            <i class="fa fa-sign-in"></i>
          </div>
          <?php  
          if ($_SESSION['permisos_acceso']!='Academico') { ?>
             <a href="?module=desercionsegseguimiento" class="small-box-footer" title="2° Seguimiento" data-toggle="tooltip"><i class=""> <strong>2° Seguimiento</strong></i></a>

          <?php
          } else { ?>
            <a class="small-box-footer"><i class="fa"></i></a>
          <?php
          }
          ?>
        </div>
      </div>  


    <h3><strong> &nbsp &nbsp Resultados del seguimiento de las deserciones de Estudiantes</strong></h3>
    <div class="col-lg-6 col-xs-6">
        <!-- small box -->
        <div style="background-color:#04B404;color:#fff" class="small-box">
          <div class="inner">
            <?php   
   
   $query = mysqli_query($mysqli, "SELECT COUNT(cod_seg_desercion) as numero FROM v_seg_desercion_reincorporado")
   or die('Error '.mysqli_error($mysqli));


            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['numero']; ?></h3>
            <p><strong>Estudiantes Reincorporados</strong></p>
          </div>
          <div class="icon">
            <i class="fa fa-sign-in"></i>
          </div>
          <?php  
          if ($_SESSION['permisos_acceso']!='Academico') { ?>
             <a href="?module=desercionreincorporados" class="small-box-footer" title="Reincorporados" data-toggle="tooltip"><i class=""> <strong>Reincorporados</strong></i></a>

          <?php
          } else { ?>
            <a class="small-box-footer"><i class="fa"></i></a>
          <?php
          }
          ?>
        </div>
      </div>  


      <div class="col-lg-6 col-xs-6">
        <!-- small box -->
        <div style="background-color:#2E2E2E;color:#fff" class="small-box">
          <div class="inner">
            <?php   
   
   $query = mysqli_query($mysqli, "SELECT COUNT(cod_desercion) as numero FROM v_seg_desercion_rechazar")
   or die('Error '.mysqli_error($mysqli));


            $data = mysqli_fetch_assoc($query);
            ?>
            <h3><?php echo $data['numero']; ?></h3>
            <p><strong>Estudiantes que rechazaron la negociación</strong></p>
          </div>
          <div class="icon">
            <i class="fa fa-sign-in"></i>
          </div>
          <?php  
          if ($_SESSION['permisos_acceso']!='Academico') { ?>
             <a href="?module=desercionrechazados" class="small-box-footer" title="Rechazo de negociación" data-toggle="tooltip"><i class=""> <strong>Rechazo de negociación</strong></i></a>

          <?php
          } else { ?>
            <a class="small-box-footer"><i class="fa"></i></a>
          <?php
          }
          ?>
        </div>
      </div>  


    <div class="row">
      <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        
        </div>

        </div>
        
              <!-- Pie Chart -->
              <div class="col-xl-4 col-lg-5">
              <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
               <!--   <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdown Header:</div>
                      <a class="dropdown-item" href="#">Action</a>
                      <a class="dropdown-item" href="#">Another action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Something else here</a>-->
                    </div>
                  </div>
                </div>


      </div><!-- ./col -->
    </div><!-- /.row -->

  </section><!-- /.content -->

<?php } ?>

