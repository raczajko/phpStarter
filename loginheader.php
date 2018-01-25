<?php
//PONER COMO CABECERA en TODAS las paginas, como en index.php
$lte_v = 'v2.4.2';
$lte_path = 'lib/adminlte/';

session_start();
if (!isset($_SESSION['username'])) {
    header("location:main_login.php");
}
