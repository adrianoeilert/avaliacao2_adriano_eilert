<?php

session_start();

$_SESSION['usuario_logado'] = false;
unset($_SESSION['nome_do_usuario']);

header('location:index.php');
