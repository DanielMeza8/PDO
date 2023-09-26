<?php

    require "../crud.class.php";

    $email = $_POST["email"];
    $pass = $_POST["password"];

    $crud = new Crud();


    if ($crud->registro($email, $pass)) {
?>        
        <script>
            alert("EL registro se guardo correctamente");
            window.location.assign("../../../login");
        </script>
<?php    
    } else {
?>

        <script>
            alert("Ocurrio un error, volver a intentar");
            window.location.assign("../../../../registro");
        </script>

<?php    
    } 
?>


