<?php
require_once "config/database.php";
require_once "config/fungsi_tanggal.php";
require_once "config/fungsi_rupiah.php";


if (empty($_SESSION['username']) && empty($_SESSION['password'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
else {
	if ($_GET['module'] == 'start') {
		include "modules/start/view.php";
	}

		elseif ($_GET['module'] == 'postulantes') {
		include "modules/postulantes/view.php";
	}
	elseif ($_GET['module'] == 'colegios') {
		include "modules/colegios/view.php";
	}

	elseif ($_GET['module'] == 'primer') {
		include "modules/primer/view.php";
	}
	elseif ($_GET['module'] == 'postgrado') {
		include "modules/postgrado/view.php";
	}

	elseif ($_GET['module'] == 'diplomados') {
		include "modules/diplomados/view.php";
	}

	elseif ($_GET['module'] == 'segundopostgrado') {
		include "modules/segundopostgrado/view.php";
	}

	elseif ($_GET['module'] == 'segundodiplomado') {
		include "modules/segundodiplomado/view.php";
	}

	elseif ($_GET['module'] == 'confirmadospostgrado') {
		include "modules/confirmadospostgrado/view.php";
	}

	elseif ($_GET['module'] == 'confirmadosdiplomados') {
		include "modules/confirmadosdiplomados/view.php";
	}
	elseif ($_GET['module'] == 'segundo') {
		include "modules/segundo/view.php";
	}
	elseif ($_GET['module'] == 'tercer') {
		include "modules/tercer/view.php";
	}

	elseif ($_GET['module'] == 'redessociales') {
		include "modules/redessociales/view.php";
	}
	
	elseif ($_GET['module'] == 'inscriptos') {
		include "modules/inscriptos/view.php";
	}

	elseif ($_GET['module'] == 'inscripto') {
		include "modules/inscripto/view.php";
	}
	elseif ($_GET['module'] == 'confirmados') {
			include "modules/confirmados/view.php";
		}
	elseif ($_GET['module'] == 'desercion') {
			include "modules/desercion/view.php";
		}
	elseif ($_GET['module'] == 'desercionseguimiento') {
			include "modules/desercionseguimiento/view.php";
		}
	elseif ($_GET['module'] == 'desercionreincorporados') {
			include "modules/desercionreincorporados/viewreincorporados.php";
		}
	elseif ($_GET['module'] == 'desercionrechazados') {
			include "modules/desercionrechazados/viewrechazados.php";
		}
	elseif ($_GET['module'] == 'desercionsegseguimiento') {
		include "modules/desercionsegseguimiento/view.php";
	}
	elseif ($_GET['module'] == 'consultasweb') {
		include "modules/consultasweb/view.php";
	}
	elseif ($_GET['module'] == 'consultaswebres') {
		include "modules/consultaswebres/view.php";
	}


	
	elseif ($_GET['module'] == 'form_postulantes') {
		include "modules/postulantes/form.php";
	}

	elseif ($_GET['module'] == 'form_colegios') {
		include "modules/colegios/form.php";
	}
	
	elseif ($_GET['module'] == 'form_primer') {
		include "modules/primer/form.php";
	}

	elseif ($_GET['module'] == 'form_postgrado') {
		include "modules/postgrado/form.php";
	}

	elseif ($_GET['module'] == 'form_diplomados') {
		include "modules/diplomados/form.php";
	}

	elseif ($_GET['module'] == 'form_segundopostgrado') {
		include "modules/segundopostgrado/form.php";
	}

	elseif ($_GET['module'] == 'form_segundodiplomado') {
		include "modules/segundodiplomado/form.php";
	}

	elseif ($_GET['module'] == 'form_confirmadospostgrado') {
		include "modules/confirmadospostgrado/form.php";
	}

	elseif ($_GET['module'] == 'form_confirmadosdiplomados') {
		include "modules/confirmadosdiplomados/form.php";
	}

	elseif ($_GET['module'] == 'form_segundo') {
		include "modules/segundo/form.php";
	}
	elseif ($_GET['module'] == 'form_tercer') {
		include "modules/tercer/form.php";
	}
	elseif ($_GET['module'] == 'form_redessociales') {
		include "modules/redessociales/form.php";
	}

	elseif ($_GET['module'] == 'form_inscriptos') {
		include "modules/inscriptos/form.php";
	}
	elseif ($_GET['module'] == 'form_confirmados') {
		include "modules/confirmados/form.php";
	}
elseif ($_GET['module'] == 'form_desercion') {
		include "modules/desercion/form.php";
	}
elseif ($_GET['module'] == 'form_desercionseguimiento') {
		include "modules/desercionseguimiento/form.php";
	}	
elseif ($_GET['module'] == 'form_desercionreincorporados') {
		include "modules/desercionreincorporados/form.php";
	}
elseif ($_GET['module'] == 'form_desercionrechazados') {
		include "modules/desercionrechazados/form.php";
	}
elseif ($_GET['module'] == 'form_desercionsegseguimiento') {
		include "modules/desercionsegseguimiento/form.php";
	}
	elseif ($_GET['module'] == 'form_consultasweb') {
		include "modules/consultasweb/form.php";
	}
	elseif ($_GET['module'] == 'form_consultaswebres') {
		include "modules/consultaswebres/form.php";
	}



elseif ($_GET['module'] == 'reportes') {
		include "modules/reportes/view.php";
	}

	elseif ($_GET['module'] == 'sedes') {
		include "modules/sedes/view.php";
	}


	
elseif ($_GET['module'] == 'reportetodos') {
	include "modules/reportetodos/view.php";
}

elseif ($_GET['module'] == 'reportes2') {
		include "modules/reportes2/view.php";
	}
elseif ($_GET['module'] == 'reportes_u_sinseguimiento') {
		include "modules/reportes_u_sinseguimiento/view.php";
	}


elseif ($_GET['module'] == 'reporte_interesados_por_sede') {
		include "modules/reporte_interesados_por_sede/view.php";
	}

	elseif ($_GET['module'] == 'user') {
		include "modules/user/view.php";
	}


	elseif ($_GET['module'] == 'form_user') {
		include "modules/user/form.php";
	}

	elseif ($_GET['module'] == 'profile') {
		include "modules/profile/view.php";
		}


	elseif ($_GET['module'] == 'form_profile') {
		include "modules/profile/form.php";
	}

	elseif ($_GET['module'] == 'password') {
		include "modules/password/view.php";
	}
}
?>
