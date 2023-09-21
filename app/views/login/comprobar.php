
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobar</title>
</head>
<body> -->
<?php
        session_start();
        if(isset($_SESSION['id_session'])){
    ?>

        <script>
            alert(`El ID se su Sesion es: <?php echo $_SESSION['id_session']?>`);
            window.location.assign('./read');
        </script>

    <?php
        } else {
    ?>
        <script>
            alert(`No tiene Sesion`);
            window.location.assign('./home');
        </script>
    
    <?php 
        }
    ?>
<!-- </body>
</html> -->
