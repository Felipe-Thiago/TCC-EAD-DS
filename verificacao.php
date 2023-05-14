<?php
session_start();
if(!$_SESSION['txtUsuario']){
    header('Location: index.php');
    exit();
}