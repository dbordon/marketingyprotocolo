<?php 
require_once '../../config/database.php';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Carreras más desertadas Sede San Lorenzo</title>

		<style type="text/css">

		</style>    
	</head>
	<body>
    <script src="../../code/highcharts.js"></script>
<script src="../../code/modules/series-label.js"></script>
<script src="../../code/modules/exporting.js"></script>
<script src="../../code/modules/export-data.js"></script>

<div id="container" style="min-width: 310px; max-width: 600px; height: 300px; margin: 0 auto"></div>

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
            $sql="SELECT COUNT(*) AS cantidad FROM desercion WHERE id_sede=10 AND estado !='borrado';";
            $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                    {
                        ?>
                        <?php echo "Cantidad total de deserción ".$row['cantidad']." <br>Sede San Lorenzo"?>
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
            name: "Carrera",
            colorByPoint: true,
            data: [
                {
                    
                    name: "Ciencias Contables",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_ccontables FROM desercion WHERE id_carreras=1 AND id_sede=10 AND estado !='borrado';";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_ccontables']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Ciencias Contables"
                   
                },
                {
                    name: "Ciencias Administrativas",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_administrativas FROM desercion WHERE id_carreras=2 AND id_sede=10 AND estado !='borrado';";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_administrativas']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Ciencias Administrativas"
                },
                {
                    
                    name: "Ing Comercial",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_icomercial FROM desercion WHERE id_carreras=3 AND id_sede=10 AND estado !='borrado';";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_icomercial']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Ing Comercial"
                },
                {
                    name: "Comercio Exterior",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_Exterior FROM desercion WHERE id_carreras=4 AND id_sede=10 AND estado !='borrado';";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_Exterior']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Comercio Exterior"
                },
              
                {
                    name: "Marketing",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_marketing FROM desercion WHERE id_carreras=5 AND id_sede=10 AND estado !='borrado';";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_marketing']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Marketing"
                },
                {
                    
                    name: "Hotelería y Turísmo",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_Hotele FROM desercion WHERE id_carreras=6 AND id_sede=10 AND estado !='borrado';";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_Hotele']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Hotelería y Turísmo"
                },
                {
                    
                    name: "Derecho",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_Derecho FROM desercion WHERE id_carreras=8 AND id_sede=10 AND estado !='borrado';";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_Derecho']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Derecho"
                },
                {
                    
                    name: "Análisis de sistemas informáticos",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_Analisis  FROM desercion WHERE id_carreras=9 AND id_sede=10 AND estado !='borrado';";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_Analisis']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Análisis de sistemas informáticos"
                },
                {
                    
                    name: "Ing en sistemas informáticos",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_ingAnalisis  FROM desercion WHERE id_carreras=10 AND id_sede=10 AND estado !='borrado';";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_ingAnalisis']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Ing en sistemas informáticos"
                },
                {
                    
                    name: "Psicología",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_Psicologia FROM desercion WHERE id_carreras=11 AND id_sede=10 AND estado !='borrado';";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_Psicologia']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Psicología"
                },
                {
                    
                    name: "Enfermería",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_Enfermer FROM desercion WHERE id_carreras=12 AND id_sede=10 AND estado !='borrado';";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_Enfermer']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Enfermería"
                },
                {
                    
                    name: "Ciencias de la Educación",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_Educac FROM desercion WHERE id_carreras=13 AND id_sede=10 AND estado !='borrado';";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_Educac']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Ciencias de la Educación"
                },
                {
                    
                    name: "Matemáticas",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_Matematicas FROM desercion WHERE id_carreras=14 AND id_sede=10 AND estado !='borrado';";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_Matematicas']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Matemáticas"
                },
                {
                    
                    name: "Educación Parvularia",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_Parvularia FROM desercion WHERE id_carreras=15 AND id_sede=10 AND estado !='borrado';";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_Parvularia']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Educación Parvularia"
                },
                {
                    
                    name: "Ciencias de la comunicación social",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_comunicaci  FROM desercion WHERE id_carreras=16 AND id_sede=10 AND estado !='borrado';";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_comunicaci']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Ciencias de la comunicación social"
                },
                {
                    
                    name: "Postgrados",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_otro FROM desercion WHERE id_carreras=17 AND id_sede=10 AND estado !='borrado';";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_otro']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Postgrados"
                },
               
                
            ]
        }
    ]
});
		</script>
	</body>
</html>
