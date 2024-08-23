    <?php
function datos(){
//$url = 'http://201.222.51.126:8080/uticmovil/rest/alumnos/convocatorias';
$url = 'http://192.167.42.43:8080/uticmovil/rest/alumnos/convocatorias';

 
//inicializamos el objeto CUrl
$ch = curl_init($url);
 
//el json simulamos una petición de un login
$jsonData = array(
    'where' => 'and ano_descri::integer='.$_REQUEST['ano'].' and id_sede = '.$_REQUEST['id_sede'].' and id_carre ='.$_REQUEST['id_carre'].' and id_curso ='.$_REQUEST['id_curso'].' order by id_turno', //código fijo
);
//creamos el json a partir de nuestro arreglo
$jsonDataEncoded = json_encode($jsonData);
 
//Indicamos que nuestra petición sera Post
curl_setopt($ch, CURLOPT_POST, 1);
 
 //para que la peticion no imprima el resultado como un echo comun, y podamos manipularlo
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 
//Adjuntamos el json a nuestra petición
curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);
 
//Agregamos los encabezados del contenido
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
 
 //ignorar el certificado, servidor de desarrollo
          //utilicen estas dos lineas si su petición es tipo https y estan en servidor de desarrollo
 //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
         //curl_setopt($process, CURLOPT_SSL_VERIFYHOST, FALSE);
 
//Ejecutamos la petición
return $result = curl_exec($ch);
curl_close($ch);
}

//echo print_r(json_decode($result,true))
        //echo $dato['nro_convo'];           
    ?>

                                    <label class="col-md-2 col-sm-2 col-lg-2 control-label">Turno: </label>
                                    <div class="col-md-5 col-sm-5 col-lg-5">
                                        <select class="form-control select2" name="turno" required="" id="turno" onchange="modalidades()">
                                            <?php $valores = json_decode(datos(),true);
                                            $id=0;
                                                    foreach($valores as $r) { 
                                                        if($r['id_turno']!=$id){                                                              
                                                    ?>                                                    
                                                    <option value="<?php echo $r['id_turno'];?>"><?php echo $r['tur_descri'];?></option>
                                            <?php            
                                                 } 
                                                $id = $r['id_turno']; 
                                                }                                   
                                            ?>
                                        </select>
                                    </div>                                 



 
