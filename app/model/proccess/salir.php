<?php 

    session_start();
    session_destroy();
    // header("location:../../../home");
?>
    <script>
        alert("Sesion cerrada correctamente");
        window.location.assign("../../../home");
    </script>

