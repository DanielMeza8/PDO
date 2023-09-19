<?php  
    require "../../crud.class.php";

    $crud = new Crud();
    $crud->createCategoria(
        [
            "nombre" => $_POST["nombre"],
            "descripcion" => $_POST["descripcion"]
        ]
    )
?>