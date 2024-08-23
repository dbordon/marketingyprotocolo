<?php 
require_once '../../config/database.php';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Motivos de deserción</title>

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
            $sql="SELECT COUNT(*) AS cantidad FROM seg_desercion";
            $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                    {
                        ?>
                        <?php echo "Cantidad total de deserción:  ".$row['cantidad']?>
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
            name: "Motivo",
            colorByPoint: true,
            data: [
                {
                    
                    name: "Económico",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_economico FROM seg_desercion WHERE motivo='ECONOMICO'";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_economico']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Económico"
                   
                },
                {
                    name: "No le gusta la carrera",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_nlglc FROM seg_desercion WHERE motivo='NO LE GUSTA LA CARRERA'";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_nlglc']?>,
                    <?php
                    }
                    ?>
                    drilldown: "No le gusta la carrera"
                },
                {
                    
                    name: "Sistema de enseñanza virtual",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_sev FROM seg_desercion WHERE motivo='SISTEMA DE ENSENANZA VIRTUAL'";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_sev']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Sistema de enseñanza virtual"
                },
                {
                    name: "Traslado de sede",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_tds FROM seg_desercion WHERE motivo='TRASLADO A OTRA SEDE'";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_tds']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Traslado de sede"
                }
                ,
                {
                    name: "Otros motivos",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_om FROM seg_desercion WHERE motivo='OTROS MOTIVOS'";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_om']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Otros motivos"
                }
            ]
        }
    ]
});
		</script>
	</body>
</html>
