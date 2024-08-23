<?php 

if ($_SESSION['permisos_acceso']=='Super Admin') { ?>

    <ul class="sidebar-menu">
        <li class="header">MENU</li>

	<?php 

	if ($_GET["module"]=="start") { 
		$active_home="active";
	} else {
		$active_home="";
	}
	?>
		<li class="<?php echo $active_home;?>">
			<a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
	  	</li>
	<?php
/*Primer menú datos postulantes
  if ($_GET["module"]=="postulantes" || $_GET["module"]=="form_postulantes") { ?>
    <li class="active">
      <a href="?module=postulantes"><i class="fa fa-folder"></i> Datos de Postulantes	 </a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?module=postulantes"><i class="fa fa-folder"></i> Datos de Postulantes </a>
      </li>
  <?php
  }*/ 


  /*2.1° menú datos redes sociales*/ 

/*
if ($_GET["module"]=="redessociales") { ?>
  <li class="active">
    <a href="?module=redessociales"><i class="fa fa-folder"></i> Contactos vía Web </a>
    </li>
<?php
}

else { ?>
  <li>
    <a href="?module=redessociales"><i class="fa fa-folder"></i> Contactos vía Web </a>
    </li>
<?php
}

if ($_GET["module"]=="desercion") { ?>
  <li class="active treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-file-text"></i> <span>Instructivos</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        <ul class="treeview-menu">
     
        </ul>
    </li>
  <?php 
}

elseif ($_GET["module"]=="instructivos") { ?>
  <li class="active treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-file-text"></i> <span>Instructivos</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        <ul class="treeview-menu">
      <!--  <li><a href="modules/instructivos/Insctructivo%20para%20la%20web-%20Postulantes.pdf" target="_blank"><i class="fa fa-circle-o"></i>Ingreso y Cargar Postulante </a></li>
          <li><a href="modules/instructivos/Insctructivo%20para%20la%20web-%201%20y%202%20seguimiento.pdf" target="_blank"><i class="fa fa-circle-o"></i> Realizar 1° y 2° Seguimiento </a></li>
      -->
         <!-- <li class="active"><a href="?module=reportes2"><i class="fa fa-circle-o"></i> Reporte por fecha </a></li>-->
        </ul>
    </li>
  <?php
} */
/*7° Instructivos 2
else { ?>
  <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-file-text"></i> <span>Instructivos</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        <ul class="treeview-menu">
        <li><a href="modules/instructivos/Insctructivo%20para%20la%20web-%20Postulantes.pdf" target="_blank"><i class="fa fa-circle-o"></i> Ingreso y Cargar Postulante </a></li>
          <li><a href="modules/instructivos/Insctructivo%20para%20la%20web-%201%20y%202%20seguimiento.pdf" target="_blank"><i class="fa fa-circle-o"></i> Realizar 1° y 2° Seguimiento </a></li>

        </ul>
    </li>
  <?php
}
 */

/*6° REPORTES Lista confirmados 

	if ($_GET["module"]=="reportes" || $_GET["module"]=="reportes_u_sinseguimiento" ) { ?>
		<li class="active treeview">
    
          	<a href="javascript:void(0);">
            	<i class="fa fa-file-text"></i> <span>Informe de Preinscripción</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
          <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/informes/informe_por_sede.php" target="_blank"><i class="fa fa-circle-o"></i> Lista de postulantes por Sede </a></li>
       		<li><a href="?module=reportes"><i class="fa fa-circle-o"></i> Lista de confirmados </a></li>
       		<li><a href="?module=reportes2"><i class="fa fa-circle-o"></i> Confirmados por fecha</a></li>
           <li><a href="?module=reportes_u_sinseguimiento"><i class="fa fa-circle-o"></i> Actividad de Usuarios </a></li>  

      		</ul>
    	</li>
      
    <?php
	}

	elseif ($_GET["module"]=="reportes2" || $_GET["module"]=="reportes_u_sinseguimiento") { ?>
		<li class="active treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-file-text"></i> <span>Informe de Preinscripción</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
          <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/informes/informe_por_sede.php" target="_blank"><i class="fa fa-circle-o"></i> Lista de postulantes por Sede </a></li>
        		<li><a href="?module=reportes"><i class="fa fa-circle-o"></i> Lista de confirmados </a></li>
        		<li class="active"><a href="?module=reportes2"><i class="fa fa-circle-o"></i> Confirmados por fecha </a></li>
            <li><a href="?module=reportes_u_sinseguimiento"><i class="fa fa-circle-o"></i> Actividad de Usuarios </a></li> 


          </ul>
    	</li>
    <?php
  }
  */



/*6° REPORTES Lista Carreras por Sede 

if ($_GET["module"]=="reportes" || $_GET["module"]=="reportes_u_sinseguimiento" ) { ?>
  <li class="active treeview">
  
          <a href="javascript:void(0);">
            <i class="fa fa-file-text"></i> <span>Informe de Preinscripción - 2020</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        <ul class="treeview-menu">
        <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/informes/informe_por_sede.php" target="_blank"><i class="fa fa-circle-o"></i> Lista de postulantes por Sede </a></li>
         <li><a href="?module=reportes"><i class="fa fa-circle-o"></i> Lista de confirmados </a></li>
         <li><a href="?module=reportes2"><i class="fa fa-circle-o"></i> Confirmados por fecha</a></li>
         <li><a href="?module=reportes_u_sinseguimiento"><i class="fa fa-circle-o"></i> Actividad de Usuarios </a></li>  

        </ul>
    </li>
    
  <?php
}

elseif ($_GET["module"]=="reportes2" || $_GET["module"]=="reportes_u_sinseguimiento") { ?>
  <li class="active treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-file-text"></i> <span>Informe de Preinscripción - 2020</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        <ul class="treeview-menu">
        <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/informes/informe_por_sede.php" target="_blank"><i class="fa fa-circle-o"></i> Lista de postulantes por Sede </a></li>
          <li><a href="?module=reportes"><i class="fa fa-circle-o"></i> Lista de confirmados </a></li>
          <li class="active"><a href="?module=reportes2"><i class="fa fa-circle-o"></i> Confirmados por fecha </a></li>
          <li><a href="?module=reportes_u_sinseguimiento"><i class="fa fa-circle-o"></i> Actividad de Usuarios </a></li> 


        </ul>
    </li>
  <?php
}


/*7° REPORTES Lista confirmados 
	else { ?>
		<li class="treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-file-text"></i> <span>Informe de Preinscripción 2020</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
          <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/informes/informe_por_sede.php" target="_blank"><i class="fa fa-circle-o"></i> Lista de postulantes por Sede </a></li>
        		<li><a href="?module=reportes"><i class="fa fa-circle-o"></i> Lista de confirmados </a></li>
        		<li><a href="?module=reportes2"><i class="fa fa-circle-o"></i> Confirmados por fecha </a></li>
            <li class="active" ><a href="?module=reportes_u_sinseguimiento"><i class="fa fa-circle-o"></i> Actividad de Usuarios </a></li>
            
      		</ul>
    	</li>
    <?php
	}
*/




/*7° REPORTES Lista Carreras por Sede 

if ($_GET["module"]=="reportes" || $_GET["module"]=="reportes_u_sinseguimiento" ) { ?>
  <li class="active treeview">
  
          <a href="javascript:void(0);">
            <i class="fa fa-file-text"></i> <span>Carreras solicitadas por Sede 2020</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        <ul class="treeview-menu">
        <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/sedes/informe_carreras_hernandarias.php" target="_blank"><i class="fa fa-circle-o"></i> Lista de postulantes por Sede </a></li>
     

        </ul>
    </li>
    
  <?php
}

elseif ($_GET["module"]=="reportes2" || $_GET["module"]=="reportes_u_sinseguimiento") { ?>
  <li class="active treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-file-text"></i> <span>Carreras solicitadas por Sede 2020</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        <ul class="treeview-menu">
        <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/sedes/informe_carreras_hernandarias.php" target="_blank"><i class="fa fa-circle-o"></i> Lista de postulantes por Sede </a></li>



        </ul>
    </li>
  <?php
}


	else { ?>
		<li class="treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-file-text"></i> <span>Carreras más solicitados 2020</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
          <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/sedes/derechoinfo.php" target="_blank"><i class="fa fa-circle-o"></i> Info - Derecho </a></li>
          <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/sedes/empresariales.php" target="_blank"><i class="fa fa-circle-o"></i> Empresariales </a></li>
          <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/sedes/juanee.php" target="_blank"><i class="fa fa-circle-o"></i> Juan E. E </a></li>
          <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/sedes/concepcion.php" target="_blank"><i class="fa fa-circle-o"></i> Concepción </a></li>
          <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/sedes/spedro.php" target="_blank"><i class="fa fa-circle-o"></i> San Pedro </a></li>
          <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/sedes/luque.php" target="_blank"><i class="fa fa-circle-o"></i> Luque </a></li>
          <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/sedes/sanlo.php" target="_blank"><i class="fa fa-circle-o"></i> San Lorenzo </a></li>
          <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/sedes/caaguazu.php" target="_blank"><i class="fa fa-circle-o"></i> Caaguazú </a></li>
          <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/sedes/caazapa.php" target="_blank"><i class="fa fa-circle-o"></i> Caazapá </a></li>
          <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/sedes/cde.php" target="_blank"><i class="fa fa-circle-o"></i> CDE </a></li>
          <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/sedes/caacupe.php" target="_blank"><i class="fa fa-circle-o"></i> Caacupé </a></li>
          <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/sedes/coronel.php" target="_blank"><i class="fa fa-circle-o"></i> Cnel. Oviedo </a></li>
          <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/sedes/horqueta.php" target="_blank"><i class="fa fa-circle-o"></i> Horqueta </a></li>
          <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/sedes/encarnacion.php" target="_blank"><i class="fa fa-circle-o"></i> Encarnación </a></li>
          <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/sedes/nemby.php" target="_blank"><i class="fa fa-circle-o"></i> Ñemby </a></li>
          <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/sedes/santarosa.php" target="_blank"><i class="fa fa-circle-o"></i> Santa Rosa </a></li>
          <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/sedes/maria.php" target="_blank"><i class="fa fa-circle-o"></i> María Aux. </a></li>
          <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/sedes/capiata.php" target="_blank"><i class="fa fa-circle-o"></i>Capiatá </a></li>
          <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/sedes/fernando.php" target="_blank"><i class="fa fa-circle-o"></i> Fernando </a></li>
          <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/sedes/loma.php" target="_blank"><i class="fa fa-circle-o"></i> Loma Pytá </a></li>
          <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/sedes/informe_carreras_hernandarias.php" target="_blank"><i class="fa fa-circle-o"></i> Hernandarias </a></li>

            
      		</ul>
    	</li>
    <?php
	}


  

/*7° REPORTES Lista Carreras por Sede 

if ($_GET["module"]=="reportes" || $_GET["module"]=="reportes_u_sinseguimiento" ) { ?>
  <li class="active treeview">
  
          <a href="javascript:void(0);">
            <i class="fa fa-file-text"></i> <span>Carreras solicitadas por Sede 2020 </span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        <ul class="treeview-menu">
        <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/sedes/informe_carreras_hernandarias.php" target="_blank"><i class="fa fa-circle-o"></i> Lista de postulantes por Sede </a></li>
     

        </ul>
    </li>
    
  <?php
}

elseif ($_GET["module"]=="reportes2" || $_GET["module"]=="reportes_u_sinseguimiento") { ?>
  <li class="active treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-file-text"></i> <span>Carreras solicitadas por Sede 2020</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        <ul class="treeview-menu">
        <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/sedes/informe_carreras_hernandarias.php" target="_blank"><i class="fa fa-circle-o"></i> Lista de postulantes por Sede </a></li>



        </ul>
    </li>
  <?php
}


	else { ?>
		<li class="treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-file-text"></i> <span>Estadisticas de deserción 2020 </span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
          <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/infodesercion/informe_desercion_por_sede.php" target="_blank"><i class="fa fa-circle-o"></i> Deserción por sede </a></li>
          <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/infodesercion/informe_por_motivo.php" target="_blank"><i class="fa fa-circle-o"></i> Motivos de deserción </a></li>
          <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/infodesercion/informe_reincorporados_por_sede.php" target="_blank"><i class="fa fa-circle-o"></i> Estudiantes Reincorporados </a></li>
          <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/infodesercion/informe_noincorporados_por_sede.php" target="_blank"><i class="fa fa-circle-o"></i> Estudiantes NO reincorporados </a></li>
      		</ul>
    	</li>
    <?php
	}
*/
/*
  
if ($_GET["module"]=="reportes" || $_GET["module"]=="reportes_u_sinseguimiento" ) { ?>
  <li class="active treeview">
  
          <a href="javascript:void(0);">
            <i class="fa fa-file-text"></i> <span>Carreras solicitadas 2020</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        <ul class="treeview-menu">
        <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/sedes/informe_carreras_hernandarias.php" target="_blank"><i class="fa fa-circle-o"></i> Lista de postulantes por Sede </a></li>
     

        </ul>
    </li>
    
  <?php
}

elseif ($_GET["module"]=="reportes2" || $_GET["module"]=="reportes_u_sinseguimiento") { ?>
  <li class="active treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-file-text"></i> <span>Carreras solicitadas 2020</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        <ul class="treeview-menu">
        </ul>
    </li>
  <?php
}

else { ?>
  <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-file-text"></i> <span>Carreras más desertadas 2020</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        <ul class="treeview-menu">
        <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/infodesercion/info_derechoinfo.php" target="_blank"><i class="fa fa-circle-o"></i> Info - Derecho </a></li>
        <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/infodesercion/info_empresariales.php" target="_blank"><i class="fa fa-circle-o"></i> Empresariales </a></li>
        <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/infodesercion/info_juanee.php" target="_blank"><i class="fa fa-circle-o"></i> Juan E. E </a></li>
        <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/infodesercion/info_concepcion.php" target="_blank"><i class="fa fa-circle-o"></i> Concepción </a></li>
        <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/infodesercion/info_spedro.php" target="_blank"><i class="fa fa-circle-o"></i> San Pedro </a></li>
        <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/infodesercion/info_luque.php" target="_blank"><i class="fa fa-circle-o"></i> Luque </a></li>
        <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/infodesercion/info_sanlo.php" target="_blank"><i class="fa fa-circle-o"></i> San Lorenzo </a></li>
        <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/infodesercion/info_caaguazu.php" target="_blank"><i class="fa fa-circle-o"></i> Caaguazú </a></li>
        <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/infodesercion/info_caazapa.php" target="_blank"><i class="fa fa-circle-o"></i> Caazapá </a></li>
        <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/infodesercion/info_cde.php" target="_blank"><i class="fa fa-circle-o"></i> CDE </a></li>
        <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/infodesercion/info_caacupe.php" target="_blank"><i class="fa fa-circle-o"></i> Caacupé </a></li>
        <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/infodesercion/info_coronel.php" target="_blank"><i class="fa fa-circle-o"></i> Cnel. Oviedo </a></li>
        <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/infodesercion/info_horqueta.php" target="_blank"><i class="fa fa-circle-o"></i> Horqueta </a></li>
        <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/infodesercion/info_encarnacion.php" target="_blank"><i class="fa fa-circle-o"></i> Encarnación </a></li>
        <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/infodesercion/info_nemby.php" target="_blank"><i class="fa fa-circle-o"></i> Ñemby </a></li>
        <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/infodesercion/info_santarosa.php" target="_blank"><i class="fa fa-circle-o"></i> Santa Rosa </a></li>
        <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/infodesercion/info_maria.php" target="_blank"><i class="fa fa-circle-o"></i> María Aux. </a></li>
        <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/infodesercion/info_capiata.php" target="_blank"><i class="fa fa-circle-o"></i>Capiatá </a></li>
        <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/infodesercion/info_fernando.php" target="_blank"><i class="fa fa-circle-o"></i> Fernando </a></li>
        <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/infodesercion/info_loma.php" target="_blank"><i class="fa fa-circle-o"></i> Loma Pytá </a></li>
        <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/infodesercion/info_hernandarias.php" target="_blank"><i class="fa fa-circle-o"></i> Hernandarias </a></li>

          
        </ul>
    </li>
  <?php
}
*/

  
if ($_GET["module"]=="reportes" || $_GET["module"]=="reportes_u_sinseguimiento" ) { ?>
  <li class="treeview">
  
          <a href="javascript:void(0);">
            <i class="fa fa-file-text"></i> <span>Documentos internos</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        <ul class="treeview-menu">
        </ul>
    </li>
    
  <?php
}

elseif ($_GET["module"]=="reportes2" || $_GET["module"]=="reportes_u_sinseguimiento") { ?>
  <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-file-text"></i> <span>Documentos internos</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        <ul class="treeview-menu">
        </ul>
    </li>
  <?php
}


/*7° REPORTES Lista confirmados */
else { ?>
  <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-file-text"></i> <span>Documentos internos</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        <ul class="treeview-menu">
        <li class="active"><a href="modules/documentos_internos/Protocolo%20de%20uso%20de%20redes%20sociales%20.pdf" target="_blank"><i class="fa fa-circle-o"></i>Protocolo de uso de redes sociales</a></li>
          
        </ul>
    </li>
  <?php
}



/*Enlace al formulario de presincripcion*/ 
if ($_GET["module"]=="start") { ?>
  <li class="">
    <a href="https://www.utic.edu.py/preinscripcion/visitacolegios.php" target="_blank"><i class="glyphicon glyphicon-globe"></i> Enlace al formulario de presinscripción visita a colegios</a>
    </li>
<?php
}

else { ?>
  <li>
    <a href="https://www.utic.edu.py/preinscripcion/visitacolegios.php" target="_blank"><i class="glyphicon glyphicon-globe"></i> Enlace al formulario de presinscripción visita a colegios</a>
    </li>
<?php
}

/*Tutorial*/ 
if ($_GET["module"]=="start") { ?>
  <li class="">
    <a href="https://drive.google.com/file/d/1OAov8UWQ6s_Ikxp4bsGWUTPDD5PyJlsj/view?usp=sharing" target="_blank"><i class="fa fa-video-camera	"></i> Tutorial del Sistema</a>
    </li>
<?php
}

else { ?>
  <li>
    <a href="https://drive.google.com/file/d/1OAov8UWQ6s_Ikxp4bsGWUTPDD5PyJlsj/view?usp=sharing" target="_blank"><i class="fa fa-video-camera"></i> Tutorial del Sistema</a>
    </li>
<?php
}
if($_GET["module"]=="start"){ ?>
  <li class="treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-area-chart"></i> <span>Interesados en CARRERAS POR SEDE</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
          <li class="active"><a href="?module=reporte_interesados_por_sede"><i class="fa fa-circle-o"></i> Ver Estadísticas </a></li>
           
      		</ul>
    	</li>
      <?php
}
else {
  if($_GET["module"]=="reporte_interesados_por_sede"){ ?>
      <li class="treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-area-chart"></i> <span>Interesados en CARRERAS POR SEDE</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
          <li class="active"><a href="?module=reporte_interesados_por_sede" ><i class="fa fa-circle-o"></i> Ver Estadísticas </a></li>
           
      		</ul>
    	</li>
    <?php
    }
}

if($_GET["module"]=="start"){ ?>
  <li class="treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-area-chart"></i> <span>Estadística ¿Cómo nos conociste?</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
          <li class="active"><a href="modules/informes/comonosconociste2020.php" target="_blank"><i class="fa fa-circle-o"> </i> 2020</a>
          <li class="active"><a href="modules/informes/comonosconociste2021.php" target="_blank"><i class="fa fa-circle-o"> </i> 2021</a>
          <li class="active"><a href="modules/informes/comonosconociste2022.php" target="_blank"><i class="fa fa-circle-o"> </i> 2022</a>
          <li class="active"><a href="modules/informes/comonosconociste2023.php" target="_blank"><i class="fa fa-circle-o"> </i> 2023</a>

          </li>
      		</ul>
    	</li>

<?php
}

if($_GET["module"]=="start"){ ?>
  <li class="treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-area-chart"></i> <span>Estadísticas Generales</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
          <li class="active"><a href="?module=reportes_u_sinseguimiento"><i class="fa fa-circle-o"> </i> Ver Estadísticas</a>
          </li>
      		</ul>
    	</li>

<?php
} else{ $_GET["module"]=="reportes_u_sinseguimiento"; ?>
  <li class="treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-area-chart"></i> <span>Estadísticas Generales</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
          <li class="active"><a href="?module=reportes_u_sinseguimiento"><i class="fa fa-circle-o"> </i> Ver Estadísticas </a>
          </li>
      		</ul>
    	</li>
<?php }
	if ($_GET["module"]=="user" || $_GET["module"]=="form_user") { ?>
		<li class="active">
			<a href="?module=user"><i class="fa fa-user"></i> Administrar usuarios</a>
	  	</li>
	<?php
	}

	else { ?>
		<li>
			<a href="?module=user"><i class="fa fa-user"></i> Administrar usuarios</a>
	  	</li>
	<?php
	}


	if ($_GET["module"]=="password") { ?>
		<li class="active">
			<a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}

	else { ?>
		<li>
			<a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}
	?>
	</ul>

<?php
}

/* modulo académico */
elseif ($_SESSION['permisos_acceso']=='Academico') { ?>
	<!-- sidebar menu start -->
    <ul class="sidebar-menu">
        <li class="header">MENU</li>

	<?php 

	if ($_GET["module"]=="start") { ?>
		<li class="active">
			<a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
	  	</li>
	<?php
	}

	else { ?>
		<li>
			<a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
	  	</li>
	<?php
	}


 /*Primer menú datos postulantes*/ 
 if ($_GET["module"]=="colegios" || $_GET["module"]=="form_postulantes") { ?>
  <li class="active">
    <a href="?module=colegios"><i class="glyphicon glyphicon-education"></i> Preinscriptos Sorteo de Becas	 </a>
    </li>
<?php
}

else { ?>
  <li>
    <a href="?module=colegios"><i class="glyphicon glyphicon-education"></i> Preinscriptos Sorteo de Becas </a>
    </li>
<?php
}

 /*Primer menú datos postulantes*/ 
 if ($_GET["module"]=="redessociales" || $_GET["module"]=="form_redessociales") { ?>
  <li class="active">
    <a href="?module=redessociales"><i class="glyphicon glyphicon-globe"></i> Preinscriptos Web UTIC</a>
    </li>
<?php
}

else { ?>
  <li>
    <a href="?module=redessociales"><i class="glyphicon glyphicon-globe"></i> Preinscriptos Web UTIC</a>
    </li>
<?php
}


 /*Primer menú datos postulantes*/ 
 if ($_GET["module"]=="segundo" || $_GET["module"]=="form_segundo") { ?>
  <li class="active">
    <a href="?module=segundo"><i class="glyphicon glyphicon-repeat"></i> Segundo seguimiento	 </a>
    </li>
<?php
}

else { ?>
  <li>
    <a href="?module=segundo"><i class="glyphicon glyphicon-repeat"></i> Segundo seguimiento</a>
    </li>
<?php
}

 /*Tutorial*/ 
 if ($_GET["module"]=="start") { ?>
  <li class="">
    <a href="https://drive.google.com/file/d/1OAov8UWQ6s_Ikxp4bsGWUTPDD5PyJlsj/view?usp=sharing" target="_blank"><i class="fa fa-video-camera	"></i> Tutorial del Sistema</a>
    </li>
<?php
}

else { ?>
  <li>
    <a href="https://drive.google.com/file/d/1OAov8UWQ6s_Ikxp4bsGWUTPDD5PyJlsj/view?usp=sharing" target="_blank"><i class="fa fa-video-camera"></i> Tutorial del Sistema</a>
    </li>
<?php
}

/*Enlace al formulario de presincripcion*/ 
if ($_GET["module"]=="start") { ?>
  <li class="">
    <a href="https://www.utic.edu.py/preinscripcion/visitacolegios.php" target="_blank"><i class="glyphicon glyphicon-globe"></i> Enlace al formulario de presinscripción visita a colegios</a>
    </li>
<?php
}

else { ?>
  <li>
    <a href="https://www.utic.edu.py/preinscripcion/visitacolegios.php" target="_blank"><i class="glyphicon glyphicon-globe"></i> Enlace al formulario de presinscripción visita a colegios</a>
    </li>
<?php
}

	if ($_GET["module"]=="password") { ?>
		<li class="active">
			<a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}
	else { ?>
		<li>
			<a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}
	?>
	</ul>
<?php
}


/* Módulo Bienestar*/ 
elseif ($_SESSION['permisos_acceso']=='Bienestar') { ?>
	<!-- sidebar menu start -->
    <ul class="sidebar-menu">
        <li class="header">MENU</li>

	<?php 

	if ($_GET["module"]=="start") { ?>
		<li class="active">
			<a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
	  	</li>
	<?php
	}

	else { ?>
		<li>
			<a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
	  	</li>
	<?php
	}




/*6° Instructivos */

if ($_GET["module"]=="desercion") { ?>
  <li class="active treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-file-text"></i> <span>Instructivos</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        <ul class="treeview-menu">
     
        </ul>
    </li>
  <?php
} 

elseif ($_GET["module"]=="instructivos") { ?>
  <li class="active treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-file-text"></i> <span>Instructivos</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        <ul class="treeview-menu">
        <li><a href="https://drive.google.com/file/d/1iCxeTEhbZQX0JltHt4ipsx4QhD2hqqMN/view?usp=sharing" target="_blank"><i class="fa fa-circle-o"></i>Utilización del sistema </a></li>

         <!-- <li class="active"><a href="?module=reportes2"><i class="fa fa-circle-o"></i> Reporte por fecha </a></li>-->
        </ul>
    </li>
  <?php
}
/*7° Instructivos 2 */
else { ?>
  <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-file-text"></i> <span>Instructivos</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        <ul class="treeview-menu">
        <li><a href="https://drive.google.com/file/d/1iCxeTEhbZQX0JltHt4ipsx4QhD2hqqMN/view?usp=sharing" target="_blank"><i class="fa fa-circle-o"></i>Utilización del sistema </a></li>

        </ul>
    </li>
  <?php
}

/*Enlace al formulario de presincripcion*/ 
if ($_GET["module"]=="start") { ?>
  <li class="">
    <a href="https://www.utic.edu.py/preinscripcion/visitacolegios.php" target="_blank"><i class="glyphicon glyphicon-globe"></i> Enlace al formulario de presinscripción</a>
    </li>
<?php
}

else { ?>
  <li>
    <a href="https://www.utic.edu.py/preinscripcion/visitacolegios.php" target="_blank"><i class="glyphicon glyphicon-globe"></i> Enlace al formulario de presinscripción</a>
    </li>
<?php
}


	if ($_GET["module"]=="password") { ?>
		<li class="active">
			<a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}
	else { ?>
		<li>
			<a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}
	?>
	</ul>
<?php
}

if ($_SESSION['permisos_acceso']=='Marketing') { ?>

    <ul class="sidebar-menu">
        <li class="header">MENU</li>

	<?php 

  if ($_GET["module"]=="start") { ?>
    <li class="active">
      <a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
      </li>
  <?php
  }

  else { ?>
    <li>
      <a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
      </li>
  <?php
  }



/*6° Instructivos */

if ($_GET["module"]=="desercion") { ?>
  <li class="active treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-file-text"></i> <span>Instructivos</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        <ul class="treeview-menu">
     
        </ul>
    </li>
  <?php
}

elseif ($_GET["module"]=="instructivos") { ?>
  <li class="active treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-file-text"></i> <span>Instructivos</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        <ul class="treeview-menu">
        <li><a href="#" target="_blank"><i class="fa fa-circle-o"></i>Ingreso y Cargar Postulante </a></li>
          <li><a href="#" target="_blank"><i class="fa fa-circle-o"></i> Realizar 1° y 2° Seguimiento </a></li>

         <!-- <li class="active"><a href="?module=reportes2"><i class="fa fa-circle-o"></i> Reporte por fecha </a></li>-->
        </ul>
    </li>
  <?php
}
/*7° Instructivos 2 */
else { ?>
  <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-file-text"></i> <span>Instructivos</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        <ul class="treeview-menu">
        <li><a href="#" target="_blank"><i class="fa fa-circle-o"></i> Ingreso y Cargar Postulante </a></li>
          <li><a href="#" target="_blank"><i class="fa fa-circle-o"></i> Realizar 1° y 2° Seguimiento </a></li>

        </ul>
    </li>
  <?php
}


/*6° REPORTES Lista confirmados */

if ($_GET["module"]=="reportetodos") { ?>
  <li class="active treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        <ul class="treeview-menu">
        <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/informes/informe_por_sede.php" target="_blank"><i class="fa fa-circle-o"></i> Cantidad de postulantes por Sede </a></li>
          <li class="active"><a href="?module=reportetodos"><i class="fa fa-circle-o"></i> Lista de confirmados </a></li>
         <!-- <li><a href="?module=reportes2"><i class="fa fa-circle-o"></i> Reporte por fecha</a></li> -->
        </ul>
    </li>
  <?php
}

elseif ($_GET["module"]=="reportetodos") { ?>
  <li class="active treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        <ul class="treeview-menu">
        <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/informes/informe_por_sede.php" target="_blank"><i class="fa fa-circle-o"></i> Cantidad de postulantes por Sede </a></li>

          <li><a href="?module=reportetodos"><i class="fa fa-circle-o"></i> Lista de confirmados </a></li>
         <!-- <li class="active"><a href="?module=reportes2"><i class="fa fa-circle-o"></i> Reporte por fecha </a></li>-->
        </ul>
    </li>
  <?php
}
/*7° REPORTES Lista confirmados */
else { ?>
  <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-file-text"></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        <ul class="treeview-menu">
        <li class="active"><a href="http://www.utic.edu.py/marketingyprotocolo/modules/informes/informe_por_sede.php" target="_blank"><i class="fa fa-circle-o"></i> Cantidad de postulantes por Sede </a></li>

          <li><a href="?module=reportetodos"><i class="fa fa-circle-o"></i> Lista de confirmados </a></li>
         <!-- <li><a href="?module=reportetodos"><i class="fa fa-circle-o"></i> Reporte por fecha </a></li>-->
        </ul>
    </li>
  <?php
}


  
if ($_GET["module"]=="reportes" || $_GET["module"]=="reportes_u_sinseguimiento" ) { ?>
  <li class="active treeview">
  
          <a href="javascript:void(0);">
            <i class="fa fa-file-text"></i> <span>Documentos internos</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        <ul class="treeview-menu">
        </ul>
    </li>
    
  <?php
}

elseif ($_GET["module"]=="reportes2" || $_GET["module"]=="reportes_u_sinseguimiento") { ?>
  <li class="active treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-file-text"></i> <span>Documentos internos</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        <ul class="treeview-menu">
        </ul>
    </li>
  <?php
}

/*7° REPORTES Lista confirmados */
else { ?>
  <li class="treeview">
          <a href="javascript:void(0);">
            <i class="fa fa-file-text"></i> <span>Documentos internos</span> <i class="fa fa-angle-left pull-right"></i>
          </a>
        <ul class="treeview-menu">
        <li class="active"><a href="modules/documentos_internos/Protocolo%20de%20uso%20de%20redes%20sociales%20.pdf" target="_blank"><i class="fa fa-circle-o"></i>Protocolo de uso de redes sociales</a></li>
          
        </ul>
    </li>
  <?php
}


/*Enlace al formulario de presincripcion*/ 
if ($_GET["module"]=="start") { ?>
  <li class="">
    <a href="https://www.utic.edu.py/preinscripcion/visitacolegios.php" target="_blank"><i class="glyphicon glyphicon-globe"></i> Enlace al formulario de presinscripción visita a colegios</a>
    </li>
<?php
}

else { ?>
  <li>
    <a href="https://www.utic.edu.py/preinscripcion/visitacolegios.php" target="_blank"><i class="glyphicon glyphicon-globe"></i> Enlace al formulario de presinscripción visita a colegios</a>
    </li>
<?php
}


	if ($_GET["module"]=="password") { ?>
		<li class="active">
			<a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}
	else { ?>
		<li>
			<a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}
	?>
	</ul>
<?php
}
?>



<?php 

if ($_SESSION['permisos_acceso']=='Informes') { ?>

    <ul class="sidebar-menu">
        <li class="header">MENU</li>

	<?php 

	if ($_GET["module"]=="start") { 
		$active_home="active";
	} else {
		$active_home="";
	}
	?>
		<li class="<?php echo $active_home;?>">
			<a href="?module=start"><i class="fa fa-home"></i> Inicio </a>
	  	</li>
	<?php


if($_GET["module"]=="start"){ ?>
  <li class="treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-area-chart"></i> <span>Interesados en CARRERAS POR SEDE</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
          <li class="active"><a href="?module=reporte_interesados_por_sede"><i class="fa fa-circle-o"></i> Ver Estadísticas </a></li>
           
      		</ul>
    	</li>
      <?php
}
else {
  if($_GET["module"]=="reporte_interesados_por_sede"){ ?>
      <li class="treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-area-chart"></i> <span>Interesados en CARRERAS POR SEDE</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
          <li class="active"><a href="?module=reporte_interesados_por_sede" ><i class="fa fa-circle-o"></i> Ver Estadísticas </a></li>
           
      		</ul>
    	</li>
    <?php
    }
}

if($_GET["module"]=="start"){ ?>
  <li class="treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-area-chart"></i> <span>Estadística ¿Cómo nos conociste?</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
          <li class="active"><a href="modules/informes/comonosconociste2020.php" target="_blank"><i class="fa fa-circle-o"> </i> 2020</a>
          <li class="active"><a href="modules/informes/comonosconociste2021.php" target="_blank"><i class="fa fa-circle-o"> </i> 2021</a>
          <li class="active"><a href="modules/informes/comonosconociste2022.php" target="_blank"><i class="fa fa-circle-o"> </i> 2022</a>
          <li class="active"><a href="modules/informes/comonosconociste2023.php" target="_blank"><i class="fa fa-circle-o"> </i> 2023</a>

          </li>
      		</ul>
    	</li>

<?php
}

if($_GET["module"]=="start"){ ?>
  <li class="treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-area-chart"></i> <span>Estadísticas Generales</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
          <li class="active"><a href="?module=reportes_u_sinseguimiento"><i class="fa fa-circle-o"> </i> Ver Estadísticas</a>
          </li>
      		</ul>
    	</li>

<?php
} else{ $_GET["module"]=="reportes_u_sinseguimiento"; ?>
  <li class="treeview">
          	<a href="javascript:void(0);">
            	<i class="fa fa-area-chart"></i> <span>Estadísticas Generales</span> <i class="fa fa-angle-left pull-right"></i>
          	</a>
      		<ul class="treeview-menu">
          <li class="active"><a href="?module=reportes_u_sinseguimiento"><i class="fa fa-circle-o"> </i> Ver Estadísticas </a>
          </li>
      		</ul>
    	</li>
<?php }


	if ($_GET["module"]=="password") { ?>
		<li class="active">
			<a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}

	else { ?>
		<li>
			<a href="?module=password"><i class="fa fa-lock"></i> Cambiar contraseña</a>
		</li>
	<?php
	}
	?>
	</ul>

<?php
}