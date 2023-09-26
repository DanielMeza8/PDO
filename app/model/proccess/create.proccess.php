<?php  
    require "../crud.class.php";
    session_start();
    $crud = new Crud();
    $crud->create([
        "nombre" => $_POST["nombre"],
        "telefono" => $_POST["telefono"],
        "email" => $_POST["email"],
        "idCategoria" => $_POST["categoria"],
        "creadopor" => $_SESSION["usuario"]
    ]); 
?>