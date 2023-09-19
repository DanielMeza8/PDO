<?php  
    require "../../crud.class.php";

    $crud = new Crud();
    $crud->updateCategoria(
        [
            "id" => $_POST["id"],
            "nombre" => $_POST["nombre"],
            "descripcion" => $_POST["descripcion"]
        ]
    )
?>