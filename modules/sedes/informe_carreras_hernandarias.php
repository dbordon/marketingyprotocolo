<?php 
require_once '../../config/database.php';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Carreras más solicitadas Sede Hernandarias</title>

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
            $sql="SELECT COUNT(*) AS cantidad FROM interesados WHERE id_sede=32 and anho=2022;";
            $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                    {
                        ?>
                        <?php echo "Cantidad total de postulantes ".$row['cantidad']." <br>Sede Hernandarias"?>
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
                    $sql="SELECT COUNT(*) AS cantidad_ccontables FROM interesados WHERE id_carreras=1 AND id_sede=32 and anho=2022";
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
                    $sql="SELECT COUNT(*) AS cantidad_administrativas FROM interesados WHERE id_carreras=2 AND id_sede=32 and anho=2022;";
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
                    $sql="SELECT COUNT(*) AS cantidad_icomercial FROM interesados WHERE id_carreras=3 AND id_sede=32 and anho=2022 ";
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
                    $sql="SELECT COUNT(*) AS cantidad_Exterior FROM interesados WHERE id_carreras=4 AND id_sede=32 and anho=2022 ";
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
                    $sql="SELECT COUNT(*) AS cantidad_marketing FROM interesados WHERE id_carreras=5 AND id_sede=32 and anho=2022 ";
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
                    $sql="SELECT COUNT(*) AS cantidad_Hotele FROM interesados WHERE id_carreras=6 AND id_sede=32 and anho=2022 ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_Hotele']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Hotelería y Turísmo"
                }
                ,
                {
                    
                    name: "Adm. Agroecologica e Industrial",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_administrcc FROM interesados WHERE id_carreras=7 AND id_sede=32 and anho=2022 ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_administrcc']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Hotelería y Turísmo"
                },
                {
                    name: "Derecho",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_Derecho FROM interesados WHERE id_carreras=8 AND id_sede=32 and anho=2022 ";
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
                    name: "Análisis de Sist. Inf.",
                    <?php 
                    $sql="SELECT COUNT(*) AS agro FROM interesados WHERE id_carreras=9 AND id_sede=32 and anho=2022 ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['agro']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Análisis de Sist. Inf."
                },
                {
                    name: "Ing. Sistemas Inf.",
                    <?php 
                    $sql="SELECT COUNT(*) AS ing FROM interesados WHERE id_carreras=10 AND id_sede=32 and anho=2022 ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['ing']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Ing. Sistemas Inf."
                },
                {
                    
                    name: "Psicologia",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_psico  FROM interesados WHERE id_carreras=11 AND id_sede=32 and anho=2022 ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_psico']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Psicologia"
                },
                {
                    
                    name: "Enfermería",
                    <?php 
                    $sql="SELECT COUNT(*) AS enf  FROM interesados WHERE id_carreras=12 AND id_sede=32 and anho=2022 ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['enf']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Enfermería"
                },
                {
                    
                    name: "C. de la Educación",
                    <?php 
                    $sql="SELECT COUNT(*) AS c_educa FROM interesados WHERE id_carreras=13 AND id_sede=32 and anho=2022 ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['c_educa']?>,
                    <?php
                    }
                    ?>
                    drilldown: "C. de la Educación"
                },
                {
                    
                    name: "Matematicas",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_matt FROM interesados WHERE id_carreras=14 AND id_sede=32 and anho=2022 ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_matt']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Matematicas"
                },
                {
                    
                    name: "E. Parvularia",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_Educac FROM interesados WHERE id_carreras=15 AND id_sede=32 and anho=2022 ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_Educac']?>,
                    <?php
                    }
                    ?>
                    drilldown: "E. Parvularia"
                },
                {
                    
                    name: "Ciencias C.S.",
                    <?php 
                    $sql="SELECT COUNT(*) AS c_sociales FROM interesados WHERE id_carreras=16 AND id_sede=32 and anho=2022 ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['c_sociales']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Ciencias C.S."
                },
                {
                    
                    name: "Derecho-distancia",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_deredis  FROM interesados WHERE id_carreras=20 AND id_sede=32 and anho=2022 ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_deredis']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Derecho-distancia"
                }
            ]
        }
    ]
});
		</script>
	</body>
</html>
