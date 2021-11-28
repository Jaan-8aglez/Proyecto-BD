<?php

// Muestra los errores de php en el navegador
ini_set('display_errors', 1);

ini_set('display_startup_errors', 1);

error_reporting(E_ALL);


require_once "modelos/President.php";

$president =new President();

$received_data = json_decode(file_get_contents("php://input"), true);
$punto_geo=isset($_POST['punto_geo']);
$data = array();

// Muestra la lista de presidentes
if($_GET["op"] == 'mostrar'){
    $var=$president->listar();

    while ($row=$var->fetch_object()){
        $data[] = $row;
    }
    echo json_encode($data);
    
}

// Elimina el presidente seleccionado
if($_GET["op"] == 'delete'){

    $president->eliminar($received_data['punto_geo']);

    $output = array(
        'message' => 'Eliminado'
        );
        
    echo json_encode($output);
    
}