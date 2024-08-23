<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Informe Cómo nos conociste</title>
    <link rel="shortcut icon" href="../../assets/img/favicon.ico" />

		<style type="text/css">
#container {
  height: 400px; 
}

.highcharts-figure, .highcharts-data-table table {
  min-width: 310px; 
  max-width: 800px;
  margin: 1em auto;
}

.highcharts-data-table table {
  font-family: Verdana, sans-serif;
  border-collapse: collapse;
  border: 1px solid #EBEBEB;
  margin: 10px auto;
  text-align: center;
  width: 100%;
  max-width: 500px;
}
.highcharts-data-table caption {
  padding: 1em 0;
  font-size: 1.2em;
  color: #555;
}
.highcharts-data-table th {
  font-weight: 600;
  padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
  padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
  background: #f8f8f8;
}
.highcharts-data-table tr:hover {
  background: #f1f7ff;
}

		</style>
	</head>
	<body>
<script src="../../code/highcharts.js"></script>
<script src="../../code/highcharts-3d.js"></script>
<script src="../../code/modules/exporting.js"></script>
<script src="../../code/modules/export-data.js"></script>
<script src="../../code/modules/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="container"></div>
    <p class="highcharts-description">
    Inscriptos Webinars SEDES
    </p>
</figure>

<?php 
include '../../config/database.php';
 
$contar = mysqli_query($mysqli, "SELECT COUNT(id_interesado) AS cantidad 
FROM interesados 
WHERE anho = '2022'");
 while($dato = mysqli_fetch_assoc($contar)) { 
  $resultadoS = $dato['cantidad'];                           
 }

$query = mysqli_query($mysqli, "SELECT descrip_medio, COUNT(m.id_medio) AS cantidad
FROM medio_contacto m
INNER JOIN interesados i ON m.id_medio=i.id_medio
WHERE anho = '2022'
GROUP BY m.id_medio DESC");
?> 

		<script type="text/javascript">
Highcharts.chart('container', {
    chart: {
        type: 'pie',
        options3d: {
            enabled: true,
            alpha: 45
        }
    },
    title: {
        text: '¿Cómo nos conociste? 2022'
    },
    subtitle: {
        text: '<?php echo 'Cantidad de Interesados: '.$resultadoS; ?> '
    },
    plotOptions: {
        pie: {
            innerSize: 100,
            depth: 45
        }
    },
    series: [{
        name: 'Cantidad de participantes',
        data: [
                <?php while($d = mysqli_fetch_assoc($query)) {                            
                  echo "['".utf8_encode($d['descrip_medio'])."', ".$d['cantidad']."],";        
                  } 
                ?>
              ]
    }]
});
		</script>
	</body>
</html>
