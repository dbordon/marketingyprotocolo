<?php 
require_once '../../config/database.php';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>No Reincorporados por sede</title>

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
            $sql="SELECT COUNT(*) AS cantidad FROM v_seg_desercion_rechazar";
            $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                    {
                        ?>
                        <?php echo "Cantidad total de No Reincorporados por sede:  ".$row['cantidad']?>
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
            name: "Sede",
            colorByPoint: true,
            data: [
                {
                    
                    name: "Empresariales",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_asuncion 
                    FROM seg_desercion seg, desercion de, sedes s
                    WHERE de.id_sede=s.id_sede
                    AND de.id_sede=3
                    AND seg.cod_desercion=de.cod_desercion
                    AND seg.estado='noincorporado'";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_asuncion']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Empresariales"
                   
                },
                {
                    name: "Asunción derecho informática",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_asunciond
                    FROM seg_desercion seg, desercion de, sedes s
                    WHERE de.id_sede=s.id_sede
                    AND de.id_sede=4
                    AND seg.cod_desercion=de.cod_desercion
                    AND seg.estado='noincorporado'";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_asunciond']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Asunción derecho informática"
                },
                {
                    
                    name: "J. E. Estigarribia",
                    <?php 
                    $sql="SELECT COUNT(*) AS Estigarribia 
                    FROM seg_desercion seg, desercion de, sedes s
                    WHERE de.id_sede=s.id_sede
                    AND de.id_sede=6
                    AND seg.cod_desercion=de.cod_desercion
                    AND seg.estado='noincorporado'";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['Estigarribia']?>,
                    <?php
                    }
                    ?>
                    drilldown: "J. E. Estigarribia"
                },
                {
                    name: "Concepción",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_concepcion 
                    FROM seg_desercion seg, desercion de, sedes s
                    WHERE de.id_sede=s.id_sede
                    AND de.id_sede=7
                    AND seg.cod_desercion=de.cod_desercion
                    AND seg.estado='noincorporado'";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_concepcion']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Concepción"
                },
                {
                    
                    name: "San Pedro",
                    <?php 
                    $sql="SELECT COUNT(*) AS sanpe 
                    FROM seg_desercion seg, desercion de, sedes s
                    WHERE de.id_sede=s.id_sede
                    AND de.id_sede=8
                    AND seg.cod_desercion=de.cod_desercion 
                    AND seg.estado='noincorporado'";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['sanpe']?>,
                    <?php
                    }
                    ?>
                    drilldown: "San Pedro"
                },
                {
                    name: "Luque",
                    <?php 
                    $sql="SELECT COUNT(*) AS luque 
                    FROM seg_desercion seg, desercion de, sedes s
                    WHERE de.id_sede=s.id_sede
                    AND de.id_sede=9
                    AND seg.cod_desercion=de.cod_desercion
                    AND seg.estado='noincorporado'";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['luque']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Luque"
                },
                {
                    
                    name: "San Lorenzo",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_sanlo 
                    FROM seg_desercion seg, desercion de, sedes s
                    WHERE de.id_sede=s.id_sede
                    AND de.id_sede=10
                    AND seg.cod_desercion=de.cod_desercion
                    AND seg.estado='noincorporado'";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_sanlo']?>,
                    <?php
                    }
                    ?>
                    drilldown: "San Lorenzo"
                },
                {
                    
                    name: "Caaguazú",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_caaguazu 
                    FROM seg_desercion seg, desercion de, sedes s
                    WHERE de.id_sede=s.id_sede
                    AND de.id_sede=11
                    AND seg.cod_desercion=de.cod_desercion
                    AND seg.estado='noincorporado'";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_caaguazu']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Caaguazú"
                },
                {
                    
                    name: "Caazapa",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_caazapa
                    FROM seg_desercion seg, desercion de, sedes s
                    WHERE de.id_sede=s.id_sede
                    AND de.id_sede=12
                    AND seg.cod_desercion=de.cod_desercion
                    AND seg.estado='noincorporado'";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_caazapa']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Caazapa"
                },
                {
                    
                    name: "Ciudad del este",
                    <?php 
                    $sql="SELECT COUNT(*) AS cde
                    FROM seg_desercion seg, desercion de, sedes s
                    WHERE de.id_sede=s.id_sede
                    AND de.id_sede=13
                    AND seg.cod_desercion=de.cod_desercion
                    AND seg.estado='noincorporado'";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cde']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Ciudad del este"
                },
                {
                    
                    name: "Caacupe",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_caacupe
                    FROM seg_desercion seg, desercion de, sedes s
                    WHERE de.id_sede=s.id_sede
                    AND de.id_sede=14
                    AND seg.cod_desercion=de.cod_desercion
                    AND seg.estado='noincorporado'";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_caacupe']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Caacupe"
                },
                {
                    
                    name: "Cnel Oviedo",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_cnel
                    FROM seg_desercion seg, desercion de, sedes s
                    WHERE de.id_sede=s.id_sede
                    AND de.id_sede=17
                    AND seg.cod_desercion=de.cod_desercion
                    AND seg.estado='noincorporado'";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_cnel']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Cnel Oviedo"
                },
                {
                    
                    name: "Horqueta",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_horqueta
                    FROM seg_desercion seg, desercion de, sedes s
                    WHERE de.id_sede=s.id_sede
                    AND de.id_sede=18
                    AND seg.cod_desercion=de.cod_desercion
                    AND seg.estado='noincorporado'";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_horqueta']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Horqueta"
                },
                {
                    
                    name: "Encarnación",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_encar
                    FROM seg_desercion seg, desercion de, sedes s
                    WHERE de.id_sede=s.id_sede
                    AND de.id_sede=19
                    AND seg.cod_desercion=de.cod_desercion
                    AND seg.estado='noincorporado'";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_encar']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Encarnación"
                },
                {
                    
                    name: "Ñemby",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_nemby
                    FROM seg_desercion seg, desercion de, sedes s
                    WHERE de.id_sede=s.id_sede
                    AND de.id_sede=20
                    AND seg.cod_desercion=de.cod_desercion
                    AND seg.estado='noincorporado'";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_nemby']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Ñemby"
                },
                {
                    
                    name: "Santa Rosa",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_santarosa
                    FROM seg_desercion seg, desercion de, sedes s
                    WHERE de.id_sede=s.id_sede
                    AND de.id_sede=22
                    AND seg.cod_desercion=de.cod_desercion
                    AND seg.estado='noincorporado'";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_santarosa']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Santa Rosa"
                },
                {
                    
                    name: "Maria Auxiliadora",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_maria
                    FROM seg_desercion seg, desercion de, sedes s
                    WHERE de.id_sede=s.id_sede
                    AND de.id_sede=30
                    AND seg.cod_desercion=de.cod_desercion 
                    AND seg.estado='noincorporado'";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_maria']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Maria Auxiliadora"
                },
                {
                    
                    name: "Hernandarias",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_hernan
                    FROM seg_desercion seg, desercion de, sedes s
                    WHERE de.id_sede=s.id_sede
                    AND de.id_sede=32
                    AND seg.cod_desercion=de.cod_desercion
                    AND seg.estado='noincorporado'";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_hernan']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Hernandarias"
                },
                {
                    
                    name: "Capiata",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_capi
                    FROM seg_desercion seg, desercion de, sedes s
                    WHERE de.id_sede=s.id_sede
                    AND de.id_sede=36
                    AND seg.cod_desercion=de.cod_desercion
                    AND seg.estado='noincorporado'";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_capi']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Capiata"
                },
                {
                    
                    name: "Fernando de la mora",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_fer
                    FROM seg_desercion seg, desercion de, sedes s
                    WHERE de.id_sede=s.id_sede
                    AND de.id_sede=42
                    AND seg.cod_desercion=de.cod_desercion
                    AND seg.estado='noincorporado'";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_fer']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Fernando de la mora"
                },
                {
                    
                    name: "Loma Pyta",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_loma
                    FROM seg_desercion seg, desercion de, sedes s
                    WHERE de.id_sede=s.id_sede
                    AND de.id_sede=46
                    AND seg.cod_desercion=de.cod_desercion 
                    AND seg.estado='noincorporado'";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_loma']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Loma Pyta"
                }
            ]
        }
    ]
});
		</script>
	</body>
</html>
