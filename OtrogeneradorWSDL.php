<?php

/*
 * Usando WSDLDocument.php
 */

require_once("Operaciones.php");
// Ruta a WSDLDocument
require_once("WSDLDocument.php");

$wsdl = new WSDLDocument(
"Operaciones",
"http://localhost/WServ/Clase/EjemploSW/ServidorWSPHPObj.php",
"http://localhost/WServ/Clase/EjemploSW/"
);


header('Content-Type: text/xml');
echo $wsdl->saveXML();