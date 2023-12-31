<?php 
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php require './app/views/includes/metatags.php' ?>
</head>
<body> 
    <?php
        require "./app/model/crud.class.php";
        $crud = new Crud();
        if(isset($_GET["vista"])){
            switch($_GET["vista"]){
                case 'home':
                    include "./app/views/home.php";
                    break;
                case 'read':
                    if (isset($_SESSION['usuario'])) {
                        $contactos = $crud->read($_SESSION['usuario']);
                        include "./app/views/read.php";
                    }else{
                        header("location:../home");
                    } 
                    break;
                case 'readCategorias':
                    if (isset($_SESSION['usuario'])) {
                        $categorias = $crud->readCategorias();
                        include "./app/views/categorias/read.php";
                    }else{
                        header("location: ./home");
                    } 
                    break;
                case 'update':
                    if (isset($_SESSION['usuario'])) {
                        $contacto = $crud->show($_GET["id"]);
                        include "./app/views/update.php";
                    }else{
                        header("location: ./home");
                    } 
                    break;
                case 'create':
                    if (isset($_SESSION['usuario'])) {
                        $categorias = $crud->readCategorias();
                        include "./app/views/create.php";
                    }else{
                        header("location: ./home");
                    } 
                    break;
                case 'delete':
                    if (isset($_SESSION['usuario'])) {
                        include "./app/views/delete.php";
                    }else{
                        header("location: ./home");
                    } 
                    break;
                case 'categoriasAgregar':
                    if (isset($_SESSION['usuario'])) {
                        include "./app/views/categorias.agregar.php";
                    }else{
                        header("location: ./home");
                    } 
                    break;
                case 'categoriasActualizar':
                    if (isset($_SESSION['usuario'])) {
                        $categorias = $crud->showCategoria($_GET["id"]);
                        include "./app/views/categorias/update.php";
                    }else{
                        header("location: ./home");
                    } 
                    break;
                case 'login':
                    include "./app/views/login.php";
                    break;
                case 'registro':
                    include "./app/views/registro.php";
                    break;
                case 'comprobarSesion':
                    include "./app/views/login/comprobar.php";
                    break;
                case 'salirSesion':
                    include "./app/controller/login/close.php";
                    break;
                default:
                    header("location: ./read");
                    break;
            }
        }else{
            header("location: ./home");
        }
    ?>
   

    <?php require './app/views/includes/scripts.php' ?>
</body>
</html>