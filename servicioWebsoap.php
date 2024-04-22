<?php

$options = array('uri' => 'http://localhost/WServ/Clase/EjemploSW/');
$server = new SoapServer(null, $options);


/**
 * 
 * @param string $parametro
 * @return string
 */
function enviar_respuesta($parametro) {
    return 'Hola, esto lo envia el Servidor sin nusoap: ' . $parametro;
}

/**
 * 
 * @param string $inputString1
 * @param string $inputString2
 * @return array
 */
function echoTwoStrings($inputString1, $inputString2)
{
    
    return array("cadena 1" => $inputString1,
                 "cadena 2" => $inputString2);
}

/**
 * 
 * @param string $inputString1
 * @param string $inputString2
 * @return string
 */
function echoTwoStringsJSON($inputString1, $inputString2)
{
    return json_encode(array("cadena 1" => $inputString1,
                 "cadena 2" => $inputString2));
}


$server->addFunction("enviar_respuesta");
$server->addFunction("echoTwoStrings");
$server->addFunction("echoTwoStringsJSON");

//$server->addFunction(SOAP_FUNCTIONS_ALL); -->Optativo.

//echo "Este servidor SOAP puede manejar las siguientes funciones: ";
//$functions = $server->getFunctions();
//foreach ($functions as $func) {
//    echo $func . "\n";
//} Si descomentamos esto no funciona el cliente, es para ver lo que maneja el servidor.

//Al final siempre.
$server->handle();
 
