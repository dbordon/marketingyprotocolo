<?php 
require_once '../../config/database.php';

            $s=$_POST['id_sede'];
            $anho=$_POST['anho'];
            $sql="SELECT id_sede, descrip_sede FROM sedes WHERE id_sede=$s";
            $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                    {
                        $sede=utf8_encode($row['descrip_sede']);
                    }
                    ?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Carreras más solicitadas Sede  <?php $sede  ?></title>

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
            $sql="SELECT COUNT(*) AS cantidad FROM interesados WHERE id_sede=$s and anho=$anho and id_otras_carreras is not null";
            $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                    {
                        ?>
                        <?php echo "Cantidad total de postulantes ".$row['cantidad']." <br>Sede $sede"?>
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
                    
                    name: "Agronomía ",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_Agro FROM interesados WHERE id_otras_carreras=0 AND id_sede=$s and anho=$anho";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_Agro']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Agronomía"
                   
                },
                {
                    name: "Arquitectura",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_Arquitectura FROM interesados WHERE id_otras_carreras=1 AND id_sede=$s and anho=$anho;";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_Arquitectura']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Arquitectura"
                },
                {
                    
                    name: "Bioquímica",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_Bioquimica FROM interesados WHERE id_otras_carreras=2 AND id_sede=$s and anho=$anho ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_Bioquimica']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Bioquímica"
                },
                {
                    name: "Ciencias del deporte",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_deporte FROM interesados WHERE id_otras_carreras=3 AND id_sede=$s and anho=$anho ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_deporte']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Ciencias del deporte"
                },
              
                {
                    name: "Criminalística",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_cri FROM interesados WHERE id_otras_carreras=4 AND id_sede=$s and anho=$anho ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_cri']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Criminalística"
                },
                {
                    
                    name: "Diseño de modas",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_moda FROM interesados WHERE id_otras_carreras=5 AND id_sede=$s and anho=$anho ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_moda']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Diseño de modas"
                }
                ,
                {
                    
                    name: "Diseño gráfico",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_dgra FROM interesados WHERE id_otras_carreras=6 AND id_sede=$s and anho=$anho ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_dgra']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Diseño gráfico"
                },
                {
                    name: "Economía",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_eco FROM interesados WHERE id_otras_carreras=7 AND id_sede=$s and anho=$anho ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_eco']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Economía"
                },
                {
                    name: "Fisioterapia y kinesiología.",
                    <?php 
                    $sql="SELECT COUNT(*) AS kine FROM interesados WHERE id_otras_carreras=8 AND id_sede=$s and anho=$anho ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['kine']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Fisioterapia y kinesiología."
                },
                {
                    name: "Gastronomía",
                    <?php 
                    $sql="SELECT COUNT(*) AS gastro FROM interesados WHERE id_otras_carreras=9 AND id_sede=$s and anho=$anho ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['gastro']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Gastronomía"
                },
                {
                    
                    name: "Ingeniería Ambiental",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_ambiental  FROM interesados WHERE id_otras_carreras=10 AND id_sede=$s and anho=$anho ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_ambiental']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Ingeniería Ambiental"
                },
                {
                    
                    name: "Ingeniería Civil",
                    <?php 
                    $sql="SELECT COUNT(*) AS civi  FROM interesados WHERE id_otras_carreras=12 AND id_sede=$s and anho=$anho ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['civi']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Ingeniería Civil"
                },
                {
                    
                    name: "Ingeniería Eléctrica",
                    <?php 
                    $sql="SELECT COUNT(*) AS ing_electrica FROM interesados WHERE id_otras_carreras=13 AND id_sede=$s and anho=$anho ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['ing_electrica']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Ingeniería Eléctrica"
                },
                {
                    
                    name: "Ingeniería Electromecánica",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_matt FROM interesados WHERE id_otras_carreras=14 AND id_sede=$s and anho=$anho ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_matt']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Ingeniería Electromecánica"
                },
                {
                    
                    name: "Ingeniería Electrónica",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_elec FROM interesados WHERE id_otras_carreras=15 AND id_sede=$s and anho=$anho ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_elec']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Ingeniería Electrónica"
                },
                {
                    
                    name: "Ingeniería Industrial",
                    <?php 
                    $sql="SELECT COUNT(*) AS c_sociales FROM interesados WHERE id_otras_carreras=16 AND id_sede=$s and anho=$anho ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['c_sociales']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Ingeniería Industrial"
                },
                {
                    
                    name: "Licenciatura en Ciencias del Deporte",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_DEPO  FROM interesados WHERE id_otras_carreras=17 AND id_sede=$s and anho=$anho ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_DEPO']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Licenciatura en Ciencias del Deporte"
                },
                {
                    
                    name: "Licenciatura en Comunicación Audiovisual",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_COMUAUDI  FROM interesados WHERE id_otras_carreras=18 AND id_sede=$s and anho=$anho ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_COMUAUDI']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Licenciatura en Comunicación Audiovisual"
                },
                {
                    
                    name: "Licenciatura en Diseño de Interiores",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_DIINTE  FROM interesados WHERE id_otras_carreras=19 AND id_sede=$s and anho=$anho ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_DIINTE']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Licenciatura en Diseño de Interiores"
                },
                {
                    
                    name: "Licenciatura en Diseño Industrial",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_DISEINDU  FROM interesados WHERE id_otras_carreras=20 AND id_sede=$s and anho=$anho ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_DISEINDU']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Licenciatura en Diseño Industrial"
                },
                {
                    
                    name: "Licenciatura en Diseño y Comunicación Gráfica",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_COMUNICGRA  FROM interesados WHERE id_otras_carreras=21 AND id_sede=$s and anho=$anho ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_COMUNICGRA']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Licenciatura en Diseño y Comunicación Gráfica"
                },
                {
                    
                    name: "Licenciatura en Farmacia",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_FAARMA  FROM interesados WHERE id_otras_carreras=22 AND id_sede=$s and anho=$anho ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_FAARMA']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Licenciatura en Farmacia"
                },
                {
                    
                    name: "Licenciatura en Kinesiología y Fisioterapia",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_KINE  FROM interesados WHERE id_otras_carreras=23 AND id_sede=$s and anho=$anho ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_KINE']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Licenciatura en Kinesiología y Fisioterapia"
                },
                {
                    
                    name: "Licenciatura en Música",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_MUSICA  FROM interesados WHERE id_otras_carreras=24 AND id_sede=$s and anho=$anho ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_MUSICA']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Licenciatura en Música"
                },
                {
                    
                    name: "Licenciatura en Obstetricia",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_OBTETRI  FROM interesados WHERE id_otras_carreras=25 AND id_sede=$s and anho=$anho ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_OBTETRI']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Licenciatura en Obstetricia"
                },
                {
                    
                    name: "Licenciatura en Psicopedagogía",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_PEDA  FROM interesados WHERE id_otras_carreras=26 AND id_sede=$s and anho=$anho ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_PEDA']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Licenciatura en Psicopedagogía"
                },
                {
                    
                    name: "Licenciatura en Radiología e Imagen",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_RADIO  FROM interesados WHERE id_otras_carreras=27 AND id_sede=$s and anho=$anho ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_RADIO']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Licenciatura en Radiología e Imagen"
                },
                {
                    
                    name: "Medicina",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_medicina  FROM interesados WHERE id_otras_carreras=28 AND id_sede=$s and anho=$anho ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_medicina']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Medicina"
                },
                {
                    
                    name: "Odontología",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_ondoto  FROM interesados WHERE id_otras_carreras=29 AND id_sede=$s and anho=$anho ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_ondoto']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Odontología"
                },
                {
                    
                    name: "Otras",
                    <?php 
                    $sql="SELECT COUNT(*) AS cantidad_otras  FROM interesados WHERE id_otras_carreras=30 AND id_sede=$s and anho=$anho ";
                    $resultado = mysqli_query($mysqli, $sql);
                    while($row = mysqli_fetch_array($resultado))
                        {
                    ?>

                    y: <?php echo $row['cantidad_otras']?>,
                    <?php
                    }
                    ?>
                    drilldown: "Otras"
                }
            ]
        }
    ]
});
		</script>
	</body>
</html>
