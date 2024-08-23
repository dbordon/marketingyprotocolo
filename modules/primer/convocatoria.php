<?php
function datos(){
    
	//$url = 'http://201.222.51.126:8080/uticmovil/rest/alumnos/convocatorias';

$url = 'http://192.167.42.43:8080/uticmovil/rest/alumnos/convocatorias';
 
//inicializamos el objeto CUrl
$ch = curl_init($url);
 
//el json simulamos una petición de un login
$jsonData = array(
    "where" => "and ano_descri::integer=".$_REQUEST['ano']." and id_sede = ".$_REQUEST['id_sede']." and id_curso in(1) order by nombre_carre", //código fijo	
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
                                <div class="form-group">
                                    <label class="col-md-2 col-sm-2 col-lg-2 control-label">Sede: </label>
                                    <div class="col-md-5 col-sm-5 col-lg-5">
                                            <?php $valores = json_decode(datos(),true);?>                                     
                                        <input type="text" class="form-control"  value="<?php echo $valores[0]['sed_nombre'];; ?>" readonly="">
                                    </div>                                 
                                </div>

                                <div class="form-group">
                                    <label class="col-md-2 col-sm-2 col-lg-2 control-label">Carrera: </label>
                                    <div class="col-md-5 col-sm-5 col-lg-5">
                                        <select class="form-control select2" name="carre" required="" id="carre" onchange="cursos()">
                                            <?php
                                            $id=0;
                                                    foreach($valores as $r) { 
                                                        if($r['id_carre']!=$id){                                                              
                                                    ?>                                                    
                                                    <option value="<?php echo $r['id_carre'];?>"><?php echo $r['nombre_carre'];?></option>
                                            <?php            
                                                 } 
                                                $id = $r['id_carre']; 
                                                }                                   
                                            ?>
                                        </select>
                                    </div>                                 
                                </div>
                                <div class="form-group" id="div_cursos">
                              
                                </div>
                                <div class="form-group" id="div_turnos">
                              
                                </div>
                                <div class="form-group" id="div_modalidades">
                              
                                </div>
                                <div class="form-group" id="div_convocatorias">
                              
                                </div>