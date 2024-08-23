<?php 
require_once '../../config/database.php';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Estadisticas de Usuarios</title>

		<style type="text/css">

		</style>
	</head>
	<body>
    <script src="../../code/highcharts.js"></script>
<script src="../../code/modules/series-label.js"></script>
<script src="../../code/modules/exporting.js"></script>
<script src="../../code/modules/export-data.js"></script>

<div id="container" style="min-width: 310px; max-width: 600px; height: 400px; margin: 0 auto"></div>

<!-- Data from www.netmarketshare.com. Select Browsers => Desktop share by version. Download as tsv. -->
<pre id="tsv" style="display:none"></pre>



		<script type="text/javascript">
// Create the chart
Highcharts.chart('container', {
    chart: {
        type: 'pie'
    },
    title: {
        text: '<?php
            $sql="SELECT COUNT(*) as cantidad FROM interesados WHERE estado='concluido'";
            $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                    {
                        ?>
                        <?php echo "Estadisticas de Usuarios, Cantidad Total de Confirmados:  ".$row['cantidad']?>
                        <?php echo "<br>"?>
                        <?php  $time = time(); ?>
                        <?php  echo 'Fecha : '.date("d-m-Y H:i:s", $time);?>
                        <?php echo "<br>"?>
                        <?php
                    }
                    ?>'
        
    },
    subtitle: {
        text: ' <a href="" target=""></a>'
    },
    plotOptions: {
        series: {
            dataLabels: {
                enabled: true,
                format: '{point.name}: {point.y:1f}'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:2f}</b> de total<br/>'
    },

    series: [
        {
            name: "Usuario:",
            colorByPoint: true,
            data: [
                {
                    
                    name: "Demesio Cabrera",
                    <?php 
                    $sql="SELECT COUNT(*) AS deme FROM usuario_interesado WHERE id_user=49 AND estado='concluido'";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['deme']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Demesio Cabrera"
                   
                },
                {
                    name: "Fernando Lopez",
                    <?php 
                    $sql="SELECT COUNT(*) AS fer FROM usuario_interesado WHERE id_user=56 AND estado='concluido'";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['fer']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Fernando Lopez"
                },
                {
                    
                    name: "Lujan Rojas",
                    <?php 
                    $sql="SELECT COUNT(*) AS luj FROM usuario_interesado WHERE id_user=57 AND estado='concluido'";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['luj']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Lujan Rojas"
                }                ,
                {
                    
                    name: "Rudy Gomez",
                    <?php 
                    $sql="SELECT COUNT(*) AS rudy FROM usuario_interesado WHERE id_user=3 AND estado='concluido'";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['rudy']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Rudy Gomez"
                }
            ]
        }
    ]
});
		</script>
	</body>
</html>
