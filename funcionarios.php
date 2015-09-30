<?php
session_start();
require 'inc/template_superior.php';
//echo '<pre>';
//print_r($_SESSION['funcionarios']);
//echo '</pre>';
?>

<div id="form">
    <h3>
        <center><b> Funcionários:</b></center>
    </h3>
    <div class="list-group">
        <ul>


            <?php
            foreach ($_SESSION['funcionarios'] as $chave => $funcionario) {

                echo '<li>';
                echo '<a href="remove_funcionario.php?id_funcionario=' . $chave . '" class="btn btn-danger btn-xs">Remover</a> ';
                echo $funcionario['nome'] . ' ' . $funcionario['email'];

                echo '<br>';
                echo '</li>';
            }
            ?>
        </ul>
    </div>
</div>

<?php
require 'inc/template_inferior.php';
?>