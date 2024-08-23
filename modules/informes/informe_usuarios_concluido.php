<?php 
require_once '../../config/database.php';
?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Estadísticas de Usuarios</title>
        <link rel="shortcut icon" href="../../assets/img/favicon.ico" />

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
            $sql="SELECT COUNT(*) as cantidad FROM interesados WHERE estado='concluido' and anho=2023";
            $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                    {
                        ?>
                        <?php echo "Estadísticas de Usuarios, Cantidad Total de Confirmados:  ".$row['cantidad']?>
                        <?php echo "<br>"?>
                        <?php  $time = time(); ?>
                        <?php  echo 'Fecha : '.date("d-m-Y H:i:s", $time);?>
                        <?php echo "<br>"?>
                        <?php echo "<strong>Convocatoria 2023</strong>"?>
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
                    name: "Erica Benítez",
                    <?php 
                    $sql="SELECT COUNT(*) AS er FROM interesados WHERE id_user=67 AND estado='concluido' and anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['er']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Erica Benítez"
                },
                {
                    
                    name: "César Ferreira",
                    <?php 
                    $sql="SELECT COUNT(*) AS ces FROM interesados WHERE id_user=86 AND estado='concluido' and anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['ces']?>,
                    <?php
                    }
                    ?>
                    drilldown: "César Ferreira"
                },
                {
                    
                    name: "Arnaldo Torres",
                    <?php 
                    $sql="SELECT COUNT(*) AS ate FROM interesados WHERE id_user=128 AND estado='concluido' and anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['ate']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Arnaldo Torres"
                },                            
                {
                    
                    name: "Ximena Miranda",
                    <?php 
                    $sql="SELECT COUNT(*) AS xi FROM interesados WHERE id_user=130 AND estado='concluido' and anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['xi']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Ximena Miranda"
                },                
                {
                    
                    name: "Alan Martínez",
                    <?php 
                    $sql="SELECT COUNT(*) AS ate FROM interesados WHERE id_user=129 AND estado='concluido' and anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['ate']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Alan Martínez"
                },
                {
                    
                    name: "Derecho Informática",
                    <?php 
                    $sql="SELECT COUNT(*) AS info FROM interesados WHERE id_user=107 AND estado='concluido' and anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['info']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Derecho Informática"
                }
                ,
                {
                    
                    name: "Sede Empresariales",
                    <?php 
                    $sql="SELECT COUNT(*) AS empres FROM interesados WHERE id_user=108 AND estado='concluido' AND anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['empres']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Sede Empresariales"
                }
                ,
                {
                    name: "Juan E. Estigarribia",
                    <?php 
                    $sql="SELECT COUNT(*) AS jee FROM interesados WHERE id_user=109 AND estado='concluido' AND anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['jee']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Juan E. Estigarribia"
                }
                ,
                {
                    name: "Sede Concepción",
                    <?php 
                    $sql="SELECT COUNT(*) AS conc FROM interesados WHERE id_user=110 AND estado='concluido' AND anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['conc']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Sede Concepción"
                }
                ,
                {
                    name: "Sede San Pedro",
                    <?php 
                    $sql="SELECT COUNT(*) AS sp FROM interesados WHERE id_user=111 AND estado='concluido' AND anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['sp']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Sede San Pedro"
                }
                ,
                {
                    name: "Sede Luque",
                    <?php 
                    $sql="SELECT COUNT(*) AS luq FROM interesados WHERE id_user=112 AND estado='concluido' AND anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['luq']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Sede Luque"
                }
                ,
                {
                    name: "San Lorenzo",
                    <?php 
                    $sql="SELECT COUNT(*) AS sl FROM interesados WHERE id_user=113 AND estado='concluido' AND anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['sl']?>,
                    <?php
                    }
                    ?>
                    drilldown: "San Lorenzo"
                }
                ,
                {
                    name: "Sede Caaguazú",
                    <?php 
                    $sql="SELECT COUNT(*) AS caag FROM interesados WHERE id_user=114 AND estado='concluido' AND anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['caag']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Sede Caaguazú"
                }
                ,
                {
                    name: "Sede Caazapá",
                    <?php 
                    $sql="SELECT COUNT(*) AS caaz FROM interesados WHERE id_user=115 AND estado='concluido' AND anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['caaz']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Sede Caazapá"
                }
                ,
                {
                    name: "Sede Ciudad del este",
                    <?php 
                    $sql="SELECT COUNT(*) AS cde FROM interesados WHERE id_user=116 AND estado='concluido' AND anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cde']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Sede Ciudad del este"
                }
                ,
                {
                    name: "Sede Caacupé",
                    <?php 
                    $sql="SELECT COUNT(*) AS caac FROM interesados WHERE id_user=117 AND estado='concluido' AND anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['caac']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Sede Caacupé"
                }
                ,
                {
                    name: "Sede Cnel Oviedo",
                    <?php 
                    $sql="SELECT COUNT(*) AS ov FROM interesados WHERE id_user=118 AND estado='concluido' AND anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['ov']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Sede Cnel Oviedo"
                }
                ,
                {
                    name: "Sede Horqueta",
                    <?php 
                    $sql="SELECT COUNT(*) AS hor FROM interesados WHERE id_user=119 AND estado='concluido' AND anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['hor']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Sede Horqueta"
                }
                ,
                {
                    name: "Sede Encarnación",
                    <?php 
                    $sql="SELECT COUNT(*) AS encar FROM interesados WHERE id_user=120 AND estado='concluido' AND anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['encar']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Sede Encarnación"
                }
                ,
                {
                    name: "Sede Ñemby",
                    <?php 
                    $sql="SELECT COUNT(*) AS nem FROM interesados WHERE id_user=121 AND estado='concluido' AND anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['nem']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Sede Ñemby"
                }
                ,
                {
                    name: "Sede Santa Rosa",
                    <?php 
                    $sql="SELECT COUNT(*) AS sr FROM interesados WHERE id_user=122 AND estado='concluido' AND anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['sr']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Sede Santa Rosa"
                }
                ,
                {
                    name: "Sede María Aux.",
                    <?php 
                    $sql="SELECT COUNT(*) AS ma FROM interesados WHERE id_user=123 AND estado='concluido' AND anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['ma']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Sede María Aux."
                }
                ,
                {
                    name: "Sede Hernandarias",
                    <?php 
                    $sql="SELECT COUNT(*) AS her FROM interesados WHERE id_user=124 AND estado='concluido' AND anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['her']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Sede Hernandarias"
                }
                ,
                {
                    name: "Sede Capiatá",
                    <?php 
                    $sql="SELECT COUNT(*) AS ca FROM interesados WHERE id_user=125 AND estado='concluido' AND anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['ca']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Sede Capiatá"
                }
                ,
                {
                    name: "Sede Fernando de la Mora",
                    <?php 
                    $sql="SELECT COUNT(*) AS fer FROM interesados WHERE id_user=126 AND estado='concluido' AND anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['fer']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Sede Fernando de la Mora"
                }
                ,
                {
                    name: "Sede Loma Pyta",
                    <?php 
                    $sql="SELECT COUNT(*) AS lp FROM interesados WHERE id_user=127 AND estado='concluido' AND anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['lp']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Sede Loma Pyta"
                }
                ,
                {
                    name: "José Troche",
                    <?php 
                    $sql="SELECT COUNT(*) AS atorres FROM interesados WHERE id_user=135 AND estado='concluido' AND anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['atorres']?>,
                    <?php
                    }
                    ?>
                    drilldown: "José Troche"
                },
                {
                    name: "Lic. Yeruti Vázquez",
                    <?php 
                    $sql="SELECT COUNT(*) AS amar FROM interesados WHERE id_user=136 AND estado='concluido' AND anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['amar']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Lic. Yeruti Vázquez"
                },
                {
                    name: "Vanesa Da Silva",
                    <?php 
                    $sql="SELECT COUNT(*) AS xm FROM interesados WHERE id_user=137 AND estado='concluido' AND anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['xm']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Vanesa Da Silva"
                },
                {
                    name: "Fabrizio Talavera",
                    <?php 
                    $sql="SELECT COUNT(*) AS tobmedi FROM interesados WHERE id_user=138 AND estado='concluido' AND anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['tobmedi']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Fabrizio Talavera"
                },
                {
                    name: "Gabriela Jara",
                    <?php 
                    $sql="SELECT COUNT(*) AS erd FROM interesados WHERE id_user=139 AND estado='concluido' AND anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['erd']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Gabriela Jara"
                },
                {
                    name: "Fabrizio Talavera 2",
                    <?php 
                    $sql="SELECT COUNT(*) AS patov FROM interesados WHERE id_user=140 AND estado='concluido' AND anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['patov']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Fabrizio Talavera 2"
                }
                ,
                {
                    name: "Fernando López",
                    <?php 
                    $sql="SELECT COUNT(*) AS flop FROM interesados WHERE id_user=141 AND estado='concluido' AND anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['flop']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Fernando López"
                }
                ,
                {
                    name: "Pasante 1",
                    <?php 
                    $sql="SELECT COUNT(*) AS pasante FROM interesados WHERE id_user=142 AND estado='concluido' AND anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['pasante']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Pasante 1"
                },
                {
                    name: "Pasante 2",
                    <?php 
                    $sql="SELECT COUNT(*) AS pasante2 FROM interesados WHERE id_user=143 AND estado='concluido' AND anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['pasante2']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Pasante 2"
                }
                ,
                {
                    name: "Lujan Ojeda",
                    <?php 
                    $sql="SELECT COUNT(*) AS lojeda FROM interesados WHERE id_user=144 AND estado='concluido' AND anho=2023";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['lojeda']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Lujan Ojeda"
                }
                

            ]
        }
    ]
});
		</script>
	</body>
</html>
