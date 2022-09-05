<?php require_once ('verificarAcesso.php'); ?>

    <?php
        unset( $_SESSION['nome'] );
        header("location:index.php");
    ?>