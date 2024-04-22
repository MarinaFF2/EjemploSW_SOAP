<?php

//Clase que implementa el servidor del webservice
require_once('Operaciones.php');

$options = array('uri' => 'http://localhost/WServ/Clase/EjemploSW/');
$SOAPServer = new SoapServer(null, $options);
 
//asigna la clase al servicio
$SOAPServer->setClass('Operaciones');
 
//atiende los llamados al webservice
$SOAPServer->handle();

