<?php

session_start();

include "../crud.class.php";

$email = $_POST['email'];
$password = $_POST['password'];


$crud = new Crud();

$crud->login($email, $password);
// if ($crud->login($email, $password)) {
//     header("location:./entrando.php");
// } else {
//     echo "No se pudo logear";
// }


?>