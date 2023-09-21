<?php 

    session_start();
    $id_session = $_POST['id_session'];
    $_SESSION['id_session'] = $id_session;

    echo $id_session;
?> 