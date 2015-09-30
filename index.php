<?php
session_start();
require_once 'inc/template_superior.php';
?>

<div id="form">
    <h1>
        <center><b> Sejam bem-vindos! </b></center>
        <br>
       </h1>
        <p>
            <?php
            if (isset($_GET['erro_login']) && $_GET['erro_login'] == 1) {
                echo '<p>Login inválido!</p>';
            }

            if (isset($_SESSION['usuario_logado']) && $_SESSION['usuario_logado'] == true) {
                echo 'Bem vindo, ' . $_SESSION['nome_do_usuario'];
                echo '<br><a href="logoff.php">Sair</a> ';
            } else {
                echo 'Usuário deslogado';
            }
            ?>
        </p>
   
    <br>
</div>

<?php
require 'inc/template_inferior.php';
?>
<!--</html>-->
