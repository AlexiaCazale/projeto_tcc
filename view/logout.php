<?php
if(!isset($_SESSION)){
    session_start();
}
    unset($_SESSION["id"]);
    unset($_SESSION["nome"]);
    header("location:index.php");
    die();
?>