<?php

session_start();

if ($_POST['email'] == 'fulano@gmail.com' && $_POST['senha'] == 'abc123') {
    $_SESSION['usuario_logado'] = true;
    $_SESSION['nome_do_usuario'] = 'Fulano de Tal';
    header('location:index.php');
} else {
    $_SESSION['usuario_logado'] = false;
    unset($_SESSION['nome_do_usuario']);
    header('location:index.php?erro_login=1');
}

