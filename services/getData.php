<?php
require_once('../repositories/DataRequest.php');

$function = $_POST['function'];

$function = 'dados' . $function;

$data = new DataRequest;

$response = $data->$function();

echo json_encode($response);

//$data->dadosClientes();