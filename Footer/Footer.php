<?php
    session_start();
    if (isset($_SESSION["nome"])) echo "valid";
    else echo "invalid";
?>