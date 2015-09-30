<?php

session_start();

$id_funcionario = $_GET['id_funcionario'];

if (isset($_SESSION['funcionarios'][$id_funcionario])) {
    unset($_SESSION['funcionarios'][$id_funcionario]);
}

header('location:funcionarios.php');
